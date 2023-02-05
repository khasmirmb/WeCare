<?php

    $page_title = 'WeCare - About';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>

         <!-- About Section Begin -->
   <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="about__us set-bg" data-setbg="../images/home-display4.jpg">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span class="about_span">ABOUT OUR BUSINESS</span>
                            <h2 class="about_h2">Welcome to WeCare <br> Nursing Home, Inc.</h2>
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

    <!-- Team Founder Begin -->
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
<!-- Team Founder Begin -->

<?php

require_once '../includes/footer.php';

?>