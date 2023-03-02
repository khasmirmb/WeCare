<?php

    $page_title = 'Admin - Patient records';
    session_start();
    require_once '../classes/account.class.php';
    require_once '../includes/admin-sidebar.php';
?>

<div class="content">

<div class="container align-items-center pt-3">

    <div class="">
        <h3 class="pb-3" style="color: #00ACB2;">Patient Records</h3>
    </div>

    <div class="row"><!--Start of row-->
    <div class="col-12 col-lg-8"><!--Start of search bar-->
    <div class="row">
        <div class="col">
            <div class="input-group mb-3">
                <input type="text" class="form-control" placeholder="Search for...">
                <div class="input-group-append">
                <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;">Search</button>
                </div>
            </div>
        </div>
    </div>
    </div><!--End of search bar-->

    <div class="col-2 col-lg-2"><!--Start of filter-->
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background: #00ACB2; border: #00ACB2;">
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





</div>