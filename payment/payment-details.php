<?php

    $page_title = 'WeCare - Billing Details';
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
        $payment->status = $data['status'];
        $payment->payment_method = $data['payment_method'];
        $payment->payment_date = $data['payment_date'];
        $payment->receipt = $data['receipt'];

    }

    require_once '../includes/navbar.php';


?>

<div class="container pt-3 pb-3">
    <div class="pb-3">
    <a class="btn btn-info" style="background: #00ACB2; border: #00ACB2; color: #fff;" type="button" href="payment.php"><i class="fa-solid fa-arrow-left"></i> Back<a>
    </div>

<div class="card">
  <h5 class="card-header">Billing Details</h5>
  <div class="card-body">
    <div class="container">
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Date Paid:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <strong>
        <p class="card-text <?php if(!empty($payment->payment_method)){ echo "text-success"; } else { echo "text-danger"; } ?>"><?php if(!empty($payment->payment_date)){ echo date("M j, Y", strtotime($payment->payment_date)); } else { echo $payment->status; } ?></p>
        </strong>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Services:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <strong>
        <p class="card-text"><?php echo $payment->services; ?></p>
        </strong>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Payment Method:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <strong>
        <p class="card-text <?php if(!empty($payment->payment_method)){ echo "text-success"; } else { echo "text-danger"; } ?>"><?php if(!empty($payment->payment_method)){ echo $payment->payment_method; } else { echo $payment->status; } ?></p>
        </strong>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Services Amount Total:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <strong>
        <p class="card-text">₱<?php echo number_format($payment->services_total, 2) ?></p>
        </strong>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Other Fees Total:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <strong>
        <p class="card-text">₱<?php echo number_format($payment->fee_total, 2) ?></p>
        </strong>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Total Amount:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <strong>
        <p class="card-text">₱<?php echo number_format($payment->total_amount, 2) ?></p>
        </strong>
        </div>
    </div>
        <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Receipt:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <strong>
        <?php if(!empty($payment->receipt)){ ?>

                <a class="btn btn-success" href="../receipt/<?php echo $payment->receipt ?>" download>Download</a>

             <?php } else {?> <p class="card-text text-danger"> <?php echo $payment->status; } ?></p>
        </strong>
        </div>
    </div>
    </div>
</div>
</div>
