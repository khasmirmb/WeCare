<?php

    $page_title = 'Admin - Add user';
    session_start();
    require_once '../classes/account.class.php';
    require_once '../includes/admin-sidebar.php';
?>

<div class="content">

<div class="container align-items-center pt-3">
    <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/user-accounts.php"><i class="fa-solid fa-arrow-left"></i> Back </a></button>

    <div class="pt-4">
    <h2 class="mb-4"><strong>Add User</strong></h2>
    <div class="container form-control">
    <div class="container-fluid">
   

  <form><!--Starting of the form-->
  <div class="pt-3">

  <div class="row"><!--First row-->
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
  </div><!--End of First row-->

  <div class="row"><!--Second row-->
    <div class="col-sm">
    <label for="dateofbirth"><strong>Date of Birth</strong></label><br>
    <input class="form-control" type="date" value="dateofbirth"><br>
    </div>
    <div class="col-sm">
    <label for="gender"><strong>Gender:</strong></label><br>
    <select name="gender" id="gender">
          <option value="male">Male</option>
          <option value="Female">Female</option>
        </select>
    </div>
    <div class="col-sm">
    <label for="email"><strong>Email:</strong></label><br>
    <input class="form-control" type="text" name="email" id="email"><br>
    </div>
    <div class="col-sm">
    <label for="phone-number"><strong>Phone Number:</strong></label><br>
    <input class="form-control" type="number" name="phone-number" id="phone-number"><br>
    </div>
</div><!--End of Second row-->

    <div class="row"> <!--Third row-->
    <div class="col-sm">
    <label for="street"><strong>Street:</strong></label><br>
    <input class="form-control" type="street" name="street" id="street"><br>
    </div>
    <div class="col-sm">
    <label for="city"><strong>City:</strong></label><br>
    <input class="form-control" type="text" name="city" id="city"><br>
    </div>
    <div class="col-sm">
    <label for="patient-name"><strong>Name of the Patient:</strong></label><br>
    <input class="form-control" type="text" name="patient-name" id="patient-name"><br>
    </div>
    <div class="col-sm">
    <label for="patient-relationship"><strong>Patient's Relationship:</strong></label><br>
    <input class="form-control" type="text" name="patient-relationship" id="patient-relationship"><br>
    </div>
    </div><!--End of Third row-->
    </div><!--Last of the div inside of the form-->
    </form><!--Last of the form-->
    </div><!--Last of the container fluid-->
    </div><!--Last of the container form-control-->
    </div> <!--Last of the div-->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3 pb-3"><!--Starting of buttons-->
  <button class="btn btn-danger me-md-2" type="button">Clear Data</button> <!--Should have modal-->
  <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;">Add User</button> <!--Should have modal-->
</div><!--End of buttons-->
    </div><!--End of first container-->





</div>