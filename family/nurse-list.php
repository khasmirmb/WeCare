<?php

    $page_title = 'WeCare - Previous Nurse';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">
<button type="button" class="btn btn-primary"><a class="text-white text-decoration-none" href="family-patient.php"> < Back</a></button>

<!--Data of Previous Nurse-->
<h4 class="pt-3 pb-3"><strong>Previous Nurse</strong></h4>
    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col">Name</th>
        <th cope="col" class="text-center">Date Started</th>
        <th scope="col" class="text-center">Date Ended</th>
        <th scope="col" class="text-center">Contact Number</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>Carl Bonifacio Jr</td>
        <td class="text-center">July 20, 2022</td>
        <td class="text-center">December 20, 2023</td>
        <td class="text-center">094664646644</td>
       </tr>
        <tr>
        <td>Gregory Yames</td>
        <td class="text-center">July 20, 2022</td>
        <td class="text-center">December 20, 2023</td>
        <td class="text-center">094664646644</td>
        </tr>
    </tbody>
</table>
</div>
</div>