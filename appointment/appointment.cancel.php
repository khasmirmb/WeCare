
<?php

    require_once '../classes/appointment.class.php';

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }
    //if the above code is false then code and html below will be executed
    $appointment = new Appointment;
    $appointment->status = "Canceled";

    if(isset($_GET['id'])){
        
        if($appointment->cancel_appointment($_GET['id'])){
            //redirect user to program page after saving
            header('location: appointment.list.php');
        }
    }
?>