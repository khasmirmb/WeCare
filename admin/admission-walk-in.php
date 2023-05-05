<?php

  $page_title = 'WeCare Admin - Admission';
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
        <a class="nav-link" aria-current="true" href="../admin/admission.php">Admission Pending</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/admission-accepted.php">Admission Accepted</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/admission-canceled.php">Admission Canceled</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active"  href="../admin/admission-walk-in.php">Walk-in</a>
      </li>
    </ul>
  </div><!--End of Card-->
  
  <div class="col-7 col-lg-2 pt-4"> <!--Start of name of admission-->
    <h4 class="mb-4">Admission</h4>
  </div><!--End of name of admission-->

  

  <!--Table-->
  <div class="col-12 col-lg-12"> <!--Start of 1st table-->
    <div class="container table-responsive table-rounded">
  <table class="table table-hover table-sm">
    <thead>
      <tr class="table-primary">
        <th scope="col" style="background: #00ACB2; color: #fff;">PATIENT</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">CREATED DATE</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ADMISSION NO.</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ASSIGNED TO</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">STATUS</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ACTION</th>
      </tr>
    </thead>
    <tbody>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
  </div>
      <!-- Button trigger modal -->



 
  


</div><!--End of card-->
<button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#admission-walk-in">
  Add Walk-in
</button>
</div><!--End of container-->
</div><!--End of content-->



<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="admission-walk-in" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="admission-walk-inLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="admission-walk-inLabel">Add Walk-in</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form>
          <div class="mb-3">
            <label for="firstname" class="col-form-label">Firstname:</label>
            <input type="text" class="form-control" id="firstname">
          </div>
          <div class="mb-3">
          <label for="middlename" class="col-form-label">Middlename:</label>
            <input type="text" class="form-control" id="middlename">
          </div>
          <div class="mb-3">
          <label for="lastname" class="col-form-label">Lastname:</label>
            <input type="text" class="form-control" id="lastname">
          </div>
          <div class="mb-3">
          <label for="date" class="col-form-label">Date Visit:</label>
            <input type="date" class="form-control" id="date">
          </div>
          <div class="mb-3">
          <label for="nurse" class="col-form-label">Assign To:</label>
            <select class="form-select" aria-label="Default select example">
            <option selected>Open this select menu</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
            </select>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Add</button>
      </div>
    </div>
  </div>
</div>
<?php

require_once '../includes/admin-footer.php';

?>