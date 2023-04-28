<?php

  $page_title = 'WeCare Admin - Appointment';
  require_once '../includes/admin-header.php';
  require_once '../classes/appointment.class.php';
  require_once '../classes/notification.class.php';
  require_once '../tools/functions.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
    header('location: ../account/signin.php');
  }

  if(isset($_POST['confirm'])){

    $appointment = new Appointment();

    if(validate_appointment_date($_POST) && validate_appointment_time($_POST)){

      $date = date('Y-m-d', strtotime(str_replace('-', '/', $_POST['date'])));
      $time = $_POST['time'];

      $appointment->appointment_date = $date;
      $appointment->appointment_time = $time;
      $appointment->status = "Accepted";
      $appointment->client_came = "Pending";
      $appointment->user_id = $_POST['user_id'];

      if($appointment->reschedule_appointment($_POST['id'])){

        $notification = new Notification;

        // Notification for Appointment Accepted
        $notification->user_id = $appointment->user_id;

        $notification->type = "Appointment";

        $notification->subject = "Your appointment has been reschedule on " . date("M jS, Y", strtotime($appointment->appointment_date )) . " .";


        $notification->message = "We hope this message finds you well. We would like to take this opportunity to remind you about your appointment have been reschedule. \n" . "We're expecting to see you on " . date("g:i a", strtotime($appointment->appointment_time)) . " on " . date("M jS, Y", strtotime($appointment->appointment_date )). ".";

        $notification->status = 0;

        if($notification->add_notification_by_id()){

            //redirect user to program page after saving
            header('location: appointment-accepted.php');

        }
  
      }

    }

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
        <a class="nav-link" aria-current="true" href="../admin/appointment-completed.php">Appointment Completed</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="../admin/appointment-noshow.php">Appointment No-Show</a>
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

          $appointment_list = $admin_appointment->noshow_appointment_admin();

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
        <th scope="col" style="background: #00ACB2; color: #fff;">CLIENT SHOWED</th>
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
        <div class="d-grid gap-1">
        <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#delete-appointment<?php echo $row['id'] ?>">Delete</button>
        <button type="button" class="btn btn-info" style="background: #00ACB2; color: #fff; border: #00ACB2;" data-bs-toggle="modal" data-bs-target="#reschedule<?php echo $row['id'] ?>">Reschedule</button>
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

<!-- Reschedule Modal -->
<div class="modal fade" id="reschedule<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="rescheduleLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rescheduleLabel">Reschedule Appointment</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="appointment-accepted.php" method="POST">
          <div class="mb-3">
            <label for="date" class="col-form-label">Appointment Date:</label>
            <input type="date" class="form-control" id="date" name="date" value="<?php echo $row['appointment_date'] ?>">
          </div>
          <div class="mb-3">
            <label for="time" class="col-form-label">Appointment Time:</label>
            <input type="time" class="form-control" id="time" name="time" value="<?php echo $row['appointment_time'] ?>">

            <input type="text" class="form-control" id="id" name="id" value="<?php echo $row['id'] ?>" hidden>

          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary" name="confirm">Confirm</button>
      </div>
      </form>
    </div>
  </div>
</div>

    <?php } ?>
    </tbody>
  </table>
</div>
</div><!--End of 1st Table-->


</div><!--End of Card-->
<?php
  if(isset($_POST['confirm']) && !validate_appointment_date($_POST)){
  ?>
      <p class="text-danger mt-2 mb-2">Appointment date should be at least 3 days in advance..</p>
  <?php
      }
  ?>
    <?php
  if(isset($_POST['confirm']) && !validate_appointment_time($_POST)){
  ?>
      <p class="text-danger mt-2 mb-2">Appointment time should be available in our schedule..</p>
  <?php
      }
  ?>
</div><!--End of Container-->

</div>
 

<?php

require_once '../includes/admin-footer.php';

?>