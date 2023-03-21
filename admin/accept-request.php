<?php

    require_once '../classes/relative.class.php';
    require_once '../classes/patient.class.php';
    require_once '../classes/monitoring.class.php';

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
    $relative = new Relative;
    $patient = new Patient;

    if(isset($_GET['id']) && isset($_GET['patient'])){

        $relative->patient_id = $_GET['patient'];

        if($patient->fetch_patient_data($_GET['patient'])){

            $data = $patient->fetch_patient_data($_GET['patient']);
            $patient->staff_id = $data['staff_id'];
            
            $monitoring = new Monitoring;

            $monitoring->patient_id = $_GET['patient'];
            $monitoring->relative_id = $_GET['id'];
            $monitoring->staff_id = $patient->staff_id;
            $monitoring->input_id = 0;

            if($relative->admin_accept_request($_GET['id']) && $monitoring->add_monitoring()){
                //redirect user to program page after saving
                header('location: request.php');
            }
      
        }

    }
?>