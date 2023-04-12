<?php

    require_once '../classes/relative.class.php';
    require_once '../classes/patient.class.php';
    require_once '../classes/monitoring.class.php';
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
    $relative = new Relative;
    $patient = new Patient;

    if(isset($_GET['id']) && isset($_GET['patient']) && isset($_GET['user_iden'])){

        $relative->patient_id = $_GET['patient'];

        if($patient->fetch_patient_data($_GET['patient'])){

            $data = $patient->fetch_patient_data($_GET['patient']);
            $patient->staff_id = $data['staff_id'];
            $patient->firstname = $data['fname'];
            $patient->lastname = $data['lname'];
            $patient->middlename = $data['mname'];
            
            $monitoring = new Monitoring;

            $monitoring->patient_id = $_GET['patient'];
            $monitoring->relative_id = $_GET['id'];
            $monitoring->staff_id = $patient->staff_id;

            if($relative->admin_accept_request($_GET['id']) && $monitoring->add_monitoring()){

                $notification = new Notification;

                // Notification of Request Accept
                $notification->patient_id = $_GET['patient'];

                $notification->user_id = $_GET['user_iden'];

                $notification->type = "Admission";

                $notification->subject = "Your monitoring request regarding " . ucfirst($patient->firstname) . " " . ucfirst($patient->middlename[0]) . ". " . ucfirst($patient->lastname) . " has been accepted.";

                $notification->message = "We hope this message finds you well. We would like to take this opportunity to remind you about your monitoring request regarding " . ucfirst($patient->firstname) . " " . ucfirst($patient->middlename[0]) . ". " . ucfirst($patient->lastname) . " have been accepted. \n" . "You can now access family monitoring for this patient. We appreciate your commitment to providing the best care for your loved one, and we are dedicated to supporting you in any way we can. Thank you for choosing WeCare Nursing Home as your loved one's home, and we look forward to continuing to provide exceptional care for them.";

                $notification->status = 0;

                if($notification->add_notification_by_user_patient()){

                    //redirect user to program page after saving
                    header('location: request.php');

                }

            }
      
        }

    }
?>