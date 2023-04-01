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

<div class="btn-group-vertical" role="group" aria-label="Vertical button group" style="width: 100%;">
  <button type="button" class="btn btn-light d-flex justify-content-between align-items-center"><a href="pay-notification.php" class="text-decoration-none text-color text-dark"><strong>Payment is Near!</strong> You need to pay so we can continue our services </a><i class="fas fa-times ml-2"></i></button>
  <button type="button" class="btn btn-light d-flex justify-content-between align-items-center"><a href="inside-monitor-notif.php" class="text-decoration-none text-color text-dark"><strong>Family Monitoring</strong> We would like to announce you</a><i class="fas fa-times ml-2"></i></button>
  <button type="button" class="btn btn-light d-flex justify-content-between align-items-center"><a href="pay-notification.php" class="text-decoration-none text-color text-dark"><strong>Payment is Near!</strong> You need to pay so we can continue our services </a><i class="fas fa-times ml-2"></i></button>
  <button type="button" class="btn btn-light d-flex justify-content-between align-items-center"><a href="inside-monitor-notif.php" class="text-decoration-none text-color text-dark"><strong>Family Monitoring</strong> We would like to announce you</a><i class="fas fa-times ml-2"></i></button>
  <button type="button" class="btn btn-light d-flex justify-content-between align-items-center"><a href="pay-notification.php" class="text-decoration-none text-color text-dark"><strong>Payment is Near!</strong> You need to pay so we can continue our services </a><i class="fas fa-times ml-2"></i></button>
  <button type="button" class="btn btn-light d-flex justify-content-between align-items-center"><a href="inside-monitor-notif.php" class="text-decoration-none text-color text-dark"><strong>Family Monitoring</strong> We would like to announce you</a><i class="fas fa-times ml-2"></i></button>
</div>


</div><!--End of container-->


