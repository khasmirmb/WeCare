<?php

    $page_title = 'WeCare - Survey';
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
<h2 class="mb-4"><strong>Patient's Personal Details</strong></h2>
<form class="row needs-validation">
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
    <input class="form-control" type="date" value="dateofbirth" required><br>
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
    <input class="form-control" type="text" name="city" id="city" required><br>
    </div>
    <div class="col-sm">
    <label for="postal"><strong>Postal:</strong></label><br>
    <input class="form-control" type="number" name="postal" id="postal" min="1" max="10"><br>
    </div>
    </div>
    
    <div class="mb-3">
    <label for="history" class="form-label"><strong>Background History:</strong></label><br>
    <textarea class="form-control" id="history" rows="3"></textarea>
    </div>
    
    <div class="mb-3">
    <label for="diagnosis" class="form-label"><strong>Doctors Diagnosis:</strong></label><br>
    <textarea class="form-control" id="diagnosis" rows="3"></textarea>
    </div>

    <div class="mb-3">
    <label for="allergies" class="form-label"><strong>Allergies:</strong></label><br>
    <textarea class="form-control" id="allergies" rows="3"></textarea>
    </div>
    </div>
    </div>
    </form>
    <div class="py-3">
    <a href="survey.php" class="btn btn-outline-primary" role="button" aria-pressed="true">Back</a>
    <button class="btn btn-primary" type="button"><a class="text-white text-decoration-none" href="relative-details.php">Next</a></button>
    </div>
    </div>




