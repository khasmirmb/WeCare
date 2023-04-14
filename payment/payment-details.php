<?php

    $page_title = 'WeCare - Payment Details';
    require_once '../includes/header.php';
    require_once '../classes/payment.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    $payment = new Payment;

    if($payment->fetch_payment_relative($_GET['id'])){
        $data = $payment->fetch_payment_relative($_GET['id']);

        $payment->services = $data['services'];
        $payment->services_total = $data['services_total'];
        $payment->fee_total = $data['fee_total'];
        $payment->total_amount = $data['total_amount'];
        $payment->fee_note = $data['fee_note'];
        $payment->status = $data['status'];
        $payment->payment_method = $data['payment_method'];
        $payment->payment_date = $data['payment_date'];

    }

    require_once '../includes/navbar.php';


?>

<div class="container pt-3 pb-3">
    <div class="pb-3">
    <a class="btn btn-info" style="background: #00ACB2; border: #00ACB2; color: #fff;" type="button" href="payment.php"><i class="fa-solid fa-arrow-left"></i> Back<a>
    </div>

<div class="card">
  <h5 class="card-header">Payment Details</h5>
  <div class="card-body">
    <div class="container">
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Date Paid:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <p class="card-text"><?php if(!empty($payment->payment_date)){ echo date("M j, Y", strtotime($payment->payment_date)); } else { echo $payment->status; } ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Services:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <p class="card-text"><?php echo $payment->services; ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Payment Method:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <p class="card-text"><?php if(!empty($payment->payment_method)){ echo $payment->payment_method; } else { echo $payment->status; } ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Services Amount Total:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <p class="card-text">₱<?php echo number_format($payment->services_total) ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Other Fees Total:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <p class="card-text">₱<?php echo number_format($payment->fee_total) ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Fees Note:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <p class="card-text"><?php if(!empty($payment->fee_note)){ echo $payment->fee_note; } else { echo "None"; } ?></p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Total Amount:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <p class="card-text">₱<?php echo number_format($payment->total_amount) ?></p>
        </div>
    </div>
    </div>
</div>
</div>
