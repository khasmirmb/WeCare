<?php

  $page_title = 'WeCare Admin - Unpaid';
  require_once '../includes/admin-header.php';
  require_once '../classes/relative.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  $relative = new Relative;

  $request_total = $relative->count_relative_requests();

  require_once '../includes/admin-sidebar.php';

?>
<div class="content">

<div class="container align-items-center pt-3">
    <button class="btn btn-info" type="button" style="background: #00ACB2; border: #00ACB2; color: #fff;"><a class="text-white text-decoration-none" href="patient-list.php" ><i class="fa-solid fa-arrow-left"></i>Patient List </a></button>

    <div class="col-12 col-lg-5 pt-4">
        <h2><strong>Reports</strong></h2>
    </div>

    <div class="pt-3">
            <ul class="nav nav-pills">
        <li class="nav-item">
            <a class="nav-link " href="reports.php">Paid</a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page">Unpaid</a>
        </li>
        </ul>
    </div>
    
    <div class="pt-3">
    <table class="table table-hover">
  <thead>
    <tr>
    <th scope="col"  style="background: #00ACB2; color: #fff;" class="text-center">Name</th>
    <th scope="col"  style="background: #00ACB2; color: #fff;" class="text-center">Due Start Date</th>
      <th scope="col"  style="background: #00ACB2; color: #fff;" class="text-center">Due End Date</th>
      <th scope="col" style="background: #00ACB2; color: #fff;"  class="text-center">Total Amount</th>
      <th scope="col" style="background: #00ACB2; color: #fff;"  class="text-center">Status</th>
      <th scope="col" style="background: #00ACB2; color: #fff;"  class="text-center">Action</th>
    </tr>
  </thead>
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
    
    <button type="button" class="btn btn-primary">Download Unpaid Accounts</button>
</div>
</div>