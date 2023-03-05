<?php

    $page_title = 'Admin - Patient List';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">

<div class="row">
    <div class="col-7 col-lg-4"> <!--Name-->
    <h3>Patient List</h3>
    </div><!--End of Name-->
    <div class="col-4 col-lg-1 pb-3"><!--Request button-->
        <a class="btn btn-primary" href="#" role="button">Request</a>
    </div>
    <div class="col-4 col-lg-1"><!--Button Filter-->
        <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Ascending</a></li>
            <li><a class="dropdown-item" href="#">Descending</a></li>
            </ul>
        </div>
        </div><!--End of Button Filter-->
    <div class="col-6 col-lg-2 pb-3"><!--Add Patient button-->
        <a class="btn btn-primary" href="#" role="button">Add Patient</a>
    </div><!--End of Add Patient button-->
    <div class="col-12 col-lg-4"><!--Start of Search bar-->
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-primary" type="submit">Search</button>
        </form>
    </div><!--End of search bar-->
</div><!--End of row-->
</div><!--End of container-->

