<?php

  $page_title = 'WeCare Staff - Appointment';
  require_once '../includes/staff-header.php';
  session_start();

  if(!isset($_SESSION['staff_logged']) || $_SESSION['user_type'] != 'staff'){
      header('location: ../account/signin.php');
  }

    
  require_once '../includes/staff-sidebar.php';


?>

<div class="content">
  <div class="container">
    <div class="row pt-3 pb-3">
      <div class="col-12 col-lg-3 "><!--Label-->
        <div class="header-monitoring">
        <h2 class="ms-3" style="color: #00ACB2;"><strong>Appointment</strong></h2>
        </div>
        </div><!--Label-->
        <div class="col-12 col-lg-4">
        <div class="input-group d-flex">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-secondary" style="background-color: #00ACB2; color: #ffffff; border: none;">Search</button>
          </div>
        </div>
        <div class="col-12 col-lg-3 "><!--Label-->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #00ACB2; color: #ffffff; border: none;">
            Sort by
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Name</a></li>
              <li><a class="dropdown-item" href="#">Date</a></li>
            </ul>
          </div>
        </div>
    </div><!--row-->

        <?php
          require_once '../classes/appointment.class.php';

          $staff_appointment = new Appointment;

          $staff_app_list = $staff_appointment->show_assigned_staff_appointment($_SESSION['logged_id'], $_SESSION['staff_logged']);

        ?>
        </div>
        <div class="table-responsive">
          <table class="table table-responsive table-bordered">

          <thead>
            <tr class="tab-row">
              <th scope="col" class="text-center">Name</th>
              <th scope="col" class="text-center">Purpose</th>
              <th scope="col" class="text-center">Time</th>
              <th scope="col" class="text-center">Date</th>
              <th scope="col" class="text-center">Status</th>
              <th scope="col" class="text-center"><span>Client Showed</span></th>
              <th scope="col" class="text-center"><span>Action</span></th>
            </tr>
          </thead>
          <tbody>
            <?php foreach($staff_app_list as $row){ ?>
            <tr>
              <td class="text-center"><?php echo $row['fname'] . " " . $row['mname'][0] . ". " . $row['lname']?></td>

              <td class="text-center">
              <?php echo $row['purpose']; ?></td>

              <td class="text-center"><?php echo date("g:i a", strtotime($row['appointment_time'])) ?></td>

              <td class="text-center"><?php echo date("M jS, Y", strtotime($row['appointment_date'])) ?></td>

              <td class="text-center"><?php echo $row['status']?></td>

              <td class="text-center"><?php echo $row['client_came']?></td>

              <td class="text-center">
                <a type="button" class="action-completed btn btn-success" data-bs-toggle="modal" data-bs-target="#appointment-done<?php echo $row['id'] ?>">Done</a>

                <a type="button" class="action-noshow btn btn-danger" data-bs-toggle="modal" data-bs-target="#appointment-noshow<?php echo $row['id'] ?>">No-Show</a>

              </td>

            </tr>

<!--Modal done-->
<div class="modal fade" id="appointment-done<?php echo $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="appointment-doneLabel" aria-hidden="true">
  <div class="modal modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-success" id="appointment-doneLabel">Confirmation Appointment Done</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        Are you sure this <strong><?php echo $row['fname'] . " " . $row['mname'][0] . ". " . $row['lname']?></strong> show up on <strong><?php echo date("M jS, Y", strtotime($row['appointment_date'])) ?></strong> at <strong><?php echo date("g:i a", strtotime($row['appointment_time'])) ?></strong>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark bg-secondary text-white border-secondary" data-bs-dismiss="modal">No</button>
        <a href="app.completed.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Yes</a>
      </div>
    </div>
  </div>
</div>
</div>


<!--Modal no show-->
<div class="modal fade" id="appointment-noshow<?php echo $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="appointment-noshowLabel" aria-hidden="true">
  <div class="modal modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5 text-danger" id="appointment-noshowLabel">Confirmation Appointment No Show</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body text-center">
        Are you sure this <strong><?php echo $row['fname'] . " " . $row['mname'][0] . ". " . $row['lname']?></strong> didn't show up on <strong><?php echo date("M jS, Y", strtotime($row['appointment_date'])) ?></strong> at <strong><?php echo date("g:i a", strtotime($row['appointment_time'])) ?></strong>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark bg-secondary text-white border-secondary" data-bs-dismiss="modal">No</button>
        <a href="app.noshow.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Yes</a>
      </div>
    </div>
  </div>
</div>
</div>
          <?php } ?>
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



<?php

  require_once '../includes/staff-footer.php';

?>