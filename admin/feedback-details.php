<?php

  $page_title = 'WeCare Admin - Feedback Details';
  require_once '../includes/admin-header.php';
  require_once '../classes/feedback.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  $feedback = new feedback;

  if($feedback->fetch_feedback_info($_GET['id'])){

    $data = $feedback->fetch_feedback_info($_GET['id']);

    $feedback->id = $data['id'];
    $feedback->subject = $data['subject'];
    $feedback->message = $data['message'];
    $feedback->firstname = $data['fname'];
    $feedback->middlename = $data['mname'];
    $feedback->lastname = $data['lname'];

    $feedback->read_feedback($feedback->id);

  }

  require_once '../includes/admin-sidebar.php';

?>
<div class="content pt-3">

<button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/feedback.php"><i class="fa-solid fa-arrow-left"></i> Back </a></button>

<div class="card mt-5">
  <div class="card-header">
    <h4><?php echo $feedback->subject ?></h4>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
      <p class="fs-5"><?php echo $feedback->message ?></p>
      <footer class="blockquote-footer mt-3"><cite title="Source Title"><?php echo $feedback->firstname . " " . $feedback->middlename[0] . ". " . $feedback->lastname  ?></cite></footer>
    </blockquote>
  </div>
</div>


</div>




<?php

require_once '../includes/admin-footer.php';

?>