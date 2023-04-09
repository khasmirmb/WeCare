<?php

  $page_title = 'WeCare Admin - Payment Receipt';
  require_once '../includes/admin-header.php';
  require_once '../classes/patient.class.php';
  require_once '../classes/reference.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  $patient = new Patient;

  if($patient->fetch_patient_data($_GET['id'])){
    // Data for the Patient
    $p_data = $patient->fetch_patient_data($_GET['id']);
    
    // Patient Data
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

  <h3 class="card-title">Payment for <?php echo ucfirst($patient->firstname) . " " . ucfirst($patient->middlename[0]) . ". " . ucfirst($patient->lastname) ?></h3>

  <form action="add-service.php" method="GET">
    <div class="row mb-2">
        <div class="col-12 col-lg-9 d-flex">
        <?php
            require_once '../classes/reference.class.php';

            $services = new Reference();

            $service_list = $services->fetch_services_not_owned();
        ?>
        <div class="col">
          <select name="services[]" id="services" multiple required>
          <?php foreach($service_list as $data){ ?>
              <option value="<?php echo $data['id'] ?>"><?php echo $data['services'] ?></option>
          <?php } ?>
          </select>
        </div>

          <input type="text" name="patient_id" id="patient_id" value="<?php echo $patient->id ?>" hidden>

        <div class="col">
          <button class="btn btn-success ms-2">Add Service</button>
        </div>
        </div>
    </div>
  </form>

<script>
    new MultiSelectTag('services')
</script>



  <form action="#" id="add_form" method="GET">

      <?php 

      $services = new Patient;

      $service_list = $services->fetch_patient_services($patient->id); 
      ?>

      <?php foreach($service_list as $data) { ?>
      <div class="row pt-3 col-12 col-lg-7">
        <div class="input-group">
          <span class="input-group-text">Service</span>
          <input type="text" aria-label="Services" class="form-control bg-white" value="<?php echo $data['services'] ?>" disabled>
          <span class="input-group-text">Amount ₱</span>
          <input type="number" aria-label="Amount" class="form-control bg-white" value="<?php echo $data['price'] ?>" disabled>

          <a type="button" class="btn btn-danger" href="delete-service.php?id=<?php echo $data['id'] ?>&patient_id=<?php echo $patient->id ?>">Remove</a>
        </div>
      </div><!--End row-->
      <?php } ?>

    

    <?php

      if($services->patient_service_total($patient->id)){

        $data = $services->patient_service_total($patient->id);

        $services->total = $data['total_price'];
      }


    ?>

    <div class="row pt-3 col-12 col-lg-5">
    <div class="input-group">
      <span class="input-group-text">Total for Services: ₱</span>
      <input class="form-control bg-white" type="number" name="service-total" id="service-total" value="<?php echo  $services->total ?>" disabled>
    </div><!--End services-->
    </div><!--End row-->

    <div class="row pt-3 col-12 col-lg-5">
      <div class="input-group">
        <span class="input-group-text">Total for Other Fees: ₱</span>
        <input class="form-control bg-white" type="number" name="fee-total" id="fee-total" value="">
      </div><!--End services-->
    </div><!--End row-->

    <div class="row pt-3 col-12 col-lg-5">
      <div class="input-group">
        <span class="input-group-text">Note for Fee</span>
        <textarea class="form-control bg-white" type="number" name="fee-total" id="fee-total" placeholder="Ex. Pass Due Fee = 500" rows="5"></textarea>
      </div><!--End services-->
    </div><!--End row-->

    <div class="row pt-3 col-12 col-lg-5">
      <div class="input-group">
        <span class="input-group-text">Total Amount: ₱</span>
        <input class="form-control bg-white" type="number" name="total" id="total" value="" disabled>
      </div><!--End services-->
    </div><!--End row-->

      <div class="row pt-3 col-12 col-lg-7">
        <div class="input-group">
          <span class="input-group-text">Due Start Date:</span>
          <input type="date" aria-label="Services" class="form-control" name="due-start" id="due-start">
          <span class="input-group-text">Due End Date:</span>
          <input type="date" aria-label="Amount" class="form-control" name="due-end" id="due-end">
        </div>
      </div><!--End row-->

    <div class="d-flex justify-content-end pt-2"><!--services-->
    <button type="submit" name="submit" id="submit" class="btn btn-info" style="background: #00ACB2; border: #00ACB2; color: #fff;">Submit</button>
    </div><!--End services-->
    </form>

  
  </div><!--End Card body-->
</div><!--End Card -->
</div><!--end pt-3 -->
</div><!--end content -->
