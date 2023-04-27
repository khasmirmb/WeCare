<?php

    $page_title = 'WeCare - Feedback';
    require_once '../includes/header.php';
    require_once '../classes/feedback.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    if(isset($_POST['submit'])){

      $feedback = new Feedback;

      if(isset($_POST['rating'])){

        if(strlen($_POST['experience']) > 5 ){

          $feedback->user_id = $_SESSION['logged_id'];
          $feedback->subject = $_POST['rating'];
          $feedback->message = $_POST['experience'];
          $feedback->status = 0;

          if($feedback->add_feedback_by_user()){
            $success = "We have successfully received your feedback. Thank you for submitting.";
          }
    
        } else {
          $short_error = "Your Message was too short.";
        }

      } else {
        $select_error = "Please Select a Rating.";
      }
  
    }

    require_once '../includes/navbar.php';
    

?>
<div class="content pt-3">

    <div class="container">
    <div class="card">
    <h4 class="card-header">Give Feedback</h4> <!--header-->
  <div class="card-body">
    <div class="form-group">
      <form action="feedback.php" method="POST">
      <label for="rate-experience" class="form-label">How would you rate your experience?</label>
      <div class="text-center mb-3"><!--Emoticons start--->
        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">

          <input type="radio" class="btn-check" name="rating" id="option1" autocomplete="off" value="Very Satisfied">
          <label class="btn btn-outline-dark" for="option1"><i class="fa-regular fa-face-smile-beam fa-4x"></i></label>

          <input type="radio" class="btn-check" name="rating" id="option2" autocomplete="off" value="Satisfied">
          <label class="btn btn-outline-dark" for="option2"><i class="fa-regular fa-face-smile fa-4x"></i></label>

          <input type="radio" class="btn-check" name="rating" id="option3" autocomplete="off" value="Neutral">
          <label class="btn btn-outline-dark" for="option3"><i class="fa-regular fa-face-meh fa-4x"></i></label>

          <input type="radio" class="btn-check" name="rating" id="option4" autocomplete="off" value="Dissatisfied">
          <label class="btn btn-outline-dark" for="option4"><i class="fa-regular fa-face-frown fa-4x"></i></label>

          <input type="radio" class="btn-check" name="rating" id="option5" autocomplete="off" value="Very Dissatisfied">
          <label class="btn btn-outline-dark" for="option5"><i class="fa-regular fa-face-angry fa-4x"></i></label>

        </div>
      </div><!--Emoticons end-->
      <label for="experience" class="form-label">Please tell us about your experience:</label>
      <textarea class="form-control" id="experience" name="experience"rows="3" required></textarea>
      <br>
      <?php
        //Display the error message if there is any.
        if(isset($success)){
            echo '<div><p class="text-success mt-2 mb-2">'.$success.'</p></div>';
        }
        if(isset($short_error)){
          echo '<div><p class="text-danger mt-2 mb-2">'.$short_error.'</p></div>';
        } 
        if(isset($select_error)){
          echo '<div><p class="text-danger mt-2 mb-2">'.$select_error.'</p></div>';
        } 
      ?>
      <div class="justify-content-end d-flex">
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#feedback-confirm" >Send</button><!--button to send-->
      </div>
  
      <!-- Modal -->
      <div class="modal fade" id="feedback-confirm" tabindex="-1" aria-labelledby="feedback-confirmLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="feedback-confirmLabel">Feedback Confirmation</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
            Are you sure to send a feedback?
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
              <button type="submit" class="btn btn-primary" name="submit">Yes</button>
            </div>
          </div>
        </div>
      </div>
      </form>
    </div>
  </div>
</div><!--End card-->
</div>
</div><!--end of the content-->

<script>

if ( window.history.replaceState ) {
  window.history.replaceState( null, null, window.location.href );
}
</script>