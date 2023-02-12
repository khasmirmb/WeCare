<?php

    $page_title = 'WeCare - Relative Details';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<!--Breadscrumbs-->
<div class="bg-primary p-5">
  <nav style="--bs-breadcrumb-divider: '>>'; color: white;" aria-label="breadcrumb">
    <ol class="breadcrumb d-flex justify-content-center" style="color: white">
      <li class="breadcrumb-item"><a class="text-white" href="survey.php">Survey</a></li>
      <li class="breadcrumb-item active text-white" aria-current="page">Patient Info</a></li>
      <li class="breadcrumb-item active" aria-current="page">Relative Details</li>
      <li class="breadcrumb-item active" aria-current="page">Review</li>
    </ol>
  </nav>
</div>

<div class="container align-items-center pt-3">
<div class="container form-control">
<div class="container-fluid">
<h2 class="mb-4"><strong>Relative's Personal Details</strong></h2>
  <div class="row">
  <div class="col-sm">
  <label for="firstname"><strong>Firstname:</strong></label><br>
  <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Ex.Juan"><br>
  </div>
  
  <div class="col-sm">
  <label for="middlename"><strong>Middlename:</strong></label><br>
  <input class="form-control" type="text" name="middlename" id="middlename" placeholder="Ex. Buenaventura"><br>
  </div>
  <div class="col-sm">
  <label for="surname"><strong>Surname:</strong></label><br>
  <input class="form-control" type="text" name="surname" id="surname" placeholder="Ex. Carlos"><br>
  </div>
  <div class="col-sm">
  <label for="suffix"><strong>Suffix:</strong></label><br>
  <input class="form-control" type="text" name="suffix" id="suffix" placeholder="Ex. Jr"><br>
  </div>
  </div>
  <div class="row">
    <div class="col-sm">
    <label for="dateofbirth"><strong>Date of Birth</strong></label><br>
    <input class="form-control" type="date" value="dateofbirth"><br>
    </div>
    <div class="col-sm">
    <label for="placeofbirth"><strong>Place of Birth:</strong></label><br>
    <input class="form-control" type="text" name="placeofbirth" id="placeofbirth"><br>
    </div>
    <div class="col-sm">
    <label for="province"><strong>Province:</strong></label><br>
    <input class="form-control" type="text" name="province" id="province"><br>
    </div>
    <div class="col-sm">
    <label for="gender"><strong>Gender:</strong></label><br>
    <select class="form-select" name="gender" id="gender">
      <option value="female">Female</option>
      <option value="male">Male</option>
    </select><br>
    </div>
    </div>
    <div class="row">
    <div class="col-sm">
    <label for="street"><strong>Street:</strong></label><br>
    <input class="form-control" type="street" name="street" id="street"><br>
    </div>
    <div class="col-sm">
    <label for="barangay"><strong>Barangay:</strong></label><br>
    <input class="form-control" type="text" name="barangay" id="barangay"><br>
    </div>
    <div class="col-sm">
    <label for="city"><strong>City:</strong></label><br>
    <input class="form-control" type="text" name="city" id="city"><br>
    </div>
    <div class="col-sm">
    <label for="postal"><strong>Postal:</strong></label><br>
    <input class="form-control" type="number" name="postal" id="postal" min="1" max="10"><br>
    </div>
    </div>

    <div class="row">
    <div class="col-sm">
    <label for="relationship"><strong>Relationship to the Patient</strong></label><br>
    <input class="form-control" type="relationship" name="relationship" id="relationship"><br>
    </div>
    
    <!--needed to change-->
    <div class="col-sm">
    <label for="barangay"><strong>Barangay:</strong></label><br>
    <input class="form-control" type="text" name="barangay" id="barangay"><br>
    </div>
    <div class="col-sm">
    <label for="city"><strong>City:</strong></label><br>
    <input class="form-control" type="text" name="city" id="city"><br>
    </div>
    <div class="col-sm">
    <label for="postal"><strong>Postal:</strong></label><br>
    <input class="form-control" type="number" name="postal" id="postal" min="1" max="10"><br>
    </div>
    </div>
    
  
    </div>
    </div>
    <div class="py-3">
    <a href="patient-info.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Back</a>
    <button class="btn btn-primary" type="button"><a class="text-white text-decoration-none" href="review.php">Next</a></button>
    </div>
    </div>

