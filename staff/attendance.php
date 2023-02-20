<?php

    $page_title = 'Staff - Attendance';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container-fluid p-5 container align-items-center pt-3">


<h2 class="pb-3"><strong>Daily Attendance</strong></h2>
<p><strong>Type:</strong> Day Shift 7:00 AM - 7:00 PM</p>
<p><strong>Date:</strong> December 20, 2022</p>


    <div class="dropdown d-grid gap-2 d-md-flex justify-content-md-end pb-3">
    <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Check Attendance Logs
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#">
            <div class="row btn btn-primary">
                <div class="col">
                    <p><strong>Log</strong></p>
                </div>
                <div class="col">
                    <p><strong>No. of Logs</strong></p>
                </div>
            </div></a></li>

        <li><hr class="dropdown-divider"></li>

        <li><a class="dropdown-item" href="#">
            <div class="row">
                <div class="col">
                    <p><strong>Present</strong></p>
                </div>
                <div class="col">
                    <p><strong>38</strong></p>
                </div>
            </div></a></li>
        
        <li><a class="dropdown-item" href="#">
        <div class="row">
                <div class="col">
                    <p><strong>Late</strong></p>
                </div>
                <div class="col">
                    <p><strong>5</strong></p>
                </div>
            </div></a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#">
        <div class="row">
                <div class="col">
                    <p><strong>Absent</strong></p>
                </div>
                <div class="col">
                    <p><strong>2</strong></p>
                </div>
            </div></a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#">
        <div class="row">
                <div class="col">
                    <p><strong>Overtime</strong></p>
                </div>
                <div class="col">
                    <p><strong>3</strong></p>
                </div>
            </div></a></li>
            <li><hr class="dropdown-divider"></li>

            <li><a class="dropdown-item" href="#">
        <div class="row">
                <div class="col">
                    <p><strong>Casual Leave</strong></p>
                </div>
                <div class="col">
                    <p><strong>0</strong></p>
                </div>
            </div></a></li>
            <li><hr class="dropdown-divider"></li>
            
            <li><a class="dropdown-item" href="#">
        <div class="row">
                <div class="col">
                    <p><strong>Sick Leave</strong></p>
                </div>
                <div class="col">
                    <p><strong>1</strong></p>
                </div>
            </div></a></li>
    </ul>
    </div><!--End of dropdown-->

    <div class="container align-items-center">
        <div class="status pb-3">
        <button type="button" class="btn btn-primary">Present</button>
        <button type="button" class="btn btn-primary">Absent</button>
        <button type="button" class="btn btn-primary">Leave</button>
        <button type="button" class="btn btn-primary">Sick Leave</button>
        </div>
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
        <td>December 15, 2022</td>
        <td class="text-center">7:00 AM</td>
        <td class="text-center">7:00 PM</td>
        <td class="text-center">Present</td>
        <td class="text-center">Day Shift</td>
        </tr>
        <tr>
        <td>December 15, 2022</td>
        <td class="text-center">7:00 AM</td>
        <td class="text-center">7:00 PM</td>
        <td class="text-center">Present</td>
        <td class="text-center">Day Shift</td>
        </tr>
        <tr>
        <td>December 15, 2022</td>
        <td class="text-center">7:00 AM</td>
        <td class="text-center">7:00 PM</td>
        <td class="text-center">Present</td>
        <td class="text-center">Day Shift</td>
        </tr>
        <tr>
        <td>December 15, 2022</td>
        <td class="text-center">7:00 AM</td>
        <td class="text-center">7:00 PM</td>
        <td class="text-center">Present</td>
        <td class="text-center">Day Shift</td>
        </tr>
    </tbody>
</table>
</div>

