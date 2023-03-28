<?php

  $page_title = 'WeCare Admin - Staff Schedule';
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
        <a class="nav-link active" aria-current="true" href="../admin/staff-schedule.php">Staff Schedule</a>
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
    <button class="btn btn-info" type="button" style="background: #00ACB2; border: #00ACB2; color:#fff;"><a class="text-white text-decoration-none" href="#">Add Schedule</a></button>
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
        <th scope="col" class="text-left" style="background: #00ACB2; color: #fff;">Day.</th>
        <th scope="col" class="text-left" style="background: #00ACB2; color: #fff;">Start Time</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">End Time</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Shedule Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Action</th>
        </tr>
    </thead>
    <tbody>


    <?php foreach($staff_list as $row){ ?>

        <tr>
        <td class="text-left"><?php echo $row['firstname'] . " ". $row['middlename'][0] . ". " . $row['lastname']?></td>

        <td class="text-center"><?php echo $row['day'] ?></td>

        <td class="text-center"><?php echo date("g:i a", strtotime($row['start_time'])) ?></td>

        <td class="text-center"><?php echo date("g:i a", strtotime($row['end_time'])) ?></td>

        <td class="text-center"><?php echo $row['status'] ?></td>

        <td class="text-center"><a href="#" class="edit-a"><i class="fa-solid fa-pen"></i></a><i class="fa-solid fa-trash"></i></td><!--Edit and Delete Icons-->
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
    <h7>Active Shedule: <strong>20</strong></h7>
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

<?php

require_once '../includes/admin-footer.php';

?>