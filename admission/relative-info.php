<?php

    $page_title = 'WeCare - Relative Details';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
      header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
?>

<!--Breadscrumbs-->
<div class="p-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="survey.php">Survey</a></li>
        <li class="breadcrumb-item"><a href="patient-info.php">Patient Information</a></li>
        <li class="breadcrumb-item active" aria-current="page">Relative Information</li>
        <li class="breadcrumb-item"><a href="review.php">Review</a></li>
    </ol>
    </nav>
</div>

<div class="container align-items-center pt-3">
  <div class="container form-control">
    <div class="container-fluid">
      <form>
        <h2 class="mb-4"><strong>Relative's Personal Details</strong></h2>
        <div class="row">

          <div class="mb-3">
            <label for="formFile" class="form-label"><strong>Relative Image</strong></label>
            <input class="form-control" type="file" id="formFile">
          </div>

          <div class="col-sm">
            <label for="firstname"><strong>Firstname:</strong></label><br>
            <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Ex.Juan"><br>
          </div>

          <div class="col-sm">
            <label for="middlename"><strong>Middlename:</strong></label><br>
            <input class="form-control" type="text" name="middlename" id="middlename" placeholder="Ex. Buenaventura"><br>
          </div>

          <div class="col-sm">
            <label for="lastname"><strong>Lastname:</strong></label><br>
            <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Ex. Carlos"><br>
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

          <div class="col-sm">
            <label for="phone-num"><strong>Phone Number:</strong></label><br>
            <input class="form-control" type="text" name="phone-num" id="phone-num"><br>
          </div>

          <div class="col-sm">
            <label for="tel-num"><strong>Telephone Number:</strong></label><br>
            <input class="form-control" type="text" name="tel-num" id="tel-num"><br>
          </div>

          <div class="col-sm">
            <label for="input_email"><strong>Email:</strong></label><br>
            <input class="form-control" type="text" name="email" id="input_email">
          </div>
        </div>

        <div class="d-flex py-3 justify-content-end">
          <a href="patient-info.php" class="btn btn-outline-primary me-1" role="button" aria-pressed="true">Back</a>

          <button class="btn btn-primary" type="button"><a class="text-white text-decoration-none" href="review.php">Next</a></button>
        </div>
      </form>
    </div>
  </div>

</div>