<?php

    $page_title = 'Admin - Patient Records';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">

    <div class="">
        <h3 class="pb-3">Patient Records</h3>
    </div>

    <div class="row"><!--Start of row-->
    <div class="col-12 col-lg-8"><!--Start of search bar-->
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search for...">
                <div class="input-group-append">
                <button class="btn btn-primary" type="button">Search</button>
                </div>
            </div>
        </div>
    </div>
    </div><!--End of search bar-->

    <div class="col-2 col-lg-2"><!--Start of filter-->
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          Filter
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
        <li><a class="dropdown-item" href="#">A-Z</a></li>
          <li><a class="dropdown-item" href="#">Ascending</a></li>
          <li><a class="dropdown-item" href="#">Descending</a></li>
        </ul>
      </div>
      </div><!--End of filter-->
    </div><!--End of row-->
   

    <div class="list-group pt-3"><!--Start of Patient List-->
    <a href="patient-backup.php" class="list-group-item list-group-item-action">Darla Johhanson</a>
    <a href="patient-backup.php" class="list-group-item list-group-item-action">Darla Johhanson</a>
    <a href="patient-backup.php" class="list-group-item list-group-item-action">Darla Johhanson</a>
    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
    <a href="#" class="list-group-item list-group-item-action">A second link item</a>
    <a href="#" class="list-group-item list-group-item-action">A third link item</a>
    </div><!--End of Patient List-->
    

</div>