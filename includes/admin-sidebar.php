<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $page_title; ?></title>


    <!-- Website Icon -->
    <link rel="icon" type="image/x-icon" href="../images/logo.png">

    <!--Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Font Awesome CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--CSS-->
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="../js/sidebar-offcanvas.js"></script>


</head>
<body>
<input type="checkbox" id="check">
    <!--header area start-->
    <header>
      <label for="check">
        <i class="fas fa-bars" id="sidebar_btn"></i>
      </label>
      <div class="left_area">
        <h3><img src="../images/logo.png" alt="" width="50" height="60">WeCare</h3>
      </div>
      <div class="right_area">
        
      </div>
    </header>
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
      <a href="../admin/patient-records.php"><i class="fas fa-file-medical"></i><span>Patient records</span></a>
      <a href="../admin/admission.php"><i class="fas fa-clipboard-list"></i><span>Admission</span></a>
      <a href="../admin/appointment.php"><i class="fas fa-calendar"></i><span>Appointment</span></a>
      <a href="../admin/setting.php"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
      </div>
    </div>

    <!--mobile navigation bar end-->

    <!--sidebar start-->
    <div class="sidebar">
      <a href="../admin/dashboard.php"><i class="fas fa-chart-simple"></i><span>Dashboard</span></a>
      <a href="../admin/staff-accounts.php"><i class="fas fa-user"></i><span>Accounts</span></a>
      <a href="../admin/feedback.php"><i class="fas fa-envelope"></i><span>Feedback</span></a>
      <a href="../admin/patient-list.php"><i class="fas fa-list-check"></i><span>Patient List</span></a>
      <a href="../admin/patient-records.php"><i class="fas fa-file-medical"></i><span>Patient records</span></a>
      <a href="../admin/admission.php"><i class="fas fa-clipboard-list"></i><span>Admission</span></a>
      <a href="../admin/appointment.php"><i class="fas fa-calendar"></i><span>Appointment</span></a>
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