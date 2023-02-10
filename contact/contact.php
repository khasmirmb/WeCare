<?php

    $page_title = 'WeCare - Contact';
    require_once '../includes/header.php';
    session_start();

    require_once '../includes/navbar.php';
?>

<div class="contact-area mb-7">
    <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="section-title">
                    <!--Section heading-->
                    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact Us</h2>
                    <!--Section description-->
                    <p class="text-center w-responsive mx-auto mb-4">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                </div>
            </div>

        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12">
                <div class="contact-form">
                    <h2 class="h1-responsive font-weight-bold text-center my-2">Send Message</h2>
                    <form>
                    
                    <div class="mb-3">
                        <label for="firstname" class="form-label">FirstName</label>
                        <input type="text" id="firstname" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" id="lastname" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" id="email"class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="number" id="phone"class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Messsage</label>
                        <textarea type="text" id="message" class="form-control" required></textarea>
                    </div>
  
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
            <div class="map-area col-md-6 col-sm-12 col-xs-12 text-center">
            <h2 class="h1-responsive font-weight-bold text-center my-3">Google Map</h2>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3960.6920639767577!2d122.0685292148573!3d6.927363220258151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32504192be79c72d%3A0x16f9d93319ea27f8!2sWeCare%20Nursing%20Home%2C%20Inc.!5e0!3m2!1sen!2sph!4v1675539411670!5m2!1sen!2sph" class="h-40 w-100 border" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            <div class="icon-map-area">

            <i class="fa-solid fa-location-dot mt-4"></i>     
            <p class="text-center w-responsive mx-auto mb-4">Bernardo Drive, 143 S. De Leon Street, Sta. Maria Road</p>
            
            <i class="fa-solid fa-phone"></i>
            <p class="text-center w-responsive mx-auto mb-4">(062) 991 3236</p>

            <i class="fa-solid fa-envelope"></i>
            <p class="text-center w-responsive mx-auto mb-4">W.C@yahoo.com</p>
        
            </div>
            
            </div>
    </div>
</div>


<?php

require_once '../includes/footer.php';

?>