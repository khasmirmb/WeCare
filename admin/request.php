<?php

  $page_title = 'WeCare Admin - Request';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

?>
<div class="content">
<div class="container align-items-center pt-3">
    <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2; color: #fff;"><a class="text-white text-decoration-none" href="patient-list.php"> < Patient List </a></button>

    <h1 class="pt-3"><strong>Family Monitoring Request</strong></h1>

    <div class="table-responsive pt-3"> <!--Start of Table-->
    <table class="table table-striped table-hover table-bordered">
  <thead class="table-info">
    <tr>
      <th scope="col" style="background: #00ACB2; border: #00ACB2; color: #fff;">Name</th>
      <th scope="col" style="background: #00ACB2; border: #00ACB2; color: #fff;">Patient Name</th>
      <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">ID/Proof</th>
      <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>Al-khasmir Basaluddin</td>
        <td>Datu Batumbakal</td>
        <td class="text-center"><a class="btn btn-secondary" href="#" role="button" style="background: #00ACB2; border: #00ACB2; color: #fff;">Download</a></td>
        <td>
        <div class="d-flex gap-2 justify-content-center">
        <button class="btn btn-outline-danger" type="button">Reject</button> <!--Should put here the modal-->
        <button class="btn btn-success" type="button">Approve</button><!--Should put here the modal-->
        </div>
        </td>
    </tr>
    <tr>
        <td>Al-khasmir Basaluddin</td>
        <td>Datu Batumbakal</td>
        <td class="text-center"><a class="btn btn-secondary" href="#" role="button" style="background: #00ACB2; border: #00ACB2; color: #fff;">Download</a></td>
        <td>
        <div class="d-flex gap-2 justify-content-center">
        <button class="btn btn-outline-danger" type="button">Reject</button> <!--Should put here the modal-->
        <button class="btn btn-success" type="button">Approve</button><!--Should put here the modal-->
        </div>
        </td>
    </tr>
    <tr>
        <td>Al-khasmir Basaluddin</td>
        <td>Datu Batumbakal</td>
        <td class="text-center"><a class="btn btn-secondary" href="#" role="button" style="background: #00ACB2; border: #00ACB2; color: #fff;">Download</a></td>
        <td>
        <div class="d-flex gap-2 justify-content-center">
        <button class="btn btn-outline-danger" type="button">Reject</button> <!--Should put here the modal-->
        <button class="btn btn-success" type="button">Approve</button><!--Should put here the modal-->
        </div>
        </td>
    </tr>
    </tbody>
    </table>
    </div><!--End of table-->
</div>
</div>

<?php

require_once '../includes/admin-footer.php';

?>