<?php

    require_once '../classes/attendance.class.php';

    //resume session here to fetch session values
    session_start();
    /*
        if user is not login then redirect to login page,
        this is to prevent users from accessing pages that requires
        authentication such as the dashboard
    */
    if (!isset($_SESSION['staff_logged']) || $_SESSION['user_type'] != 'staff'){
        header('location: ../account/signin.php');
    }
    //if the above code is false then code and html below will be executed
    $attendance = new Attendance;
    
    if(isset($_GET['id'])){

        date_default_timezone_set('Asia/Manila');

        $attendance->time_out = date("h:i:sa");
        
        if($attendance->time_out_attendance($_GET['id'])){
            //redirect user to program page after saving
            header('location: attendance.php');
        }
    }
?>