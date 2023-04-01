<?php

    $page_title = 'WeCare - Account Settings';
    require_once '../includes/header.php';
    require_once '../classes/appointment.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
    

?>

<div class="header-monitoring pt-3">
    <h2 class="ms-3"><strong>Account Settings</strong></h2>
</div>

<div class="">
    <div class="card">
        <div class="card-body">
            <div class="col">
              

            </div>
            <div class="col">

            </div>
        </div>

    </div>

</div>

