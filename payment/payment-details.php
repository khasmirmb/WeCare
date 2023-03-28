<?php

    $page_title = 'WeCare - Payment Details';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
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
        <p class="card-text">January 3, 2023</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Services:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <p class="card-text">Caregiving</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Payment Method:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <p class="card-text">Cash</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Total Amount Due:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <p class="card-text">₱30,000.00</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Amount Paid:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <p class="card-text">₱56,000.00</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Current Balance:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <p class="card-text">₱220.00</p>
        </div>
    </div>
    <div class="row">
        <div class="col-6 col-lg-4">
        <h5 class="card-title">Balance Due:</h5>
        </div>
        <div class="col-6 col-lg-8">
        <p class="card-text">₱65,000.00</p>
        </div>
    </div>
    </div>
</div>
</div>
