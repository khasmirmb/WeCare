<?php

    $page_title = 'WeCare - Contact Us';
    require_once '../includes/header.php';
    session_start();

    require_once '../includes/topnav.php';


?>

<!-- Contact Section Begin -->
<div class="section-header">
             <div class="contact_container">
                 <h2 class="contact_h2">Contact Us</h2>
                     <p class="contact_p">Getting in touch is now easy. Email us with any question or inquries. We would be happy to answer your questions</p>
                </div>
            </div>

<section class="contact spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__widget">
                        <div class="contact__widget__icon">
                            <i class="fa fa-facebook"></i>
                        </div>
                        <div class="contact__widget__text">
                            <h5>Facebook</h5>
                            <p>WeCare facebook</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__widget">
                        <div class="contact__widget__icon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <div class="contact__widget__text">
                            <h5>twitter</h5>
                            <p>@WeCare twitter</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="contact__widget">
                        <div class="contact__widget__icon">
                            <i class="fa fa-google"></i>
                        </div>
                        <div class="contact__widget__text">
                            <h5>Email</h5>
                            <p>Support@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>

            <section class="contact"> 
                <div class="container_icon">
                    <div class="contactInfo">
                        <div class="box">
                            <div class="icon"></div>
                            <div class="text">
                    <h3> Address <i class="fa fa-map-marker" aria-hidden="true"></i></h3>
                    <p> Bernardo Drive, 143 S. De Leon Street, <br> Sta. Maria Road, Zamboanga, <br> 7000 Zamboanga del Sur </p>
             </div>
         </div>
                <div class="box">
                    <div class="icon"></div>
                        <div class="text">
                                <h3> Phone <i class="fa fa-phone" aria-hidden="true"></i> </h3>
                                 <p> (062) 991 3236 </p>
                            </div>
                        </div>
                <div class="box">
                    <div class="icon"></div>
                        <div class="text">
                            <h3> Email <i class="fa fa-envelope-o" aria-hidden="true"></i></h3>
                                <p> WC@yahoo.com </p>
                            </div>
                        </div>
                    </div>

                        <div class="contactForm">
                            <form clas="cont_form">
                                <h2> Send Message </h2>
                                    <div class="inputBox">
                                    <input type="text" name="" required="required">
                                    <span> First Name </span>
                                </div>  
                                <div class="inputBox">
                                    <input type="text" name="" required="required">
                                    <span> Last Name </span>
                                </div> 

                                <div class="inputBox">
                                    <input type="number" name="" required="required">
                                    <span> Contact No. </span>
                                </div>

                                <div class="inputBox">
                                    <input type="email" name="" required="required">
                                    <span> Email </span>
                                </div> 

                                <div class="inputBox">
                                    <textarea required="required"></textarea>
                                    <span> Type your Message...</span>
                                </div>  

                            <div class="inputBox">
                                <input type="submit" name="" value="send">
                                </form>
                        </div>
                     </div>
                </div>
            </section>
        </div>
    </div>
</div>
</section>
    <!-- Contact Section End -->

<?php

    require_once '../includes/footer.php';

?>