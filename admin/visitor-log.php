<?php

  $page_title = 'WeCare Admin - Visitor Log';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

?>

<div class="content">

<div class="container align-items-center pt-3">
<div class="card text-center">
  <div class="card-header"><!--Start of Card-->
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link"  href="../admin/admission.php">Admission</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../admin/appointment.php">Appointment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="../admin/visitor-log.php">Visitor</a>
      </li>
    </ul>
  </div><!--End of Card-->
  <div class="card-body">
  <div class="container">
  <div class="row">
  <div class="col-5 col-lg-2"><!--Start of Users title-->
    <h4>Visitor</h3>
  </div><!--End of Users title-->
    <div class="col-12 col-lg-5"><!--Start of search bar-->
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search for...">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;">Search</button>
        </div>
      </div>
    </div><!--End of search bar-->
    <div class="col-7 col-lg-2"><!--Start of add user-->
    <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/add-visitor.php">Add Visitor</a></button>
    </div><!--end of add user-->
      <div class="col-5 col-lg-1"><!--Start of filter-->
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background: #00ACB2; border: #00ACB2;">
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
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" class="text-left" style="background: #00ACB2; color: #fff;">Visitor Name</th>
        <th cope="col" class="text-left" style="background: #00ACB2; color: #fff;">Meet Patient Name</th>
        <th scope="col" class="text-left" style="background: #00ACB2; color: #fff;">In Time</th>
        <th scope="col" class="text-left" style="background: #00ACB2; color: #fff;">Out Time</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Entered By</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Action</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td><a href="#" class="text-decoration-none text-dark text-left">Adam Smith</a></td>
        <td class="text-left">Datu Batumbakal</td>
        <td class="text-center">2022-12-12 14:24:58</td>
        <td class="text-center">2022-12-12 14:24:58</td>
        <td class="text-center">Eljen Mae Augusto</td>
        <td class="text-center"><i class="fa-solid fa-pen"></i></a><i class="fa-solid fa-trash"></i></td><!--Edit and Delete Icons-->
       </tr>
        <tr>
        <tr>
        <td><a href="#" class="text-decoration-none text-dark text-left">Adam Smith</a></td>
        <td class="text-left">Datu Batumbakal</td>
        <td class="text-center">2022-12-12 14:24:58</td>
        <td class="text-center">2022-12-12 14:24:58</td>
        <td class="text-center">Eljen Mae Augusto</td>
        <td class="text-center"><i class="fa-solid fa-pen"></i></a><i class="fa-solid fa-trash"></i></td><!--Edit and Delete Icons-->
       </tr>
        </tr>
        <tr>
        <td><a href="#" class="text-decoration-none text-dark text-left">Adam Smith</a></td>
        <td class="text-left">Datu Batumbakal</td>
        <td class="text-center">2022-12-12 14:24:58</td>
        <td class="text-center">2022-12-12 14:24:58</td>
        <td class="text-center">Eljen Mae Augusto</td>
        <td class="text-center"><i class="fa-solid fa-pen"></i></a><i class="fa-solid fa-trash"></i></td><!--Edit and Delete Icons-->
       </tr>
    </tbody>
</table>
</div>
</div><!--End of table-->
  <div class="row"><!--Start of counting-->
  <div class="col pt-2">
    <h7>Total Visitor: <strong>100</strong></h7>s
    </div>
    <div class="col pt-2">
    <h7>Active Visitor: <strong>50</strong></h7>
    </div>
    </div>
  </div><!--End of counting-->
</div><!--Row in the container-->
  </div><!--container-->
</div><!--End of Card body-->
  </div><!--End of Card text center-->
</div><!--End of container-->

</div>

<?php

require_once '../includes/admin-footer.php';

?>