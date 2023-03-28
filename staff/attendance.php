<?php

    $page_title = 'WeCare Staff - Admission';
    require_once '../includes/staff-header.php';
    require_once '../classes/staff.class.php';
    require_once '../classes/attendance.class.php';
    session_start();

    if(!isset($_SESSION['staff_logged']) || $_SESSION['user_type'] != 'staff'){
        header('location: ../account/signin.php');
    }

    if(isset($_POST['present'])){

        $attendance = new Attendance();

        if(isset($_POST['time_in']) && isset($_POST['staff_id']) && isset($_POST['date']) && isset($_POST['shift_type']) && isset($_POST['status'])){
        
            $attendance->staff_id = $_POST['staff_id'];
            $attendance->date = $_POST['date'];
            $attendance->time_in = $_POST['time_in'];
            $attendance->status = "Present";
            $attendance->shift_type = $_POST['shift_type'];
    

            if(!$attendance->check_duplicate_date($_POST['date'])){
                $attendance->add_attendance();
            }else{
                $done_att = "You already have attendance this date.";
            }
        
        }

    } else if(isset($_POST['absent'])){

        $attendance = new Attendance();
    
        if(isset($_POST['time_in']) && isset($_POST['staff_id']) && isset($_POST['date']) && isset($_POST['shift_type']) && isset($_POST['status'])){

            $attendance->staff_id = $_POST['staff_id'];
            $attendance->date = $_POST['date'];
            $attendance->status = "Absent";
            $attendance->shift_type = $_POST['shift_type'];
    

            if(!$attendance->check_duplicate_date($_POST['date'])){
                $attendance->add_not_present();
            }else{
                $done_att = "You already have attendance this date.";
            }

        }

    } else if(isset($_POST['leave'])){

        $attendance = new Attendance();
    
        if(isset($_POST['time_in']) && isset($_POST['staff_id']) && isset($_POST['date']) && isset($_POST['shift_type']) && isset($_POST['status'])){

            $attendance->staff_id = $_POST['staff_id'];
            $attendance->date = $_POST['date'];
            $attendance->status = "Leave";
            $attendance->shift_type = $_POST['shift_type'];
    

            if(!$attendance->check_duplicate_date($_POST['date'])){
                $attendance->add_not_present();
            }else{
                $done_att = "You already have attendance this date.";
            }

        }

    }else if(isset($_POST['sick-leave'])){

        $attendance = new Attendance();
    
        if(isset($_POST['time_in']) && isset($_POST['staff_id']) && isset($_POST['date']) && isset($_POST['shift_type']) && isset($_POST['status'])){

            $attendance->staff_id = $_POST['staff_id'];
            $attendance->date = $_POST['date'];
            $attendance->status = "Sick Leave";
            $attendance->shift_type = $_POST['shift_type'];
    

            if(!$attendance->check_duplicate_date($_POST['date'])){
                $attendance->add_not_present();
            }else{
                $done_att = "You already have attendance this date.";
            }

        }

    }
    
    require_once '../includes/staff-sidebar.php';

?>

<div class="content">
<div class="container-fluid p-5 container align-items-center pt-3">


<h2 class="pb-3" style="color: #00ACB2;"><strong>Daily Attendance</strong></h2>
    <?php

    $staff = new Staff;
    
    if($staff->fetch_staff_by_staff_id($_SESSION['staff_logged'])){
        $value = $staff->fetch_staff_by_staff_id($_SESSION['staff_logged']);
        $staff->staff_id = $value['id'];
        $staff->shift_type = $value['shift_type'];
    }
    ?>
<p><strong>Type:</strong> <?php echo $staff->shift_type ?></p>
<p><strong>Date:</strong> <?php  date_default_timezone_set('Asia/Manila'); echo date("M d, Y"); ?></p>


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
    

    <div class="container-fluid">
        <div class="row align-items-start">
            <form action="attendance.php" method="POST">
            <div class="d-flex col-12 col-lg-6 pt-3 mb-3">

            <input type="hidden" id="time_in" name="time_in" value="<?php date_default_timezone_set('Asia/Manila'); echo date("h:i:sa");
 ?>">

            <input type="hidden" id="staff_id" name="staff_id" value="<?php echo $_SESSION['staff_logged'] ?>">

            <input type="hidden" id="date" name="date" value="<?php echo date("Y/m/d") ?>">

            <input type="hidden" id="shift_type" name="shift_type" value="<?php echo $staff->shift_type ?>">

            <input type="hidden" id="status" name="status" value="Present">

            <button name="present" class="btn btn-outline-info text-light" style="background: #00ACB2;" onclick="return confirm('Mark Present Your Attendance Today?');">Present</button>

            <button name="absent" class="btn btn-outline-info text-light ms-2" style="background: #00ACB2;" onclick="return confirm('Mark Absent Your Attendance Today?');">Absent</button>

            <button name="leave" class="btn btn-outline-info text-light ms-2" style="background: #00ACB2;" onclick="return confirm('Mark Leave Your Attendance Today?');">Leave</button>

            <button name="sick-leave" class="btn btn-outline-info text-light ms-2" style="background: #00ACB2;" onclick="return confirm('Mark Sick Leave Your Attendance Today?');">Sick Leave</button>

            </form>

            </div>

            <?php
                //Display the error message if there is any.
                if(isset($done_att)){
                    echo '<div><p class="text-danger">'.$done_att.'</p></div>';
                }
             ?>
        </div>

       

<div class="table-responsive">
    <?php

    $attendance = new Attendance();

    $attendance_list = $attendance->staff_attendance($_SESSION['staff_logged']);

    ?>
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" style="background: #00ACB2;">Date</th>
        <th cope="col" class="text-center" style="background: #00ACB2;">Time In</th>
        <th scope="col" class="text-center" style="background: #00ACB2;">Time Out</th>
        <th scope="col" class="text-center" style="background: #00ACB2;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2;">Shift</th>
        <th scope="col" class="text-center" style="background: #00ACB2;">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($attendance_list as $row){ ?>
    <tr>
        <td><?php echo date("M j, Y", strtotime($row['date'])) ?></td>
        <td class="text-center"><?php if($row['time_in'] == "00:00:00"){ echo "";} else {echo date("g:i a", strtotime($row['time_in'])); } ?></td>
        <td class="text-center"><?php if($row['time_out'] == "00:00:00"){ echo "";} else {echo date("g:i a", strtotime($row['time_out'])); } ?></td>
        <td class="text-center"><?php echo $row['status'] ?></td>
        <td class="text-center"><?php echo $row['shift_type'] ?></td>
        <td class="text-center">
            <?php if($row['status'] == "Present" && $row['time_out'] == "00:00:00"){ ?>
            <a class="btn btn-info" href="time-out.php?id=<?php echo $row['id'] ?>" style="background: #00ACB2; color: #fff;" onclick="return confirm('Are you sure to Time-Out?');">Time-Out</a>
            <?php } else { ?>
                None
            <?php } ?>
        </td>
    </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</div>
</div>

<?php

  require_once '../includes/staff-footer.php';

?>