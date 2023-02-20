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

    <!--CSS-->
    <link rel="stylesheet" href="../css/staff.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
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
        <a href="../staff/patient-list.php"><i class="fas fa-clipboard-list"></i><span>Patient List</span></a>
        <a href="../staff/admission.php"><i class="fas fa-user"></i><span>Admission</span></a>
        <a href="../staff/appointment.php"><i class="fas fa-calendar"></i><span>Appointment</span></a>
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
      <a href="../staff/patient-list.php"><i class="fas fa-clipboard-list"></i><span>Patient List</span></a>
      <a href="../staff/admission.php"><i class="fas fa-user"></i><span>Admission</span></a>
      <a href="../staff/appointment.php"><i class="fas fa-calendar"></i><span>Appointment</span></a>
      <a href="../staff/attendance.php"><i class="fas fa-clipboard-user"></i><span>Attendance</span></a>
      <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
      <a href="../homepage/home.php"><i class="fas fa-right-from-bracket"></i><span>Logout</span></a>
    </div>
    <!--sidebar end-->