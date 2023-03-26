<?php

    $page_title = 'Admin - Request Monitor';
    require_once '../includes/admin-header.php';
    session_start();
  
    if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
    header('location: ../account/signin.php');
    }
  
    require_once '../includes/admin-sidebar.php';
  
?>

<div class="content">

<div class="container align-items-center pt-3">
<button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/patient-list.php"><i class="fa-solid fa-arrow-left"></i> Back </a></button>

    <div class="col-12 col-lg-5 pt-4">
        <h2><strong>Request Monitor</strong></h2>
    </div>

    <div class="table-responsive pt-4"> <!--Start of Table-->
    <table class="table table-striped table-hover table-bordered">
  <thead class="table-info">
    <tr>
      <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Name</th>
      <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Patient Name</th>
      <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">ID/Proof</th>
      <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Actions</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th scope="row" class="text-center">Carl Bonifacio Jr</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center"> 
            <label for="formFile" class="form-label">
            <input class="form-control" type="file" id="formFile" style="border: #00ACB2;"></td>
        <td>
        <div class="d-flex gap-2 justify-content-center">
        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#alertModal">Approve</button> <!--Should put here the modal-->
        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#rejectModal">Reject</button> <!--Should put here the modal-->
        </div>
        </td>
    </tr>
    <tr>
        <th scope="row" class="text-center">Carl Bonifacio Jr</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center"><label for="formFile" class="form-label">
            <input class="form-control" type="file" id="formFile" style="border: #00ACB2;"></td>
        <td>
        <div class="d-flex gap-2 justify-content-center">
        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#alertModal">Approve</button> <!--Should put here the modal-->
        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#rejectModal">Reject</button> <!--Should put here the modal-->
        </div>
        </td>
    </tr>
    <tr>
        <th scope="row" class="text-center">Carl Bonifacio Jr</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center"><label for="formFile" class="form-label">
            <input class="form-control" type="file" id="formFile" style="border: #00ACB2;"></td></td>
        <td>
        <div class="d-flex gap-2 justify-content-center">
        <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#alertModal">Approve</button> <!--Should put here the modal-->
        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#rejectModal">Reject</button> <!--Should put here the modal-->
        </div>
        </td>
    </tr>
    </tbody>
    </table>
    </div><!--End of table-->
</div><!--End of container-->

<!-- Reject Modal -->
<div class="modal fade" id="rejectModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="del-modal-header">
      <div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>	
        <h5 class="del-modal-title" id="exampleModalLabel">Are you sure?</h5>
      </div>
      <div class="del-modal-body">
				<p>Do you really want to reject this request? This process cannot be undone.</p>
			</div>
      <div class="del-modal-footer">
        <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="del-btn">Delete</button></a>
      </div>
    </div>
  </div>
</div>

<!-- Success Modal -->
<div class="modal fade" id="alertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
      <div class="alert alert-success shadow" role="alert" style="border-left:#155724 5px solid; border-radius: 0px">
		<div class="row">
        <img src="../images/checked.gif" style="background: transparent; width: 30%; margin-left: 10rem;">
		  	<p style="font-size:18px;" class="mb-0 font-weight-light text-center"><b class="mr-1">Success!</b> The request was successfully approved.</p>
		</div>
    </div>
  </div>
</div>






</div>