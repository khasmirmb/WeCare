<?php

    $page_title = 'Staff - Attendance';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container-fluid p-5 container align-items-center pt-3">



<div class="d-grid gap-2 d-md-flex justify-content-md-end pb-3">
    <button type="button" class="btn btn-primary"><a class="text-white text-decoration-none" href="monitor-request.php">Request Monitoring</a></button>
    </div>

    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col">Date</th>
        <th cope="col" class="text-center">Time In</th>
        <th scope="col" class="text-center">Time Out</th>
        <th scope="col" class="text-center">Status</th>
        <th scope="col" class="text-center">Shift</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>Dec 15, 2022</td>
        <td class="text-center">7:00 AM</td>
        <td class="text-center">7:00 PM</td>
        <td class="text-center">Present</td>
        <td class="text-center">Day Shift</td>
        </tr>
        <tr>
        <td>Dec 15, 2022</td>
        <td class="text-center">7:00 AM</td>
        <td class="text-center">7:00 PM</td>
        <td class="text-center">Present</td>
        <td class="text-center">Day Shift</td>
        </tr>
        <tr>
        <td>Dec 15, 2022</td>
        <td class="text-center">7:00 AM</td>
        <td class="text-center">7:00 PM</td>
        <td class="text-center">Present</td>
        <td class="text-center">Day Shift</td>
        </tr>
        <tr>
        <td>Dec 15, 2022</td>
        <td class="text-center">7:00 AM</td>
        <td class="text-center">7:00 PM</td>
        <td class="text-center">Present</td>
        <td class="text-center">Day Shift</td>
        </tr>
    </tbody>
</table>
</div>

