<?php

    $page_title = 'WeCare - About';
    require_once '../includes/header.php';
    session_start();

    require_once '../includes/navbar.php';
?>

         <!-- About Section Begin -->
   <section class="about spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                <div class="image">
                    <img src="../images/home-display1.jpg" class="rounded mx-auto d-block" alt="">
                </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="about__text">
                        <div class="section-title">
                            <span class="about_span">ABOUT OUR BUSINESS</span>
                            <h2 class="about_h2">Welcome to WeCare <br> Nursing Home, Inc.</h2>
                        </div>
                        <p>WeCare Nursing Home Inc. is a dedicated healthcare provider committed to providing compassionate and professional nursing care services to elderly residents in a comfortable and nurturing environment.</p>
                        <ul>
                            <li><i class="fa fa-check-circle"></i> Routine and Giving care</li>
                            <li><i class="fa fa-check-circle"></i> Excellence in Healthcare every</li>
                            <li><i class="fa fa-check-circle"></i> Building a healthy environment</li>
                        </ul>
                        <a href="../contact/contact.php" class="btn btn-info">Contact us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Vision -->
    <div class="container pt-3 pb-3">
    <div class="card shadow border-0">
        <div class="card-body">
            <h1 class="text-center pb-3">Vision</h1>
            <h5 class="ms-4">A vision statement is a company's road map. Indicating both what the company wants to become and guiding transformational initiatives by setting a defined direction for the company's growth. Vision statements undergo minimal revision during the life of a business.</h5>
            <ul class="list-style pt-3 pb-3">
            <li class="ms-5 pt-2">To provide quality care and treatment for the elders.</li>
            <li class="ms-5 pt-2">To build up patient's individual physical, social, emotional, and spiritual well-being.</li>
            <li class="ms-5 pt-2">To give proper nourishment to patient for rapid recovery.</li>
            <li class="ms-5 pt-2">To support the patient will full force of professional care managers consisting with physicians, physical therapists, nutritionist, nurses, social workers and caregivers.</li>
            <li class="ms-5 pt-2">To maintain a state of equilibrium between the patient and the family.</li>
            <li class="ms-5 pt-2">To act as mediator by bridging any untoward gap between patient and family.</li>
            <li class="ms-5 pt-2">To improve the economic quantity of life of the patient that they may eventually contribute to a sustainable economy of the nation.</li>
            </ul>
        </div>
        </div>
    </div>
    <!-- Vision -->
   
      <!-- Mission -->
    <div class="container pt-3 pb-4">
    <div class="card shadow border-0">
        <div class="card-body pb-3">
            <h1 class="text-center pb-3">Mission</h1>
            <h5 class="ms-4">A mission is a constant reminder to its employees of why the company exist and why the founders envisioned when they put their fame and fortune at risk to breathe life into their dreams.</h5>
            <ul class="list-style pt-3 pb-3">
            <li class="ms-5 pt-2">WeCare Nursing Home Inc. believes that education and training are the essential factors that mold the total persona, and no educational and training program is complete without strengthening the physical, spiritual, moral, emotional, and social foundation of a man.</li>
            <li class="ms-5 pt-2">WeCare Nursing Home Inc. responds to the call for care and special treatment of the patient that members of the family could not extend because of certain limitations. This special care will enhance the quality of life both patient and the family through medical and professional intervention and therapy.</li>
            </ul>
        </div>
        </div>
    </div>
     <!-- Mission -->

<?php

require_once '../includes/footer.php';

?>