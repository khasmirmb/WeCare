<?php

    $page_title = 'WeCare Staff - Admission';
    require_once '../includes/staff-header.php';
    session_start();

    if(!isset($_SESSION['staff_logged']) || $_SESSION['user_type'] != 'staff'){
        header('location: ../account/signin.php');
    }
    
    require_once '../includes/staff-sidebar.php';

?>

<div class="content">
<div class="container-fluid p-5 container align-items-center pt-3">


<h2 class="pb-3" style="color: #00ACB2;"><strong>Daily Attendance</strong></h2>
<p><strong>Type:</strong> Day Shift 7:00 AM - 7:00 PM</p>
<p><strong>Date:</strong> December 20, 2022</p>


    <div class="dropdown d-grid gap-2 d-md-flex justify-content-md-end pb-3">
    <button class="check-button dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
        Check Attendance Logs
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
        <li><a class="dropdown-item" href="#">
            <div class="row">
                <div class="col" style="color: #00ACB2;">
                    <p><strong>Log</strong></p>
                </div>
                <div class="col" style="color: #00ACB2;">
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

    <div class="container-fluid mb-3">
        <div class="row align-items-start">
            <form action="attendance.php">
                <label for="time_in">Time:</label>
                <input type="time" id="time_in" name="time" class="atten-time">

                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="attendance_status" id="present">
                    <label class="form-check-label" for="present">Present</label>
                </div>
                
                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="attendance_status" id="absent">
                    <label class="form-check-label" for="absent">Absent</label>
                </div>

                <div class="form-check-inline">
                    <input class="form-check-input" type="radio" name="attendance_status" id="leave">
                    <label class="form-check-label" for="leave">Leave</label>
                </div>

                    <button class="btn btn-primary" name="time-in">Time In</button>
                    <button class="btn btn-primary" name="time-out">Time Out</button>
            </form>
        </div>
    </div>
       

<div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" style="background: #00ACB2;">Date</th>
        <th cope="col" class="text-center" style="background: #00ACB2;">Time In</th>
        <th scope="col" class="text-center" style="background: #00ACB2;">Time Out</th>
        <th scope="col" class="text-center" style="background: #00ACB2;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2;">Shift</th>
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
</div>
</div>

<?php

  require_once '../includes/staff-footer.php';

?>