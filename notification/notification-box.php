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

    $notification_total = $notification->count_notification_by_user($_SESSION['logged_id']);

    $appointment_total = $notification->count_appointment_notification_by_user($_SESSION['logged_id']);

    $admission_total = $notification->count_admission_notification_by_user($_SESSION['logged_id']);

    $payment_total = $notification->count_payment_notification_by_user($_SESSION['logged_id']);
    

?>

<div class="container pt-3"><!--Start of container-->
    <div class="header-monitoring pb-2"><!--Start of header-->
        <h2 class="ms-1"><strong>Notification</strong></h2>
    </div>

	<div class="pt-2 mb-3">
        <ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="pills-tab" role="tablist">
                <li class="nav-item">
                <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    All Notification
                    <span class="badge bg-danger rounded-pill" style="font-size: small; z-index: 1;">
                        <?php 
                        foreach($notification_total as $row){
                            echo $row['notification_total'];
                        }
                        ?>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </button>
                </li>
                <li class="nav-item">
                <button class="nav-link" id="pills-appointment-tab" data-bs-toggle="pill" data-bs-target="#pills-appointment" type="button" role="tab" aria-controls="pills-appointment" aria-selected="false">
                    Appointment
                    <span class="badge bg-danger rounded-pill" style="font-size: small; z-index: 1;">
                        <?php 
                        foreach($appointment_total as $row){
                            echo $row['appointment_total'];
                        }
                        ?>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </button>
                </li>
                <li class="nav-item">
                <button class="nav-link" id="pills-admission-tab" data-bs-toggle="pill" data-bs-target="#pills-admission" type="button" role="tab" aria-controls="pills-admission" aria-selected="false">
                    Admission
                    <span class="badge bg-danger rounded-pill" style="font-size: small; z-index: 1;">
                        <?php 
                        foreach($admission_total as $row){
                            echo $row['admission_total'];
                        }
                        ?>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </button>
                </li>
                <li class="nav-item">
                <button class="nav-link" id="pills-payment-tab" data-bs-toggle="pill" data-bs-target="#pills-payment" type="button" role="tab" aria-controls="pills-payment" aria-selected="false">
                    Payment
                    <span class="badge bg-danger rounded-pill" style="font-size: small; z-index: 1;">
                        <?php 
                        foreach($payment_total as $row){
                            echo $row['payment_total'];
                        }
                        ?>
                        <span class="visually-hidden">New alerts</span>
                    </span>
                </button>
                </li>
        </ul>
	</div>


    <div class="tab-content" id="pills-tabContent">

    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group" style="width: 100%;">
            <?php

            if(!empty($notification->show_all_notification_by_user($_SESSION['logged_id'])))
            {
                $all_notification = $notification->show_all_notification_by_user($_SESSION['logged_id']);


                foreach($all_notification as $data){ ?>

                    <button type="button" class="btn btn-light d-flex justify-content-between align-items-center mb-2" style="<?php if($data['status'] == 0){ ?>background: #E5E4E2; <?php } ?>border: #00ACB2;"><a href="notification.php?id=<?php echo $data['id'] ?>" class="text-decoration-none text-color text-dark"><strong><?php echo $data['subject'] ?></strong></a><i class="fas fa-times ml-2"></i></button>
                        
                <?php }


            } else {

            ?>

                <button type="button" class="btn btn-light d-flex justify-content-between align-items-center mb-2" style="background: #E5E4E2; border: #00ACB2;"><h6 class="text-decoration-none text-color text-dark pt-1"><strong>You currently have no notification</strong></h6></button>

            <?php } ?>
        </div>
    </div>

    <div class="tab-pane fade" id="pills-appointment" role="tabpanel" aria-labelledby="pills-appointment-tab">
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group" style="width: 100%;">
            <?php

            if(!empty($notification->show_appointment_notification_by_user($_SESSION['logged_id'])))
            {
                $appointment_notification = $notification->show_appointment_notification_by_user($_SESSION['logged_id']);


                foreach($appointment_notification as $data){ ?>

                    <button type="button" class="btn btn-light d-flex justify-content-between align-items-center mb-2" style="<?php if($data['status'] == 0){ ?>background: #E5E4E2; <?php } ?>border: #00ACB2;"><a href="notification.php?id=<?php echo $data['id'] ?>" class="text-decoration-none text-color text-dark"><strong><?php echo $data['subject'] ?></strong></a><i class="fas fa-times ml-2"></i></button>
                        
                <?php }


            } else {

            ?>

                <button type="button" class="btn btn-light d-flex justify-content-between align-items-center mb-2" style="background: #E5E4E2; border: #00ACB2;"><h6 class="text-decoration-none text-color text-dark pt-1"><strong>You have no appointment notification</strong></h6></button>

            <?php } ?>
        </div>
    </div>

    <div class="tab-pane fade" id="pills-admission" role="tabpanel" aria-labelledby="pills-admission-tab">
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group" style="width: 100%;">
            <?php

            if(!empty($notification->show_admission_notification_by_user($_SESSION['logged_id'])))
            {
                $admission_notification = $notification->show_admission_notification_by_user($_SESSION['logged_id']);


                foreach($admission_notification as $data){ ?>

                    <button type="button" class="btn btn-light d-flex justify-content-between align-items-center mb-2" style="<?php if($data['status'] == 0){ ?>background: #E5E4E2; <?php } ?>border: #00ACB2;"><a href="notification.php?id=<?php echo $data['id'] ?>" class="text-decoration-none text-color text-dark"><strong><?php echo $data['subject'] ?></strong></a><i class="fas fa-times ml-2"></i></button>
                        
                <?php }


            } else {

            ?>

                <button type="button" class="btn btn-light d-flex justify-content-between align-items-center mb-2" style="background: #E5E4E2; border: #00ACB2;"><h6 class="text-decoration-none text-color text-dark pt-1"><strong>You have no admission notification</strong></h6></button>

            <?php } ?>
        </div>
    </div>

    <div class="tab-pane fade" id="pills-payment" role="tabpanel" aria-labelledby="pills-payment-tab">
        <div class="btn-group-vertical" role="group" aria-label="Vertical button group" style="width: 100%;">
            <?php

            if(!empty($notification->show_payment_notification_by_user($_SESSION['logged_id'])))
            {
                $payment_notification = $notification->show_payment_notification_by_user($_SESSION['logged_id']);


                foreach($payment_notification as $data){ ?>

                    <button type="button" class="btn btn-light d-flex justify-content-between align-items-center mb-2" style="<?php if($data['status'] == 0){ ?>background: #E5E4E2; <?php } ?>border: #00ACB2;"><a href="notification.php?id=<?php echo $data['id'] ?>" class="text-decoration-none text-color text-dark"><strong><?php echo $data['subject'] ?></strong></a><i class="fas fa-times ml-2"></i></button>
                        
                <?php }


            } else {

            ?>

                <button type="button" class="btn btn-light d-flex justify-content-between align-items-center mb-2" style="background: #E5E4E2; border: #00ACB2;"><h6 class="text-decoration-none text-color text-dark pt-1"><strong>You have no payment notification</strong></h6></button>

            <?php } ?>
        </div>
    </div>

    </div>

</div><!--End of container-->


