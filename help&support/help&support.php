<?php

    $page_title = 'WeCare - Help & Support';
    require_once '../includes/header.php';
    require_once '../classes/appointment.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
    

?>
<div class="container pt-5">
<h1 class="text-center font-weight-bold">How can we help you?</h1>

<div class="d-flex justify-content-center align-items-center pt-4">
  <form class="d-flex">
    <input class="form-control me-2" type="search" placeholder="Start typing to search..." aria-label="Search">
    <button class="btn btn-outline-success" type="submit" style="background: #00ACB2; color: #fff;">Search</button>
  </form>
</div>

<div class="d-flex justify-content-center align-items-center pt-4">
  <p class="font-weight-normal">Or <strong>choose</strong> an option below.</p>
</div>

<!--3 buttons -->
<div class="row">
  <div class="col-12 col-lg-4 pt-5 pb-3">
    <a href="#" class="text-decoration-none">
      <button type="button" class="btn btn-lg shadow-lg btn-shadow-light">
        <div class="card border-0">
          <img src="../images/icons.png" class="card-img-top" alt="guide">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Guides</h5>
            <p class="card-text font-weight-normal">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </button>
    </a>
  </div>

  <div class="col-12 col-lg-4 pt-5 pb-3">
    <a href="#" class="text-decoration-none">
      <button type="button" class="btn btn-lg shadow-lg btn-shadow-light">
        <div class="card border-0">
          <img src="../images/faq.png" class="card-img-top" alt="faq">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">FAQ</h5>
            <p class="card-text font-weight-normal">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </button>
    </a>
  </div>

  <div class="col-12 col-lg-4 pt-5 pb-3">
    <a href="#" class="text-decoration-none">
      <button type="button" class="btn btn-lg shadow-lg btn-shadow-light">
        <div class="card border-0">
          <img src="../images/community.png" class="card-img-top" alt="community">
          <div class="card-body">
            <h5 class="card-title font-weight-bold">Community</h5>
            <p class="card-text font-weight-normal">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
          </div>
        </div>
      </button>
    </a>
  </div>
</div>

<!--title part 2-->
<h2 class="text-center pt-5 font-weight-bold">Get Started</h2>
<div class="d-flex justify-content-center align-items-center">
    <p class="h5 pb-3 font-weight-normal">Here are some of the most frequently asked questions.</p>
</div>

<!--accordion-->
<div class="pt-3 pb-4">
<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        Accordion Item #1
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
        <strong>This is the first item's accordion body.</strong> It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
        Accordion Item #2
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>This is the second item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
        Accordion Item #3
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
        <strong>This is the third item's accordion body.</strong> It is hidden by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables. It's also worth noting that just about any HTML can go within the <code>.accordion-body</code>, though the transition does limit overflow.
      </div>
    </div>
  </div>
</div>
</div>


</div><!--Inside the container--->