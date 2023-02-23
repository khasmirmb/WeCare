    <!--Patient Details-->
    <div class="container align-items-center pt-3" id="patient-details">
        <div class="container form-control">
            <div class="container-fluid">
            <h2 class="mb-4"><strong>Patient's Personal Details</strong></h2>
                <div class="row">
    
                <div class="mb-3">
                    <label for="p_image" class="form-label">Upload Patient Image</label>
                    <input class="form-control" name="p_image" type="file" id="p_image" required oninvalid="this.setCustomValidity('Select an Image')" oninput="this.setCustomValidity('')" accept="image/*">
                </div>

                   <?php
                        //Display the error message if there is any.
                        if(isset($error_image)){
                            echo '<div><p class="error">'.$error_image.'</p></div>';
                        }
                        if(isset($error_file_type)){
                            echo '<div><p class="error">'.$error_file_type.'</p></div>';
                        } 
                    ?>

                <div class="col-sm">
                    <label for="p_firstname"><strong>Firstname:</strong></label><br>
                    <input class="form-control" type="text" name="p_firstname" id="p_firstname" placeholder="Ex.Juan" required value="<?php if(isset($_POST['p_firstname'])) { echo $_POST['p_firstname']; } ?>"><br>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_patient_firstname($_POST)){
                    ?>
                        <p class="error mt-2 mb-2">Invalid Firstname Input.</p>
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
                        <p class="error mt-2 mb-2">Invalid Middlename Input.</p>
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
                        <p class="error mt-2 mb-2">Invalid Lastname Input.</p>
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
                        <p class="error mt-2 mb-2">There Was An Invalid Input in Place of Birth.</p>
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
                        <p class="error mt-2 mb-2">There Was An Invalid Input in Street.</p>
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
                        <p class="error mt-2 mb-2">There Was An Invalid Input in Barangay.</p>
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
                        <p class="error mt-2 mb-2">Invalid Postal.</p>
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

                <div class="d-flex py-3 justify-content-end">
                    <a class="btn btn-outline-primary me-1" type="button" id="back-survey" href="#">Back</a>

                    <a class="btn btn-primary" type="button" id="next-relative" href="#">Next<a>
                </div>
            </div>
        </div>
    </div>