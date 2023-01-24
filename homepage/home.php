<?php
    $page_title = 'WeCare - Nursing Home, Inc.';
    require_once '../includes/header.php';
    session_start();

    require_once '../includes/topnav.php';

?>
    <!-- Hero Section Begin -->
    <section class="hero spad set-bg" data-setbg="../images/home-bg.jpg" >
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
                    <i class="fa-solid fa-briefcase-medical"></i>
                        <h5>Equipment & Programs</h5>
                        <p>WeCare offers equipment & programs that will make our patient comfortable and enjoy their stay</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                    <i class="fa-solid fa-user-nurse"></i>
                        <h5>Qualified Caregivers</h5>
                        <p>Lorem ipsum amet, consectetur adipiscing elit, sed do eiusmod tempor cididunt facilisis.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                    <i class="fa-solid fa-user-doctor"></i>
                        <h5>Your Doctor or Our Doctor</h5>
                        <p>With WeCare you choose which doctor you want to see even potentially your own family doctor. If you don’t see your family doctor on our platform, tell her/him about us! We’d love to have them join!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                    <i class="fa-solid fa-hand-holding-medical"></i>
                        <h5>Most Convenient Care and Services</h5>
                        <p>Connect directly to WeCare, by phone, video or secure messaging from wherever you are.</p>
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
    <section class="services spad set-bg" data-setbg="../images/service1.jpg">
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
                        <img src="../images/walk.jpg" alt="">
                        <h5>Walking Area</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="../images/terrace.jpg" alt="">
                        <h5>Terrace</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="team__item">
                        <img src="../imgages/dinning.jpg" alt="">
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
            <div class="gc__item set-bg" data-setbg="../images/display-1.jpg">
                <a href="../images/display-1.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="../images/display-2.jpg">
                <a href="../images/display-2.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="../images/display-3.jpg">
                <a href="../images/display-3.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item gc__item__large set-bg" data-setbg="../images/display-4.jpg">
                <a href="../images/display-4.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="../images/display-5.jpg">
                <a href="../images/display-6.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="../images/display-7.jpg">
                <a href="../images/display-7.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
            <div class="gc__item set-bg" data-setbg="../images/display-8.jpg">
                <a href="../images/display-8.jpg" class="image-popup"><i class="fa fa-search-plus"></i></a>
            </div>
        </div>
    </div>
    <!-- Gallery End -->


<?php

    require_once '../includes/footer.php';

?>