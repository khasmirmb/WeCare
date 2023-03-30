<?php

    $page_title = 'WeCare - Notification';
    require_once '../includes/header.php';
    require_once '../classes/appointment.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
    

?>

<div class="container pt-3"><!--Start of container-->
<div class="header-monitoring pb-2"><!--Start of header-->
    <h2 class="ms-3"><strong>Notification</strong></h2>
</div>
<div class=""><!--Start of button-->
<div class="card" style="width: 100%;">
  <ul class="list-group list-group-flush">
    <li class="list-group-item"><!--First button-->
    <div class="d-flex align-items-center justify-content-between">
        <a href="pay-notification.php" class="text-decoration-none text-color text-dark"><strong>Payment is Near!</strong> You need to pay so we can continue our services</a>
        <button class="btn btn-light">
        <i class="fas fa-times mr-2"></i>
        </button>
    </div>
    </li><!--End of first button-->
    <li class="list-group-item"><!--First button-->
    <div class="d-flex align-items-center justify-content-between">
        <a href="inside-monitor-notif.php" class="text-decoration-none text-color text-dark"><strong>Family Monitoring</strong> We would like to announce you</a>
        <button class="btn btn-light">
        <i class="fas fa-times mr-2"></i>
        </button>
    </div>
    </li><!--End of first button-->
    <li class="list-group-item"><!--First button-->
    <div class="d-flex align-items-center justify-content-between">
        <a href="#" class="text-decoration-none text-color text-dark"><strong>Payment is Near!</strong> You need to pay so we can continue our services</a>
        <button class="btn btn-light">
        <i class="fas fa-times mr-2"></i>
        </button>
    </div>
    </li><!--End of first button-->
  </ul>
</div>
</div><!--End of button-->

</div><!--End of container-->