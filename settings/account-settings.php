<?php

    $page_title = 'WeCare - Account Settings';
    require_once '../includes/header.php';
	require_once '../classes/users.class.php';
	require_once '../tools/functions.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

	$user_info = new Users;


	if($user_info->fetch_user_information($_SESSION['logged_id'])){

		$user_data = $user_info->fetch_user_information($_SESSION['logged_id']);

		$user_info->firstname = $user_data['fname'];
		$user_info->middlename = $user_data['mname'];
		$user_info->lastname = $user_data['lname'];
		$user_info->email = $user_data['email'];
		$user_info->phone = $user_data['phone'];
		$user_info->birthdate = $user_data['birthdate'];
		$user_info->address = $user_data['address'];

	}

	if(isset($_POST['submit'])){

		$user = new Users;

		if(validate_change_details($_POST)){

			$user->firstname = htmlentities($_POST['firstname']);
			$user->middlename = htmlentities($_POST['middlename']);
			$user->lastname = htmlentities($_POST['lastname']);
			$user->phone = htmlentities($_POST['phone']);
			$user->birthdate = htmlentities($_POST['birthdate']);
			$user->address = htmlentities($_POST['address']);

			if($user->update_user_info($_SESSION['logged_id'])){
				header('location: ../settings/account-settings.php');
			}

		} else {
			$error = "There was something wrong please try again.";
		}


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
	</ul>
	</div><!--3 buttons-->

	<div class="pt-3 pb-3">
	<div class="card shadow border-0">
  	<div class="card-body">
		<div class="row">
		<div class="col-12 col-lg-12 pt-3 pb-3 ps-5 justify-content-center d-flex">
		<img src="../images/<?php echo $_SESSION['profile_pic'] ?>" class="rounded-circle img-fluid" style="width: 200px; height: 200spx;" alt="Profile" id="current_profile">
		</div>
		</div><!--end row-->
		<!--Form-->
		<form class="needs-validation" action="account-settings.php" novalidate runat="server" method="POST">
		<div class="pt-3">
		<div class="row g-3">
		<div class="col-12 col-lg-3">
			<label for="firstname" class="form-label">First Name</label>
			<input type="text" class="form-control" id="firstname" name="firstname" required value="<?php echo $user_info->firstname ?>">
			<div class="valid-feedback">
			Looks good!
			</div>
			<div class="invalid-feedback">
				Please enter your valid First name.
			</div>
			<?php
            	if(isset($_POST['submit']) && !validate_first_name($_POST)){
             ?>
                <p class="text-danger mt-2 mb-2">Invalid Firstname Input.</p>
            <?php
            	}
            ?>
		</div>
		<div class="col-12 col-lg-3">
			<label for="middlename" class="form-label">Middle Name</label>
			<input type="text" class="form-control" id="middlename" name="middlename" required value="<?php echo $user_info->middlename ?>">
			<div class="valid-feedback">
			Looks good!
			</div>
			<div class="invalid-feedback">
				Please enter your valid Middle name.
			</div>
			<?php
            	if(isset($_POST['submit']) && !validate_middlename_name($_POST)){
             ?>
                <p class="text-danger mt-2 mb-2">Invalid Middlename Input.</p>
            <?php
            	}
            ?>
		</div>
		<div class="col-12 col-lg-3">
			<label for="lastname" class="form-label">Last Name</label>
			<input type="text" class="form-control" id="lastname" name="lastname" required value="<?php echo $user_info->lastname ?>">
			<div class="valid-feedback">
			Looks good!
			</div>
			<div class="invalid-feedback">
				Please enter your valid Last name.
			</div>
			<?php
            	if(isset($_POST['submit']) && !validate_last_name($_POST)){
             ?>
                <p class="text-danger mt-2 mb-2">Invalid Lastname Input.</p>
            <?php
            	}
            ?>
		</div>
		<div class="col-12 col-lg-3">
			<label for="birthdate" class="form-label">Birthdate</label>
			<div class="input-group has-validation">
			<input type="date" class="form-control" id="birthdate" name="birthdate" required value="<?php echo $user_info->birthdate ?>">
			<div class="invalid-feedback">
			Please enter your valid Birthdate.
			</div>
			<div class="valid-feedback">
			Nice One!
			</div>
			</div>
		</div>
		<div class="col-12 col-lg-4">
			<label for="address" class="form-label">Address</label>
			<input type="text" class="form-control" id="address" name="address" required value="<?php echo $user_info->address ?>">
			<div class="invalid-feedback">
			Please provide a valid address.
			</div>
			<div class="valid-feedback">
			Nice!
			</div>
			<?php
            	if(isset($_POST['submit']) && !validate_address($_POST)){
             ?>
                <p class="text-danger mt-2 mb-2">Invalid Address Input.</p>
            <?php
            	}
            ?>
		</div>
		<div class="col-12 col-lg-3">
			<label for="phone" class="form-label">Phone Number</label>
			<input type="number" class="form-control" id="phone" name="phone" value="<?php echo $user_info->phone ?>" required pattern="[0-9]{11}" oninvalid="this.setCustomValidity('Enter 11 Digits Number')" oninput="this.setCustomValidity('')">
			<div class="invalid-feedback">
			Please provide a valid Phone number.
			</div>
			<div class="valid-feedback">
			Nice!
			</div>
			<?php
            	if(isset($_POST['submit']) && !validate_phone($_POST)){
             ?>
                <p class="text-danger mt-2 mb-2">Invalid Phone Input.</p>
            <?php
            	}
            ?>
			<?php
				//Display the error message if there is any.
				if(isset($error)){
				echo '<div><p class="text-danger mt-2 mb-2">'.$error.'</p></div>';
				}
				if(isset($success)){
					echo '<div><p class="text-success mt-2 mb-2">'.$success.'</p></div>';
					}
			?>
		</div>
		<div class="col-12 justify-content-end d-flex">
			<button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#save-change">Save Changes</button>
		</div>
		</div>
		</div>

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
        <button type="submit" class="btn btn-primary" name="submit">Yes</button>
      </div>
    </div>
  </div>
</div>
		</form>
	</div><!--card body-->
	</div><!--last card-->
	</div><!--padding top-->
</div><!--Don't touch-->

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