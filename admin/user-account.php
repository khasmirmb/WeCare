<?php

    $page_title = 'Admin - User Account';
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
        <a class="nav-link active" aria-current="true" href="user-account.php">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="staff-account.php">Staff</a>
      </li>
    </ul>
  </div>
  <div class="card-body">
  <div class="container">
  <div class="row">
    <div class="col-md-6">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search for...">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button">Search</button>
        </div>
      </div>
    </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
        <button class="btn btn-primary" type="button">Add User</button>
        </div>
        <div class="col-lg-2 col-md-3 col-sm-4">
        <div class="form-group justify-content-center">
            <label for="filter">Filter</label><br>
            <select name="filter" id="filter">
                <option value="ascending">Ascending</option>
                <option value="descending">Descending</option>
                <option value="alphabetical">Alphabetical</option>
                <option value="date">Date</option>
            </select>
            </div>
            </div>
  </div>
</div>
    
  </div>
</div>
</div>