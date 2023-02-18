<?php

    $page_title = 'WeCare - Contact';
    require_once '../includes/header.php';
    require_once '../tools/functions.php';
    session_start();

    if(isset($_POST['send'])){
        $mailto = "alamnaerz23@gmail.com"; // Owner Email
        $from = htmlentities($_POST['email']); // Sender Email
        $name = htmlentities(ucfirst($_POST['firstname'])) ." ". htmlentities(ucfirst($_POST['lastname']));
        $phone = htmlentities($_POST['phone']); // Sender Phone Number
        $subject = "WeCare Nursing Home Contact Mail"; // Subject send to owner
        $subject2 = "Your Message is Submitted Successfully │ WeCare Nursing Home"; // Subject for sender
        $message = "Name: " . $name . "\nPhone: " . $phone .  "\nMessage: " . "\n\n". htmlentities($_POST['message']);
        $message2 = "Dear ". $name . ",\n\n" . "Thank you for contacting us! We'll get back to you shortly";
        $header = "From: ". $from;
        $header2 = "From: ". $mailto;
        if(validate_email($_POST)){
            $result = mail($mailto, $subject, $message, $header);
            $result2 = mail($from, $subject2, $message2, $header2);
            if($result){
                $sucess = 'Your Message has been sent. We will get back to you shortly.';
            }
        }else{
            $error = 'Message was not sent.';
        }
    }

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
                    <form action="contact.php" method="post">

                    <?php
                        //Display the error message if there is any.
                        if(isset($error)){
                            echo '<div><p class="error">'.$error.'</p></div>';
                        }else{
                            echo '<div><p class="sucess">'.$sucess.'</p></div>';
                        }
                                    
                    ?>
                    
                    <div class="mb-3">
                        <label for="firstname" class="form-label">FirstName</label>
                        <input type="text" id="firstname" class="form-control" placeholder="Firstname" required name="firstname" value="<?php if(isset($_POST['firstname'])) { echo $_POST['firstname']; } ?>">
                    </div>

                    <div class="mb-3">
                        <label for="lastname" class="form-label">Last Name</label>
                        <input type="text" id="lastname" class="form-control" placeholder="Lastname" required name="lastname" value="<?php if(isset($_POST['lastname'])) { echo $_POST['lastname']; } ?>">
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" placeholder="Email" required name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>">
                    </div>
                    <?php
                        if(isset($_POST['send']) && !validate_email($_POST)){
                    ?>
                                <p class="error">Email is invalid.</p>
                    <?php
                        }
                    ?>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" id="phone" class="form-control" placeholder="Phone Number" required name="phone" required pattern="[0-9]{11}" oninvalid="this.setCustomValidity('Enter 11 Digits Number')" oninput="this.setCustomValidity('')" value="<?php if(isset($_POST['phone'])) { echo $_POST['phone']; } ?>">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Messsage</label>
                        <textarea type="text" id="message" class="form-control" placeholder="How can we help you?" required style="height:150px" name="message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
                    </div>
  
                    <button type="submit" class="btn btn-primary" name="send">Send Message</button>
                    
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