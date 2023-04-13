<?php

    $page_title = 'WeCare - Notification';
    require_once '../includes/header.php';
    require_once '../classes/notification.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    $notification = new Notification;

    require_once '../includes/navbar.php';
    

?>

<div class="container pt-3"><!--Start of container-->
    <div class="header-monitoring pb-2"><!--Start of header-->
        <h2 class="ms-3"><strong>Notification</strong></h2>
    </div>

      <!--Button-->
      <div class="row pb-3">
        <div class="d-grid gap-2 d-md-flex">
        <button type="button" class="btn position-relative"><!--First button-->
        All
        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
            <span class="visually-hidden">New alerts</span>
        </span>
        </button><!--all button-->
        <button type="button" class="btn position-relative"><!--Second button-->
        Appointment
        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
            <span class="visually-hidden">New alerts</span>
        </span>
        </button><!--second button-->
        <button type="button" class="btn position-relative"><!--Third button-->
        Admission
        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
            <span class="visually-hidden">New alerts</span>
        </span>
        </button><!--Third button-->
        <button type="button" class="btn position-relative"><!--Third button-->
        Payment
        <span class="position-absolute top-0 start-100 translate-middle p-2 bg-danger border border-light rounded-circle">
            <span class="visually-hidden">New alerts</span>
        </span>
        </button><!--Third button-->
        </div>
    </div><!--row-->

    <div class="btn-group-vertical" role="group" aria-label="Vertical button group" style="width: 100%;">

        <?php

        if(!empty($notification->show_notification_by_user($_SESSION['logged_id'])))
        {
            $notification_list = $notification->show_notification_by_user($_SESSION['logged_id']);


            foreach($notification_list as $data){ ?>

                <button type="button" class="btn btn-light d-flex justify-content-between align-items-center mb-2" style="background: #E5E4E2; border: #00ACB2;"><a href="notification.php?id=<?php echo $data['not_id'] ?>" class="text-decoration-none text-color text-dark"><strong><?php echo $data['subject'] ?></strong></a><i class="fas fa-times ml-2"></i></button>
                
            <?php }


        } else {

        ?>

            <button type="button" class="btn btn-light d-flex justify-content-center align-items-center mb-2" style="background: #E5E4E2; border: #00ACB2;"><h6 class="text-decoration-none text-color text-dark pt-1"><strong>You currently have no notification</strong></h6></button>

        <?php } ?>


    </div>

  
   



</div><!--End of container-->


