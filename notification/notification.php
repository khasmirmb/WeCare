<?php

    $page_title = 'WeCare - Payment Notification';
    require_once '../includes/header.php';
    require_once '../classes/notification.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';

    $notification = new Notification;

    if($notification->fetch_notification_info($_GET['id'])){

      $data = $notification->fetch_notification_info($_GET['id']);

      $notification->id = $data['id'];
      $notification->subject = $data['subject'];
      $notification->message = $data['message'];

      $notification->read_notification($_SESSION['logged_id'], $notification->id);



    }
?>
 
<div class="container pt-3">
<a type="button" class="btn btn-info" href="notification-box.php" style="background: #00ACB2; border: #00ACB2; color: #fff;"><i class="fa-solid fa-arrow-left"></i> Notification</a><!--Back button-->
<div class="row pt-3 pb-3">
  <div class="col-12">
    <div class="card shadow" style="width: 100%;">
      <div class="card-body">
    <h4 class="alert-heading mb-4">Hi <?php echo $notification->subject ?></h4>

    <p>Dear <?php echo $_SESSION['fullname']; ?>,</p>

    <p><?php echo $notification->message ?></p>
    <hr>
    <p class="mb-0">Best regards,</p>
    <p class="mb-0">WeCare Nursing Home</p>

    </div>
    </div>
  </div>
</div>
</div>

