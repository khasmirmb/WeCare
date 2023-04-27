<?php

  $page_title = 'WeCare Admin - Feedback';
  require_once '../includes/admin-header.php';
  require_once '../classes/feedback.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  $feedback = new Feedback;



  require_once '../includes/admin-sidebar.php';

?>

<div class="content">
<div class="container align-items-center pt-3">
    <h2 class="pb-3" style="color: #00ACB2;">Feedback</h2><!--Feedback title-->

    <div class="pt-2 mb-3">
        <ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="pills-tab" role="tablist">
                <li class="nav-item bg-secondary">
                <button class="nav-link active text-white" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    All Feedback
                </button>
                </li>
                <li class="nav-item bg-secondary">
                <button class="nav-link text-white" id="pills-unread-tab" data-bs-toggle="pill" data-bs-target="#pills-unread" type="button" role="tab" aria-controls="pills-unread" aria-selected="false">
                    Unread
                </button>
                </li>
                <li class="nav-item bg-secondary">
                <button class="nav-link text-white" id="pills-read-tab" data-bs-toggle="pill" data-bs-target="#pills-read" type="button" role="tab" aria-controls="pills-read" aria-selected="false">
                    Read
                </button>
                </li>
        </ul>
	</div>

    <div class="tab-content pt-1" id="pills-tabContent">

        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <!-- Feedback Here -->
        <ul class="list-group pt-3">
            <?php

            if(!empty($feedback->show_all_feedback()))
            {
                $feedback_list = $feedback->show_all_feedback();


                foreach($feedback_list as $data){ ?>

                    <li class="list-group-item <?php if($data['status'] == 0){ echo "bg-dark"; } ?>"><a href="feedback-details.php?id=<?php echo $data['id'] ?>" class="<?php if($data['status'] == 0){ echo "text-white"; } else { echo "text-dark"; } ?>" style="text-decoration: none;"><i class="fa-solid fa-envelope me-2"></i><strong><?php echo $data['fname'] . " " . $data['mname'][0] . ". " . $data['lname'] ?></strong> : <strong><?php echo $data['subject'] ?></strong></a></li>
                        
                <?php }


            } else {

            ?>
    
                <li class="list-group-item"><a href="#" class="text-dark" style="text-decoration: none;"><strong>There's currently no feedback..</strong></a></li>
    
            <?php } ?>
        </ul>
        </div>

        <div class="tab-pane fade" id="pills-unread" role="tabpanel" aria-labelledby="pills-unread-tab">
        <!-- Feedback Here -->
        <ul class="list-group pt-3">
        <?php

        if(!empty($feedback->show_unread_feedback()))
        {
            $feedback_unread = $feedback->show_unread_feedback();


            foreach($feedback_unread as $data){ ?>

                <li class="list-group-item"><a href="feedback-details.php?id=<?php echo $data['id'] ?>" class="text-dark" style="text-decoration: none;"><i class="fa-solid fa-envelope me-2"></i><strong><?php echo $data['fname'] . " " . $data['mname'][0] . ". " . $data['lname'] ?></strong> : <strong><?php echo $data['subject'] ?></strong></a></li>
                    
            <?php }


        } else {

        ?>

            <li class="list-group-item"><a href="#" class="text-dark" style="text-decoration: none;"><strong>There's currently no unread feedback..</strong></a></li>

        <?php } ?>

        </ul>
        </div>

        <div class="tab-pane fade" id="pills-read" role="tabpanel" aria-labelledby="pills-read-tab">
        <!-- Feedback Here -->
        <ul class="list-group pt-3">
        <?php

        if(!empty($feedback->show_read_feedback()))
        {
            $feedback_read = $feedback->show_read_feedback();


            foreach($feedback_read as $data){ ?>

                <li class="list-group-item"><a href="feedback-details.php?id=<?php echo $data['id'] ?>" class="text-dark" style="text-decoration: none;"><i class="fa-solid fa-envelope me-2"></i><strong><?php echo $data['fname'] . " " . $data['mname'][0] . ". " . $data['lname'] ?></strong> : <strong><?php echo $data['subject'] ?></strong></a></li>
                    
            <?php }


        } else {

        ?>

            <li class="list-group-item"><a href="#" class="text-dark" style="text-decoration: none;"><strong>There's currently no feedback..</strong></a></li>

        <?php } ?>
        </ul>
        </div>
    </div>

</div><!--End of all-->
</div>

<?php

require_once '../includes/admin-footer.php';

?>