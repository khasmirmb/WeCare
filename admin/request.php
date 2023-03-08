<?php

    $page_title = 'Admin - Request';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">
    <button class="btn btn-primary" type="button"><a class="text-white text-decoration-none" href="patient-list.php"> < Patient List </a></button>

    <h1 class="pt-3"><strong>Family Monitoring Request</strong></h1>

    <div class="table-responsive pt-3"> <!--Start of Table-->
    <table class="table table-striped table-hover table-bordered">
  <thead class="table-info">
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Patient Name</th>
      <th scope="col" class="text-center">ID/Proof</th>
      <th scope="col" class="text-center">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>Al-khasmir Basaluddin</td>
        <td>Datu Batumbakal</td>
        <td class="text-center"><a class="btn btn-primary" href="#" role="button">Download</a></td>
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
        <td class="text-center"><a class="btn btn-primary" href="#" role="button">Download</a></td>
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
        <td class="text-center"><a class="btn btn-primary" href="#" role="button">Download</a></td>
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