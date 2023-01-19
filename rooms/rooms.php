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
    <title>Room | WeCare Nursing Home, Inc.</title>

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
            <a href="#"><i class="fa fas-twitter"></i></a>
            <a href="#"><i class="fa fas-instagram"></i></a>
            <a href="#"><i class="fa fas-dribbble"></i></a>
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
                            <a href="#" class="log_primary_btn" id="log_primary_btn" onclick="openPopup()">Login</a>
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

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option spad set-bg" data-setbg="../image/homes.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Rooms</h2>
                        <div class="breadcrumb__links">
                            <a href="../home/home.php">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

   <!-- Room Section Start -->
   <div class="containerers">

<h1 class="heading">Offers</h1>

<div class="box-container">

    <div class="box">
        <img src="image/icon-1.png" alt="">
        <h3>Room 1</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
        <a href="#" class="btn">Check</a>
    </div>

    <div class="box">
        <img src="image/icon-2.png" alt="">
        <h3>Room 2</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
        <a href="#" class="btn">Check</a>
    </div>

    <div class="box">
        <img src="image/icon-3.png" alt="">
        <h3>Room 3</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
        <a href="#" class="btn">Check</a>
    </div>

    <div class="box">
        <img src="image/icon-4.png" alt="">
        <h3>Room 4</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
        <a href="#" class="btn">Check</a>
    </div>

    <div class="box">
        <img src="image/icon-5.png" alt="">
        <h3>Room 5</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
        <a href="#" class="btn">Check</a>
    </div>

    <div class="box">
        <img src="image/icon-6.png" alt="">
        <h3>Room 6</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, commodi?</p>
        <a href="#" class="btn">Check</a>
    </div>

</div>

</div>

    <!-- Room Section Ends -->

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