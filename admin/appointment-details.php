<?php

    $page_title = 'Admin - Appointment Details';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">
    <button class="btn btn-primary" type="button"><a class="text-white text-decoration-none" href="appointment.php"> < Appointment List </a></button>

    <div class="pt-4">
    <h2 class="mb-4"><strong>Appointment Details</strong></h2>
    <div class="container form-control">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>First Name:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Clinton</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Middle Name:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Santiago</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Last Name:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Pablo</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Suffix:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Jr</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Username:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Dubibi</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Phone Number:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>09565645455</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Email:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>javajava@gmail.com</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Purpose of Appointment:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>Visit Grandma</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Date:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3">
                <h8>March 26, 2023</h8>
            </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-6 col-lg-4 pt-3">
                <h8>Time:</h8>
            </div>
            <div class="col-6 col-lg-4 pt-3 pb-3">
                <h8>01:30 PM</h8>
            </div>
        </div>
    </div>
    </div>
    </div>
</div>