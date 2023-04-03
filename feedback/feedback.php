<?php

    $page_title = 'WeCare - Feedback';
    require_once '../includes/header.php';
    require_once '../classes/appointment.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
    

?>
<div class="content pt-3">

    <div class="container">
    <div class="card">
    <h4 class="card-header">Give Feedback</h4> <!--header-->
  <div class="card-body">
    <div class="form-group">
      <label for="rate-experience" class="form-label">How would you rate your experience?</label>
      <div class="text-center mb-3"><!--Emoticons start--->
         <button class="border rounded-pill"><i class="fa-regular fa-face-smile-beam fa-4x"></i></button> <!--icon-->
        <button class="border rounded-pill"><i class="fa-regular fa-face-smile fa-4x"></i></i></button><!--icon-->
        <button class="border rounded-pill"><i class="fa-regular fa-face-meh fa-4x"></i></button><!--icon-->
        <button class="border rounded-pill"><i class="fa-regular fa-face-frown fa-4x"></i></button><!--icon-->
        <button class="border rounded-pill"><i class="fa-regular fa-face-angry fa-4x"></i></button><!--icon-->
      </div><!--Emoticons end-->
      <label for="experience" class="form-label">Please tell us about your experience:</label>
      <textarea class="form-control" id="experience" rows="3"></textarea>
      <br>
      <label for="email-input" class="form-label">Your email address (optional):</label>
      <input type="email" class="form-control" id="email-input">
      <br>
      <a href="#" class="btn btn-primary">Send</a><!--button to send-->
    </div>
  </div>
</div>
</div>
</div><!--end of the content-->