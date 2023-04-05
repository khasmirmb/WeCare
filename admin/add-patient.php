<?php

  $page_title = 'WeCare Admin - Add Patient';
  require_once '../includes/admin-header.php';
  require_once '../tools/functions.php';
  require_once '../classes/patient.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  if(isset($_POST['submit'])){

    $patient = new Patient;

    if(isset($_FILES['p_image']) && validate_add_patient_info($_POST)){
        $p_img_name = $_FILES['p_image']['name'];
        $p_img_type = $_FILES['p_image']['type'];
        $p_tmp_name = $_FILES['p_image']['tmp_name'];
        $p_img_explode = explode('.', $p_img_name);
        $p_img_extension = end($p_img_explode);

        $extensions = ['png', 'jpeg', 'jpg'];

        if(in_array($p_img_extension, $extensions) === true){
            $time = time();
            $p_new_img_name = "Patient_Image" . $time . $p_img_name;
            if(move_uploaded_file($p_tmp_name, "../images/". $p_new_img_name)){

                // Patient Info Inputed by User
                $patient->picture = $p_new_img_name;
                $patient->firstname = htmlentities($_POST['p_firstname']);
                $patient->middlename = htmlentities($_POST['p_middlename']);
                $patient->lastname = htmlentities($_POST['p_lastname']);
                $patient->suffix = htmlentities($_POST['p_suffix']);
                $patient->date_of_birth = $_POST['p_date_birth'];
                $patient->place_of_birth = htmlentities($_POST['p_place_birth']);
                $patient->province = $_POST['p_province'];
                $patient->gender = $_POST['p_gender'];
                $patient->street = htmlentities($_POST['p_street']);
                $patient->barangay = htmlentities($_POST['p_barangay']);
                $patient->city = $_POST['p_city'];
                $patient->postal = htmlentities($_POST['p_postal']);
                $patient->background_history = htmlentities($_POST['p_background']);
                $patient->doctors_diagnosis = htmlentities($_POST['p_doctor_diag']);
                $patient->allergies = htmlentities($_POST['p_allergies']);
                $patient->staff_id = htmlentities($_POST['assign-nurse']);
                $patient->status = htmlentities($_POST['status']);
                $patient->room = htmlentities($_POST['room']);
        
                if(validate_add_patient_info($_POST)){

                    if($patient->add_patient()){
                        header('location: patient-list.php');
                    }
                }

            }else{
                $error_file_type = "Please Select an Image - JPG, PNG, JPEG";
            }
        }else{
            $error_image = "Please Select an Image";
        }
    }

  }

  require_once '../includes/admin-sidebar.php';

?>
<div class="content">
<div class="container align-items-center pt-3">
    <button class="btn btn-secondary" type="button" style="background: #00ACB2; border: #00ACB2; color: #fff;"><a class="text-white text-decoration-none" href="patient-list.php"> <i class="fa-solid fa-arrow-left"></i> Patient List </a></button>

    <h1 class="pt-3 pb-3"><strong>Add Patient</strong></h5><!--Title-->
<form action="add-patient.php" method="POST" class="form pt-3 mb-5" enctype="multipart/form-data">
    <div class=" container border rounded pt-1">
        <div class="form-group">
        <div class="mb-3">
                    <label for="p_image" class="form-label">Upload Patient Image</label>
                    <input class="form-control" name="p_image" type="file" id="p_image" required oninvalid="this.setCustomValidity('Select an Image')" oninput="this.setCustomValidity('')" accept="image/*" value="<?php if(isset($_FILES['p_image'])) { echo $_FILES['p_image']; } ?>">
                </div>

                   <?php
                        //Display the error message if there is any.
                        if(isset($error_image)){
                            echo '<div><p class="text-center text-danger">'.$error_image.'</p></div>';
                        }
                        if(isset($error_file_type)){
                            echo '<div><p class="text-center text-danger">'.$error_file_type.'</p></div>';
                        } 
                    ?>

                <div class="row">
                <div class="col-sm">
                    <label for="p_firstname"><strong>Firstname:</strong></label><br>
                    <input class="form-control" type="text" name="p_firstname" id="p_firstname" placeholder="Ex.Juan" required value="<?php if(isset($_POST['p_firstname'])) { echo $_POST['p_firstname']; } ?>"><br>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_patient_firstname($_POST)){
                    ?>
                        <p class="text-center text-danger mt-2 mb-2">Invalid Firstname Input.</p>
                    <?php
                        }
                    ?>
                
                <div class="col-sm">
                    <label for="p_middlename"><strong>Middlename:</strong></label><br>
                    <input class="form-control" type="text" name="p_middlename" id="p_middlename" placeholder="Ex. Buenaventura" required value="<?php if(isset($_POST['p_middlename'])) { echo $_POST['p_middlename']; } ?>"><br>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_patient_middlename($_POST)){
                    ?>
                        <p class="text-center text-danger mt-2 mb-2">Invalid Middlename Input.</p>
                    <?php
                        }
                    ?>

                <div class="col-sm">
                    <label for="p_lastname"><strong>Lastname:</strong></label><br>
                    <input class="form-control" type="text" name="p_lastname" id="p_lastname" placeholder="Ex. Carlos" required value="<?php if(isset($_POST['p_lastname'])) { echo $_POST['p_lastname']; } ?>"><br>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_patient_lastname($_POST)){
                    ?>
                        <p class="text-center text-danger mt-2 mb-2">Invalid Lastname Input.</p>
                    <?php
                        }
                    ?>
                
                <div class="col-sm">
                    <label for="p_suffix"><strong>Suffix:</strong></label><br>
                    <input class="form-control" type="text" name="p_suffix" id="p_suffix" placeholder="Ex. Jr" value="<?php if(isset($_POST['p_suffix'])) { echo $_POST['p_suffix']; } ?>"><br>
                </div>

                </div>

                <div class="row">
                <div class="col-sm">
                    <label for="p_date_birth"><strong>Date of Birth</strong></label><br>
                    <input class="form-control" type="date" id="p_date_birth" name="p_date_birth" required value="<?php if(isset($_POST['p_date_birth'])) { echo $_POST['p_date_birth']; } ?>"><br>
                </div>

                <div class="col-sm">
                    <label for="p_place_birth"><strong>Place of Birth:</strong></label><br>
                    <input class="form-control" type="text" name="p_place_birth" id="p_place_birth" required value="<?php if(isset($_POST['p_place_birth'])) { echo $_POST['p_place_birth']; } ?>"><br>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_patient_place_of_birth($_POST)){
                    ?>
                        <p class="text-center text-danger mt-2 mb-2">There Was An Invalid Input in Place of Birth.</p>
                    <?php
                        }
                    ?>

                <div class="col-sm">
                    <label for="p_province"><strong>Province:</strong></label><br>
                    <?php
                        require_once '../classes/reference.class.php';
                        $province = new Reference();

                        $provinces = $province->get_refprovince();
                    ?>
                    <select class="form-select" name="p_province" id="p_province">

                    <?php foreach($provinces as $row){ ?>

                        <option value="<?php echo $row['provDesc'] ?>" <?php if(isset($_POST['p_province'])) { if ($_POST['p_province'] == $row['provDesc']) echo ' selected="selected"'; } ?>><?php echo $row['provDesc'] ?></option>

                            <?php } ?>
                    </select><br>
                </div>

                <div class="col-sm">
                    <label for="p_gender"><strong>Gender:</strong></label><br>
                    <select class="form-select" name="p_gender" id="p_gender">
                    <option value="Female" <?php if(isset($_POST['p_gender'])) { if ($_POST['p_gender'] == 'Female') echo ' selected="selected"'; } ?>>Female</option>
                    <option value="Male" <?php if(isset($_POST['p_gender'])) { if ($_POST['p_gender'] == 'Male') echo ' selected="selected"'; } ?>>Male</option>
                    </select><br>
                </div>
                </div>

                <div class="row">
                <div class="col-sm">
                    <label for="p_street"><strong>Street:</strong></label><br>
                    <input class="form-control" type="text" name="p_street" id="p_street" required value="<?php if(isset($_POST['p_street'])) { echo $_POST['p_street']; } ?>"><br>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_patient_street($_POST)){
                    ?>
                        <p class="text-center text-danger mt-2 mb-2">There Was An Invalid Input in Street.</p>
                    <?php
                        }
                    ?>
        
                <div class="col-sm">
                    <label for="p_barangay"><strong>Barangay:</strong></label><br>
                    <input class="form-control" type="text" name="p_barangay" id="p_barangay" required value="<?php if(isset($_POST['p_barangay'])) { echo $_POST['p_barangay']; } ?>"><br>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_patient_barangay($_POST)){
                    ?>
                        <p class="text-center text-danger mt-2 mb-2">There Was An Invalid Input in Barangay.</p>
                    <?php
                        }
                    ?>

                <div class="col-sm">
                    <label for="p_city"><strong>City:</strong></label><br>
                    <?php
                        require_once '../classes/reference.class.php';
                        $city = new Reference();

                        $cities = $city->get_refcitymun();
                    ?>
                    <select class="form-select" name="p_city" id="p_city">

                    <?php foreach($cities as $row){ ?>

                        <option value="<?php echo $row['citymunDesc'] ?>" <?php if(isset($_POST['p_city'])) { if ($_POST['p_city'] == $row['citymunDesc']) echo ' selected="selected"'; } ?>><?php echo $row['citymunDesc'] ?></option>

                            <?php } ?>
                    </select><br>
                </div>

                <div class="col-sm">
                    <label for="p_postal"><strong>Postal:</strong></label><br>
                    <input class="form-control" type="number" name="p_postal" id="p_postal" required value="<?php if(isset($_POST['p_postal'])) { echo $_POST['p_postal']; } ?>"><br>
                </div>
                    <?php
                        if(isset($_POST['submit']) && !validate_patient_postal($_POST)){
                    ?>
                        <p class="text-center text-danger mt-2 mb-2">Invalid Postal.</p>
                    <?php
                        }
                    ?>
                </div>
                
                <div class="mb-3">
                    <label for="p_background" class="form-label"><strong>Background History:</strong></label><br>
                    <textarea class="form-control" id="p_background" rows="3" placeholder="Patient Background History" required name="p_background"><?php if(isset($_POST['p_background'])) { echo $_POST['p_background']; } ?></textarea>
                </div>
                
                <div class="mb-3">
                    <label for="p_doctor_diag" class="form-label"><strong>Doctors Diagnosis:</strong></label><br>
                    <textarea class="form-control" id="p_doctor_diag" rows="3" placeholder="Proceed if None" name="p_doctor_diag"><?php if(isset($_POST['p_doctor_diag'])) { echo $_POST['p_doctor_diag']; } ?></textarea>
                </div>

                <div class="mb-3">
                    <label for="p_allergies" class="form-label"><strong>Allergies:</strong></label><br>
                    <textarea class="form-control" id="p_allergies" rows="3" placeholder="Proceed if None" name="p_allergies"><?php if(isset($_POST['p_allergies'])) { echo $_POST['p_allergies']; } ?></textarea>
                </div>
    </div><!--End of container border-->
    <h3 class="pt-3 pb-2"><strong>Nurse Assign</strong></h3> <!--Title-->
    <div class="row">
    <div class="col-12 col-lg-3"><!--Start of nurse-->
    <?php 
        require_once '../classes/staff.class.php';
        
        $staff = new Staff;

        $staff_list = $staff->show_staff_data();

    ?>
    <label for="assign-nurse">Assign Nurse To:</label>
            <select name="assign-nurse" id="assign-nurse"class="form-select">
            <?php foreach($staff_list as $row){ ?>
                <option value="<?php echo $row['id'] ?>"><?php echo $row['firstname'] . " " . $row['middlename'][0] . ". " . $row['lastname']  ?></option>
            <?php } ?>
            </select>
    </div><!--End of nurse-->

    <div class="col-12 col-lg-3">
        <label for="status"><strong>Patient Status:</strong></label><br>
        <select class="form-select" name="status" id="status">
        <option value="Active" <?php if(isset($_POST['status'])) { if ($_POST['status'] == 'Active') echo ' selected="selected"'; } ?>>Active</option>
        <option value="Discharged" <?php if(isset($_POST['status'])) { if ($_POST['status'] == 'Discharged') echo ' selected="selected"'; } ?>>Discharged</option>
        <option value="Deceased" <?php if(isset($_POST['status'])) { if ($_POST['status'] == 'Deceased') echo ' selected="selected"'; } ?>>Deceased</option>
        </select><br>
    </div>

    <div class="col-12 col-lg-3">
        <label for="room"><strong>Patient Room:</strong></label><br>
        <?php
        require_once '../classes/reference.class.php';

        $room = new Reference();

        $room_list = $room->get_rooms();

      ?>
          <select class="form-select" name="room" id="room">
          <?php foreach($room_list as $data){ ?>

            <option value="<?php echo $data['name'] ?>"><?php echo $data['name'] ?></option>

          <?php } ?>
          </select>
    </div>
    </div>
    <div class="pt-3 pb-3"><!--Buttons-->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button class="btn btn-secondary" style="background: #00ACB2; border: #00ACB2; color: #fff;" name= "submit">Add Patient</button> <!--Should put a modal-->
    </div>
    </div><!--Buttons-->

</form>
</div><!--End of container-->


</div>

<?php

require_once '../includes/admin-footer.php';

?>