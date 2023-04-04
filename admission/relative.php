    <!--Relative Details-->
    <div class="container align-items-center pt-3" id="relative-details">
        <div class="container form-control">
            <div class="container-fluid">
                <h2 class="mb-4"><strong>Relative's Personal Details</strong></h2>
                <div class="row">

                <div class="mb-3">
                    <label for="r_image" class="form-label">Upload Relative Image</label>
                    <input class="form-control" name="r_image" type="file" id="r_image" required oninvalid="this.setCustomValidity('Select an Image')" oninput="this.setCustomValidity('')" accept="image/*">
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
                <label for="r_firstname"><strong>Firstname:</strong></label><br>
                    <input class="form-control" type="text" name="r_firstname" id="r_firstname" placeholder="Ex.Juan" required value="<?php if(isset($_POST['r_firstname'])) { echo $_POST['r_firstname']; } ?>"><br>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_relative_firstname($_POST)){
                    ?>
                        <p class="error mt-2 mb-2">Invalid Firstname Input.</p>
                    <?php
                        }
                    ?>

                <div class="col-sm">
                    <label for="r_middlename"><strong>Middlename:</strong></label><br>
                    <input class="form-control" type="text" name="r_middlename" id="r_middlename" placeholder="Ex. Buenaventura" required value="<?php if(isset($_POST['r_middlename'])) { echo $_POST['r_middlename']; } ?>"><br>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_relative_middlename($_POST)){
                    ?>
                        <p class="error mt-2 mb-2">Invalid Middlename Input.</p>
                    <?php
                        }
                    ?>

                <div class="col-sm">
                    <label for="r_lastname"><strong>Lastname:</strong></label><br>
                    <input class="form-control" type="text" name="r_lastname" id="r_lastname" placeholder="Ex. Carlos" required value="<?php if(isset($_POST['r_lastname'])) { echo $_POST['r_lastname']; } ?>"><br>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_relative_lastname($_POST)){
                    ?>
                        <p class="error mt-2 mb-2">Invalid Lastname Input.</p>
                    <?php
                        }
                    ?>

                <div class="col-sm">
                    <label for="r_suffix"><strong>Suffix:</strong></label><br>
                    <input class="form-control" type="text" name="r_suffix" id="r_suffix" placeholder="Ex. Jr" value="<?php if(isset($_POST['r_suffix'])) { echo $_POST['r_suffix']; } ?>"><br>
                </div>
                </div>

                <div class="row">
                <div class="col-sm">
                    <label for="r_date_birth"><strong>Date of Birth</strong></label><br>
                    <input class="form-control" type="date" id="r_date_birth" name="r_date_birth" required value="<?php if(isset($_POST['r_date_birth'])) { echo $_POST['r_date_birth']; } ?>"><br>
                </div>

                <div class="col-sm">
                    <label for="r_place_birth"><strong>Place of Birth:</strong></label><br>
                    <input class="form-control" type="text" name="r_place_birth" id="r_place_birth" required value="<?php if(isset($_POST['r_place_birth'])) { echo $_POST['r_place_birth']; } ?>"><br>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_relative_place_birth($_POST)){
                    ?>
                        <p class="error mt-2 mb-2">There Was An Invalid Input in Place of Birth.</p>
                    <?php
                        }
                    ?>

                <div class="col-sm">
                    <label for="r_province"><strong>Province:</strong></label><br>
                    <?php
                        require_once '../classes/reference.class.php';
                        $province = new Reference();

                        $provinces = $province->get_refprovince();
                    ?>
                    <select class="form-select" name="r_province" id="r_province">

                    <?php foreach($provinces as $row){ ?>

                        <option value="<?php echo $row['provDesc'] ?>" <?php if(isset($_POST['r_province'])) { if ($_POST['r_province'] == $row['provDesc']) echo ' selected="selected"'; } ?>><?php echo $row['provDesc'] ?></option>

                            <?php } ?>
                    </select><br>
                </div>

                <div class="col-sm">
                    <label for="r_gender"><strong>Gender:</strong></label><br>
                    <select class="form-select" name="r_gender" id="r_gender">
                    <option value="Female" <?php if(isset($_POST['r_gender'])) { if ($_POST['r_gender'] == 'Female') echo ' selected="selected"'; } ?>>Female</option>
                    <option value="Male" <?php if(isset($_POST['r_gender'])) { if ($_POST['r_gender'] == 'Male') echo ' selected="selected"'; } ?>>Male</option>
                    </select><br>
                </div>
                </div>

                <div class="row">
                <div class="col-sm">
                    <label for="r_street"><strong>Street:</strong></label><br>
                    <input class="form-control" type="text" name="r_street" id="r_street" required value="<?php if(isset($_POST['r_street'])) { echo $_POST['r_street']; } ?>"><br>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_relative_street($_POST)){
                    ?>
                        <p class="error mt-2 mb-2">There Was An Invalid Input in Street.</p>
                    <?php
                        }
                    ?>

                <div class="col-sm">
                    <label for="r_barangay"><strong>Barangay:</strong></label><br>
                    <input class="form-control" type="text" name="r_barangay" id="r_barangay" required value="<?php if(isset($_POST['r_barangay'])) { echo $_POST['r_barangay']; } ?>"><br>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_relative_barangay($_POST)){
                    ?>
                        <p class="error mt-2 mb-2">There Was An Invalid Input in Barangay.</p>
                    <?php
                        }
                    ?>

                <div class="col-sm">
                    <label for="r_city"><strong>City:</strong></label><br>
                    <?php
                        require_once '../classes/reference.class.php';
                        $city = new Reference();

                        $cities = $city->get_refcitymun();
                    ?>
                    <select class="form-select" name="r_city" id="r_city">

                    <?php foreach($cities as $row){ ?>

                        <option value="<?php echo $row['citymunDesc'] ?>" <?php if(isset($_POST['r_city'])) { if ($_POST['r_city'] == $row['citymunDesc']) echo ' selected="selected"'; } ?>><?php echo $row['citymunDesc'] ?></option>

                            <?php } ?>
                    </select><br>
                </div>

                <div class="col-sm">
                    <label for="r_postal"><strong>Postal:</strong></label><br>
                    <input class="form-control" type="number" name="r_postal" id="r_postal" required value="<?php if(isset($_POST['r_postal'])) { echo $_POST['r_postal']; } ?>"><br>
                </div>
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_relative_postal($_POST)){
                    ?>
                        <p class="error mt-2 mb-2">Invalid Postal.</p>
                    <?php
                        }
                    ?>

                <div class="row">
                <div class="col-sm">
                    <label for="relationship"><strong>Relationship to Patient</strong></label><br>
                        <?php
                        require_once '../classes/reference.class.php';
                        $relationship = new Reference();

                        $relation = $relationship->get_relationship();
                        ?>
                        <select class="form-select" name="relationship" id="relationship">

                        <?php foreach($relation as $row){ ?>
                            <option value="<?php echo $row['relationship'] ?>" <?php if(isset($_POST['relationship'])) { if ($_POST['relationship'] == $row['relationship']) echo ' selected="selected"'; } ?>><?php echo $row['relationship'] ?></option>
                        <?php } ?>
                        </select><br>
                </div>

                <div class="col-sm">
                    <label for="phone"><strong>Phone Number:</strong></label><br>
                    <input type="number" name="phone" class="form-control" id="phone" required pattern="[0-9]{11}" oninvalid="this.setCustomValidity('Enter 11 Digits Number')" oninput="this.setCustomValidity('')" required value="<?php if(isset($_POST['phone'])) { echo $_POST['phone']; } ?>"><br>
                </div>

                <div class="col-sm">
                    <label for="telephone"><strong>Telephone Number:</strong></label><br>
                    <input class="form-control" type="number" name="telephone" id="telephone" placeholder="Optional" value="<?php if(isset($_POST['telephone'])) { echo $_POST['telephone']; } ?>"><br>
                </div>

                <div class="col-sm">
                    <label for="email"><strong>Email:</strong></label><br>
                    <input class="form-control" type="email" name="email" id="email" required value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>">
                </div>

                    <?php
                        if(isset($_POST['submit']) && !validate_email($_POST)){
                    ?>
                        <p class="error mt-2 mb-2">Invalid Email Address.</p>
                    <?php
                        }
                    ?>

                </div>

                <div class="d-flex py-3 justify-content-end">
                    <a class="btn btn-outline-info me-1" type="button" id="back-patient" href="#patient-details" style="background: #00ACB2; border: #00ACB2; color: #fff;">Back</a>
                    <a class="btn btn-info" type="button" id="next-review" href="#" style="background: #00ACB2; border: #00ACB2; color: #fff;">Next<a>
        
                    <button class="btn btn-info" id="survey-submit" name="submit" style="background: #00ACB2; border: #00ACB2; color: #fff;" >Submit</button>
                </div>
            </div>
        </div>
    </div>

