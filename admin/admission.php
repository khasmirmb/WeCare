<?php

  $page_title = 'WeCare Admin - Admission';
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
        <a class="nav-link active"  href="../admin/admission.php">Admission Pending</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/admission-accepted.php">Admission Accepted</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/admission-canceled.php">Admission Canceled</a>
      </li>
    </ul>
  </div><!--End of Card-->
  
  <div class="col-7 col-lg-2 pt-4"> <!--Start of name of appointment-->
    <h4 class="mb-4">Admission</h4>
  </div><!--End of name of appointment-->


  <div class="col-12 col-lg-12"> <!--Start of 1st table-->
    <div class="container table-responsive table-rounded">

      <?php
          require_once '../classes/admission.class.php';

          $admin_admission = new Admission;

          $admission_list = $admin_admission->show_admission_admin();

      ?>

  <table class="table table-hover table-sm">
    <thead>
      <tr class="table-primary">
        <th scope="col" style="background: #00ACB2; color: #fff;">USER</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">PATIENT</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ADMISSION NO.</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ASSIGNED TO</th>
        <th scope="col" style="background: #00ACB2; color: #fff;" class="col-md-2">ROOM</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">STATUS</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ACTION</th>
      </tr>
    </thead>
    <tbody>

    <?php foreach($admission_list as $row){ ?>

      <tr>
      <td class="pt-4"><a href="../admin/admission-detail.php?id=<?php echo $row['id'] ?>" class="text-decoration-none text-dark text-left"><?php echo $row['fname'] . " " . $row['mname'][0] . ". " . $row['lname'] ?></a></td>

      <td class="pt-4"><a href="../admin/admission-detail.php?id=<?php echo $row['id'] ?>" class="text-decoration-none text-dark text-left"><?php echo $row['p_firstname'] . " " . $row['p_middlename'][0] . ". " . $row['p_lastname'] ?></a></td>


      <td scope="row" class="pt-4"><?php echo $row['admission_no']?></td>

      <td scope="row" class="pt-3">
      <form action="assign.admission.php" method="GET" id="assignform">
          <div class="input-group">
          <?php
           require_once '../classes/staff.class.php';

           $show_staff = new Staff;

           $staff_list = $show_staff->show_staff_data();
          ?>
          <select name="assigned" id="assigned" class="form-select text-center">

          <option value="<?php echo $row['staff_iden'] ?>">--<?php echo $row['s_fname'] ." ". $row['s_mname'][0] . ". " . $row['s_lname'] ?>--</option>
            
          <?php foreach($staff_list as $data){ ?>
          <option value="<?php echo $data['id'] ?>"><?php echo $data['firstname'] ." ". $data['middlename'][0] . ". " . $data['lastname'] ?></option>
          <?php } ?>

          </select>

          <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">

          <input type="hidden" id="p_firstname" name="p_firstname" value="<?php echo $row['p_firstname'] ?>">

          <input type="hidden" id="p_lastname" name="p_lastname" value="<?php echo $row['p_lastname'] ?>">

          <input type="hidden" id="p_middlename" name="p_middlename" value="<?php echo $row['p_middlename'] ?>">

          <input type="hidden" id="p_suffix" name="p_suffix" value="<?php echo $row['p_suffix'] ?>">

          <input type="hidden" id="p_date_of_birth" name="p_date_of_birth" value="<?php echo $row['p_date_of_birth'] ?>">

          <input type="hidden" id="p_place_of_birth" name="p_place_of_birth" value="<?php echo $row['p_place_of_birth'] ?>">

          <input type="hidden" id="p_gender" name="p_gender" value="<?php echo $row['p_gender'] ?>">

          <input type="hidden" id="p_province" name="p_province" value="<?php echo $row['p_province'] ?>">

          <input type="hidden" id="p_street" name="p_street" value="<?php echo $row['p_street'] ?>">

          <input type="hidden" id="p_city" name="p_city" value="<?php echo $row['p_city'] ?>">

          <input type="hidden" id="p_barangay" name="p_barangay" value="<?php echo $row['p_barangay'] ?>">

          <input type="hidden" id="p_postal" name="p_postal" value="<?php echo $row['p_postal'] ?>">

          <input type="hidden" id="p_background_history" name="p_background_history" value="<?php echo $row['p_background_history'] ?>">

          <input type="hidden" id="p_doctors_diagnosis" name="p_doctors_diagnosis" value="<?php echo $row['p_doctors_diagnosis'] ?>">

          <input type="hidden" id="p_allergies" name="p_allergies" value="<?php echo $row['p_allergies'] ?>">

          <input type="hidden" id="p_picture" name="p_picture" value="<?php echo $row['p_picture'] ?>">

      </td>

      <td scope="row" class="pt-3">
          <input type="text" class="form-control" name="room"  required placeholder="Room for Patient">
      </td>

      <td scope="row" class="pt-4"><?php echo $row['status'] ?></td>

      <td scope="row" class="pt-3">

      <button type="submit" class="btn btn-info" style="background: #00ACB2; color: #fff; border: #00ACB2;" onclick="return confirm('Are you sure you to accept this admission?');">Confirm</button>
      
      </form>
      </td>

      </tr>

    <?php } ?>

    </tbody>
  </table>
</div>
</div><!--End of 1st Table-->

</div>
</div>
</div>




<?php

require_once '../includes/admin-footer.php';

?>