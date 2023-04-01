<?php

    $page_title = 'WeCare - Payment Notification';
    require_once '../includes/header.php';
    require_once '../classes/appointment.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
    

?>
 
<div class="container pt-3">
<a type="button" class="btn btn-info" href="notification-box.php" style="background: #00ACB2; border: #00ACB2; color: #fff;"><i class="fa-solid fa-arrow-left"></i> Back</a><!--Back button-->
<div class="row pt-3 pb-3">
  <div class="col-12">
    <div class="card shadow" style="width: 100%;">
      <div class="card-body">
    <h4 class="alert-heading">Hi! Your Due Date is Near</h4>
    <p>Dear [Recipient Name],</p>
    <p>We hope this message finds you well. We would like to take this opportunity to remind you about the payment for your loved one's stay at our facility.</p>
    <p>We understand that managing finances can be challenging, and we want to ensure that you are aware of the upcoming payment deadline to avoid any late fees or inconvenience. The payment for your loved one's care is due soon, and we kindly request that you make the payment as soon as possible.</p>
    <p>We offer payment plans and other forms of financial assistance to help make the payment process more manageable. Please do not hesitate to contact us if you need further assistance or if you have any questions or concerns regarding the payment.</p>
    <p>We appreciate your commitment to providing the best care for your loved one, and we are dedicated to supporting you in any way we can. Thank you for choosing WeCare Nursing Home as your loved one's home, and we look forward to continuing to provide exceptional care for them.</p>
    <hr>
    <p class="mb-0">Best regards,</p>
    <p class="mb-0">[Staff Name]</p>
    <p class="mb-0">WeCare Nursing Home</p>
      </div>
    </div>
  </div>
</div>
</div>

