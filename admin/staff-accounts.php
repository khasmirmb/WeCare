<?php

    $page_title = 'Admin - Staff';

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
        <a class="nav-link active" aria-current="true" href="../admin/add-staff.php">Staff</a>
      </li>
    </ul>
  </div><!--End of Card-->
  
  
  <div class="card-body">
  <div class="container">
  <div class="row">
 

  <div class="col-5 col-lg-2"><!--Start of Staff title-->
    <h4>Staff</h3>
  </div><!--End of Staff title-->

    <div class="col-12 col-lg-6"><!--Start of search bar-->
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search for...">
        <div class="input-group-append">
          <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;">Search</button>
        </div>
      </div>
    </div><!--End of search bar-->

    <div class="col-6 col-lg-2"><!--Start of add user-->
    <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="add-staff.php">Add Staff</a></button>
    </div><!--end of add user-->


      <div class="col-2 col-lg-1"><!--Start of filter-->
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
        <th scope="col" class="text-left" style="background: #00ACB2; color: #fff;">Username</th>
        <th cope="col" class="text-left" style="background: #00ACB2; color: #fff;">Name</th>
        <th scope="col" class="text-left" style="background: #00ACB2; color: #fff;">Contact Num.</th>
        <th scope="col" class="text-left" style="background: #00ACB2; color: #fff;">Email</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Action</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Position</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td><a href="#" class="text-decoration-none text-dark text-left">James869</a></td>
        <td class="text-left">James Brown</td>
        <td class="text-center">095656565</td>
        <td class="text-center">jamesbrown@gmail.com</td>
        <td class="text-center">Active</td>
        <td class="text-center"><i class="fa-solid fa-pen"></i><i class="fa-solid fa-trash"></i></td><!--Edit and Delete Icons-->
        <td class="text-center">CEO</td>
       </tr>
        <tr>
        <td><a href="#" class="text-decoration-none text-dark text-left">James869</a></td>
        <td class="text-left">James Brown</td>
        <td class="text-center">095656565</td>
        <td class="text-center">jamesbrown@gmail.com</td>
        <td class="text-center">Inactive</td>
        <td class="text-center"><i class="fa-solid fa-pen"></i><i class="fa-solid fa-trash"></i></td><!--Edit and Delete Icons-->
        <td class="text-center">Nurse</td>
        </tr>
        <tr>
        <td><a href="#" class="text-decoration-none text-dark text-left">James869</a></td>
        <td class="text-left">James Brown</td>
        <td class="text-center">095656565</td>
        <td class="text-center">jamesbrown@gmail.com</td>
        <td class="text-center">Inactive</td>
        <td class="text-center"><i class="fa-solid fa-pen"></i><i class="fa-solid fa-trash"></i></td><!--Edit and Delete Icons-->
        <td class="text-center">OJT</td>
        </tr>
    </tbody>
</table>
</div>
</div><!--End of table-->

  <div class="row"><!--Start of counting-->
  <div class="col pt-2">
    <h7>Total Staff: <strong>40</strong></h7>
    </div>
    <div class="col pt-2">
    <h7>On Duty: <strong>20</strong></h7>
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
