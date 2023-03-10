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
        <a class="nav-link"  href="../admin/admission.php">Admission</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="../admin/appointment.php">Appointment</a>
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

    <?php foreach($appointment_list as $row){ ?>

      <tr>
        <td class="pt-4"><a href="../admin/appointment-detail.php?id=<?php echo $row['id'] ?>" class="text-decoration-none text-dark text-left"><?php echo $row['fname'] . " " . $row['mname'][0] . " " . $row['lname'] ?></a></td>
        <td scope="row" class="pt-4"><?php echo date("g:i a", strtotime($row['appointment_time'])) ?></td>
        <td scope="row" class="pt-4"><?php echo date("M jS, Y", strtotime($row['appointment_date'])) ?></td>
        <td scope="row" class="pt-4">
        <div class="d-grid gap-2">
            <h8><?php echo $row['purpose'] ?></h8>
        </div>
        </td>
      <td class="pt-4">
          <div class="input-group">
          <select name="assigned" id="assigned" class="form-control">
          <option value="adhyne">Adhyne Greanne Pogoy</option>
          <option value="jorylle">Jorylle Reyes</option>
          </select>
          <button type="button" class="btn btn-primary" style="background: #00ACB2; color: #fff; border: #00ACB2;">Confirm</button>
          </div>
      </td>
      <td scope="row" class="pt-4"><?php echo $row['status'] ?></td>
      <td scope="row" class="pt-4"><?php echo $row['client_came'] ?></td>
        <td>
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-secondary">Delete</button>
        <button type="button" class="btn btn-primary" style="background: #00ACB2; color: #fff; border: #00ACB2;">Edit</button>
        </div>
      </td>
      </tr>

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