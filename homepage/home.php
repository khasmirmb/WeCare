<?php

    $page_title = 'WeCare Nursing Home Inc.';
    require_once '../includes/header.php';
    session_start();

    require_once '../includes/navbar.php';
?>

        <!-- Carousel Start -->
    <section>
      <div class="carousel slide" data-bs-ride="carousel" id="carouselExampleIndicators">
        <div class="carousel-indicators">
        <button aria-label="Slide 1" class="active" data-bs-slide-to="0" data-bs-target="#carouselExampleIndicators" type="button"></button>

        <button aria-label="Slide 2" data-bs-slide-to="1" data-bs-target="#carouselExampleIndicators" type="button"></button>

        <button aria-label="Slide 3" data-bs-slide-to="2" data-bs-target="#carouselExampleIndicators" type="button"></button>

        <button aria-label="Slide 4" data-bs-slide-to="3" data-bs-target="#carouselExampleIndicators" type="button"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item carousel-image bg-img-1 active">
            <div class="carousel-caption">
                <h3 class="fw-bolder fst-italic text-white display-4" >Why Choose WeCare?</strong></h3>
                <p>WeCare Offers A lot of Perks That Our Costumer Needs</p>
                <p><a href="#choose-us" class="btn btn-info mt3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item carousel-image bg-img-2">
            <div class="carousel-caption">
                <h3 class="fw-bolder fst-italic text-white display-4" >Find Best Care Service With WeCare</strong></h3>
                <p>WeCare Offers Years of Experience in Caring</p>
                <p><a href="#" class="btn btn-info mt3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item carousel-image bg-img-3">
            <div class="carousel-caption">
                <h3 class="fw-bolder fst-italic text-white display-4" >Our Own Area</strong></h3>
                <p>Walking Area, Terrace and Dinning Area</p>
                <p><a href="#" class="btn btn-info mt3">Learn More</a></p>
            </div>
          </div>
          <div class="carousel-item carousel-image bg-img-4">
            <div class="carousel-caption">
                <h3 class="fw-bolder fst-italic text-white display-4" >Our Services</strong></h3>
                <p>Check Out Our Different Types of Bundle</p>
                <p><a href="#" class="btn btn-info mt3">Learn More</a></p>
            </div>
          </div>
        </div><button class="carousel-control-prev" data-bs-slide="prev" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-prev-icon"></span> <span class="visually-hidden">Previous</span></button> <button class="carousel-control-next" data-bs-slide="next" data-bs-target="#carouselExampleIndicators" type="button"><span aria-hidden="true" class="carousel-control-next-icon"></span> <span class="visually-hidden">Next</span></button>
      </div>
     </section>
        <!-- Carousel End -->

    <!-- Choose Us -->
    <div class="choose-us-container" id="choose-us">
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
                        <h5>Equipment & Programs</h5>
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
    </div>
    <!-- Choose Us End -->

    <!-- Own Area -->
    <div class="own-area-container" id="own-area">
        <div class="container mb-5">
            <div class="col text-center">
                <div class="section-title">
                    <span class="team_span">Our Own</span>
                    <h2>Areas</h2>
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
                        <h5>Entrance</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Own Area End -->

<?php

require_once '../includes/footer.php';

?>