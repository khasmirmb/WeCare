<body>
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
      <div class="nav_bar">
        <img src="../images/home-display4.jpg" class="mobile_profile_image" alt="profile">
        <i class="fa fa-bars nav_btn"></i>
      </div>
      <div class="mobile_nav_items">
        <a href="../staff/patient-list.php"><i class="fas fa-clipboard-list"></i><span>Patient List</span></a>
        <a href="../staff/admission.php"><i class="fas fa-user"></i><span>Admission</span></a>
        <a href="../staff/appointment.php"><i class="fas fa-calendar"></i><span>Appointment</span></a>
        <a href="../staff/attendance.php"><i class="fas fa-clipboard-user"></i><span>Attendance</span></a>
        <a href="../staff/settings.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
        <a href="../homepage/home.php" data-bs-toggle="modal" data-bs-target="#logout"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
      </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
      <div class="profile_info">
        <img src="../images/<?php echo $_SESSION['profile_pic'] ?>" class="profile_image" alt="profile">
        <h4><?php echo $_SESSION['fullname'] ?></h4>
        <h5>Registered Nurse</h5>
      </div>
      <a href="../staff/patient-list.php"><i class="fas fa-clipboard-list"></i><span>Patient List</span></a>
      <a href="../staff/admission.php"><i class="fas fa-user"></i><span>Admission</span></a>
      <a href="../staff/appointment.php"><i class="fas fa-calendar"></i><span>Appointment</span></a>
      <a href="../staff/attendance.php"><i class="fas fa-clipboard-user"></i><span>Attendance</span></a>
      <a href="../staff/settings.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      <a href="../account/logout.php" data-bs-toggle="modal" data-bs-target="#logout  "><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->

    <!-- Modal -->
<div class="modal fade" id="logout" tabindex="-1" aria-labelledby="logoutLabel" aria-hidden="true" data-bs-backdrop="static" aria-labelledby="logoutLabel">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="logoutLabel">Do you want to logout?</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-footer">
        <button type="button" class="patient-rese" data-bs-dismiss="modal">Close</button>
        <a href="../account/logout.php"><button type="button" class="patient-save-btn">Yes</button></a>
      </div>
    </div>
  </div>
</div>