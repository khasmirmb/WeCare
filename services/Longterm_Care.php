<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aesthetic Template">
    <meta name="keywords" content="Aesthetic, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Services | WeCare Nursing Home, Inc.</title>

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
                        <h2>WeCare Services</h2>
                        <div class="breadcrumb__links">
                            <a href="../home/home.php">Home</a>
                            <span>Services</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Services Section Begin -->
    <section class="services-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-lg-2">
                    <div class="services__details">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__details__title">
                                    <span>Caregiving</span>
                                    <h3>Long Term</h3>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <div class="services__details__widget">
                                
                                </div>
                            </div>
                        </div>
                        <div class="services__details__pic">
                            <img src="../img/long_term.jpg" alt="">
                        </div>
                        <div class="services__details__text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt
                                ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                            viverra maecenas accumsan lacus vel facilisis magnam aliquid. Cupiditate!</p>
                            <p>Aut ipsam consequuntur non rem tenetur dolore consequatur ducimus a labore excepturi quae
                            nisi, quisquam, maxime voluptates magnam aliquid.</p>
                        </div>
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="services__details__item__pic">
                                    <img src="../img/long1.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="services__details__item__pic">
                                    <img src="../img/long2.jpg" alt="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="services__details__item__pic">
                                    <img src="../img/long3.jpeg" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="services__details__desc">
                            <p>Atque eum alias debitis suscipit, sint dignissimos minus quisquam recusandae nostrum quas
                                eligendi odit, fugiat eius rem. Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul class="services__details__feature">
                                        <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                                        <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                                        <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                                        <li><i class="fa fa-check-circle"></i> cumsan lacus vel facilisis.</li>
                                    </ul>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <ul class="services__details__feature">
                                        <li><i class="fa fa-check-circle"></i> Routine and medical care</li>
                                        <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                                        <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                                        <li><i class="fa fa-check-circle"></i> cumsan lacus vel facilisis.</li>
                                    </ul>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Atque eum alias debitis
                                suscipit, sint dignissimos minus quisquam recusandae nostrum quas eligendi odit, fugiat
                                eius rem. Cumque, labore placeat! Velit, vitae. Lorem ipsum dolor sit amet consectetur
                            adipisicing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-lg-1">
                    <div class="services__sidebar">
                        <div class="services__accordion">
                            <div class="services__title">
                                <h4><img src="img/icons/services-icon.png" alt=""> Services & Care</h4>
                            </div>
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading active">
                                        <a data-toggle="collapse" data-target="#collapseOne">
                                            Caregiving
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="../services/services.php">Ederly Care</a></li>
                                                <li><a href="../services/Longterm_Care.php">Long Term Care</a></li>
                                                <li><a href="../services/Rehabilitation.php">Rehabilatation Care</a></li>
                                                <li><a href="../services/Memory_Care.php">Memory Care</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseTwo">
                                            Treatment
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="#">Rehabilatation</a></li>
                                                <li><a href="#">Extensive Treatment</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseThree">
                                            Consulting
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="#">Medical Consultation</a></li>
                                                <li><a href="#">Business Consultation</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseFour">
                                            Apply
                                        </a>
                                    </div>
                                    <div id="collapseFour" class="collapse" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <ul>
                                                <li><a href="#">Caregiver</a></li>
                                                <li><a href="#">OJT Trainee</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                              
                        </div>
                    </div>
                    <div class="services__appoinment">
                        <div class="services__title">
                            <h4>Give us feedback</h4>
                        </div>
                        <form action="#">
                            <input type="text" placeholder="First Name">
                            <input type="text" placeholder="Last Name">
                            <input type="text" placeholder="Email">
                            <textarea required="required" class="feedback_box" placeholder="Feedback"></textarea>
                            <button type="submit" class="site-btn">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

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