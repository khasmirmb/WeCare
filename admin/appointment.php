<?php

  $page_title = 'WeCare Admin - Appointment';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

?>

<div class="content">

<div class="container align-items-center pt-3">
<div class="card text-center">

  <div class="card-header"><!--Start of Card-->
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="../admin/appointment.php">Appointment Pending</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/appointment-accepted.php">Appointment Accepted</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/appointment-completed.php">Appointment Completed</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/appointment-noshow.php">Appointment No-Show</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../admin/visitor-log.php">Visitor</a>
      </li>
    </ul>
  </div><!--End of Card-->
  
  <div class="col-7 col-lg-2 pt-4"> <!--Start of name of appointment-->
    <h4 class="mb-4">Appointment</h4>
  </div><!--End of name of appointment-->

  <div class="col-12 col-lg-12"> <!--Start of 1st table-->
    <div class="container table-responsive table-rounded">

    <?php
          require_once '../classes/appointment.class.php';

          $admin_appointment = new Appointment;

          $appointment_list = $admin_appointment->show_appointment_admin();

      ?>
  <table class="table table-hover table-sm">
    <thead>
      <tr class="table-primary">
        <th scope="col" style="background: #00ACB2; color: #fff;">USER</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">TIME</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">DATE</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">PURPOSE</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ASSIGNED TO</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">STATUS</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">CAME</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ACTION</th>
      </tr>
    </thead>
    <tbody>

    <?php 
    $i = 0;
    foreach($appointment_list as $row){ ?>

      <tr>
        <td class="pt-4"><a href="../admin/appointment-detail.php?id=<?php echo $row['id'] ?>" class="text-decoration-none text-dark text-left"><?php echo $row['fname'] . " " . $row['mname'][0] . ". " . $row['lname'] ?></a></td>
        <td scope="row" class="pt-4"><?php echo date("g:i a", strtotime($row['appointment_time'])) ?></td>
        <td scope="row" class="pt-4"><?php echo date("M jS, Y", strtotime($row['appointment_date'])) ?></td>
        <td scope="row" class="pt-4">
        <div class="d-grid gap-2">
            <h8><?php echo $row['purpose'] ?></h8>
        </div>
        </td>
      <td class="pt-3">
        <form action="assign.appointment.php" method="GET">
          <div class="input-group">
          <?php
           require_once '../classes/staff.class.php';

           $show_staff = new Staff;

           $staff_list = $show_staff->show_staff_data();
          ?>
          <select name="assigned" id="assigned<?php echo $i; ?>" class="form-select text-center">

          <option value="<?php echo $row['staff_iden'] ?>">--<?php echo $row['s_fname'] ." ". $row['s_mname'][0] . ". " . $row['s_lname'] ?>--</option>

          <?php foreach($staff_list as $data){ ?>
          <option value="<?php echo $data['id'] ?>"><?php echo $data['firstname'] ." ". $data['middlename'][0] . ". " . $data['lastname'] ?></option>
          <?php } ?>

          <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">

          <input type="hidden" id="user_iden" name="user_iden" value="<?php echo $row['user_iden'] ?>">

          <input type="hidden" id="appointment_time" name="appointment_time" value="<?php echo $row['appointment_time'] ?>">

          <input type="hidden" id="appointment_date" name="appointment_date" value="<?php echo $row['appointment_date'] ?>">

          <input type="hidden" id="purpose" name="purpose" value="<?php echo $row['purpose'] ?>">

          <input type="hidden" id="other_purpose" name="other_purpose" value="<?php echo $row['other_purpose'] ?>">

          </select>
          </div>
      </td>
      <td scope="row" class="pt-4"><?php echo $row['status'] ?></td>
      <td scope="row" class="pt-4"><?php echo $row['client_came'] ?></td>
      <td class="pt-3">
      <button type="button" class="btn btn-info" style="background: #198754; color: #fff; border: #198754;" data-bs-toggle="modal" data-bs-target="#appointment-admin<?php echo $row['id'] ?>" onclick="getUserInput(<?php echo $i; ?>)">Confirm</button>


<!-- Modal -->
<div class="modal fade" id="appointment-admin<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="appointment-adminLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered d-flex align-items-center">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="appointment-adminLabel">Accept Appointment</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            Are you sure to accept the appointment of <strong><?php echo $row['fname'] . " " . $row['mname'][0] . ". " . $row['lname'] ?></strong> and assign it to <strong><span id="nurse_assign<?php echo $i; ?>"></span></strong>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="submit" name="submit" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>
      
      </form>
      </td>
      </tr>

    <?php

    $i++;

   } ?>
    </tbody>
  </table>
</div>
</div><!--End of 1st Table-->


</div><!--End of Card-->
</div><!--End of Container-->
</div>

<script>

  function getUserInput(id) {

    var assign = document.getElementById("assigned"+id);
    var text1 = assign.options[assign.selectedIndex].text;

    document.getElementById('nurse_assign'+id).innerHTML = text1;

  }

</script>



<?php

require_once '../includes/admin-footer.php';

?>