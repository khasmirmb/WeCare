<?php

    require_once '../classes/appointment.class.php';
    require_once '../classes/notification.class.php';

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
    $appointment = new Appointment;

    $appointment->user_id = $_GET['user_iden'];
    $appointment->staff_id = $_GET['assigned'];
    $appointment->appointment_time = $_GET['appointment_time'];
    $appointment->appointment_date = $_GET['appointment_date'];
    $appointment->purpose_for_appointment = $_GET['purpose'];
    $appointment->status = "Accepted";
    $appointment->client_came = "Pending";

    if(isset($_GET['id']) && isset($_GET['assigned']) && isset($_GET['user_iden']) && isset($_GET['appointment_time']) && isset($_GET['appointment_date']) && isset($_GET['purpose']) && isset($_GET['other_purpose'])){
        
        if($appointment->staff_assign_appointment($_GET['id'])){

            $notification = new Notification;

            // Notification for Appointment Accepted
            $notification->user_id = $appointment->user_id;

            $notification->type = "Appointment";

            $notification->subject = "Your appointment on " . date("M jS, Y", strtotime($appointment->appointment_date )) . " has been accepted.";

            if(!empty($appointment->other_purpose)){
                $appointment->other_purpose = " . Your purpose is ".$_GET['other_purpose'] . ".";
            } else{
                $appointment->other_purpose = ".";
            }

            $notification->message = "We hope this message finds you well. We would like to take this opportunity to remind you about your appointment have been accepted. \n" . "We're expecting to see you on " . date("g:i a", strtotime($appointment->appointment_time)) . " on " . date("M jS, Y", strtotime($appointment->appointment_date )). " with the purpose of " . $appointment->purpose_for_appointment . $appointment->other_purpose;

            $notification->status = 0;

            if($notification->add_notification_by_id()){

                //redirect user to program page after saving
                header('location: appointment-accepted.php');

            }

        }
    }
?>