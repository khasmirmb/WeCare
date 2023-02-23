<?php

    $page_title = 'Admin - Staff Account';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">
<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link" href="user-account.php">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active"  aria-current="true" href="staff-account.php">Staff</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
  <div class="container">
  <div class="row">
    <div class="col-12 col-lg-6">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search for...">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">Search</button>
        </div>
      </div>
    </div>
    
      <div class="col-12 col-lg-1 col-md-3 col-sm-4">
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Filter
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Ascending</a></li>
          <li><a class="dropdown-item" href="#">Descending</a></li>
        </ul>
      </div>
      </div>
       
</div>
  </div>
</div>
    
  </div>
</div>
</div>