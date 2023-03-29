<?php

  $page_title = 'WeCare Admin - Payment Receipt';
  require_once '../includes/admin-header.php';
  require_once '../classes/patient.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  $patient = new Patient;

  if($patient->fetch_patient_data($_POST['id'])){
    // Data for the Patient
    $p_data = $patient->fetch_patient_data($_POST['id']);
    $patient->staff_id = $p_data['staff_id'];
    $patient->id = $p_data['id'];
    $patient->firstname = $p_data['fname'];
    $patient->middlename = $p_data['mname'];
    $patient->lastname = $p_data['lname'];
    $patient->suffix = $p_data['suffix'];
    $patient->picture = $p_data['image'];
    $patient->date_of_birth = date_diff(date_create($p_data['date_birth']), date_create('today'))->y;
    $patient->gender = $p_data['gender'];
  }

  require_once '../includes/admin-sidebar.php';

?>
<div class="content">

<button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/payment-list.php?id=<?php echo $patient->id ?>"><i class="fa-solid fa-arrow-left"></i> Back </a></button>

<div class="pt-3">
<div class="card">
  <div class="card-header">
    Add Payment
  </div>

  <div class="card-body">
    <form action="" class="insert-form" id="insert_form" method="POST">
      <h3 class="card-title">Payment Details</h3>
      <div class="row pt-3">
      <div class="col-12 col-lg-3"><!--services-->
      <label for="services">Services:</label>
      <input class="form-control" type="text" name="services" id="services" required>
      </div><!--End Patient Name-->
      <div class="col-12 col-lg-3"><!--services-->
      <label for="services-amount">Amount:</label>
      <input class="form-control" type="number" name="services-amount" id="services-amount" required>
      </div><!--End services-->
      <div class="col-12 col-lg-3 pt-4"><!--confirm button-->
      <input type="button" name="add_service" id="add_service" class="btn btn-info" style="background: #00ACB2; border: #00ACB2; color: #fff;" value="Add Service">
      </div><!--End row-->
    
    <div class="row pt-3">
    <div class="col-12 col-lg-3"><!--services-->
    <label for="services">Other Fees:</label>
    <input class="form-control" type="text" name="services" id="services">
    </div><!--End Patient Name-->
    <div class="col-12 col-lg-3"><!--services-->
    <label for="services-amount">Amount:</label>
    <input class="form-control" type="number" name="services-amount" id="services-amount">
    </div><!--End services-->
    <div class="col-12 col-lg-3 pt-4"><!--confirm button-->
    <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none"> Add </a></button>
    </div><!--end confirm button-->
    </div><!--End row-->

    <div class="row pt-3">
    <div class="col-12 col-lg-3"><!--services-->
    <label for="services">Other Fees:</label>
    <input class="form-control" type="text" name="services" id="services">
    </div><!--End Patient Name-->
    <div class="col-12 col-lg-3"><!--services-->
    <label for="services-amount">Amount:</label>
    <input class="form-control" type="number" name="services-amount" id="services-amount">
    </div><!--End services-->
    <div class="col-12 col-lg-3 pt-4"><!--confirm button-->
    <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none"> Add </a></button>
    <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none"> Total Other Fees</a></button>
    </div><!--end confirm button-->
    </div><!--End row-->
    <div class="row pt-3">
    <div class="col-12 col-lg-3"><!--services-->
    <label for="other-fees" class="h5">Total Services Amount:</label>
    </div><!--End Patient Name-->
    <div class="col-12 col-lg-3"><!--services-->
    <input class="form-control" type="number" name="services-amount" id="services-amount">
    </div><!--End services-->
    </div><!--End row-->
    <div class="row pt-3">
    <div class="col-12 col-lg-3"><!--services-->
    <label for="other-fees" class="h5">Total Other Fees Amount:</label>
    </div><!--End Patient Name-->
    <div class="col-12 col-lg-3"><!--services-->
    <input class="form-control" type="number" name="services-amount" id="services-amount">
    </div><!--End services-->
    </div><!--End row-->
    <div class="row pt-3">
    <div class="col-12 col-lg-3"><!--services-->
    <label for="other-fees" class="h3">Total Amount:</label>
    </div><!--End Patient Name-->
    <div class="col-12 col-lg-3"><!--services-->
    <input class="form-control" type="number" name="services-amount" id="services-amount">
    </div><!--End services-->
    </div><!--End row-->
    <div class="d-flex justify-content-end pt-2"><!--services-->
    <button type="submit" name="submit" id="submit" class="btn btn-info" style="background: #00ACB2; border: #00ACB2; color: #fff;">Submit</button>
    </div><!--End services-->
    </form>

  
  </div><!--End Card body-->
</div><!--End Card -->
</div><!--end pt-3 -->
</div><!--end content -->