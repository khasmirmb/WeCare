<body>

    <!-- Offcanvas Menu Begin -->
    <div class="offcanvas-menu-overlay"></div>
    <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__logo">
            <a href="../homepage/home.php"><img src="../images/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__btn">
        <?php
            if(!isset($_SESSION['logged_id'])){
        ?>
            <a href="../account/signin.php" class="primary-btn">Sign In</a>
        <?php } ?>
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
                        <a href="../homepage/home.php"><img src="../images/logo.png" alt="" class="WeCare_logo"></a>
                        <a href="../homepage/home.php" class="link_home"><h1 class="logo_text">WeCare</a></h1>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="header__menu__option">
                        <nav class="header__menu">
                            <ul>
                                <li class="active"><a href="../homepage/home.php">Home</a></li>
                                <li><a href="../about/about.php">About</a></li>
                                <li><a href="../services/services.php">Services</a>
                                    <ul class="dropdown">
                                        <li><a href="../rooms/rooms.php">Rooms</a></li>
                                        <li><a href="#">Apply</a></li>
                                    </ul>
                                </li>
                                <li><a href="../history/history.php">History</a></li>
                                <li><a href="../contact/contact.php">Contact</a></li>
                                <?php
                                if(isset($_SESSION['logged_id'])){
                                ?>
                                <li><a href="../appointment/appointment.php">Appointment</a></li>
                                <li><i class="fa-solid fa-bell"></i></li>
                                <?php } ?>
                            </ul>
                        </nav>
                        <div class="header__btn">
                        <?php
                                if(!isset($_SESSION['logged_id'])){
                            ?>
                            <button onclick="location.href='../account/signin.php'" id="login_show">Sign In</button>
                        <?php } ?>
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