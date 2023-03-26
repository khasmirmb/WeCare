<body>
<input type="checkbox" id="check">
    <!--header area start-->

    <!--header area end-->

   <!--mobile navigation bar start-->
   <div class="mobile_nav">
      <div class="nav_bar">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
      <a href="../admin/dashboard.php"><i class="fas fa-chart-simple"></i><span>Dashboard</span></a>
      <a href="../admin/staff-accounts.php"><i class="fas fa-user"></i><span>Accounts</span></a>
      <a href="../admin/feedback.php"><i class="fas fa-envelope"></i><span>Feedback</span></a>
      <a href="../admin/patient-list.php"><i class="fas fa-list-check"></i><span>Patient List</span></a>
      <!--<a href="../admin/patient-records.php"><i class="fas fa-file-medical"></i><span>Patient records</span></a> -->
      <a href="../admin/admission.php"><i class="fas fa-clipboard-list"></i><span>Admission</span></a>
      <!-- <a href="../admin/appointment.php"><i class="fas fa-calendar"></i><span>Appointment</span></a> -->
      <a href="../admin/setting.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
      </div>
    </div>

    <!--mobile navigation bar end-->

    <!--sidebar start-->
    <div class="sidebar">
    <div class="left_area">
        <h3><img src="../images/logo.png" alt="" width="50" height="60">WeCare</h3> 
        <!--<label for="check">
        <i class="fa-solid fa-arrow-right" id="sidebar_btn"></i>
      </label> -->
      </div>
      <a href="../admin/dashboard.php"><i class="fas fa-chart-simple"></i><span>Dashboard</span></a>
      <a href="../admin/staff-accounts.php"><i class="fas fa-user"></i><span>Accounts</span></a>
      <a href="../admin/feedback.php"><i class="fas fa-envelope"></i><span>Feedback</span></a>
      <a href="../admin/patient-list.php"><i class="fas fa-list-check"></i><span>Patient List</span></a>
      <!--<a href="../admin/patient-records.php"><i class="fas fa-file-medical"></i><span>Patient records</span></a> -->
      <a href="../admin/admission.php"><i class="fas fa-clipboard-list"></i><span>Admission</span></a>
      <!-- <a href="../admin/appointment.php"><i class="fas fa-calendar"></i><span>Appointment</span></a> -->
      <a href="../admin/setting.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->

    <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Do you want to logout?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="close-btn" data-bs-dismiss="modal">Close</button>
        <a href="../homepage/home.php"><button type="button" class="yes-btn">Yes</button></a>
      </div>
    </div>
  </div>
</div>