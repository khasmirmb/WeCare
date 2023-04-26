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
    <button class="btn btn-outline-secondary" type="submit" style="background: #00ACB2; color: #fff; border: #00ACB2;">Search</button>
  </form>
</div>

<div class="d-flex justify-content-center align-items-center pt-4">
  <p class="font-weight-normal">Or <strong>choose</strong> an option below.</p>
</div>

<!--3 buttons -->
<!--
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
            <p class="card-text font-weight-normal">Provides answers to common questions about WeCare Nursing Home, our services, and policies. Whether you are a family member, healthcare provider, or potential resident, our FAQs can help you find the information you need quickly and easily.</p>
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
-->

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
      What types of care services does WeCare Nursing Home offer?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
      <div class="accordion-body">
      WeCare Nursing Home offers a wide variety of medical and personal care services for our elderly residents. These services include nursing care, elderly care, long-term care, rehabilitation, memory care, and physical therapy. Our dedicated staff is committed to providing the highest quality care to our residents and ensuring that they are comfortable, safe, and well-cared for. Whether a resident requires assistance with daily activities, medical treatments, or specialized care for memory-related issues, we are here to provide compassionate and comprehensive support.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
      Does WeCare Nursing Home accept online payments for services?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
      <div class="accordion-body">
      WeCare Nursing Home currently does not accept online transactions for payment of services. We do accept personal transactions only. Our staff is available to assist with any questions regarding payment or financial arrangements, and we strive to provide a seamless and hassle-free experience for our residents and their families.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Who is eligible for admission to your home?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
      Late 40's and is non-ambulant.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      How can I request a quotation for a room at WeCare Nursing Home?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
      We make it easy for interested parties to request a quotation for a room at WeCare Nursing Home. Simply contact us directly to schedule a visit and tour of our facilities. During the visit, one of our staff members will be happy to discuss our various room options and associated costs, as well as answer any other questions you may have. Alternatively, you can also call us to request a quotation or to receive more information about our services and rates.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      How long can someone stay at WeCare Nursing Home?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
      At WeCare Nursing Home, we offer both short-term and long-term care options for our residents. The length of stay can vary depending on the individual's needs and the type of care required.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      What are the visiting hours for WeCare Nursing Home?
      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
      WeCare Nursing Home welcomes visitors during our designated visiting hours, which are from 9:00 am to 3:00 pm. We understand the importance of family and friends in our residents' lives and encourage visits from loved ones as much as possible. During the visiting hours, visitors can spend time with their loved ones, enjoy meals together, and participate in activities and events. However, to ensure the safety and well-being of our residents, we ask that visitors comply with our visiting policies and guidelines, which may include signing in and out, wearing masks, and adhering to social distancing guidelines. We appreciate your cooperation and understanding in helping us maintain a safe and welcoming environment for everyone.
      </div>
    </div>
  </div>
  <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
      Do I need to make an appointment to visit WeCare Nursing Home?

      </button>
    </h2>
    <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
      <div class="accordion-body">
      To ensure that we can provide the best possible experience for you and your loved one, we highly recommend scheduling an appointment prior to your visit to WeCare Nursing Home. By scheduling an appointment, we can ensure that a staff member is available to provide you with a personalized tour of our facilities, answer any questions you may have, and address any concerns. We also ask that visitors comply with our visiting policies and guidelines to ensure the safety and well-being of our residents. To schedule an appointment, fill out the form on the website or simply contact us directly by phone, and we will be happy to arrange a time that is convenient for you.
      </div>
    </div>
  </div>

</div>
</div>


</div><!--Inside the container--->s