<?php

  $page_title = 'WeCare Admin - Admission Details';
  require_once '../includes/admin-header.php';
  require_once '../classes/patient.class.php';
  require_once '../classes/relative.class.php';
  require_once '../classes/survey.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  $patient = new Patient;
  $relative = new Relative;
  $survey = new Survey;

  if ($patient->fetch_admission_patient_info($_GET['id']) ||
  $relative->fetch_admission_relative_info($_GET['id']) || $survey->fetch_admission_survey_info($_GET['id'])  ){
        
        // variable for different type of data
        $p_data = $patient->fetch_admission_patient_info($_GET['id']);
        $r_data = $relative->fetch_admission_relative_info($_GET['id']);
        $s_data = $survey->fetch_admission_survey_info($_GET['id']);

        // Patient Info Data
        $patient->id = $p_data['id'];
        $patient->firstname = $p_data['p_firstname'];
        $patient->middlename = $p_data['p_middlename'];
        $patient->lastname = $p_data['p_lastname'];
        $patient->suffix = $p_data['p_suffix'];
        $patient->date_of_birth = $p_data['p_date_of_birth'];
        $patient->place_of_birth = $p_data['p_place_of_birth'];
        $patient->gender = $p_data['p_gender'];
        $patient->street = $p_data['p_street'];
        $patient->barangay = $p_data['p_barangay'];
        $patient->city = $p_data['p_city'];
        $patient->background_history = $p_data['background_history'];
        $patient->doctors_diagnosis = $p_data['doctors_diagnosis'];
        $patient->allergies = $p_data['allergies'];
        $patient->picture = $p_data['p_picture'];
        $patient->patient_info_no = $p_data['admission_no'];

        // Relative Info Data
        $relative->id = $r_data['id'];
        $relative->firstname = $r_data['r_firstname'];
        $relative->middlename = $r_data['r_middlename'];
        $relative->lastname = $r_data['r_lastname'];
        $relative->suffix = $r_data['r_suffix'];
        $relative->date_of_birth = $r_data['r_date_of_birth'];
        $relative->place_of_birth = $r_data['r_place_of_birth'];
        $relative->gender = $r_data['r_gender'];
        $relative->street = $r_data['r_street'];
        $relative->city = $r_data['r_city'];
        $relative->barangay = $r_data['r_barangay'];
        $relative->relationship = $r_data['relationship'];
        $relative->phone = $r_data['phone'];
        $relative->email = $r_data['email'];
        $relative->telephone = $r_data['telephone'];
        $relative->picture = $r_data['r_picture'];

        // Survey Info Data
        $survey->id = $s_data['id'];
        $survey->services = $s_data['services'];
        $survey->inquire = $s_data['inquire'];
        // Survey Answer and Question Data
        $s_answer = $survey->fetch_admission_survey_answers($_GET['id']);


    }

  require_once '../includes/admin-sidebar.php';

?>

<div class="content">

<div class="container align-items-center pt-3">
    <button class="btn btn-info" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/admission.php"> <i class="fa-solid fa-arrow-left"></i> Back </a></button>

    <div class="pt-4 pb-4">
    <h2 class="mb-4"><strong>Admission Details</strong></h2>
    <div class="container form-control">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
        <h4 class="pt-3 pb-3"><strong>Admission Number:</strong> <?php echo $patient->patient_info_no ?></h4>
            <h2 class="pt-3 pb-3"><strong>Survery & Services</strong></h2>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Care Services Needed:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8><?php echo $survey->services ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>I want to inquire for?</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8><?php echo $survey->inquire ?></h8>
            </div>
        </div>

    <?php

    $i = 1;

    foreach($s_answer as $row){
        
    ?>

        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8><?php echo $i . ". " . $row['question'] ?></h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8><?php echo $row['answers'] ?></h8>
            </div>
        </div>

    <?php 
        $i++;
    } 
    ?>


        <div class="row justify-content-md-center">
        <h2 class="pt-4 pb-3"><strong>Patient's Personal Details</strong></h2>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Image:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <img src="../images/<?php echo $patient->picture ?>" alt="Patient Picture" width="110" height="100">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>FullName:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $patient->firstname . " " . $patient->middlename . " " . $patient->lastname . " " . $patient->suffix ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Address:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $patient->barangay . " " . $patient->street . ", " . $patient->city ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Gender:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $patient->gender ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Date Of Birth:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo date("M jS, Y", strtotime($patient->date_of_birth)) ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Place of Birth:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $patient->place_of_birth ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Background History:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $patient->background_history ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Doctors Diagnosis:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $patient->doctors_diagnosis ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Allegies:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $patient->allergies ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
        <h2 class="pt-3"><strong>Watcher’s Personal Details</strong></h2>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Image:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <img src="../images/<?php echo $relative->picture ?>" alt="Relative Picture" width="110" height="100">
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>FullName:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $relative->firstname . " " . $relative->middlename . " " . $relative->lastname . " " . $relative->suffix ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Address:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $relative->barangay . " " . $relative->street . ", " . $relative->city ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Gender:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $relative->gender ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Date Of Birth:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $relative->date_of_birth ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Place of Birth:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $relative->place_of_birth ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Relationship to Patient:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $relative->relationship ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Email:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $relative->email ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Phone Number:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $relative->phone ?></h8>
            </div>
        </div>
        <div class="row justify-content-md-center pb-3">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Telephone Number:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8><?php echo $relative->telephone ?></h8>
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