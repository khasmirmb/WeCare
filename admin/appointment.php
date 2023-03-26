<?php

    $page_title = 'Admin - Appointment';
    require_once '../includes/admin-header.php';
    session_start();
  
    if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
    header('location: ../account/signin.php');
    }
  
    require_once '../includes/admin-sidebar.php';
  
?>
<div class="content">

<div class="container align-items-center pt-3">
<div class="card text-center">

  <div class="card-header"><!--Start of Card-->
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link"  href="../admin/admission.php">Admission</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="../admin/appointment.php">Appointment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../admin/visitor-log.php">Visitor</a>
      </li>
    </ul>
  </div><!--End of Card-->
  
  <div class="col-7 col-lg-2 pt-4"> <!--Start of name of appointment-->
    <h4 class="mb-4">Appointment</h4>
  </div><!--End of name of appointment-->

  <div class="col-4 col-lg-2"><!--Start of date-->
    <h6>Tomorrow</h6>
  </div><!--End of date-->

  <div class="col-12 col-lg-12"> <!--Start of 1st table-->
    <div class="container table-responsive table-rounded">
  <table class="table table-hover table-sm">
    <thead>
      <tr class="table-primary">
        <th scope="col" style="background: #00ACB2; color: #fff;">TIME</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">USER</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ASSIGNED TO</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">STATUS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row" class="pt-4">10:30 AM</th>
        <td class="pt-4"><a href="../admin/appointment-detail.php" class="text-decoration-none text-dark text-left">Clinton Squidward</a></td>
        <td class="pt-4">
          <div class="input-group" >
          <select name="assigned" id="assigned" class="form-control">
          <option value="adhyne">Adhyne Greanne Pogoy</option>
          <option value="jorylle">Jorylle Reyes</option>
          </select>
          </div>
      </td>
        <td>
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#declineModal">Decline</button>
        <button type="button" class="btn btn-primary" style="background: #00ACB2; color: #fff; border: #00ACB2;">Confirm</button>
        </div>
      </td>
      </tr>
      <tr>
        <th scope="row" class="pt-4">10:30 AM</th>
        <td class="pt-4"><a href="../admin/appointment-detail.php" class="text-decoration-none text-dark text-left">Clinton Squidward</a></td>
        <td class="pt-4">
          <div class="input-group" >
          <select name="assigned" id="assigned" class="form-control">
          <option value="adhyne">Adhyne Greanne Pogoy</option>
          <option value="jorylle">Jorylle Reyes</option>
          </select>
          </div>
      </td>
        <td>
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#declineModal">Decline</button>
        <button type="button" class="btn btn-primary" style="background: #00ACB2; color: #fff; border: #00ACB2;">Confirm</button>
        </div>
      </td>
      </tr>
    </tbody>
  </table>
</div>
</div><!--End of 1st Table-->

  <div class="col-6 col-lg-2 pt-3"> <!--Start of Date-->
      <h6>March 25, 2023</h6>
    </div><!--End of Date-->

<div class="col-12 col-lg-12"><!--Start of 2nd Table-->
    <div class="container table-responsive table-rounded">
  <table class="table table-hover table-sm">
    <thead>
      <tr class="table-primary">
        <th scope="col" style="background: #00ACB2; color: #fff;">TIME</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">USER</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ASSIGNED TO</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">STATUS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row" class="pt-4">10:30 AM</th>
        <td class="pt-4"><a href="../admin/appointment-detail.php" class="text-decoration-none text-dark text-left">Clinton Squidward</a></td>
        <td class="pt-4">
          <div class="input-group">
          <select name="assigned" id="assigned" class="form-control">
          <option value="adhyne">Adhyne Greanne Pogoy</option>
          <option value="jorylle">Jorylle Reyes</option>
          </select>
          </div>
      </td>
        <td>
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#declineModal">Decline</button>
        <button type="button" class="btn btn-primary" style="background: #00ACB2; color: #fff; border: #00ACB2;">Confirm</button>
        </div>
      </td>
      </tr>
      <tr>
        <th scope="row" class="pt-4">10:30 AM</th>
        <td class="pt-4"><a href="../admin/appointment-detail.php" class="text-decoration-none text-dark text-left">Clinton Squidward</a></td>
        <td class="pt-4">
          <div class="input-group" >
          <select name="assigned" id="assigned" class="form-control">
          <option value="adhyne">Adhyne Greanne Pogoy</option>
          <option value="jorylle">Jorylle Reyes</option>
          </select>
          </div>
      </td>
        <td>
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#declineModal">Decline</button>
        <button type="button" class="btn btn-primary" style="background: #00ACB2; color: #fff; border: #00ACB2;">Confirm</button>
        </div>
      </td>
      </tr>
      <tr>
        <th scope="row" class="pt-4">10:30 AM</th>
        <td class="pt-4"><a href="../admin/appointment-detail.php" class="text-decoration-none text-dark text-left">Clinton Squidward</a></td>
        <td class="pt-4">
          <div class="input-group" >
          <select name="assigned" id="assigned" class="form-control">
          <option value="adhyne">Adhyne Greanne Pogoy</option>
          <option value="jorylle">Jorylle Reyes</option>
          </select>
          </div>
      </td>
        <td>
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#declineModal">Decline</button>
        <button type="button" class="btn btn-primary" style="background: #00ACB2; color: #fff; border: #00ACB2;">Confirm</button>
        </div>
      </td>
      </tr>
    </tbody>
  </table>
</div>
</div><!--End of 2nd Table-->
  

</div><!--End of Card-->
</div><!--End of Container-->


<!-- Decline Modal -->
<div class="modal fade" id="declineModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="del-modal-header">
      <div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>	
        <h5 class="del-modal-title" id="exampleModalLabel">Are you sure?</h5>
      </div>
      <div class="del-modal-body">
				<p>Do you really want to decline this appointment? This process cannot be undone.</p>
			</div>
      <div class="del-modal-footer">
        <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="del-btn">Delete</button></a>
      </div>
    </div>
  </div>
</div>




</div>