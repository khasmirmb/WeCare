<?php

  $page_title = 'WeCare Admin - Add Staff';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

?>

<div class="content">
<div class="container align-items-center pt-3">
    <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/staff-accounts.php"><i class="fa-solid fa-arrow-left"></i> Back </a></button>

    <div class="pt-4">
    <h2 class="mb-4"><strong>Add Staff</strong></h2>
    <div class="container form-control">
    <div class="container-fluid">
   

  <form action="add-staff.php" enctype="multipart/form-data"><!--Starting of the form-->
  <div class="pt-3">

  <div class="row"><!--First row-->
  <div class="col-sm">
  <label for="firstname"><strong>Firstname:</strong></label><br>
  <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Ex.Juan"><br>
  </div>
  
  <div class="col-sm">
  <label for="middlename"><strong>Middlename:</strong></label><br>
  <input class="form-control" type="text" name="middlename" id="middlename" placeholder="Ex. Buenaventura"><br>
  </div>
  <div class="col-sm">
  <label for="surname"><strong>Surname:</strong></label><br>
  <input class="form-control" type="text" name="surname" id="surname" placeholder="Ex. Carlos"><br>
  </div>
  <div class="col-sm">
  <label for="suffix"><strong>Suffix:</strong></label><br>
  <input class="form-control" type="text" name="suffix" id="suffix" placeholder="Ex. Jr"><br>
  </div>
  </div><!--End of First row-->

  <div class="row"><!--Second row-->
    <div class="col-sm">
    <label for="dateofbirth"><strong>Date of Birth</strong></label><br>
    <input class="form-control" type="date" value="dateofbirth"><br>
    </div>
    <div class="col-sm">
    <label for="address"><strong>Address:</strong></label><br>
    <input class="form-control" type="text" name="address" id="address"><br>
    </div>
    <div class="col-sm">
    <label for="phone"><strong>Phone Number:</strong></label><br>
    <input class="form-control" type="tel" name="phone" id="phone" required pattern="[0-9]{11}" oninvalid="this.setCustomValidity('Enter 11 Digits Number')" oninput="this.setCustomValidity('')"><br>
    </div>
    <div class="col-sm">
    <label for="degree"><strong>Degree:</strong></label><br>
    <input class="form-control" type="text" name="degree" id="degree"><br>
    </div>
</div><!--End of Second row-->
    <div class="row"> <!--Third row-->
    <div class="col-sm">
    <label for="image"><strong>Profile Image:</strong></label><br>
    <input class="form-control" type="file" name="image" id="image" required oninvalid="this.setCustomValidity('Select a Profile Image')" oninput="this.setCustomValidity('')" accept="image/*"><br>
    </div>
    <div class="col-sm">
    <label for="position"><strong>Position:</strong></label><br>
    <input class="form-control" type="text" name="position" id="position"><br>
    </div>
    <div class="col-sm">
    <label for="status"><strong>Status:</strong></label><br>
    <select name="status" id="status" class="form-control">
          <option value="Active">Active</option>
          <option value="Inactive">Inactive</option>
        </select>
    </div>
    </div><!--End of Third row-->

    <div class="row"> <!--Fourth row-->
    <div class="col-sm">
    <label for="email"><strong>Email:</strong></label><br>
    <input class="form-control" type="email" name="email" id="email"><br>
    </div>
    <div class="col-sm">
    <label for="password"><strong>Password:</strong></label><br>
    <input class="form-control" type="password" name="password" id="password"><br>
    </div>
    <div class="col-sm">
    <label for="cpass"><strong>Confirm Password:</strong></label><br>
    <input class="form-control" type="password" name="cpass" id="cpass"><br>
    </div>
    </div><!--End of Fourth row-->

    </div><!--Last of the div inside of the form-->
    </form><!--Last of the form-->
    </div><!--Last of the container fluid-->
    </div><!--Last of the container form-control-->
    </div> <!--Last of the div-->
    <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3 pb-3"><!--Starting of buttons-->
  <button class="btn btn-danger me-md-2" type="button" data-bs-toggle="modal" data-bs-target="#clearModal">Clear Data</button> <!--Should have modal-->
  <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;">Add Staff</button> <!--Should have modal-->
</div><!--End of buttons-->
</div><!--End of first container-->

    <!-- Clear Modal -->
    <div class="modal fade" id="clearModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="del-modal-header">
      <div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>	
        <h5 class="del-modal-title" id="exampleModalLabel">Are you sure?</h5>
      </div>
      <div class="del-modal-body">
				<p>Do you really want to clear the data? This process cannot be undone.</p>
			</div>
      <div class="del-modal-footer">
        <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="del-btn">Delete</button></a>
      </div>
    </div>
  </div>
</div>


</div>

<?php

require_once '../includes/admin-footer.php';

?>

