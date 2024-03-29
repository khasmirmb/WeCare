<?php

  $page_title = 'WeCare Admin - BackUp';
  require_once '../includes/admin-header.php';
  require_once '../classes/patient.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  $patient = new Patient;

  if($patient->fetch_patient_data($_GET['id'])){
    // Data for the Patient
    $p_data = $patient->fetch_patient_data($_GET['id']);
    $patient->staff_id = $p_data['staff_id'];
    $patient->id = $p_data['id'];
    $patient->firstname = $p_data['fname'];
    $patient->middlename = $p_data['mname'];
    $patient->lastname = $p_data['lname'];
    $patient->suffix = $p_data['suffix'];
    $patient->picture = $p_data['image'];
    $patient->date_of_birth = $p_data['date_birth'];
    $patient->gender = $p_data['gender'];
    $patient->room = $p_data['room'];
  }

  require_once '../includes/admin-sidebar.php';

?>

<div class="content">

<div class="container align-items-center pt-3">
    <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/patient-list.php"><i class="fa-solid fa-arrow-left"></i> Patient List </a></button><!--back button-->

    <div class="pt-3"><!--Start of card-->
    <div class="card text-white mb-3" style="background: #00ACB2;">
    <div class="card-body">
        <div class="row">
            <div class="col-12 col-lg-4">
            <img src="../images/<?php echo $patient->picture ?>" class="rounded-circle img-thumbnail img-fluid mx-auto d-block" alt="Patient Image" style="width: 70%; height: 100%;">
            </div>
            <div class="col-12 col-lg-8">
                <h4 class="ms-3"><strong><?php echo ucfirst($patient->firstname) . " " . ucfirst($patient->middlename[0]) . ". " .  ucfirst($patient->lastname) ?></strong></h4>
                <p style="color: #fff; font-weight: bold; background: #00ACB2;">Age: <?php echo date_diff(date_create($patient->date_of_birth), date_create('today'))->y; ?></p>
                <p style="color: #fff; font-weight: bold; background: #00ACB2;">Date of Birth: <?php echo date("M j, Y", strtotime($patient->date_of_birth)) ?></p>
                <p style="color: #fff; font-weight: bold; background: #00ACB2;">Room: <?php echo $patient->room ?></p>
            </div>
        </div>
    </div>
    </div>
    </div><!--End of card-->

    <div class="list-group pt-3"><!--Start of Patient record list-->
    <a href="#" class="list-group-item list-group-item-action">
    <input class="form-check-input" type="checkbox" value="mark" id="mark"><i class="fa-solid fa-file"></i> X-ray Results</a> <!--Pls put icons and when it click it should have modal of files-->
    <a href="#" class="list-group-item list-group-item-action">
        <input class="form-check-input" type="checkbox" value="mark" id="mark"><i class="fa-solid fa-file"></i> DNA Test</a><!--Pls put icons and when it click it should have modal of files-->
    <a href="#" class="list-group-item list-group-item-action">
    <input class="form-check-input" type="checkbox" value="mark" id="mark"><i class="fa-solid fa-file"></i> Blood Test</a><!--Pls put icons and when it click it should have modal of files-->
    </div><!--End of Patient record list-->

   <div class="container pt-3 pb-2"> <!--Starting of the buttons-->
    <div class="row pt-1 pb-3">
        <div class=" col-12 col-lg-6 d-grid gap-2 pb-2">
        <button type="button" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
        </svg>Delete File</button> <!--Need to put icon and modal-->
        </div>
        <div class="col-12 col-lg-6 d-grid gap-2 pb-2">
        <button type="button" class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;"><i class="fa-solid fa-file-circle-plus"></i>Add File</button> <!--Need to put icon and modal-->
        </div>
    </div>
   </div><!--End of the buttons-->

</div><!--End of container-->

</div>

<?php

require_once '../includes/admin-footer.php';

?>