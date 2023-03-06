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
    <div class="row">
        <div class="col-12 col-lg-4 pt-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body rounded shadow">
            <div class="d-grid justify-content-md-end pb-2">
            <a class="btn btn-primary" href="payment-list.php" role="button">Payment</a>
            </div>
            <div class="pb-2">
            <img src="../images/download.jpg" class="rounded-circle img-thumbnail img-fluid" alt="Mikaylah B. Chu" style="width: 45%; height: auto; border-color: blue;">
            </div>
            <h5 class="card-title">Datu Batumbakal</h5>
            <h6 class="card-subtitle mb-2 text-muted pb-3">#0001</h6>
            <h6 class="card-subtitle mb-2 text-muted">Age</h6>
            <p class="card-text">69 years old</p>
            <h6 class="card-subtitle mb-2 text-muted">Date of Birth</h6>
            <p class="card-text">Dec 10, 1888</p>
            <h6 class="card-subtitle mb-2 text-muted">Service</h6>
            <p class="card-text">Caregiving</p>
            <div class="d-grid mx-auto">
            <a class="btn btn-primary" href="patient-details.php" role="button">Patient Details</a>
            </div>
        </div>
        </div>
        </div><!--End of col-->
        <div class="col-12 col-lg-4 pt-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body rounded shadow">
            <div class="d-grid justify-content-md-end pb-2">
            <a class="btn btn-primary" href="payment-list.php" role="button">Payment</a>
            </div>
            <div class="pb-2">
            <img src="../images/download.jpg" class="rounded-circle img-thumbnail img-fluid" alt="Mikaylah B. Chu" style="width: 45%; height: auto; border-color: blue;">
            </div>
            <h5 class="card-title">Datu Batumbakal</h5>
            <h6 class="card-subtitle mb-2 text-muted pb-3">#0001</h6>
            <h6 class="card-subtitle mb-2 text-muted">Age</h6>
            <p class="card-text">69 years old</p>
            <h6 class="card-subtitle mb-2 text-muted">Date of Birth</h6>
            <p class="card-text">Dec 10, 1888</p>
            <h6 class="card-subtitle mb-2 text-muted">Service</h6>
            <p class="card-text">Caregiving</p>
            <div class="d-grid mx-auto">
            <a class="btn btn-primary" href="patient-details.php" role="button">Patient Details</a>
            </div>
        </div>
        </div>
        </div><!--End of col-->
        <div class="col-12 col-lg-4 pt-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body rounded shadow">
            <div class="d-grid justify-content-md-end pb-2">
            <a class="btn btn-primary" href="payment-list.php" role="button">Payment</a>
            </div>
            <div class="pb-2">
            <img src="../images/download.jpg" class="rounded-circle img-thumbnail img-fluid" alt="Mikaylah B. Chu" style="width: 45%; height: auto; border-color: blue;">
            </div>
            <h5 class="card-title">Datu Batumbakal</h5>
            <h6 class="card-subtitle mb-2 text-muted pb-3">#0001</h6>
            <h6 class="card-subtitle mb-2 text-muted">Age</h6>
            <p class="card-text">69 years old</p>
            <h6 class="card-subtitle mb-2 text-muted">Date of Birth</h6>
            <p class="card-text">Dec 10, 1888</p>
            <h6 class="card-subtitle mb-2 text-muted">Service</h6>
            <p class="card-text">Caregiving</p>
            <div class="d-grid mx-auto">
            <a class="btn btn-primary" href="patient-details.php" role="button">Patient Details</a>
            </div>
        </div>
        </div>
        </div><!--End of col-->
    </div> <!--End of row-->
    <div class="row">
        <div class="col-12 col-lg-4 pt-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body rounded shadow">
            <div class="d-grid justify-content-md-end pb-2">
            <a class="btn btn-primary" href="payment-list.php" role="button">Payment</a>
            </div>
            <div class="pb-2">
            <img src="../images/download.jpg" class="rounded-circle img-thumbnail img-fluid" alt="Mikaylah B. Chu" style="width: 45%; height: auto; border-color: blue;">
            </div>
            <h5 class="card-title">Datu Batumbakal</h5>
            <h6 class="card-subtitle mb-2 text-muted pb-3">#0001</h6>
            <h6 class="card-subtitle mb-2 text-muted">Age</h6>
            <p class="card-text">69 years old</p>
            <h6 class="card-subtitle mb-2 text-muted">Date of Birth</h6>
            <p class="card-text">Dec 10, 1888</p>
            <h6 class="card-subtitle mb-2 text-muted">Service</h6>
            <p class="card-text">Caregiving</p>
            <div class="d-grid mx-auto">
            <a class="btn btn-primary" href="patient-details.php" role="button">Patient Details</a>
            </div>
        </div>
        </div>
        </div><!--End of col-->
        <div class="col-12 col-lg-4 pt-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body rounded shadow">
            <div class="d-grid justify-content-md-end pb-2">
            <a class="btn btn-primary" href="payment-list.php" role="button">Payment</a>
            </div>
            <div class="pb-2">
            <img src="../images/download.jpg" class="rounded-circle img-thumbnail img-fluid" alt="Mikaylah B. Chu" style="width: 45%; height: auto; border-color: blue;">
            </div>
            <h5 class="card-title">Datu Batumbakal</h5>
            <h6 class="card-subtitle mb-2 text-muted pb-3">#0001</h6>
            <h6 class="card-subtitle mb-2 text-muted">Age</h6>
            <p class="card-text">69 years old</p>
            <h6 class="card-subtitle mb-2 text-muted">Date of Birth</h6>
            <p class="card-text">Dec 10, 1888</p>
            <h6 class="card-subtitle mb-2 text-muted">Service</h6>
            <p class="card-text">Caregiving</p>
            <div class="d-grid mx-auto">
            <a class="btn btn-primary" href="patient-details.php" role="button">Patient Details</a>
            </div>
        </div>
        </div>
        </div><!--End of col-->
        <div class="col-12 col-lg-4 pt-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body rounded shadow">
            <div class="d-grid justify-content-md-end pb-2">
            <a class="btn btn-primary" href="payment-list.php" role="button">Payment</a>
            </div>
            <div class="pb-2">
            <img src="../images/download.jpg" class="rounded-circle img-thumbnail img-fluid" alt="Mikaylah B. Chu" style="width: 45%; height: auto; border-color: blue;">
            </div>
            <h5 class="card-title">Datu Batumbakal</h5>
            <h6 class="card-subtitle mb-2 text-muted pb-3">#0001</h6>
            <h6 class="card-subtitle mb-2 text-muted">Age</h6>
            <p class="card-text">69 years old</p>
            <h6 class="card-subtitle mb-2 text-muted">Date of Birth</h6>
            <p class="card-text">Dec 10, 1888</p>
            <h6 class="card-subtitle mb-2 text-muted">Service</h6>
            <p class="card-text">Caregiving</p>
            <div class="d-grid mx-auto">
            <a class="btn btn-primary" href="patient-details.php" role="button">Patient Details</a>
            </div>
        </div>
        </div>
        </div><!--End of col-->
    </div> <!--End of row-->

</div><!--End of container-->

