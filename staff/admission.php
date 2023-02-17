<?php

    $page_title = 'WeCare Nursing Home Inc.';
    require_once '../includes/header.php';
    session_start();

?>

  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3>WeCare</h3>
      </div>
      <div class="right_area">
        
      </div>
    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="../images/home-display4.jpg" class="mobile_profile_image" alt="">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="#"><i class="fas fa-clipboard-list"></i><span>Patient List</span></a>
        <a href="#"><i class="fas fa-user"></i><span>Admission</span></a>
        <a href="#"><i class="fas fa-calendar"></i><span>Appointment</span></a>
        <a href="#"><i class="fas fa-clipboard-user"></i><span>Attendance</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
        <a href="#"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="../images/home-display4.jpg" class="profile_image" alt="">
        <h4>Kurt Ira Pobre</h4>
        <h5>Registered Nurse</h5>
      </div>
      <a href="../staff/homepage.php"><i class="fas fa-clipboard-list"></i><span>Patient List</span></a>
      <a href="#"><i class="fas fa-user"></i><span>Admission</span></a>
      <a href="#"><i class="fas fa-calendar"></i><span>Appointment</span></a>
      <a href="../staff/"><i class="fas fa-clipboard-user"></i><span>Attendance</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      <a href="#"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
    <div class="container mt-5 px-2">
    <div class="table_border">
    <div class="mb-2 d-flex justify-content-between align-items-center">
        
        <div class="position-relative">
        </div>
        
        <div class="px-2">
            <div class="filter_class">
            <span>Filters <i class="fa fa-angle-down"></i></span>
        </div>
    </div>
        
    </div>
    <div class="table-responsive">
    <table class="table table-responsive table-borderless">
        
      <thead>
        <tr class="bg-light">
          <th scope="col" width="30%">Name</th>
          <th scope="col" width="20%">Time</th>
          <th scope="col" width="30%">Date</th>
          <th scope="col" width="40%">Done</th>
          <th scope="col" class="text-end" width="40%"><span>No-show</span></th>
        </tr>
      </thead>
  <tbody>
    <tr>
      <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Althan Travis</td>
      <td>1 Oct, 21</td>
      <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
    </tr>
    
    <tr>
      <td><img src="https://i.imgur.com/nmnmfGv.png" width="25"> Tomo arvis</td>
      <td>12 Oct, 21</td>
      <td><i class="fa fa-dot-circle-o text-danger"></i><span class="ms-1">Failed</span></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
    </tr>
    
    
    <tr>
      <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Althan Travis</td>
      <td>1 Nov, 21</td>
      <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
    </tr>
    
    
    <tr>
      <td><img src="https://i.imgur.com/VKOeFyS.png" width="25"> Travis head</td>
      <td>19 Oct, 21</td>
      <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
    </tr>
    
    
    <tr>
      <td><img src="https://i.imgur.com/nmnmfGv.png" width="25"> Althan Travis</td>
      <td>1 Oct, 21</td>
      <td><i class="fa fa-check-circle-o green"></i><span class="ms-1">Paid</span></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
      <td scope="row"><input class="form-check-input" type="checkbox"></td>
    </tr>
  </tbody>
</table>
  
  </div>
</div>
</div>
    </div>

    <script type="text/javascript">
    $(document).ready(function(){
      $('.nav_btn').click(function(){
        $('.mobile_nav_items').toggleClass('active');
      });
    });
    </script>

  </body>
</html>