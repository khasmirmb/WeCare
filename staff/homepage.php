<?php

    $page_title = 'WeCare Nursing Home Inc.';
    require_once '../includes/header.php';
    session_start();

?>

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
        <a href="../staff/attendance.php"><i class="fas fa-clipboard-user"></i><span>Attendance</span></a>
        <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
        <a href="../homepage/home.php"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
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
      <a href="#"><i class="fas fa-clipboard-list"></i><span>Patient List</span></a>
      <a href="#"><i class="fas fa-user"></i><span>Admission</span></a>
      <a href="#"><i class="fas fa-calendar"></i><span>Appointment</span></a>
      <a href="../staff/attendance.php"><i class="fas fa-clipboard-user"></i><span>Attendance</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      <a href="../homepage/home.php"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->

    <div class="content">
      <div class="card">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
      </div>
      <div class="card">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
      </div>
      <div class="card">
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
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