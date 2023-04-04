<?php

    $page_title = 'WeCare - Help & Support';
    require_once '../includes/header.php';
    require_once '../classes/appointment.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
    

?>
<div class="container pt-3">
<div class="container">
    <div class="card">
    <h4 class="card-header">Help and Support</h4> <!--header-->
  <div class="card-body">
    <div class="form-group">
    <p class="card-text">If your having trouble using the website or have any questions We're here to help. Here's how can get in touch:</p>
    
        <div class="row">
        <div class="col-12 col-lg-4 pt-3"><!--Start of first col-->
            <div class="card"><!--first card in first column-->
            <div class="card-body">
                <h5><strong>How to set an Appointment?</strong></h5>
                <a href="#" type="button" class="btn btn-primary">Learn More</a>
            </div>
            </div>
        </div><!--end of col-->
        <div class="col-12 col-lg-4 pt-3"><!--Start of first col-->
            <div class="card"><!--first card in first column-->
            <div class="card-body">
                <h5><strong>You need help?</strong></h5>
            </div>
            </div>
        </div><!--end of col-->
        </div><!--End of the row-->
    </div><!--Container-->
  </div><!--End of card body-->
</div><!--End card-->
</div><!--Container-->
</div><!--Inside the container--->