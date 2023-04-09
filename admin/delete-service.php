<?php

    require_once '../classes/patient.class.php';

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
        header('location: ../account/signin.php');
        }
    //if the above code is false then code and html below will be executed
    $patient = new Patient;
    if(isset($_GET['id']) && isset($_GET['patient_id'])){
        if($patient->delete_patient_service($_GET['id'])){
            //redirect user to program page after saving
            header('location: add-payment.php?id='. $_GET['patient_id']);
        }
    }
?>