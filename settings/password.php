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
    <a class="nav-link active" aria-current="page" href="password.php">Password</a>
	</li>
	<li class="nav-item">
    <a class="nav-link" aria-current="page" href="sett-notification.php" style="color: black;">Notification</a>
	</li>
    </ul>
	</div><!--3 buttons-->

    <div class="pt-3">
	<div class="card shadow border-0">
  	<div class="card-body">
        <h4 class="pb-3">Change Password</h4>
        <div class="col-12 col-lg-12 pb-3">
        <label for="current-password" class="form-label">Current Password</label>
        <input type="password" class="form-control" id="current-password">
        <div class="invalid-feedback">
			Please provide a valid password.
			</div>
			<div class="valid-feedback">
			Confirm!
			</div>
        </div>
        <div class="col-12 col-lg-12 pb-3">
        <label for="new-password" class="form-label">New Password</label>
        <input type="password" class="form-control" id="new-password">
        <div id="passwordHelpBlock" class="form-text">
        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
        </div>
        <div class="invalid-feedback">
			Please provide a valid password.
			</div>
			<div class="valid-feedback">
			Confirm!
			</div>
        </div>
        <div class="col-12 col-lg-12 pb-3">
        <label for="confirm-password" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="confirm-password">
        <div class="invalid-feedback">
			Password doesn't match.
			</div>
			<div class="valid-feedback">
			Confirm!
			</div>
        </div>
        <div class="jd-grid gap-2 d-md-flex justify-content-md-end pb-2">
        <a class="btn btn-primary" role="button" data-bs-toggle="modal" data-bs-target="#confirm-pass">Save</a>
        </div>
	</div>
	</div>
	</div>
</div><!--Don't touch-->

<!-- Modal -->
<div class="modal fade" id="confirm-pass" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="confirm-passLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="confirm-passLabel">Password Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to change the password?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>

<script>
	// Example starter JavaScript for disabling form submissions if there are invalid fields
(() => {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  const forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.from(forms).forEach(form => {
    form.addEventListener('submit', event => {
      if (!form.checkValidity()) {
        event.preventDefault()
        event.stopPropagation()
      }

      form.classList.add('was-validated')
    }, false)
  })
})()
</script>