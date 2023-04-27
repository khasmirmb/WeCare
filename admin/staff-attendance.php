<?php

  $page_title = 'WeCare Admin - Staff Attendance';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
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
        <a class="nav-link" aria-current="true" href="../admin/staff-schedule.php">Staff Schedule</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="../admin/staff-attendance.php">Staff Attendance</a>
      </li>
    </ul>
  </div><!--End of Card-->
  
  
  <div class="card-body">
  <div class="container">
  <div class="row">
 

  <div class="col-5 col-lg-2"><!--Start of Staff title-->
    <h4>Attendance</h3>
  </div><!--End of Staff title-->

    <div class="col-12 col-lg-6"><!--Start of search bar-->
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search...">
        <div class="input-group-append">
          <button class="btn btn-info" type="button" style="background: #00ACB2; border: #00ACB2; color:#fff;">Search</button>
        </div>
      </div>
    </div><!--End of search bar-->

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
          require_once '../classes/attendance.class.php';

          $attendance = new Attendance;

          $attendance_list = $attendance->attendance_admin();

    ?>
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th cope="col" class="text-left" style="background: #00ACB2; color: #fff;">Name</th>
        <th scope="col" class="text-left" style="background: #00ACB2; color: #fff;">Date</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Time In</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Time Out</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Shift Type</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Action</th>
        </tr>
    </thead>
    <tbody>


    <?php foreach($attendance_list as $row){ ?>

        <tr>
        <td class="text-left"><?php echo $row['firstname'] . " ". $row['middlename'][0] . ". " . $row['lastname']?></td>

        <td class="text-center"><?php echo date("M j, Y", strtotime($row['date'])) ?></td>

        <td class="text-center"><?php echo date("g:i a", strtotime($row['time_in'])) ?></td>

        <td class="text-center"><?php echo date("g:i a", strtotime($row['time_out'])) ?></td>

        <td class="text-center"><?php echo $row['status'] ?></td>

        <td class="text-center"><?php echo $row['shift_type'] ?></td>

        <td class="text-center"><a href="#" class="edit-a"></a><i class="fa-solid fa-trash" type="button" data-bs-toggle="modal" data-bs-target="#delete-sched"></i></td><!--Edit and Delete Icons-->
       </tr>

    <?php } ?>
    </tbody>
</table>
</div>
</div><!--End of table-->

  <div class="row"><!--Start of counting-->
  <div class="col pt-2">
    <h7>Total Attendance: <strong>40</strong></h7>
    </div>
    <div class="col pt-2">
    <h7>Total Present: <strong>20</strong></h7>
    </div>
    </div>
  </div><!--End of counting-->
    
</div><!--Row in the container-->
  </div><!--container-->
</div><!--End of Card body-->
  </div><!--End of Card text center-->
</div><!--End of container-->
</div>
    
    <!--End of first container-->
    <!--Container Main end-->


    <!-- Delete data -->
<div class="modal fade" id="delete-sched" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delete-schedLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="delete-schedLabel">Delete Staff Attendance Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to this staff's schedule?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>

<?php

require_once '../includes/admin-footer.php';

?>