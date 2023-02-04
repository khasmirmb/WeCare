<?php

    $page_title = 'WeCare - Home';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>

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
                <img src="../images/home-display1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Why Choose WeCare?</h5>
                    <p>WeCare Offers A lot of Perks That Our Costumer Needs.</p>
                    <p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="../images/home-display2.jpg" class="d-block w-100" alt="..." style="filter: brightness(50%);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Find Best Care Service With WeCare</h5>
                    <p>WeCare Offers Years of Experience in Caring.</p>
                    <p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="../images/home-display3.jpg" class="d-block w-100" alt="..." style="filter: brightness(50%);">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Our Own Area</h5>
                    <p>Walking Area, Terrace and Dinning Area</p>
                    <p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
                </div>
                </div>
                <div class="carousel-item">
                <img src="../images/home-display4.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Our Services</h5>
                    <p>Caregiving, Memory Care, Rehabilitation, Long Term Care</p>
                    <p><a href="#" class="btn btn-warning mt3">Learn More</a></p>
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

<?php

require_once '../includes/footer.php';

?>