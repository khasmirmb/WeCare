<?php

    require_once '../classes/payment.class.php';

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
    $payment = new Payment;
    $payment->payment_method = $_POST['payment_method'];
    $payment->payment_date = $_POST['paid_date'];
    $payment->status = "Paid";

    if(isset($_POST['pay_id']) && isset($_POST['payment_method']) && isset($_POST['paid_date']) && isset($_POST['p_id'])){

        if($payment->paid_payment($_POST['pay_id'])){

            //redirect user to program page after saving
            header('location: payment-list.php?id=' . $_POST['p_id']);

        }
    }
?>