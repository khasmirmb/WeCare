<?php

  $page_title = 'WeCare Admin - Billing Receipt';
  require_once '../includes/admin-header.php';
  require_once '../classes/patient.class.php';
  require_once '../classes/reference.class.php';
  require_once '../classes/payment.class.php';
  require_once '../classes/notification.class.php';
  require_once '../classes/relative.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  $patient = new Patient;
  $relative = new Relative;

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

  if(isset($_POST['submit'])){

    // Add Payment to Patient
    $payment = new Payment;
    $notification = new Notification;

    if(isset($_POST['services'])){

      $payment_number = rand(time(), 1000000);

      $payment->services = implode(", ", $_POST['services']);
      $payment->patient_id = $patient->id;
      $payment->date = htmlentities($_POST['date-billing']);
      $payment->services_total = $_POST['service-total'];
      $payment->fee_total = $_POST['fee-total'];
      $payment->total_amount = $_POST['total-amount'];
      $payment->payment_no = $payment_number;
      $payment->status = "Not Paid";

      if($payment->add_payment()){

        foreach($_POST['type'] as $key => $value){

          $payment->payment_no = $payment_number;
          $payment->type = $_POST['type'][$key];
          $payment->quantity = $_POST['quan'][$key];
          $payment->amount = $_POST['amount'][$key];

          $payment->add_payment_fee();
        }

        if(!empty($relative->fetch_relative_by_patient($patient->id))){

          $relative_list = $relative->fetch_relative_by_patient($patient->id);

          foreach($relative_list as $r_data){

            // Notification of Billing
            $notification->patient_id = $patient->id;

            $notification->user_id = $r_data['user_id'];

            $notification->type = "Billing";

            $mothnly =  strtotime($payment->date);

            $notification->subject = "There's a new payment regarding patient " . ucfirst($patient->firstname) . " " . ucfirst($patient->middlename[0]) . ". " . ucfirst($patient->lastname) . ". Due on " . date("M j, Y", strtotime("+1 month", $monthly));

            $notification->message = "We hope this message finds you well. We would like to take this opportunity to remind you about the payment for your loved one's stay at our facility.\n" . " We understand that managing finances can be challenging, and we want to ensure that you are aware of the upcoming payment deadline to avoid any late fees or inconvenience. The payment for your loved one's care is due soon, and we kindly request that you make the payment as soon as possible. \n" . " We offer payment plans and other forms of financial assistance to help make the payment process more manageable. Please do not hesitate to contact us if you need further assistance or if you have any questions or concerns regarding the payment.\n" . " We appreciate your commitment to providing the best care for your loved one, and we are dedicated to supporting you in any way we can. Thank you for choosing WeCare Nursing Home as your loved one's home, and we look forward to continuing to provide exceptional care for them.";

            $notification->status = 0;

            $notification->add_notification_by_user_patient();

          }

          header('location: payment-list.php?id='. $patient->id);


        }else{
          $no_relative = "This patient currently have no relative.";
        }

      }

    } else {
      $error = "Please select service";
    }

  }

  require_once '../includes/admin-sidebar.php';

?>
<div class="content">

<button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/payment-list.php?id=<?php echo $patient->id ?>"><i class="fa-solid fa-arrow-left"></i> Back </a></button>

<div class="pt-3">
<div class="card">
  <div class="card-header">
    Add Billing
  </div>
  <div class="card-body">

  <h3 class="card-title">Billing for <?php echo ucfirst($patient->firstname) . " " . ucfirst($patient->middlename[0]) . ". " . ucfirst($patient->lastname) ?></h3>

  <form action="add-service.php" method="GET">
    <div class="row mb-2">
          <?php
          //Display the error message if there is any.
          if(isset($no_relative)){
            echo '<div><p class="text-danger">'.$no_relative.'</p></div>';
          }  
          if(isset($error)){
            echo '<div><p class="text-danger">'.$error.'</p></div>';
          }   
          ?>
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
          <button class="btn btn-success ms-2"><i class="fa-solid fa-hand-holding-medical"></i>Add Service</button>
        </div>
        </div>
    </div>
  </form>

<script>
    new MultiSelectTag('services')
</script>



  <form action="add-payment.php?id=<?php echo $patient->id ?>" id="add_form" method="POST">

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

        <select name="services[]" multiple hidden>
          <?php foreach($service_list as $service){ ?>
            <option value="<?php echo $service['services'] ?>" selected><?php echo $service['services'] ?></option>
          <?php } ?>
        </select>

  
    <?php

      if($services->patient_service_total($patient->id)){

        $data = $services->patient_service_total($patient->id);

        $services->total = $data['total_price'];
        
      }


    ?>

    <div class="row pt-3 col-12 col-lg-5">
    <div class="input-group">
      <span class="input-group-text">Total for Services: ₱</span>
      <input class="form-control bg-white" type="number" name="service-total" id="service-total" value="<?php echo  $services->total ?>" required readonly>
    </div><!--End services-->
    </div><!--End row-->

    <div class="row pt-3 col-12 col-lg-8">
        <h5>Add On:</h5>
        <div class="col-12 col-lg-7">
        <div class="input-group mb-3">
          <div class="input-group-text">
            <input class="form-check-input mt-0" type="checkbox" value="Medicine" name="type[]">
            <span class="ms-3">Medicine</span>
          </div>
          <input type="number" class="form-control" placeholder="Quantity" name="quan[]">
          <span class="input-group-text">₱</span>
          <input type="number" class="form-control" placeholder="Amount" name="amount[]" id="medicine">
        </div>
        </div><!--col-->

        <div class="col-12 col-lg-7">
        <div class="input-group mb-3">
          <div class="input-group-text">
            <input class="form-check-input mt-0" type="checkbox" value="Diaper" name="type[]">
            <span class="ms-3">Diaper</span>
          </div>
          <input type="number" class="form-control" placeholder="Quantity" name="quan[]">
          <span class="input-group-text">₱</span>
          <input type="number" class="form-control" placeholder="Amount" name="amount[]" id="diaper" onchange="getFee()">
        </div>
        </div><!--col-->

        <div class="col-12 col-lg-7">
        <div class="input-group mb-3">
          <div class="input-group-text">
            <input class="form-check-input mt-0" type="checkbox" value="Oxygen tank" name="type[]">
            <span class="ms-3">Oxygen tank</span>
          </div>
          <input type="number" class="form-control" placeholder="Quantity" name="quan[]">
          <span class="input-group-text">₱</span>
          <input type="number" class="form-control" placeholder="Amount" name="amount[]" id="oxygen" onchange="getFee()">
        </div>
      </div><!--col-->

      <div class="row col-12 col-lg-12">
      <div class="input-group">
        <span class="input-group-text">Total Amount of Fees: ₱</span>
        <input class="form-control bg-white" type="number" name="fee-total" id="fee-total" onchange="getVal()" required placeholder="0" value="<?php if(isset($_POST['fee-total'])) { echo $_POST['fee-total']; } ?>">
      </div><!--End services-->
      </div><!--End row-->
       
      <div class="row pt-3 col-12 col-lg-12">
        <div class="input-group">
        <span class="input-group-text">Date of Billing:</span>
          <input type="date" aria-label="Start" class="form-control" name="date-billing" id="date-billing" required value="<?php if(isset($_POST['date-billing'])) { echo $_POST['date-billing']; } ?>">
        </div>
      </div><!--End row-->

    <div class="row pt-3 col-12 col-lg-12">
      <div class="input-group">
          <span class="input-group-text">Total Amount: ₱</span>
          <input class="form-control bg-white" type="number" name="total-amount" id="total-amount" required readonly value="<?php if(isset($_POST['total-amount'])) { echo $_POST['total-amount']; } ?>">
      </div><!--End services-->
    </div><!--End row-->

    <div class="d-flex justify-content-end pt-3"><!--services-->
    <button name="submit" id="submit" class="btn btn-info" style="background: #00ACB2; border: #00ACB2; color: #fff;">Submit</button>
    </div><!--End services-->
    </form>

  
  </div><!--End Card body-->
</div><!--End Card -->
</div><!--end pt-3 -->
</div><!--end content -->


    <script>

      function getVal() {

        var service = document.getElementById('service-total').value;
        var fee = document.getElementById('fee-total').value;
        var total = parseFloat(service) + parseFloat(fee);

        document.getElementById('total-amount').value = total;
      }

      function getFee() {

        var medicine = document.getElementById('medicine').value;
        var diaper = document.getElementById('diaper').value;
        var oxygen = document.getElementById('oxygen').value;
        var total = parseFloat(oxygen) + parseFloat(diaper) + parseFloat(medicine);

        document.getElementById('fee-total').value = total;
      }

    </script>
