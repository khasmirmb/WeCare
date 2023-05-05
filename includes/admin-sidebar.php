<body>
<input type="checkbox" id="check">
    <!--header area start-->
    <!--<header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3><img src="../images/logo.png" alt="" width="50" height="60">WeCare</h3>
      </div>
      <div class="right_area">
        
      </div>
    </header> -->
    <!--header area end-->

    <?php

      require_once '../classes/admission.class.php';

      $admission = new Admission;

      $total_admission = $admission->show_admission_notification();

      require_once '../classes/appointment.class.php';

      $appointment = new Appointment;

      $total_appointment = $appointment->show_appointment_notification();

    ?>

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
      <a href="../admin/admission.php"><i class="fas fa-clipboard-list"></i><span>Admission</span>
      <span class="badge bg-danger ms-1" id="count">
        <?php 
        foreach($total_admission as $row){
          echo $row['admission_total'];
        }
        ?>
      </span>
      </a>
      <a href="../admin/appointment.php"><i class="fas fa-calendar"></i><span>Appointment</span>
      <span class="badge bg-danger ms-1" id="count">
        <?php 
        foreach($total_appointment as $row){
          echo $row['appointment_total'];
        }
        ?>
      </span>
    </a>
      <a href="../admin/setting.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      <a href="../account/logout.php" data-bs-toggle="modal" data-bs-target="#logout"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
      </div>
    </div>

    <!--mobile navigation bar end-->

    <!--sidebar start-->
    <div class="sidebar">
    <div class="left_area">
        <h3><img src="../images/logo.png" alt="" width="50" height="60">WeCare</h3>
      </div>
      <a href="../admin/dashboard.php"><i class="fas fa-chart-simple"></i><span>Dashboard</span></a>
      <a href="../admin/staff-accounts.php"><i class="fas fa-user"></i><span>Accounts</span></a>
      <a href="../admin/feedback.php"><i class="fas fa-envelope"></i><span>Feedback</span></a>
      <a href="../admin/patient-list.php"><i class="fas fa-list-check"></i><span>Patient List</span></a>
      <a href="../admin/admission.php"><i class="fas fa-clipboard-list"></i><span>Admission</span>
        <span class="badge bg-danger ms-1" id="count">
        <?php 
        foreach($total_admission as $row){
          echo $row['admission_total'];
        }
        ?>
        </span>
      </a>
      <a href="../admin/appointment.php"><i class="fas fa-calendar"></i><span>Appointment</span>
      <span class="badge bg-danger ms-1" id="count">
        <?php 
        foreach($total_appointment as $row){
          echo $row['appointment_total'];
        }
        ?>
      </span>
    </a>
      <a href="../admin/setting.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      <a href="../account/logout.php" data-bs-toggle="modal" data-bs-target="#logout"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
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
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <a href="../account/logout.php"><button type="button" class="btn btn-primary">Yes</button></a>
      </div>
    </div>
  </div>
</div>