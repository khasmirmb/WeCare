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
        <th scope="col" style="background: #00ACB2; color: #fff;">ADMISSION DATE</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ADMISSION NO.</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ASSIGNED TO</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ROOM</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">STATUS</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ACTION</th>
      </tr>
    </thead>
    <tbody>

    <?php 
    $i = 0;
    foreach($admission_list as $row){ ?>

      <tr>
      <th class="pt-4"><a href="../admin/admission-detail.php?id=<?php echo $row['id'] ?>" class="text-decoration-none text-dark text-left"><?php echo $row['fname'] . " " . $row['mname'][0] . ". " . $row['lname'] ?></a></th>

      <td class="pt-4"><a href="../admin/admission-detail.php?id=<?php echo $row['id'] ?>" class="text-decoration-none text-dark text-left"><?php echo $row['p_firstname'] . " " . $row['p_middlename'][0] . ". " . $row['p_lastname'] ?></a></td>

      <td scope="row" class="pt-4"><?php echo date("M j, Y", strtotime($row['add_date']))?></td>

      <td scope="row" class="pt-4"><?php echo $row['admission_no']?></td>

      <td scope="row" class="pt-3">
      <form action="assign.admission.php" method="GET" id="assignform">
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

          <input type="hidden" id="admission_no" name="admission_no" value="<?php echo $row['admission_no'] ?>">

          <input type="hidden" id="user_iden" name="user_iden" value="<?php echo $row['user_iden'] ?>">

          <input type="hidden" id="inquire" name="inquire" value="<?php echo $row['inquire'] ?>">

          <?php
           require_once '../classes/survey.class.php';

           $services = new Survey;

           $service_list = $services->fetch_survey_services($row['admission_no']);
          
          ?>

          <select name="services[]" multiple hidden>
          <?php foreach($service_list as $service){ ?>
            <option value="<?php echo $service['id'] ?>" selected><?php echo $service['services'] ?></option>
          <?php } ?>
          </select>

      </td>


      <td scope="row" class="pt-3">
      <?php
        require_once '../classes/reference.class.php';

        $room = new Reference();

        $room_list = $room->get_rooms();

      ?>
          <select class="form-select" name="room" id="room<?php echo $i; ?>">
          <?php foreach($room_list as $data){ ?>

            <option value="<?php echo $data['name'] ?>"><?php echo $data['name'] ?></option>

          <?php } ?>
          </select>
      </td>

      <td scope="row" class="pt-4"><?php if($row['status'] == "Completed"){ ?> <strong class="text-success"><?php echo $row['status']; ?></strong> <?php } else { echo $row['status']; } ?></td>

      <td scope="row" class="pt-3">

      <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#admission-admin<?php echo $row['id'] ?>" onclick="getUserInput(<?php echo $i; ?>)">Accept</button>

<!-- Modal -->
<div class="modal fade" id="admission-admin<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="admission-adminLabel" aria-hidden="true">
  <div class="modal-lg modal-dialog modal-dialog-centered d-flex align-items-center">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="admission-adminLabel">Accept Admission</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            Are you sure to assign <strong><?php echo $row['p_firstname'] . " " . $row['p_middlename'][0] . ". " . $row['p_lastname'] ?></strong> to <strong><span id="nurse_assign<?php echo $i; ?>"></span></strong> in <strong class="text-primary"><span id="room_assign<?php echo $i; ?>"></span></strong>?
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

</div>
</div>
</div>

<script>

  function getUserInput(id) {

    var assign = document.getElementById("assigned"+id);
    var text1 = assign.options[assign.selectedIndex].text;

    document.getElementById('nurse_assign'+id).innerHTML = text1;

    var room = document.getElementById('room'+id); 
    var text2 = room.options[room.selectedIndex].text;

    document.getElementById('room_assign'+id).innerHTML = text2;

  }

</script>





<?php

require_once '../includes/admin-footer.php';

?>