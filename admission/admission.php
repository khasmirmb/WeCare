<?php

    $page_title = 'WeCare - Admission';
    require_once '../includes/header.php';
    require_once '../tools/functions.php';
    require_once '../classes/survey.class.php';
    require_once '../classes/patient.class.php';
    require_once '../classes/relative.class.php';
    require_once '../classes/admission.class.php';
    require_once '../classes/basic.database.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    // If user submit the form
    if(isset($_POST['submit'])){

        // Classes
        $survey = new Survey;
        $patient_info = new Patient;
        $relative_info = new Relative;
        $admission = new Admission;

        $admission_no = rand(time(), 100000);
        $user_id = $_SESSION['logged_id'];

        // user_id and generating random survey number
        $survey->user_id = $_SESSION['logged_id'];
        $survey->survey_no = $admission_no;

        if(isset($_POST['service'])){

            // Get the services that being checked by user
            $checkBox = implode(', ', $_POST['service']);
            for ($i=0; $i < strlen($checkBox); $i++){
                $checkBox[$i];
            }
            $services = $checkBox;
            $survey->services = $services;
            $survey->inquire = $_POST['inquire'];

            // Check if the user uploaded Image
            if(isset($_FILES['p_image']) && isset($_FILES['r_image'])){
                // Create name for patient image and check file type
                $p_img_name = $_FILES['p_image']['name'];
                $p_img_type = $_FILES['p_image']['type'];
                $p_tmp_name = $_FILES['p_image']['tmp_name'];
                $p_img_explode = explode('.', $p_img_name);
                $p_img_extension = end($p_img_explode);

                // Create name for relative img and check file type
                $r_img_name = $_FILES['r_image']['name'];
                $r_img_type = $_FILES['r_image']['type'];
                $r_tmp_name = $_FILES['r_image']['tmp_name'];
                $r_img_explode = explode('.', $r_img_name);
                $r_img_extension = end($r_img_explode);

                // Only accepted these img extensions
                $extensions = ['png', 'jpeg', 'jpg'];

                // If only accepted file extension execute
                if(in_array($p_img_extension, $extensions) === true && in_array($r_img_extension, $extensions) === true){

                    // Creating new name for the images
                    $time = time();
                    $p_new_img_name = "Patient_" . $time . $p_img_name;
                    $r_new_img_name = "Relative_" . $time . $r_img_name;

                    // Moving the uplaoded file to folder image
                    if(move_uploaded_file($p_tmp_name, "../images/". $p_new_img_name) && move_uploaded_file($r_tmp_name, "../images/". $r_new_img_name)){

                        // Adding Answered Survey Question to DB
                        if(isset($_POST['walk'])){
                            $survey->answers = $_POST['walk'];
                            $survey->survey_question = 1;
                            // Add to DB if the validation is complete
                            if(validate_add_patient_info($_POST) && validate_add_survey($_POST) && validate_add_relative_info($_POST)){
                                $survey->add_survey_answer();
                            }
                        }

                        if(isset($_POST['wheelchair'])){
                            $survey->answers = $_POST['wheelchair'];
                            $survey->survey_question = 2;
                            // Add to DB if the validation is complete
                            if(validate_add_patient_info($_POST) && validate_add_survey($_POST) && validate_add_relative_info($_POST)){
                                $survey->add_survey_answer();
                            }
                        }

                        if(isset($_POST['bedridden'])){
                            $survey->answers = $_POST['bedridden'];
                            $survey->survey_question = 3;
                            // Add to DB if the validation is complete
                            if(validate_add_patient_info($_POST) && validate_add_survey($_POST) && validate_add_relative_info($_POST)){
                                $survey->add_survey_answer();
                            }
                        }

                        if(isset($_POST['memory'])){
                            $survey->answers = $_POST['memory'];
                            $survey->survey_question = 4;
                            // Add to DB if the validation is complete
                            if(validate_add_patient_info($_POST) && validate_add_survey($_POST) && validate_add_relative_info($_POST)){
                                $survey->add_survey_answer();
                            }
                        }

                        if(isset($_POST['bath'])){
                            $survey->answers = $_POST['bath'];
                            $survey->survey_question = 5;
                            // Add to DB if the validation is complete
                            if(validate_add_patient_info($_POST) && validate_add_survey($_POST) && validate_add_relative_info($_POST)){
                                $survey->add_survey_answer();
                            }
                        }

                        if(isset($_POST['eating'])){
                            $survey->answers = $_POST['eating'];
                            $survey->survey_question = 6;
                            // Add to DB if the validation is complete
                            if(validate_add_patient_info($_POST) && validate_add_survey($_POST) && validate_add_relative_info($_POST)){
                                $survey->add_survey_answer();
                            }
                        }

                        if(isset($_POST['restless'])){
                            $survey->answers = $_POST['restless'];
                            $survey->survey_question = 7;
                            // Add to DB if the validation is complete
                            if(validate_add_patient_info($_POST) && validate_add_survey($_POST) && validate_add_relative_info($_POST)){
                                $survey->add_survey_answer();
                            }
                        }

                        if(isset($_POST['feeding'])){
                            $survey->answers = $_POST['feeding'];
                            $survey->survey_question = 8;
                            // Add to DB if the validation is complete
                            if(validate_add_patient_info($_POST) && validate_add_survey($_POST) && validate_add_relative_info($_POST)){
                                $survey->add_survey_answer();
                            }
                        }
                        
                        // Adding Patient Info to DB
                        $patient_info->user_id = $_SESSION['logged_id'];
                        $patient_info->picture = $p_new_img_name;
                        $patient_info->firstname = htmlentities($_POST['p_firstname']);
                        $patient_info->middlename = htmlentities($_POST['p_middlename']);
                        $patient_info->lastname = htmlentities($_POST['p_lastname']);
                        $patient_info->suffix = htmlentities($_POST['p_suffix']);
                        $patient_info->date_of_birth = $_POST['p_date_birth'];
                        $patient_info->place_of_birth = htmlentities($_POST['p_place_birth']);
                        $patient_info->province = $_POST['p_province'];
                        $patient_info->gender = $_POST['p_gender'];
                        $patient_info->street = htmlentities($_POST['p_street']);
                        $patient_info->barangay = htmlentities($_POST['p_barangay']);
                        $patient_info->city = $_POST['p_city'];
                        $patient_info->postal = htmlentities($_POST['p_postal']);
                        $patient_info->background_history = htmlentities($_POST['p_background']);
                        $patient_info->doctors_diagnosis = htmlentities($_POST['p_doctor_diag']);
                        $patient_info->allergies = htmlentities($_POST['p_allergies']);
                        $patient_info->patient_info_no = $admission_no;


                        // Adding Relative Info to DB
                        $relative_info->user_id = $_SESSION['logged_id'];
                        $relative_info->picture = $r_new_img_name;
                        $relative_info->firstname = htmlentities($_POST['r_firstname']);
                        $relative_info->middlename = htmlentities($_POST['r_middlename']);
                        $relative_info->lastname = htmlentities($_POST['r_lastname']);
                        $relative_info->suffix = htmlentities($_POST['r_suffix']);
                        $relative_info->date_of_birth = $_POST['r_date_birth'];
                        $relative_info->place_of_birth = htmlentities($_POST['r_place_birth']);
                        $relative_info->province = $_POST['r_province'];
                        $relative_info->gender = $_POST['r_gender'];
                        $relative_info->street = htmlentities($_POST['r_street']);
                        $relative_info->barangay = htmlentities($_POST['r_barangay']);
                        $relative_info->city = $_POST['r_city'];
                        $relative_info->postal = htmlentities($_POST['r_postal']);
                        $relative_info->relationship = $_POST['relationship'];
                        $relative_info->phone = htmlentities($_POST['phone']);
                        $relative_info->telephone = htmlentities($_POST['telephone']);
                        $relative_info->email = htmlentities($_POST['email']);
                        $relative_info->relative_info_no = $admission_no;

                        // Add info to DB if the validation is complete
                        if(validate_add_patient_info($_POST) && validate_add_survey($_POST) && validate_add_relative_info($_POST)){

                            $relative_info->add_relative_info();
                            $patient_info->add_patient_info();
                            $survey->add_survey_info();

                            $admission->user_id = $_SESSION['logged_id'];
                            $admission->admission_no = $admission_no;

                            $sql1 = "SELECT * FROM survey_info WHERE survey_no = $admission_no AND user_id = $user_id";

                            $result1 = $conn->query($sql1);
                            if($result1->num_rows > 0){
                                while($row = $result1->fetch_assoc()) {
                                    $admission->survey_info = $row['id'];
                                }
                            }
    
                            $sql2 = "SELECT * FROM patient_info WHERE patient_info_no = $admission_no AND user_id = $user_id";
    
                            $result2 = $conn->query($sql2);
                            if($result2->num_rows > 0){
                                while($row = $result2->fetch_assoc()) {
                                    $admission->patient_info = $row['id'];
                                }
                            }
    
                            $sql3 = "SELECT * FROM relative_info WHERE relative_info_no = $admission_no AND user_id = $user_id";
    
                            $result3 = $conn->query($sql3);
                            if($result3->num_rows > 0){
                                while($row = $result3->fetch_assoc()) {
                                    $admission->relative_info = $row['id'];
                                }
                            }

                            if($admission->add_admission()){
                                header('location: admission.list.php');
                            }
     
                        }
                    }
                }else{
                    $error_file_type = "Please Select an Image - JPG, PNG, JPEG";
                }
            }else{
                $error_image = "Please Select an Image";
            }

        }else{
            $error = 'Please Select Service';
        }
        
    }

    require_once '../includes/navbar.php';

?>
<!--Breadscrumbs-->
<div class="p-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item" aria-current="page"><a href="#" id="move-survey">Survey</a></li>
        <li class="breadcrumb-item"><a href="#" id="move-patient">Patient Information</a></li>
        <li class="breadcrumb-item"><a href="#" id="move-relative">Relative Information</a></li>
        <li class="breadcrumb-item"><a href="#" id="move-review">Review</a></li>
    </ol>
    </nav>
</div>

<form action="admission.php" method="POST" class="admission-form pt-3 mb-5" enctype="multipart/form-data">

    <?php include_once 'survey.php' ?>

    <?php include_once 'patient.php' ?>

    <?php include_once 'relative.php' ?>

</form>

<script>

$("#patient-details").hide();
$("#relative-details").hide();
$("#survey-submit").hide();

$(document).ready(function(){
  $("#move-patient, #next-patient, #back-patient").click(function(){
    $("#patient-details").show();
    $("#survey-details").hide();
    $("#relative-details").hide();
    $("#next-patient").show();
    $("#back-survey").show();
    $("#next-relative").show();
    $("#back-patient").show();
    $("#next-review").show();
  });
  $("#move-survey, #back-survey").click(function(){
    $("#survey-details").show();
    $("#patient-details").hide();
    $("#relative-details").hide();
    $("#next-patient").show();
    $("#back-survey").show();
    $("#next-relative").show();
    $("#back-patient").show();
    $("#next-review").show();
  });
  $("#move-relative, #next-relative").click(function(){
    $("#survey-details").hide();
    $("#patient-details").hide();
    $("#relative-details").show();
    $("#next-patient").show();
    $("#back-survey").show();
    $("#next-relative").show();
    $("#back-patient").show();
    $("#next-review").show();
    $("#survey-submit").hide();
  });
  $("#move-review, #next-review").click(function(){
    $("#survey-details").show();
    $("#patient-details").show();
    $("#relative-details").show();
    $("#next-patient").hide();
    $("#back-survey").hide();
    $("#next-relative").hide();
    $("#back-patient").hide();
    $("#next-review").hide();
    $("#survey-submit").show();
  });
});
</script>