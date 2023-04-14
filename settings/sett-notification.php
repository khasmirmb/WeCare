<?php

    $page_title = 'WeCare - Account Settings';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
    

?>

<div class="container pt-3"><!--Start of container-->
    <div class="header-monitoring pb-2"><!--Start of header-->
        <h2 class="ms-3"><strong>Account Settings</strong></h2>
    </div>

	<div class="pt-2"><!--3 buttons-->
	<ul class="nav nav-pills">
      <li class="nav-item">
    <a class="nav-link" aria-current="page" href="account-settings.php" style="color: black;">Profile Settings</a>
    </li>
     <li class="nav-item">
    <a class="nav-link" aria-current="page" href="password.php" style="color: black;">Password</a>
	</li>
	<li class="nav-item">
    <a class="nav-link active" aria-current="page" href="sett-notification.php" >Notification</a>
	</li>
    </ul>
	</div><!--3 buttons-->

    <div class="pt-3 pb-3">
	<div class="card shadow border-0">
  	<div class="card-body">
        <div class="card" style="width: 100%;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="email-notification">
                    <label class="form-check-label ms-2" for="email-notification">Email Notification</label>
                    <div class="form-text" id="basic-addon4">Turn on email notification to get updates through email.</div>
                </div>
            </li>
            <li class="list-group-item">
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="payment-notification">
                    <label class="form-check-label ms-2" for="payment-notification">Payment Notification</label>
                    <div class="form-text" id="basic-addon4">Turn on email notification to get updates through email.</div>
                </div>
            </li>
            <li class="list-group-item"> 
                <div class="form-check form-switch">
                    <input class="form-check-input" type="checkbox" role="switch" id="reminders">
                    <label class="form-check-label ms-2" for="reminders">Reminders</label>
                    <div class="form-text" id="reminder">This are notifications to remind you of updates you might have missed..</div>
                </div>
            </li>
        </ul>
    </div>
    </div><!--card body-->
    </div><!--card shadow-->
    </div><!--final-->

</div><!--Don't touch-->
