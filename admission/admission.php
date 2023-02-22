<?php

    $page_title = 'WeCare - Admission';
    require_once '../includes/header.php';
    require_once '../tools/functions.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    if(isset($_POST['submit'])){

        if(isset($_POST['service'])){
            $checkBox = implode(', ', $_POST['service']);
            for ($i=0; $i < strlen($checkBox); $i++){
                $checkBox[$i];
            }

            $services = $checkBox;
            $inquire = $_POST['inquire'];
            $survey_walk = 'Not Set';
            if(isset($_POST['walk'])){
                $survey_walk = $_POST['walk'];;
            }
            $survey_wheelchair = 'Not Set';
            if(isset($_POST['wheelchair'])){
                $survey_wheelchair = $_POST['wheelchair'];;
            }
            $survey_bedridden = 'Not Set';
            if(isset($_POST['bedridden'])){
                $survey_bedridden = $_POST['bedridden'];;
            }
            $survey_memory = 'Not Set';
            if(isset($_POST['memory'])){
                $survey_memory = $_POST['memory'];;
            }
            $survey_bath = 'Not Set';
            if(isset($_POST['bath'])){
                $survey_bath = $_POST['bath'];;
            }
            $survey_eating = 'Not Set';
            if(isset($_POST['eating'])){
                $survey_eating = $_POST['eating'];;
            }
            $survey_restless = 'Not Set';
            if(isset($_POST['restless'])){
                $survey_restless = $_POST['restless'];;
            }
            $survey_feeding = 'Not Set';
            if(isset($_POST['feeding'])){
                $survey_feeding = $_POST['feeding'];;
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

<form action="admission.php" method="POST" class="admission-form pt-3 mb-5">

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