<?php

    require_once '../classes/admission.class.php';
    require_once '../classes/patient.class.php';
    require_once '../classes/notification.class.php';
    require_once '../classes/relative.class.php';
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
    $admission = new Admission;
    $patient_info = new Patient;

    if(isset($_GET['id']) && isset($_GET['assigned']) && isset($_GET['room']) && isset($_GET['p_firstname']) && isset($_GET['p_lastname']) && isset($_GET['p_middlename']) && isset($_GET['p_suffix']) && isset($_GET['p_date_of_birth']) && isset($_GET['p_place_of_birth']) && isset($_GET['p_gender']) && isset($_GET['p_province']) && isset($_GET['p_street']) && isset($_GET['p_barangay']) && isset($_GET['p_city']) && isset($_GET['p_postal']) && isset($_GET['p_background_history']) && isset($_GET['p_doctors_diagnosis']) && isset($_GET['p_allergies']) && isset($_GET['p_picture']) && isset($_GET['admission_no']) && isset($_GET['services']) && isset($_GET['user_iden']) && isset($_GET['inquire'])){

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
                $patient->room = $_GET['room'];
                $patient->patient_info_no = $_GET['admission_no'];
                $patient->user_id = $_GET['user_iden'];

                $patient->add_patient();

                if($patient_info->fetch_patient_by_name($_GET['admission_no'])){

                    $added_patient = $patient_info->fetch_patient_by_name($_GET['admission_no']);

                    foreach($added_patient as $patient_fetch){

                        foreach($_GET['services'] as $key => $value){

                            $patient->services = $_GET['services'][$key];
                            $patient->p_id = $patient_fetch['id'];

                            $patient->add_patient_services();
                        }
                    }

                    $relative = new Relative;

                    $relative->user_id = $patient->user_id;
                    $relative->relationship = $_GET['inquire'];
                    $relative->firstname = $patient->firstname;
                    $relative->middlename =  $patient->middlename;
                    $relative->lastname = $patient->lastname;
                    $relative->suffix = $patient->suffix;
                    $relative->patient_id = $patient->p_id;
                    $relative->proof = "Relative";

                    if($relative->add_relative_admission()){

                        if($relative->fetch_relative_info($patient->user_id)){

                            $data = $relative->fetch_relative_info($patient->user_id);

                            $relative->id = $data['id'];

                            $monitoring = new Monitoring;

                            $monitoring->patient_id = $patient->p_id;
                            $monitoring->relative_id = $relative->id;
                            $monitoring->staff_id = $patient->staff_id;

                            if($monitoring->add_monitoring()){

                                $notification = new Notification;

                                // Notification of Payment
                                $notification->patient_id = $patient->p_id;

                                $notification->user_id = $patient->user_id;

                                $notification->type = "Admission";

                                $notification->subject = "Your admission regarding " . ucfirst($patient->firstname) . " " . ucfirst($patient->middlename[0]) . ". " . ucfirst($patient->lastname) . " has been accepted.";

                                $notification->message = "We hope this message finds you well. We would like to take this opportunity to remind you about your admission regarding " . ucfirst($patient->firstname) . " " . ucfirst($patient->middlename[0]) . ". " . ucfirst($patient->lastname) . " have been accepted. \n" . "You can now access family monitoring for this patient. We appreciate your commitment to providing the best care for your loved one, and we are dedicated to supporting you in any way we can. Thank you for choosing WeCare Nursing Home as your loved one's home, and we look forward to continuing to provide exceptional care for them.";

                                $notification->status = 0;

                                if($notification->add_notification_by_user_patient()){

                                    //redirect user to program page after saving
                                    header('location: admission-accepted.php');

                                }
                            }
                        }
                    }

                }
        

        }
    }
?>