<?php

    $page_title = 'WeCare - Family Monitoring';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
?>

<div class="header-monitoring d-flex">
    <h2 class="ms-3 mt-5"><strong>Family Monitoring</strong></h2>
</div>

<div class="new-admission d-flex me-5 justify-content-end">
    <a type="button" class="btn btn-primary" id="action-cancel" href="request.php">Request Monitoring</a>
</div>

<div class="p-3 table-responsive">
<table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col">Patient Name</th>
        <th cope="col" class="text-center">Relationship</th>
        <th scope="col" class="text-center">Room</th>
        <th scope="col" class="text-center">Status</th>
        <th scope="col" class="text-center">Nurse</th>
        <th scope="col" class="text-center">View</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>Al-khasmir Basaluddin</td>

        <td class="text-center">Father</td>

        <td class="text-center">Room 1</td>

        <td class="text-center">Active</td>

        <td class="text-center">Mikaylah Chu</td>

        <td class="text-center">
            <a href="patient.monitoring.php"><i class="fa-regular fa-eye"></i></a>
        </td>
        </tr>
    </tbody>
</table>
</div>