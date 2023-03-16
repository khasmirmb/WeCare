<?php

    $page_title = 'Admin - Edit Account';
    session_start();
    require_once '../classes/account.class.php';
    require_once '../includes/admin-sidebar.php';
?>


<div class="content">

<div class="container align-items-center pt-3">
<button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/staff-accounts.php"><i class="fa-solid fa-arrow-left"></i> Back </a></button>

<div class="staff-account" style="padding-top: 1rem;">
		<div class="container">
			<h1 class="pb-3">User Account Profile</h1>
			<div class="bg-white shadow rounded-lg d-block d-sm-flex">
				<div class="profile-tab-nav border-right">
					<div class="p-4">
						<div class="img-circle text-center mb-3">
							<img src="../images/homed.jpg" alt="Image" class="shadows">
						</div>
						<h4 class="text-center">Kurt Ira Pobre</h4>
					</div>
					<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
						<a class="nav-link active" id="account-tab" data-toggle="pill" href="#account" role="tab" aria-controls="account" aria-selected="true">
							<i class="fa fa-home text-center mr-1"></i> 
							Account
						</a>
						<a class="nav-link" id="password-tab" data-toggle="pill" href="#password" role="tab" aria-controls="password" aria-selected="false">
							<i class="fa fa-key text-center mr-1"></i> 
							Password
						</a>
						<a class="nav-link" id="security-tab" data-toggle="pill" href="#security" role="tab" aria-controls="security" aria-selected="false">
							<i class="fa fa-user text-center mr-1"></i> 
							Security
						</a>
					</div>
				</div>
				<div class="tab-content p-4 p-md-5" id="v-pills-tabContent">
					<div class="tab-pane fade show active" id="account" role="tabpanel" aria-labelledby="account-tab">
						<h3 class="mb-4">Account Settings</h3>
						<div class="row">
                        <div class="col-md-6">
								<div class="form-group">
								  	<label>First Name</label>
								  	<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Last Name</label>
								  	<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Email</label>
								  	<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Phone number</label>
								  	<input type="text" class="form-control" value="">
								</div>
							</div>
							<div class="col-sm">
							<label for="dateofbirth">Date of Birth</label><br>
							<input class="form-control" type="date" value="dateofbirth"><br>
							</div>
							<div class="col-sm">
							<label for="gender">Gender:</label><br>
							<select name="gender" id="gender" class="form-control">
								<option value="male">Male</option>
								<option value="Female">Female</option>
								</select>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>City</label>
								  	<input type="city" class="form-control" value="">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Address</label>
								  	<input type="address" class="form-control" value="">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;">Update</button>
							<button class="btn btn-light" style="background: #dc3545; border: #dc3545; color: #fff;">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
						<h3 class="mb-4">Password Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Old password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>New password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Confirm new password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;">Update</button>
							<button class="btn btn-light" style="background: #dc3545; border: #dc3545; color: #fff;">Cancel</button>
						</div>
					</div>
					<div class="tab-pane fade" id="security" role="tabpanel" aria-labelledby="security-tab">
						<h3 class="mb-4">Security Settings</h3>
						<div class="row">
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Username</label>
								  	<input type="username" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
								  	<label>Password</label>
								  	<input type="password" class="form-control">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<div class="form-check">
										<input class="form-check-input" type="checkbox" value="" id="recovery">
										<label class="form-check-label" for="recovery">
										Recovery
										</label>
									</div>
								</div>
							</div>
						</div>
						<div>
							<button class="btn btn-primary" style="background: #dc3545; border: #dc3545;" data-bs-toggle="modal" data-bs-target="#deleteAccModal">Delete Account</button>
							<button class="btn btn-light" style="border: 1px solid #00ACB2; color: #00ACB2; background: #fff;" >Ban Account</button>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>


<!-- Delete Modal -->
<div class="modal fade" id="deleteAccModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="del-modal-header">
      <div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>	
        <h5 class="del-modal-title" id="exampleModalLabel">Are you sure?</h5>
      </div>
      <div class="del-modal-body">
				<p>Do you really want to delete this account? This process cannot be undone.</p>
			</div>
      <div class="del-modal-footer">
        <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="del-btn">Delete</button></a>
      </div>
    </div>
  </div>
</div>





</div>