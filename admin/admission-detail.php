<?php

    $page_title = 'Admin - Admission detail';
    session_start();
    require_once '../classes/account.class.php';
    require_once '../includes/admin-sidebar.php';
?>

<div class="content">

<div class="container align-items-center pt-3">
    <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/admission.php"> <i class="fa-solid fa-arrow-left"></i> Back </a></button>

    <div class="pt-4 pb-4">
    <h2 class="mb-4"><strong>Admission Details</strong></h2>
    <div class="container form-control">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <h2 class="pt-3 pb-3"><strong>Survery & Services</strong></h2>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Care Services Needed:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Caregiving</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>I want to inquire for?:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Father</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>1. Does the resident walk WITH assistance</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Yes</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>2. Is the resident Wheelchair-bound?</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>No</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>3. Is the resident bedridden?</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>No</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>4. Is the resident experiencing memory loss or difficulty remembering the time, date, place, other people, or themselves?</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Yes</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>5. Does the resident need to wear a diaper due to difficulty controlling urination/defecation? </h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>No</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>6. Does the resident need assistance when taking a bath?</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Yes</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>7. Does the resident need assistance when eating? </h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Yes</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>8. Does the resident feel restless and walk around?</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>Yes</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>9. Does the resident have a peg/feeding tube/contraption? </h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>No</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
        <h2 class="pt-4 pb-3"><strong>Patient's Personal Details</strong></h2>
            <div class="col-6 col-lg-4 pt-3">
                <h8>FullName:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Carlos Buenaventura Didinnaaaa Jr</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Address:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>San Carlos Street, Sta. Maria, Zamboanga City</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Gender:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>Male</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Date Of Birth:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>July 12, 20728</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Place of Birth:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>Lanao Del Norte</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Background History:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>Has Stroke 2 months ago</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Doctors Diagnosis:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>Diabetics and High Blood</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Allegies:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>Peanuts</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
        <h2 class="pt-3"><strong>Watcher’s Personal Details</strong></h2>
            <div class="col-6 col-lg-4 pt-3">
                <h8>FullName::</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>Maria Clara Sebastian</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Address:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>San Carlos Street, Sta. Maria, Zamboanga City</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Gender:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>Female</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Date Of Birth:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>September 20, 2656</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Place of Birth:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>Sentimental Hospital</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Email:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>maria.carlos@gmail.com</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Phone Number:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>0956154676656</h8>
            </div>
        </div>
        <div class="row justify-content-md-center pb-3">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Telephone Number:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>1545-658</h8>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>








</div>