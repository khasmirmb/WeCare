<?php

    $page_title = 'Admin - Patient Records';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">
    <button class="btn btn-primary" type="button"><a class="text-white text-decoration-none" href="patient-record.php"> < Patient Records </a></button><!--back button-->

    <div class="pt-3"><!--Start of card-->
    <div class="card text-white bg-primary mb-3">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-lg-4">
            <img src="../images/download.jpg" class="rounded-circle img-thumbnail img-fluid mx-auto d-block" alt="Mikaylah B. Chu" style="width: 40%; height: auto;">
            </div>
            <div class="col-12 col-lg-8">
                <h4><strong>Darla Jonhanson</strong></h4>
                <p>Age: 57 years old</p>
                <p>Date of Birth: Dec 20, 2020</p>
                <p>Services: Caregiving</p>
            </div>
        </div>
    </div>
    </div>
    </div><!--End of card-->

    <div class="list-group pt-3"><!--Start of Patient record list-->
    <a href="#" class="list-group-item list-group-item-action">
    <input class="form-check-input" type="checkbox" value="mark" id="mark"> X-ray Results</a> <!--Pls put icons and when it click it should have modal of files-->
    <a href="#" class="list-group-item list-group-item-action">
        <input class="form-check-input" type="checkbox" value="mark" id="mark"> DNA Test</a><!--Pls put icons and when it click it should have modal of files-->
    <a href="#" class="list-group-item list-group-item-action">
    <input class="form-check-input" type="checkbox" value="mark" id="mark"> Blood Test</a><!--Pls put icons and when it click it should have modal of files-->
    </div><!--End of Patient record list-->

   <div class="container pt-3 pb-2"> <!--Starting of the buttons-->
    <div class="row pt-1 pb-3">
        <div class=" col-12 col-lg-4 d-grid gap-2 pb-2">
        <button type="button" class="btn btn-danger">Delete File</button> <!--Need to put icon and modal-->
        </div>
        <div class="col-12 col-lg-4 d-grid gap-2 pb-2">
        <button type="button" class="btn btn-primary">Add File</button> <!--Need to put icon and modal-->
        </div>
        <div class="col-12 col-lg-4 d-grid gap-2 pb-2">
        <button type="button" class="btn btn-primary">Add Folder</button> <!--Need to put icon and modal-->
        </div>
    </div>
   </div><!--End of the buttons-->

</div><!--End of container-->
