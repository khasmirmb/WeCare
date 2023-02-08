<?php

    $page_title = 'WeCare Nursing Home Inc.';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>

<main>
<!-- Carousel Start -->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                <img src="../images/home-display4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Why Choose WeCare?</h5>
                    <p class="caroul-p">WeCare Offers A lot of Perks That Our Costumer Needs</p>
                    <p><a href="../about/about.php" class="btn btn-warning mt3">Learn More</a></p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="../images/home-display2.jpg" class="d-block w-100" alt="..." style="filter: brightness(50%);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Find Best Care Service With WeCare</h5>
                    <p class="caroul-p">WeCare Offers Years of Experience in Caring</p>
                    <p><a href="#chooseus spad" class="btn btn-warning mt3">Learn More</a></p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="../images/display-4.jpg" class="d-block w-100" alt="..." style="filter: brightness(50%);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Our Own Area</h5>
                    <p class="caroul-p">Walking Area, Terrace and Dinning Area</p>
                    <p><a href="#team spad" class="btn btn-warning mt3">Learn More</a></p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="../images/home-display1.jpg" class="d-block w-100" alt="..." style="filter: brightness(50%);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Our Services</h5>
                    <p class="caroul-p">Caregiving, Memory Care, Rehabilitation, Long Term Care</p>
                    <p><a href="../service/service.php" class="btn btn-warning mt3">Learn More</a></p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Carousel End -->
<main>

<section id="chooseus spad" class="chooseus spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="section-title">
                        <span>Why choose us?</span>
                        <h2>WeCare offers</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                    <i class="fa-solid fa-briefcase-medical"></i>
                        <h5>Best Equipment & Programs</h5>
                        <p>WeCare offers equipment & programs that will make our patient comfortable and enjoy their stay</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                    <i class="fa-solid fa-user-nurse"></i>
                        <h5>Qualified Caregivers & Staff</h5>
                        <p>WeCare caregiver and staff has patience, adaptable, professional and Care that make them qualified.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="chooseus__item">
                    <i class="fa-solid fa-user-doctor"></i>
                        <h5>Your Doctor or Our Doctor</h5>
                        <p>With WeCare you choose which doctor you want to see even potentially your own family doctor.</p>
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

    <!-- Content-->
    <section class="content" id="content">
    <div class="content-container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                <div class="image">
                    <img src="../images/home-display4.jpg" class="rounded mx-auto d-block" alt="">
                </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span class="about_span">Care for loved Ones </span>
                            <h2 class="about_h2">We provide care even away from home.</h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua.</p>
                        <a href="../service/service.php" class="primary-btn normal-btn">Learn more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="team spad" class="team spad">
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
                        <img src="../images/display-6.jpg" alt="">
                        <h5>Entrace</h5>
                    </div>
                </div>
            </div>
        </div>
    </section> 


<?php

require_once '../includes/footer.php';

?>