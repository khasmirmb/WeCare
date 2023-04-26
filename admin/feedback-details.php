<?php

  $page_title = 'WeCare Admin - Feedback Details';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

?>
<div class="content pt-3">

<button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../admin/feedback.php"><i class="fa-solid fa-arrow-left"></i> Back </a></button>


</div>




<?php

require_once '../includes/admin-footer.php';

?>