<?php

  $page_title = 'WeCare Admin - Appointment Details';
  require_once '../includes/admin-header.php';
  require_once '../classes/appointment.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  $appointment = new Appointment;


  if($appointment->fetch_appointment($_GET['id'])){

    $data = $appointment->fetch_appointment($_GET['id']);

    $appointment->firstname = $data['fname'];
    $appointment->middlename = $data['mname'];
    $appointment->lastname = $data['lname'];
    $appointment->email = $data['email'];
    $appointment->phone = $data['phone'];
    $appointment->purpose_for_appointment = $data['purpose'];
    $appointment->other_purpose = $data['other_purpose'];
    $appointment->appointment_time = $data['appointment_time'];
    $appointment->appointment_date = $data['appointment_date'];
    $appointment->status = $data['status'];
    $appointment->client_came = $data['client_came'];

  }


  require_once '../includes/admin-sidebar.php';

?>

<div class="content">


<div class="container align-items-center pt-3">
    <button class="btn btn-info" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/appointment.php"> <i class="fa-solid fa-arrow-left"></i> Back </a></button>

    <div class="pt-4">
    <h2 class="mb-4"><strong>Appointment Details</strong></h2>
    <div class="container form-control">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>First Name:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8><?php echo $appointment->firstname ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Middle Name:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8><?php echo $appointment->middlename ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Last Name:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8><?php echo $appointment->lastname ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Phone Number:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8><?php echo $appointment->phone ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Email:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8><?php echo $appointment->email ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Purpose of Appointment:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8><?php echo $appointment->purpose_for_appointment; if($appointment->purpose_for_appointment == 'Others'){ echo ": " . $appointment->other_purpose; }?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Date:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8><?php echo date("M jS, Y", strtotime($appointment->appointment_date)) ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Time:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo date("g:i a", strtotime($appointment->appointment_time)); ?></h8>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>

</div>

<?php

require_once '../includes/admin-footer.php';

?>