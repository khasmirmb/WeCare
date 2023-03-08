<?php

    $page_title = 'Admin - Add Patient';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">
    <button class="btn btn-primary" type="button"><a class="text-white text-decoration-none" href="patient-list.php"> < Patient List </a></button>

    <h1 class="pt-3 pb-3"><strong>Add Patient</strong></h5><!--Title-->
    

    <div class=" container border rounded pt-1">
        <div class="form-group">
        <div class="row pt-3"><!--Start of first row-->
            <div class="col-12 col-lg-3 pb-3">
            <label for="patient-firstname"><strong>Firstname:</strong></label>
            <input class="form-control" type="text" name="patient-firstname" id="patient-firstname" placeholder="Ex.Juan">
            </div>
            <div class="col-12 col-lg-3 pb-3">
            <label for="patient-middlename"><strong>Middlename:</strong></label>
            <input class="form-control" type="text" name="patient-middlename" id="patient-middlename" placeholder="Ex.Villanueva">
            </div>
            <div class="col-12 col-lg-3 pb-3">
            <label for="patient-lastname"><strong>Lastname:</strong></label>
            <input class="form-control" type="text" name="patient-lastname" id="patient-lastname" placeholder="Ex.Carlos">
            </div>
            <div class="col-12 col-lg-3 pb-3">
            <label for="patient-suffixes"><strong>Suffixes:</strong></label>
            <input class="form-control" type="text" name="patient-suffixes" id="patient-suffixes" placeholder="Ex.Jr">
            </div>
        </div><!--End of row-->
        <div class="row pb-3"><!--Start of 2 row-->
            <div class="col-12 col-lg-3 pb-3">
            <label for="patient-birthdate"><strong>Birthdate</strong></label>
            <input class="form-control" type="date" name="patient-birthdate" id="patient-birthdate">
            </div>
            <div class="col-12 col-lg-3 pb-3">
            <label for="patient-gender"><strong>Gender:</strong></label><br>
            <select name="patient-gender" id="patient-gender"class="form-control">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select>
            </div>
            <div class="col-12 col-lg-3 pb-3">
            <label for="patient-address"><strong>Address:</strong></label>
            <input class="form-control" type="text" name="patient-address" id="patient-address" placeholder="Ex.Camino Nuevo">
            </div>
            <div class="col-12 col-lg-3 pb-3">
            <label for="patient-city"><strong>City</strong></label>
            <input class="form-control" type="text" name="patient-city" id="patient-city" placeholder="Ex.Cebu City">
            </div>
        </div><!--End of row-->
        </div><!--End of column-->
    </div><!--End of container border-->
    <h3 class="pt-3 pb-2"><strong>Nurse Assign</strong></h3> <!--Title-->
    <div class="col-12 col-lg-5"><!--Start of nurse-->
    <label for="assign-nurse">Assign Nurse To:</label>
            <select name="assign-nurse" id="assign-nurse"class="form-control">
                <option value="adhynne">Adhynne Greanne Pogoy</option>
                <option value="jorylle">Jorylle Reyes</option>
                <option value="aila">Aila Dagalea</option>
            </select>
    </div><!--End of nurse-->
    <div class="pt-3 pb-3"><!--Buttons-->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button type="button" class="btn btn-outline-secondary">Cancel</button><!--Should put a modal-->
    <button class="btn btn-primary" type="button">Save</button> <!--Should put a modal-->
    </div>
    </div><!--Buttons-->
</div><!--End of container-->