<?php

  $page_title = 'WeCare Admin - Staff Schedule';
  require_once '../includes/admin-header.php';
  require_once '../classes/staff.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
    header('location: ../account/signin.php');
  }


  if(isset($_POST['submit'])){

    $staff = new Staff;

    $staff->staff_id = $_POST['staff'];
    $staff->day = $_POST['day'];
    $staff->shift_type = $_POST['shift'];
    $staff->status = "Active";

    if($staff->add_staff_schedule()){
      header('location: staff-schedule.php');
    }

  }

  require_once '../includes/admin-sidebar.php';

?>

  <!--Container Main start-->
<div class="content">
  <div class="container align-items-center pt-3">
<div class="card text-center">

<div class="card-header"><!--Start of Card-->
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link"  href="../admin/user-accounts.php">Users</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/staff-accounts.php">Staff</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="../admin/staff-schedule.php">Staff Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/staff-attendance.php">Staff Attendance</a>
      </li>
    </ul>
  </div><!--End of Card-->
  
  
  <div class="card-body">
  <div class="container">
  <div class="row">
 

  <div class="col-5 col-lg-2"><!--Start of Staff title-->
    <h4>Schedule</h3>
  </div><!--End of Staff title-->

    <div class="col-12 col-lg-6"><!--Start of search bar-->
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search for...">
        <div class="input-group-append">
          <button class="btn btn-info" type="button" style="background: #00ACB2; border: #00ACB2; color:#fff;">Search</button>
        </div>
      </div>
    </div><!--End of search bar-->

    <div class="col-6 col-lg-2"><!--Start of add user-->
    <button class="btn btn-info" type="button" style="background: #00ACB2; border: #00ACB2; color:#fff;" data-bs-toggle="modal" data-bs-target="#staff_sched"><i class="fas fa-calendar-plus"></i>Add Schedule</button>
    </div><!--end of add user-->

      <div class="col-2 col-lg-1"><!--Start of filter-->
      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background: #00ACB2; border: #00ACB2; color:#fff;">
          Filter
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="#">Ascending</a></li>
          <li><a class="dropdown-item" href="#">Descending</a></li>
        </ul>
      </div>
      </div><!--End of filter-->
       
      <div class="pt-3"><!--Start of table-->
    <div class="table-responsive">
    <?php
          require_once '../classes/staff.class.php';

          $staff = new Staff;

          $staff_list = $staff->staff_schedule();

    ?>
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th cope="col" class="text-left" style="background: #00ACB2; color: #fff;">Name</th>
        <th scope="col" class="text-left" style="background: #00ACB2; color: #fff;">Day</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Shift Type</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Schedule Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Action</th>
        </tr>
    </thead>
    <tbody>


    <?php foreach($staff_list as $row){ ?>

        <tr>
        <td class="text-left"><?php echo $row['firstname'] . " ". $row['middlename'][0] . ". " . $row['lastname']?></td>

        <td class="text-center"><?php echo $row['day'] ?></td>

        <td class="text-center"><?php echo $row['shift_type'] ?></td>

        <td class="text-center"><?php echo $row['status'] ?></td>

        <td class="text-center"><i class="fa-solid fa-trash"></i></td><!--Edit and Delete Icons-->
       </tr>

    <?php } ?>
    </tbody>
</table>
</div>
</div><!--End of table-->

  <div class="row"><!--Start of counting-->
  <div class="col pt-2">
    <h7>Total Schedule: <strong>40</strong></h7>
    </div>
    <div class="col pt-2">
    <h7>Active Schedule: <strong>20</strong></h7>
    </div>
    </div>
  </div><!--End of counting-->
    
</div><!--Row in the container-->
  </div><!--container-->
</div><!--End of Card body-->
  </div><!--End of Card text center-->

  <div class="modal fade" id="staff_sched" tabindex="-1" aria-labelledby="staff_schedLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staff_schedLabel">Add Staff Schedule</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="staff-schedule.php" method="POST">
            <div class="mb-3">
              <label for="staff"><strong>Select Staff:</strong></label>
              <?php
              require_once '../classes/staff.class.php';
              $staff = new Staff;

              $staff_list = $staff->show_staff_data();
              ?>
              <select class="form-select" name="staff" id="staff">
                
              <?php foreach($staff_list as $row){ ?>
              <option value="<?php echo $row['id'] ?>"><?php echo $row['firstname'] . " " . $row['middlename'][0] . ". " . $row['lastname'] ?></option>
              <?php } ?>
              </select>
            </div>
            <div class="mb-3">
              <label for="day"><strong>Select Day:</strong></label>
              <select class="form-select" name="day" id="day">
                <option value="Monday">Monday</option>
                <option value="Tuesday">Tuesday</option>
                <option value="Wednesday">Wednesday</option>
                <option value="Thursday">Thursday</option>
                <option value="Friday">Friday</option>
                <option value="Saturday">Saturday</option>
                <option value="Sunday">Sunday</option>
              </select>
            </div>

            <div class="mb-3">
              <label for="shift"><strong>Select Shift:</strong></label>
              <select class="form-select" name="shift" id="shift">
                <option value="Day Shift">Day Shift</option>
                <option value="Night Shift">Night Shift</option>
              </select>
            </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="submit">Confirm</button>
        </div>
      </form>
      </div>
    </div>
  </div>
  
</div><!--End of container-->


<?php

require_once '../includes/admin-footer.php';

?>