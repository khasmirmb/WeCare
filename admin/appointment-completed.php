<?php

  $page_title = 'WeCare Admin - Appointment';
  require_once '../includes/admin-header.php';
  require_once '../classes/appointment.class.php';
  require_once '../tools/functions.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
   header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

?>

<div class="content">

<div class="container align-items-center pt-3">
<div class="card">

<div class="card-header"><!--Start of Card-->
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/appointment.php">Appointment Pending</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/appointment-accepted.php">Appointment Accepted</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="../admin/appointment-completed.php">Appointment Completed</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/appointment-noshow.php">Appointment No-Show</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../admin/visitor-log.php">Visitor</a>
      </li>
    </ul>
  </div><!--End of Card-->
  
  <div class="col-7 col-lg-2 pt-4 text-center"> <!--Start of name of appointment-->
    <h4 class="mb-4">Appointment</h4>
  </div><!--End of name of appointment-->

  <div class="col-12 col-lg-12"> <!--Start of 1st table-->
    <div class="container table-responsive table-rounded">

    <?php
          require_once '../classes/appointment.class.php';

          $admin_appointment = new Appointment;

          $appointment_list = $admin_appointment->completed_appointment_admin();

      ?>
  <table class="table table-hover table-sm text-center">
    <thead>
      <tr class="table-primary">
        <th scope="col" style="background: #00ACB2; color: #fff;">USER</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">TIME</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">DATE</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">PURPOSE</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ASSIGNED TO</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">STATUS</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">APPROVED</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ACTION</th>
      </tr>
    </thead>
    <tbody>

    <?php foreach($appointment_list as $row){ ?>

      <tr>
      <td class="pt-4"><a href="../admin/appointment-detail.php?id=<?php echo $row['id'] ?>" class="text-decoration-none text-dark text-left"><?php echo $row['fname'] . " " . $row['mname'][0] . ". " . $row['lname'] ?></a></td>
        <td scope="row" class="pt-4"><?php echo date("g:i a", strtotime($row['appointment_time'])) ?></td>
      <td scope="row" class="pt-4"><?php echo date("M jS, Y", strtotime($row['appointment_date'])) ?></td>
      <td scope="row" class="pt-4">
        <div class="d-grid gap-2">
            <h8><?php echo $row['purpose'] ?></h8>
        </div>
      </td>
      <td scope="row" class="pt-4"><?php echo $row['s_fname'] ." ". $row['s_mname'][0] . ". " . $row['s_lname'] ?></td>
      <td scope="row" class="pt-4"><?php echo $row['status'] ?></td>
      <td scope="row" class="pt-4"><?php echo $row['client_came'] ?></td>
      <td>
        <div class="d-grid gap-1 pt-2 pb-2">
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete-appointment<?php echo $row['id'] ?>">Delete</button>
        </div>
      </td>
      </tr>

<!-- Modal -->
<div class="modal fade" id="delete-appointment<?php echo $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delete-appointmentLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Delete Appointment Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this appointment
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <a href="appointment-delete.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Yes</a>
      </div>
    </div>
  </div>
</div> 

    <?php } ?>
    </tbody>
  </table>
</div>
</div><!--End of 1st Table-->


</div><!--End of Card-->
</div><!--End of Container-->
</div>


<?php

require_once '../includes/admin-footer.php';

?>