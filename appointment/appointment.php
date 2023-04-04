<?php

    $page_title = 'WeCare - Appointment';
    require_once '../includes/header.php';
    require_once '../classes/staff.class.php';
    require_once '../tools/functions.php';
    require_once '../classes/appointment.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    $staffs = new Staff();

    if(isset($_POST['confirm'])){

        $appointment = new Appointment();

        $date = date('Y-m-d', strtotime(str_replace('-', '/', $_POST['date'])));
        $time = $_POST['time'];
        $purpose = $_POST['purpose'];
        $others = htmlentities($_POST['others']);
        $day = date('l', strtotime($_POST['date']));
        $status = "Pending";
        $client_came = "Pending";


        // Check for available staff for the day
        if($staffs->show_staff_schedule($day)){
            $data = $staffs->show_staff_schedule($day);
            $staffs->day = $data['day'];
            $staffs->id = $data['staff_id'];
            $staffs->schedule_id = $data['id'];
    
            // Get the max appointment_number and add one
            $appointment_max_num = $appointment->show_max_app_number();
                                    
            $appointment_number = 0;

            foreach($appointment_max_num as $row)
            {
                $appointment_number = $row["appointment_number"];
            }

            $app_max_number = $appointment_number + 1;

            // Insert the appointment
            $appointment->staff_id = $staffs->id;
            $appointment->user_id = $_SESSION['logged_id'];
            $appointment->staff_schedule_id = $staffs->schedule_id;
            $appointment->appointment_number = $app_max_number;
            $appointment->purpose_for_appointment = $purpose;
            $appointment->other_purpose = $others;
            $appointment->appointment_date = $date;
            $appointment->appointment_time = $time;
            $appointment->status = $status;
            $appointment->client_came = $client_came;
            if(validate_appointment_date($_POST) && validate_appointment_time($_POST) && validate_appointment_others($_POST)){
                if($appointment->add_appointment()){
                    //redirect user to appointment list page
                    header('location: appointment.list.php');
                }
            }

        }
        else {
            $no_avail = "No Staff Available for that Day";
        }
        
    }
    
    require_once '../includes/navbar.php';
?>

<div class="appointment-container mt-5 mb-5 d-flex justify-content-center">
    <div class="appointment-card px-1 py-4">
        <div class="appointment-card-body">
            <h6 class="appointment-card-title mb-3">Appointment Form</h6>

            <!--<div class="d-flex flex-row"> <label class="radio mr-1"> <input type="radio" name="add" value="anz" checked> <span> <i class="fa fa-user"></i> Anz CMK </span> </label> <label class="radio"> <input type="radio" name="add" value="add"> <span> <i class="fa fa-plus-circle"></i> Add </span> </label> </div>-->
    
            <h6 class="information mt-4 mb-3">Please provide the following information below</h6>

            <form action="appointment.php" method="POST">

                <div class="col-sm-12 mt-3">
                    <div class="form-group">
                        <div class="input-group">
                            <label for="phone">Appointment Date</label>
                            <input class="appointment-form-control" type="date" name="date" value="<?php if(isset($_POST['date'])) { echo $_POST['date']; } ?>">
                        </div>
                    </div>
                </div>

                    <?php
                        if(isset($_POST['confirm']) && !validate_appointment_date($_POST)){
                    ?>
                        <p class="text-danger text-center mt-2 mb-1">Appointment date should be at least 3 days in advance.</p>
                    <?php
                        }
                    ?>

                <div class="col-sm-12 mt-3">
                    <div class="form-group">
                        <div class="input-group">
                            <label for="phone">Appointment Time</label>
                            <input class="appointment-form-control" type="time" name="time" value="<?php if(isset($_POST['time'])) { echo $_POST['time']; } ?>">
                        </div>
                    </div>
                </div>

                <?php
                        if(isset($_POST['confirm']) && !validate_appointment_time($_POST)){
                    ?>
                        <p class="text-danger text-center mt-2 mb-1">Appointment time should be available in our schedule.</p>
                    <?php
                        }
                ?>
                
                <?php
                require_once '../classes/reference.class.php';

                $appointment_purpose = new Reference();

                $purpose = $appointment_purpose->get_appointment_purpose();
                ?>

                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group">
                            <label for="purpose" class="appointment-label">Purpose for Appointment</label>
                        </div>
                        <select class="appointment-form-control" id="purpose" name="purpose">
                        <?php foreach($purpose as $row){ ?>

                        <option value="<?php echo $row['id'] ?>" <?php if(isset($_POST['purpose'])) { if ($_POST['purpose'] == $row['id']) echo ' selected="selected"'; } ?>><?php echo $row['purpose'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12" id="other-purpose">
                    <div class="form-group">
                        <div class="input-group">
                        <label for="others" class="appointment-label">Others</label>
                        </div>
                        <textarea class="appointment-form-control" id="others" rows="3" name="others" placeholder="Other Purpose" value="<?php if(isset($_POST['others'])) { echo $_POST['others']; } ?>"></textarea>
                    </div>
                </div>

                <?php
                        if(isset($_POST['confirm']) && !validate_appointment_others($_POST)){
                    ?>
                        <p class="text-danger text-center mt-2 mb-1">Invalid Characters</p>
                    <?php
                        }
                        if(isset($no_avail)){
                            echo '<div><p class="text-danger text-center mt-2 mb-1">'.$no_avail.'</p></div>';
                        } 
                ?>

                <div class=" d-flex flex-column text-center px-5 mt-3 mb-3">
                    <small class="appointment-agree-text">By Booking this appointment you agree to the</small> <a href="#" class="terms">Terms & Conditions</a>
                </div>

                <button class="btn btn-primary btn-block confirm-button" name="confirm" data-bs-toggle="modal" data-bs-target="#alertModal" style="background: #00ACB2; border: #00ACB2; color: #fff;">Confirm</button><!--Modal in request appointment-->

            </form>
        </div>
    </div>





</div>

<script>

    $('#other-purpose').hide();

    $('#purpose').on('change', function() {
        if($(this).val() === '6') {
            $('#other-purpose').show();
        } else {
            $('#other-purpose').hide();
        }
 });
</script>

<?php

require_once '../includes/footer.php';

?>