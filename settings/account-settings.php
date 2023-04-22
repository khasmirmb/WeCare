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
    <a class="nav-link active" aria-current="page" href="account-settings.php">Profile Settings</a>
	</li>
 	<li class="nav-item">
    <a class="nav-link" aria-current="page" href="password.php" style="color: black;">Password</a>
	</li>
	<li class="nav-item">
    <a class="nav-link" aria-current="page" href="sett-notification.php" style="color: black;">Notification</a>
	</li>
	</ul>
	</div><!--3 buttons-->

	<div class="pt-3 pb-3">
	<div class="card shadow border-0">
  	<div class="card-body">
		<div class="row">
		<div class="col-12 col-lg-3 pt-3 ps-5">
		<img src="../images/<?php echo $_SESSION['profile_pic'] ?>" class="rounded-circle img-fluid" style="width: 200px; height: 200spx;" alt="Profile">
		</div>
		<div class="col-12 col-lg-4 pt-5">
		<div class="d-grid gap-3 d-md-flex" style="margin-top: 40px;"">
		<button class="btn btn-primary btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#upload-prof" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="upload-prof">Upload New</button>
		<button class="btn btn-secondary btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#delete-prof" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delete-prof">Delete Profile</button>
		</div>
		</div>
		</div><!--end row-->
		<!--Form-->
		<div class="pt-3">
		<form class="row g-3 needs-validation" novalidate>
		<div class="col-12 col-lg-3">
			<label for="firstname" class="form-label">First name</label>
			<input type="text" class="form-control" id="firstname" required>
			<div class="valid-feedback">
			Looks good!
			</div>
			<div class="invalid-feedback">
				Please enter your valid First name.
			</div>
		</div>
		<div class="col-12 col-lg-3">
			<label for="middlename" class="form-label">Middle Name</label>
			<input type="text" class="form-control" id="middlename" required>
			<div class="valid-feedback">
			Looks good!
			</div>
			<div class="invalid-feedback">
				Please enter your valid Middle name.
			</div>
		</div>
		<div class="col-12 col-lg-3">
			<label for="lastname" class="form-label">Last name</label>
			<input type="text" class="form-control" id="lastname" required>
			<div class="valid-feedback">
			Looks good!
			</div>
			<div class="invalid-feedback">
				Please enter your valid Last name.
			</div>
		</div>
		<div class="col-12 col-lg-3">
			<label for="suffix" class="form-label">Suffix</label>
			<input type="text" class="form-control" id="suffix" required>
			<div class="valid-feedback">
			Looks good!
			</div>
			<div class="invalid-feedback">
				Please enter your valid Suffix.
			</div>
		</div>
		<div class="col-12 col-lg-3">
			<label for="username" class="form-label">Username</label>
			<div class="input-group has-validation">
			<span class="input-group-text" id="user-name">@</span>
			<input type="text" class="form-control" id="username" aria-describedby="user-name" required>
			<div class="invalid-feedback">
				Please choose a username.
			</div>
			<div class="valid-feedback">
			Much better!
			</div>
			</div>
		</div>
		<div class="col-12 col-lg-3">
			<label for="birthdate" class="form-label">Birthdate</label>
			<div class="input-group has-validation">
			<input type="date" class="form-control" id="birthdate" aria-describedby="user-name" required>
			<div class="invalid-feedback">
			Please enter your valid Birthdate.
			</div>
			<div class="valid-feedback">
			Nice One!
			</div>
			</div>
		</div>
		<div class="col-12 col-lg-3">
			<label for="city" class="form-label">City</label>
			<input type="text" class="form-control" id="city" required>
			<div class="invalid-feedback">
			Please provide a valid city.
			</div>
			<div class="valid-feedback">
			Nice!
			</div>
		</div>
		<div class="col-12 col-lg-3">
			<label for="barangay" class="form-label">Barangay</label>
			<input type="text" class="form-control" id="barangay" required>
			<div class="invalid-feedback">
			Please provide a valid barangay.
			</div>
			<div class="valid-feedback">
			Nice!
			</div>
		</div>
		<div class="col-12 col-lg-3">
			<label for="validationCustom05" class="form-label">Zip</label>
			<input type="text" class="form-control" id="validationCustom05" required>
			<div class="invalid-feedback">
			Please provide a valid zip.
			</div>
			<div class="valid-feedback">
			Nice!
			</div>
		</div>
		<div class="col-12 col-lg-3">
			<label for="email" class="form-label">Email</label>
			<input type="email" class="form-control" id="email" required>
			<div class="invalid-feedback">
			Please provide a valid Email.
			</div>
			<div class="valid-feedback">
			Nice!
			</div>
		</div>
		<div class="col-12 col-lg-3">
			<label for="number" class="form-label">Phone Number</label>
			<input type="number" class="form-control" id="number" required>
			<div class="invalid-feedback">
			Please provide a valid Phone number.
			</div>
			<div class="valid-feedback">
			Nice!
			</div>
		</div>
		<div class="col-12">
			<button class="btn btn-primary" type="submit" data-bs-toggle="modal" data-bs-target="#save-change">Save Changes</button>
		</div>
		</form>
		</div>
	</div><!--card body-->
	</div><!--last card-->
	</div><!--padding top-->
</div><!--Don't touch-->

<!-- Modal -->
<div class="modal fade" id="save-change" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="save-changeLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="save-changeLabel">Save Changes Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to save changes?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal delete profile -->
<div class="modal fade" id="delete-prof" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delete-profLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="delete-profLabel">Confirmation to Delete the Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure to delete this profile?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal upload profile -->
<div class="modal fade" id="upload-prof" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="upload-profLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="upload-profLabel">Uploading Profile</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
		<input class="form-control" type="file" id="profile">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Done</button>
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