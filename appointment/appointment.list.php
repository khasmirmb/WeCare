<?php

    $page_title = 'WeCare - Appointment';
    require_once '../includes/header.php';
    require_once '../classes/appointment.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
    

?>
<div class="header-monitoring d-flex">
    <h2 class="ms-3 mt-5"><strong>Appointment List</strong></h2>
</div>
    <div class="table-responsive pt-3 mb-5">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                <th style="background: #00ACB2; color: #fff;">Name</th>
                <th style="background: #00ACB2; color: #fff;">Appointment Purpose</th>
                <th style="background: #00ACB2; color: #fff;">Appointment Time</th>
                <th style="background: #00ACB2; color: #fff;">Appointment Date</th>
                <th style="background: #00ACB2; color: #fff;">Status</th>
                <th style="background: #00ACB2; color: #fff;">Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php 

            $appointment = new Appointment();

            $appointment_list = $appointment->show_user_appointment($_SESSION['logged_id']);

            foreach($appointment_list as $row){

            ?>
                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <p class="fw-bold mb-1"><?php echo $_SESSION['fullname'] ?></p>
                            <p class="text-muted mb-0"><?php echo $_SESSION['user_email'] ?></p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo $row['purpose'] ?></p>
                    <?php if($row['purpose'] == 'Others'){ ?>
                        <p class="text-muted mb-0"><?php echo $row['other_purpose'] ?></p>
                    <?php } ?>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo date("g:i a", strtotime($row['appointment_time'])) ?></p>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo date("M jS, Y", strtotime($row['appointment_date'])) ?></p>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo $row['status'] ?></p>
                </td>
                <td>
                    <?php if($row['status'] == "Completed"){
                    ?>
                    <p class="fw-bold mb-1 color text-success">Completed</p>
                    <?php } else if($row['status'] == "Canceled"){ ?>
                        <p class="fw-bold mb-1 color text-danger">Canceled</p>
                        <?php } else if($row['status'] == "No-Show"){ ?>
                        <p class="fw-bold mb-1 color text-danger">No-Show</p>
                    <?php } else { ?>
                    <a type="button" class="action-cancel btn btn-danger" data-bs-toggle="modal" data-bs-target="#cancel-appointment">Cancel</a>
                    <?php }?>
                </td>
                </tr>

<!-- Modal -->
<div class="modal fade" id="cancel-appointment" tabindex="-1" aria-labelledby="cancel-appointmentLabel" aria-hidden="true">
  <div class="modal-md modal-dialog modal-dialog-centered d-flex align-items-center">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="cancel-appointmentLabel">Cancel Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <h6 class="text-center">Are you sure you want to cancel your appointment?</h6>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <a type="button" class="btn btn-danger" href="appointment.cancel.php?id=<?php echo $row['id'] ?>">Yes</a>
      </div>
    </div>
  </div>
</div>
        <?php
            }
        ?>
            </tbody>
        </table>
    </div>