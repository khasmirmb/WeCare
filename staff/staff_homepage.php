<?php
    
    //this is where the page starts

    //start session
    session_start();

  

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aesthetic Template">
    <meta name="keywords" content="Aesthetic, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>WeCare Nursing Home, Inc.</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="../css/style1.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <body>

<input type="checkbox" id="check">
<!--header area start-->
<header>
  <label for="check">
    <i class="fas fa-bars" id="sidebar_btn"></i>
  </label>
  <div class="left_area">
    <h3>WeCare <span>Nursing</span></h3>
  </div>
  <div class="right_area">
    <a href="#" class="logout_btn">Logout</a>
  </div>
</header>
<!--header area end-->
<!--sidebar start-->
<div class="sidebar">
  <center>
    <img src="../img/user.jpeg" class="profile_image" alt="">
    <h1>Kurt Ira Pobre</h1>
    <h5>Registered Nurse</h5>
  </center>
  <a href="#"><i class="fas fa-clipboard-list"></i><span>Patient List</span></a>
  <a href="#"><i class="fas fa-hospital-user"></i><span>Admission</span></a>
  <a href="#"><i class="fas fa-calendar"></i><span>Appointment</span></a>
  <a href="#"><i class="fas fa-user"></i><span>Attendance</span></a>
  <a href="#"><i class="fas fa-info-circle"></i><span>About</span></a>
  <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
</div>
<!--sidebar end-->

<div class="content"></div>

  <!-- Js Plugins -->
  <script src="../js/jquery-3.3.1.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/masonry.pkgd.min.js"></script>
    <script src="../js/jquery-ui.min.js"></script>
    <script src="../js/jquery.nice-select.min.js"></script>
    <script src="../js/jquery.slicknav.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/main.js"></script>
    <script src="../js/popup.js"></script>

</body>
</html>