<?php

    $page_title = 'WeCare - Monitoring Request';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
      header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3 p-0">
<button type="button" class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="monitoring.php"><i class="fa-solid fa-arrow-left"></i> Back</a></button>
<h2 class="pb-3 pt-3"><strong>Monitoring Request</strong></h2>
<div class="container form-control p-0">
<div class="p-3 pt-0">
<form class="row needs-validation p-0">
<h4 class="bg-gradient py-3 px-3 p-0 text-white" style="background: #00ACB2; color: #fff;"><strong>Patient Information</strong></h2>

  <div class="row pt-3 pb-3">
  <div class="col-sm">
  <label for="firstname"><strong>Firstname:</strong></label><br>
  <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Ex.Juan"><br>
  </div>
  <div class="col-sm">
  <label for="lastname"><strong>Lastname:</strong></label><br>
  <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Ex.Villanueva"><br>
  </div>
  <div class="col-sm">
  <label for="middlename"><strong>Middlename:</strong></label><br>
  <input class="form-control" type="text" name="middlename" id="middlename" placeholder="Ex.Carlos"><br>
  </div>
  <div class="col-sm">
  <label for="suffix"><strong>Suffix:</strong></label><br>
  <input class="form-control" type="text" name="suffix" id="suffix" placeholder="Ex.Jr"><br>
  </div>
  <div class="row">
  <div class="col-sm">
    <label for="relationship"><strong>Relationship to the patient:</strong></label><br>
    <select name="relationship" id="relationship" class="form-control" style="width: 50%;">
          <option value="mother">Mother</option>
          <option value="father">Father</option>
          <option value="grandmother">Grandmother</option>
          <option value="grandfather">Grandfather</option>
          <option value="mother-in-law">Mother in Law</option>
          <option value="father-in-law">Father in Law</option>
          <option value="aunt">Aunt</option>
          <option value="uncle">Uncle</option>
          <option value="other-relative">Close Relative</option>
          <option value="friend">Friend</option>
          <option value="other" class="mb-3">Other</option>
        </select>
</div>
</div>
</div>
<h4 class="bg-gradient py-3 px-3 text-white" style="background: #00ACB2; color: #fff;"><strong>Upload ID or any Identification that you're related to patient</strong></h4>
<div class="row pt-3">
<div class="mb-3">
  <input class="form-control" type="file" id="formFileMultiple" multiple>
</div>
</div>
</form>
</div>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">
    <button type="button" class="btn btn-outline-primary" style="background: #dc3545; border: #dc3545; font-weight: 400; color: #fff;" data-bs-toggle="modal" data-bs-target="#cancelModal">Cancel</button>

    <button type="button" class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;" data-bs-toggle="modal" data-bs-target="#sucessModal">Submit</button>
    </div>

 <!-- Cancel Modal -->
 <div class="modal fade" id="cancelModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="del-modal-header">
      <div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>	
        <h5 class="del-modal-title" id="exampleModalLabel">Are you sure?</h5>
      </div>
      <div class="del-modal-body">
				<p>Do you really want to cancel? This process cannot be undone.</p>
			</div>
      <div class="del-modal-footer">
        <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="del-btn">Delete</button></a>
      </div>
    </div>
  </div>
</div>

<!-- Succes Modal -->
<div class="modal fade" id="sucessModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="success-modal-header">
      <div class="icons-box">
					<i class="material-icons">&#xE876;</i>
				</div>	
        <h5 class="del-modal-title" id="exampleModalLabel">Success!</h5>
      </div>
      <div class="del-modal-body">
				<p>Your submission was successful</p>
			</div>
      </div>
    </div>
  </div>
</div> 