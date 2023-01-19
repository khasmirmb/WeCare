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
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="../css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="../css/flaticon.css" type="text/css">
    <link rel="stylesheet" href="../css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="../css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="../css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="../css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="../home/home.php"><img src="../img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn">
            <a href="#" class="primary-btn">Login</a>
        </div>
        <ul class="offcanvas__widget">
            <li><i class="fa fa-phone"></i> (062) 991 3236</li>
            <li><i class="fa fa-map-marker"></i> Bernardo Drive, 143 S. De Leon Street, Sta. Maria Road</li>
            <li><i class="fa fa-clock-o"></i> Mon to Sat 9:00am to 9pm</li>
        </ul>
        <div class="offcanvas__social">
            <a href="https://www.facebook.com/pages/We-Care-Nursing-Home-zamboanga-city/340004616038796"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fas-twitter"></i></a>
            <a href="#"><i class="fab fas-instagram"></i></a>
            <a href="#"><i class="fab fas-dribbble"></i></a>
        </div>
    </div>
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <ul class="header__top__left">
                            <li><i class="fa fa-phone"></i> (062) 991 3236</li>
                            <li><i class="fa fa-map-marker"></i> Bernardo Drive, 143 S. De Leon Street, Sta. Maria Road</li>
                            <li><i class="fa fa-clock-o"></i> Mon to Sat 9:00am to 9pm</li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <div class="header__top__right">
                            <a href="https://www.facebook.com/pages/We-Care-Nursing-Home-zamboanga-city/340004616038796"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-google"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="header__logo">
                        <a href="../home/home.php"><img src="../img/logo.png" alt="" class="WeCare_logo"></a>
                        <a href="../home/home.php" class="link_home"><h1 class="logo_text">WeCare</a></h1>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__menu__option">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="../home/home.php">Home</a></li>
                                <li><a href="../about/about.php">About</a></li>
                                <li><a href="../appointment/appointment.php">Appointment</a></li>
                                 <li><a href="../services/services.php">Services</a>
                                    <ul class="dropdown">
                                        <li><a href="../rooms/rooms.php">Rooms</a></li>
                                        <li><a href="#">Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="../history/history.php">History</a></li>
                                <li><a href="../contact/contact.php">Contact</a></li>
                            </ul>
                        </nav>
                        <div class="header__btn">
                            <button data-modal-target="#modal" id="login_show" onclick="openPopup()">Login</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="canvas__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Login Section Begin 
    <div class="modal" id="modal">
    <div class="modal-header">
    </div>
    <div class="modal-body">
    <button data-close-button class="close-button">&times;</button>
    <h1>LOGIN</h1>

<form id="login">
    <span class="login_user_icon"><i class="fa-regular fa-user"></i></span>
    <input type="text" placeholder="Username" class="form-input" autocomplete="off" id="username">
    <p class="error" id="username-error"> * Username is required ! </p>

    <span class="login_password_icon"><i class="fa-solid fa-user-lock"></i></span>
    <input type="password" placeholder="Password" class="form-input" autocomplete="off" id="password">
    <p class="error" id="password-error"> * Password is required ! </p>

    <div>
        <input type="checkbox">
        <span class="remember">Remember me</span> <span class="forgot_link"><a href="#">Forgot?</a></span>
    </div>
    <button class="login-btn" id="login-btn" type="button"> Login</button>
</form>
        
<p>or login with</p>
<div class="soc">   
            <button>
                <i class="fa fa-facebook-square"></i> Facebook
            </button>
            <button>
                <i class="fa fa-google"></i> Google
            </button>
        </div>

  <p class="form-footer"> Not a member ? <a href="#"> Sign Up</a></p>
    </div>
  </div>
  <div id="overlay"></div> -->
    <!-- Login Section End -->


    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="../image/homes.jpg" >
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero__text">
                        <span>WeCare Nursing Home, Inc. </span>
                        <h2>Your Home Away From Home</h2>
                        <p class="hero_p">Book an online appointment with WeCare’s Services </p>
                        <a href="../appointment/appointment.php" class="primary-btn normal-btn">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Consultation Section Begin -->
    <!--<section class="consultation">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="consultation__form">
                        <div class="section-title">
                            <span class="request_span">REQUEST FOR </span>
                            <h2>VISIT</h2>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="First Name">
                            <input type="text" placeholder="Last Name">
                            <input type="text" placeholder="Email">
                            <div class="datepicker__item">
                                <input type="text" placeholder="Date to Visit" class="datepicker">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <textarea required="required" class="reason_box" placeholder="Reason"></textarea>
                            <button type="submit" class="site-btn">Request</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="consultation__text">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="consultation__text__item">
                                    <div class="section-title">
                                        <span>Welcome to WeCare</span>
                                        <h2>Find Best Care Service With <b>WeCare</b></h2>
                                    </div>
                                    <p>With Years of experience in Caring.Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                                    dolore magna aliqua.</p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="consultation__video set-bg" data-setbg="../image/homed.jpg">
                                    <a href="#" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Consultation Section End -->

    <!-- Popup Section Begin -->
    <div class="popup_msg" id="popup_msg">
    div class="modal" id="modal">
    <div class="modal-header">
    </div>
    <div class="modal-body">
    <button data-close-button class="close-button" onclick="closePopup()">&times;</button>
        <h1>LOGIN</h1>

        <form id="login">
            <span class="login_user_icon"><i class="fa-regular fa-user"></i></span>
            <input type="text" placeholder="Username" class="form-input" autocomplete="off" id="username">
            <p class="error" id="username-error"> * Username is required ! </p>

            <span class="login_password_icon"><i class="fa-solid fa-user-lock"></i></span>
            <input type="password" placeholder="Password" class="form-input" autocomplete="off" id="password">
            <p class="error" id="password-error"> * Password is required ! </p>

            <div>
                <input type="checkbox">
                <span class="remember">Remember me</span> <span class="forgot_link"><a href="#">Forgot?</a></span>
            </div>
            <button class="login-btn" type="button"> Login</button>
        </form>
                
        <p>or login with</p>
        <div class="soc">   
                    <button>
                        <i class="fa fa-facebook-square"></i> Facebook
                    </button>
                    <button>
                        <i class="fa fa-google"></i> Google
                    </button>
                </div>

        <p class="form-footer"> Not a member ? <a href="#"> Sign Up</a></p>
            </div>
        </div>
                

            </div>
    <!-- Popup Section End -->

    <!-- Chooseus Section Begin -->
    <section class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Why choose us?</span>
                        <h2>WeCare Offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="../img/advan-equiptment.png" alt="" class="equiplogo">
                        <h5>Equipment & Programs</h5>
                        <p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="../img/caregiver.png" alt="" class="caregiver">
                        <h5>Qualified Caregivers</h5>
                        <p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="../img/homecare.png" alt="" class="ceftified">
                        <h5>Certified services</h5>
                        <p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                        <img src="../img/Caregiver_logo.png" alt="" class="carelogo">
                        <h5>Care Services</h5>
                        <p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Chooseus Section End -->

    <!-- about section starts  -->

<section class="about" id="about">

<h1 class="heading"> <span>Care</span> for Loved Ones </h1>

<div class="rows">

    <div class="image">
        <img src="../img/careg.jpg" alt="">
    </div>

    <div class="content">
        <h3>We provide care even away from home.</h3>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
        <a href="../about/about.php" class="btn"> Learn more <span class="fas fa-chevron-right"></span> </a>
    </div>

</div>

</section>

<!-- about section ends -->

    <!-- Services Section Begin -->
    <section class="services spad set-bg" data-setbg="../image/service1.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-6">
                    <div class="section-title">
                        <span>Our services</span>
                        <h2>Offers for you</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="services__btn">
                        <a href="../rooms/rooms.php" class="primary-btn">Rooms</a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <span class="#"></span>
                        </div>
                        <div class="services__item__text">
                            <h5>Caregiving</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <span class="#"></span>
                        </div>
                        <div class="services__item__text">
                            <h5>Rehabilatation</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <span class="#"></span>
                        </div>
                        <div class="services__item__text">
                            <h5>Consultation</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="services__item">
                        <div class="services__item__icon">
                            <span class="#"></span>
                        </div>
                        <div class="services__item__text">
                            <h5>Apply For Us</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor aliqua.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span class="team_span">Our Own</span>
                        <h2>Areas</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="../image/walk.jpg" alt="">
                        <h5>Walking Area</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="../image/terrace.jpg" alt="">
                        <h5>Terrace</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="../img/dinning.jpg" alt="">
                        <h5>Dinning Area</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

    <!-- Gallery Begin -->
    <div class="gallery">
        <div class="gallery__container">
            <div class="grid-sizer"></div>
            <div class="gc__item set-bg" data-setbg="../img/4.jpg">
                <a href="../img/4.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="../image/1.jpg">
                <a href="../image/1.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="../image/2.jpg">
                <a href="../image/2.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item gc__item__large set-bg" data-setbg="../image/3.jpg">
                <a href="../image/3.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="../image/4.jpg">
                <a href="../image/4.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="../image/5.jpg">
                <a href="../image/5.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="../image/6.jpg">
                <a href="../image/6.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Room Section Start -->
    <!--<section class="rooms">
      <div class="rowed">
        <h2 class="section-heading">Rooms</h2>
      </div>
      <div class="rowed">
        <div class="column">
          <div class="carded">
            <div class="icon-wrapper">
            <i class="fa fa-bed"></i>
            </div>
            <h3 class="room_h3">Room 1</h3>
            <p class="room_desc">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="carded">
            <div class="icon-wrapper">
            <i class="fa fa-bed"></i>
            </div>
            <h3 class="room_h3">Room 2</h3>
            <p class="room_desc">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="carded">
            <div class="icon-wrapper">
            <i class="fa fa-bed"></i>
            </div>
            <h3 class="room_h3">Room 3</h3>
            <p class="room_desc">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="carded">
            <div class="icon-wrapper">
            <i class="fa fa-bed"></i>
            </div>
            <h3 class="room_h3">Room 4</h3>
            <p class="room_desc">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="carded">
            <div class="icon-wrapper">
              <i class="fa fa-bed"></i>
            </div>
            <h3 class="room_h3">Room 5</h3>
            <p class="room_desc">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
        <div class="column">
          <div class="carded">
            <div class="icon-wrapper">
              <i class="fa fa-bed"></i>
            </div>
            <h3 class="room_h3">Room 6</h3>
            <p class="room_desc">
              Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam
              consequatur necessitatibus eaque.
            </p>
          </div>
        </div>
      </div>
    </section> -->

    <!-- Room Section Ends -->


    <!-- Goals Section Begin -->

<section class="blogs">

<h1 class="heading1"> Mission <span>& Vision</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="#" alt="">
        </div>
        <div class="content">
            <h3>Mission</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
            <a href="#" class="btn"> Learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="#" alt="">
        </div>
        <div class="content">
            <h3>Vision</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
            <a href="#" class="btn"> Learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="#" alt="">
        </div>
        <div class="content">
            <h3>Goals</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Provident, eius.</p>
            <a href="#" class="btn"> Learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
    </div>

</div>

</section>


<!-- Goals Section End -->

    <!-- Footer Section Begin -->
    <footer>
        <div class="containers">
            <div class="row">
                  <div class="col" id="company">
                      <img src="../img/logo.png" alt="" class="logo">
                      <p>
                        We specialized in taking care of your loved ones.
                        Even away from home.
                      </p>
                      <div class="social">
                        <a href="https://www.facebook.com/pages/We-Care-Nursing-Home-zamboanga-city/340004616038796"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-google"></i></a>
                      </div>
                  </div>


                  <div class="col" id="services">
                     <h3>Services</h3>
                     <div class="links">
                        <a href="../services/services.php">Caregiving</a>
                        <a href="#">Treatment</a>
                        <a href="#">Consulting</a>
                        <a href="#">Apply</a>
                     </div>
                  </div>

                  <div class="col" id="useful-links">
                     <h3>Links</h3>
                     <div class="links">
                        <a href="../about/about.php">About</a>
                        <a href="../faq/faq.php">FAQ</a>
                        <a href="#">Our Policy</a>
                        <a href="#">Help</a>
                     </div>
                  </div>

                  <div class="col" id="contact">
                      <h3>Contact</h3>
                      <div class="contact-details">
                         <i class="fa fa-map-marker"></i>
                         <p>Bernardo Drive, 143 S. De Leon Street, Sta. Maria Road, Zamboanga City</p>
                      </div>
                      <div class="contact-details">
                         <i class="fa fa-phone"></i>
                         <p>(062) 991 3236 </p>
                      </div>
                  </div>
            </div>

            <div class="row">
                  <div class="form">
                    <form action="">
                        <input type="text" placeholder="Email here...">
                        <button><i class="fa fa-paper-plane"></i></button>
                    </form>
                  </div>
            </div>

        </div>
        <div class="footer__copyright">
            <div class="cont">
                <div class="row">
                    <div class="col-lg-7">
                      
                        <div class="footer__copyright__text">
                            <p>WeCare Nursing Home, Inc. Copyright</p>
                        </div>
                        
                    </div>
                    <div class="col-lg-5">
                        <ul>
                            <li>All Rights Reserved</li>
                            <li>Terms & Use</li>
                            <li>Privacy Policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

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