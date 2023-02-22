<?php

    $page_title = 'WeCare - Review';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
?>

<!--Breadscrumbs-->
<div class="p-5">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
    <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item"><a href="survey.php">Survey</a></li>
        <li class="breadcrumb-item"><a href="patient-info.php">Patient Information</a></li>
        <li class="breadcrumb-item"><a href="relative-info.php">Relative Information</a></li>
        <li class="breadcrumb-item active" aria-current="page">Review</li>
    </ol>
    </nav>
</div>

<div class="container align-items-center pt-3">
<div class="container form-control">
<form>
 
</form>
</div>
</div>