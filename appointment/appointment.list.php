<?php

    $page_title = 'WeCare - Appointment';
    require_once '../includes/header.php';
    require_once '../classes/appointment.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
    

?>
    <div class="table-responsive mt-5 mb-5">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                <th>Name</th>
                <th>Appointment Purpose</th>
                <th>Appointment Time</th>
                <th>Appointment Date</th>
                <th>Status</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php 

            $appointment = new Appointment();

            $appointment_list = $appointment->show_user_appointment($_SESSION['logged_id']);

            foreach($appointment_list as $row){

            ?>
                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <p class="fw-bold mb-1"><?php echo $_SESSION['fullname'] ?></p>
                            <p class="text-muted mb-0"><?php echo $_SESSION['user_email'] ?></p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo $row['purpose'] ?></p>
                    <?php if($row['purpose'] == 'Others'){ ?>
                        <p class="text-muted mb-0"><?php echo $row['other_purpose'] ?></p>
                    <?php } ?>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo date("g:i a", strtotime($row['appointment_time'])) ?></p>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo date("M jS, Y", strtotime($row['appointment_date'])) ?></p>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo $row['status'] ?></p>
                </td>
                <td>
                    <?php if($row['status'] == "Completed"){
                    ?>
                    <p class="fw-bold mb-1 color text-success">Completed</p>
                    <?php } else if($row['status'] == "Canceled"){ ?>
                        <p class="fw-bold mb-1 color text-danger">Canceled</p>
                    <?php } else { ?>
                    <a type="button" class="btn btn-danger" id="action-cancel" href="appointment.cancel.php?id=<?php echo $row['id'] ?>">Cancel</a>
                    <?php }?>
                </td>
                </tr>
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>

    <div id="cancel-dialog" class="dialog" title="Cancel Appointment">
        <p><span>Are you sure you want to cancel the selected appointment?</span></p>
    </div>

    <script>
    $(document).ready(function() {
        $("#cancel-dialog").dialog({
            resizable: false,
            draggable: false,
            height: "auto",
            width: 400,
            modal: true,
            autoOpen: false

        });
        $("#action-cancel").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");

            $("#cancel-dialog").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "Cancel" : function() {
                    $(this).dialog("close");
                }
            });

            $("#cancel-dialog").dialog("open");
        });
    });
</script>