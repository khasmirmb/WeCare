<?php

    $page_title = 'Admin - User Account';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">
<div class="card text-center">
  <div class="card-header"><!--Start of Card-->
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link"  href="admission.php">Admission</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="appointment.php">Appointment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="visitor-log.php">Visitor</a>
      </li>
    </ul>
  </div><!--End of Card-->
  <div class="card-body">
  <div class="container">
  <div class="row">
  <div class="col-5 col-lg-2"><!--Start of Users title-->
    <h4>Visitor</h3>
  </div><!--End of Users title-->
    <div class="col-12 col-lg-5"><!--Start of search bar-->
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search for...">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">Search</button>
        </div>
      </div>
    </div><!--End of search bar-->
    <div class="col-7 col-lg-2"><!--Start of add user-->
    <button class="btn btn-primary" type="button"><a class="text-white text-decoration-none" href="add-visitor.php">Add Visitor</a></button>
    </div><!--end of add user-->
      <div class="col-5 col-lg-1"><!--Start of filter-->
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Filter
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Ascending</a></li>
          <li><a class="dropdown-item" href="#">Descending</a></li>
        </ul>
      </div>
      </div><!--End of filter-->
      <div class="pt-3"><!--Start of table-->
    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" class="text-left">Visitor Name</th>
        <th cope="col" class="text-left">Meet Patient Name</th>
        <th scope="col" class="text-left">In Time</th>
        <th scope="col" class="text-left">Out Time</th>
        <th scope="col" class="text-center">Entered By</th>
        <th scope="col" class="text-center">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td><a href="#" class="text-decoration-none text-dark text-left">Adam Smith</a></td>
        <td class="text-left">Datu Batumbakal</td>
        <td class="text-center">2022-12-12 14:24:58</td>
        <td class="text-center">2022-12-12 14:24:58</td>
        <td class="text-center">Eljen Mae Augusto</td>
        <td class="text-center"></td><!--Edit and Delete Icons-->
       </tr>
        <tr>
        <tr>
        <td><a href="#" class="text-decoration-none text-dark text-left">Adam Smith</a></td>
        <td class="text-left">Datu Batumbakal</td>
        <td class="text-center">2022-12-12 14:24:58</td>
        <td class="text-center">2022-12-12 14:24:58</td>
        <td class="text-center">Eljen Mae Augusto</td>
        <td class="text-center"></td><!--Edit and Delete Icons-->
       </tr>
        </tr>
        <tr>
        <td><a href="#" class="text-decoration-none text-dark text-left">Adam Smith</a></td>
        <td class="text-left">Datu Batumbakal</td>
        <td class="text-center">2022-12-12 14:24:58</td>
        <td class="text-center">2022-12-12 14:24:58</td>
        <td class="text-center">Eljen Mae Augusto</td>
        <td class="text-center"></td><!--Edit and Delete Icons-->
       </tr>
    </tbody>
</table>
</div>
</div><!--End of table-->
  <div class="row"><!--Start of counting-->
  <div class="col pt-2">
    <h7>Total Visitor: <strong>100</strong></h7>s
    </div>
    <div class="col pt-2">
    <h7>Active Visitor: <strong>50</strong></h7>
    </div>
    </div>
  </div><!--End of counting-->
</div><!--Row in the container-->
  </div><!--container-->
</div><!--End of Card body-->
  </div><!--End of Card text center-->
</div><!--End of container-->
