<?php

    require_once '../classes/admission.class.php';
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
    $admission = new Admission;

    if(isset($_GET['id']) && isset($_GET['assigned']) && isset($_GET['room']) && isset($_GET['p_firstname']) && isset($_GET['p_lastname']) && isset($_GET['p_middlename']) && isset($_GET['p_suffix']) && isset($_GET['p_date_of_birth']) && isset($_GET['p_place_of_birth']) && isset($_GET['p_gender']) && isset($_GET['p_province']) && isset($_GET['p_street']) && isset($_GET['p_barangay']) && isset($_GET['p_city']) && isset($_GET['p_postal']) && isset($_GET['p_background_history']) && isset($_GET['p_doctors_diagnosis']) && isset($_GET['p_allergies']) && isset($_GET['p_picture']) && isset($_GET['p_services'])){

        $admission->staff_id = $_GET['assigned'];
        $admission->status = "Accepted";

        if($admission->staff_assign_admission($_GET['id'])){

            // Patient Information Based on the Admission
                $patient = new Patient;

                $patient->picture = $_GET['p_picture'];
                $patient->firstname = $_GET['p_firstname'];
                $patient->middlename = $_GET['p_middlename'];
                $patient->lastname = $_GET['p_lastname'];
                $patient->suffix = $_GET['p_suffix'];
                $patient->date_of_birth = $_GET['p_date_of_birth'];
                $patient->place_of_birth = $_GET['p_place_of_birth'];
                $patient->province = $_GET['p_province'];
                $patient->gender = $_GET['p_gender'];
                $patient->street = $_GET['p_street'];
                $patient->barangay = $_GET['p_barangay'];
                $patient->city = $_GET['p_city'];
                $patient->postal = $_GET['p_postal'];
                $patient->background_history = $_GET['p_background_history'];
                $patient->doctors_diagnosis = $_GET['p_doctors_diagnosis'];
                $patient->allergies = $_GET['p_allergies'];
                $patient->staff_id = $_GET['assigned'];
                $patient->status = "Active";
                $patient->room = $_GET['p_street'];
                $patient->services = $_GET['p_services'];

                if($patient->add_patient()){
                    //redirect user to program page after saving
                    header('location: admission-accepted.php');
                }
                
        
            
            
        }
    }
?>