<?php

  $page_title = 'WeCare Admin - Appointment Details';
  require_once '../includes/admin-header.php';
  require_once '../classes/appointment.class.php';
  require_once '../classes/reference.class.php';
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
    <button class="btn btn-info" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/appointment-noshow.php"> <i class="fa-solid fa-arrow-left"></i> Back </a></button>

    <div class="pt-4">
    <h2 class="mb-4"><strong>Appointment Details</strong></h2>
    <div class="container form-control">
    <div class="container-fluid">
    <form action="appointment-edit.php" method="POST">
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>First Name:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <input type="text" class="form-control" required value="<?php echo $appointment->firstname ?>">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Middle Name:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <input type="text" class="form-control" required value="<?php echo $appointment->middlename ?>">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Last Name:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <input type="text" class="form-control" required value="<?php echo $appointment->lastname ?>">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Phone Number:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <input type="tel" class="form-control" required value="<?php echo $appointment->phone ?>">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Email:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <input type="email" class="form-control" required value="<?php echo $appointment->email ?>">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Purpose of Appointment:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
            <select class="form-select" aria-label="Default select example">
                <option selected>-<?php echo $appointment->purpose_for_appointment ?>-</option>
                <?php
                    $app_purpose = new Reference;

                    $app_list = $app_purpose->get_appointment_purpose();

                    foreach($app_list as $row){
                ?>
                <option value="<?php echo $row['purpose'] ?>"><?php echo $row['purpose'] ?></option>
                <?php } ?>
            </select>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Date:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <input type="date" class="form-control" required value="<?php echo $appointment->appointment_date ?>">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Time:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <input type="time" class="form-control" required value="<?php echo $appointment->appointment_time ?>">
            </div>
        </div>
        <div class="d-flex justify-content-md-end">
            <button name="save" class="btn btn-outline-info text-light" style="background: #00ACB2;" onclick="return confirm('Are you sure to save changes?');">Save</button>
        </div>
    </form>
    </div>
    </div>
    </div>
</div>

</div>

<?php

require_once '../includes/admin-footer.php';

?>