<?php

    require_once '../classes/staff.class.php';

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
    $staff = new Staff;
    if(isset($_GET['id'])){
        if($staff->delete_staff_schedule($_GET['id'])){
            //redirect user to program page after saving
            header('location: staff-schedule.php');
        }
    }
?>