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

      $user_info->password = $user_data['password'];



      if(isset($_POST['submit'])){

        $current_password = htmlentities($_POST['current-password']);
        $new_password = htmlentities($_POST['password']);
        $confirm_password = htmlentities($_POST['cpassword']);
        
        if(validate_password($_POST) && validate_current_password($_POST) && validate_confirm_password($_POST)){

          if($current_password == $user_info->password){

            if($new_password == $confirm_password){

              $user = new Users;

              $user->password = $new_password;

              if($user->update_user_password($_SESSION['logged_id'])){
                $success = "You successfully changed your password";
              }

            }else{
              $pass_error = "New Password and Confirmation Doesn't Match!";
            }

          } else{
            $not_same = "Current Password Doesn't Match!";
          }

        }
        
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
    <a class="nav-link" aria-current="page" href="account-settings.php" style="color: black;">Profile Settings</a>
    </li>
    <li class="nav-item">
    <a class="nav-link active" aria-current="page" href="password.php">Password</a>
	</li>
    </ul>
	</div><!--3 buttons-->
<form action="password.php" method="POST">
<div class="pt-3">
	<div class="card shadow border-0">
  	<div class="card-body">
        <h4 class="pb-3">Change Password</h4>
        <div class="col-12 col-lg-12 pb-3">
        <label for="current-password" class="form-label">Current Password</label>
        <input type="password" class="form-control" id="current-password" name="current-password" required>
        <?php
        	if(isset($_POST['submit']) && !validate_current_password($_POST)){
        ?>
          <p class="text-danger mt-2 mb-2">All Input Fields are Required!</p>
        <?php
          }
        ?>
        </div>
        <div class="col-12 col-lg-12 pb-3">
        <label for="password" class="form-label">New Password</label>
        <input type="password" class="form-control" id="password" name="password" required>
        <div id="passwordHelpBlock" class="form-text">
        Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
        </div>
        <?php
        	if(isset($_POST['submit']) && !validate_password($_POST)){
        ?>
          <p class="text-danger mt-2 mb-2">Invalid Password.</p>
        <?php
          }
        ?>
        </div>
        <div class="col-12 col-lg-12 pb-3">
        <label for="cpassword" class="form-label">Confirm Password</label>
        <input type="password" class="form-control" id="cpassword" name="cpassword" required>
        <?php
        	if(isset($_POST['submit']) && !validate_confirm_password($_POST)){
        ?>
          <p class="text-danger mt-2 mb-2">All Input Fields are Required!</p>
        <?php
          }
        ?>
      </div>
      <?php
				//Display the error message if there is any.
				if(isset($error)){
				  echo '<div><p class="text-danger mt-2 mb-2">'.$error.'</p></div>';
				}
        if(isset($not_same)){
          echo '<div><p class="text-danger mt-2 mb-2">'.$not_same.'</p></div>';
        }
        if(isset($pass_error)){
          echo '<div><p class="text-danger mt-2 mb-2">'.$pass_error.'</p></div>';
        }
				if(isset($success)){
					echo '<div><p class="text-success mt-2 mb-2">'.$success.'</p></div>';
				}
			?>
        <div class="jd-grid gap-2 d-md-flex justify-content-md-end pb-2">
        <button type="button" class="btn btn-primary" role="button" data-bs-toggle="modal" data-bs-target="#confirm-pass">Save</button>
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
        <button type="submit" class="btn btn-primary" name="submit">Yes</button>
      </div>
    </div>
  </div>
</div>
</form>