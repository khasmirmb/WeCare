<?php

    $page_title = 'WeCare - Family Monitoring';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();
    require_once '../includes/navbar.php';
?>

<div class="p-5">
    <h2 class="pb-3"><strong>Family Monitoring</strong></h2>
    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col"style="background: #00ACB2; color: #fff;">Patient Name</th>
        <th cope="col" class="text-center" style="background: #00ACB2; color: #fff;">Relationship</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Room</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Nurse</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td><a href="../family-monitoring/patient-family.php" class="text-decoration-none text-dark">Al-khasmir Basaluddin</a></td>
        <td class="text-center">Father</td>
        <td class="text-center">Room 1</td>
        <td class="text-center">Active</td>
        <td class="text-center">Mikaylah Chu</td></a>
       </tr>
        <tr>
        <td>Rob Roche Villanueva</td>
        <td class="text-center">Uncle</td>
        <td class="text-center">Room 3</td>
        <td class="text-center">Active</td>
        <td class="text-center">Mikaylah Chu</td>
        </tr>
    </tbody>
</table>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-end">
    <button type="button" class="btn btn-primary" style="background: #00ACB2; border: #00ACB2"><a class="text-white text-decoration-none" href="monitor-request.php">Request Monitoring</a></button>
    </div>
</div>
