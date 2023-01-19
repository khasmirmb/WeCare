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
    <title>About | WeCare Nursing Home, Inc.</title>

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
                        <h2>About Us</h2>
                        <div class="breadcrumb__links">
                            <a href="../home/home.php">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Section Begin -->
    <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__video set-bg" data-setbg="../image/service.jpg">
                        <a href="https://www.youtube.com/watch?v=y5Wde5pOwTQ&ab_channel=JoWhitfield1" class="play-btn video-popup"><i class="fa fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span>ABOUT OUR BUSINESS</span>
                            <h2>Welcome to WeCare <br> Nursing Home, Inc.</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                        <ul>
                            <li><i class="fa fa-check-circle"></i> Routine and Giving care</li>
                            <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                            <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                        </ul>
                        <a href="../contact/contact.php" class="primary-btn normal-btn">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

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

    <!-- Testimonials Section Begin -->
    <section class="testimonials spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span class="testimonial_span">Testimonials</span>
                        <h2>Reviews</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="testimonial__slider owl-carousel">
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Adhyne</h5>
                                    <span>Client</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                            vel facilisis ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Khasmir</h5>
                                    <span>Client</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                            vel facilisis ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Mikaela</h5>
                                    <span>Client</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                            vel facilisis ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Samantha</h5>
                                    <span>Client</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                            vel facilisis ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Eljen</h5>
                                    <span>Client</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                            vel facilisis ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="testimonial__item">
                            <div class="testimonial__author">
                                <div class="testimonial__author__icon">
                                    <i class="fa fa-quote-left"></i>
                                </div>
                                <div class="testimonial__author__text">
                                    <h5>Aila</h5>
                                    <span>Client</span>
                                </div>
                            </div>
                            <div class="rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus
                            vel facilisis ut labore et dolore magna aliqua accumsan lacus vel facilisis. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonials Section End -->

    <!-- Team Section Begin -->
    <section class="team spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Our Team</span>
                        <h2>Founders</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="../img/user.jpeg" alt="">
                        <h5>Gianelli Delos Santos</h5>
                        <span>Founder</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="../img/user.jpeg" alt="">
                        <h5>Sheila Padua</h5>
                        <span>Founder</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="../img/user.jpeg" alt="">
                        <h5>Jarah Bernardo</h5>
                        <span>Founder</span>
                        <div class="team__item__social">
                            <a href="#"><i class="fab fa-facebook"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-dribbble"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Team Section End -->

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