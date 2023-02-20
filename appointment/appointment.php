<?php

    $page_title = 'WeCare - Appointment';
    require_once '../includes/header.php';
    require_once '../classes/staff.class.php';
    require_once '../classes/client.class.php';
    require_once '../classes/appointment.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    $staffs = new Staff();
    $client = new Client();

    if(isset($_POST['confirm'])){

        $appointment = new Appointment();

        $date = date('Y-m-d', strtotime(str_replace('-', '/', $_POST['date'])));
        $time = $_POST['time'];
        $purpose = $_POST['purpose'];
        $others = htmlentities($_POST['others']);
        $day = date('l', strtotime($_POST['date']));
        $status = "In Process";
        $client_came = "Pending";

        // Check the client
        $clients_obj = $client->show_client_data();
    
        foreach($clients_obj as $row){
            if(isset($_SESSION['logged_id']) == $row['user_id']){
                $_SESSION['client_id'] = $row['id'];
            }
        }

        // Check for available staff for the day
        $staff_schedule = $staffs->show_staff_schedule();
    
        foreach($staff_schedule as $row){
            if($day == $row['day']){
                $_SESSION['staff_available'] = $row['staff_id'];
                $_SESSION['staff_schedule'] = $row['id'];
            }
        }

        // Get the max appointment_number and add one
        $appointment_max_num = $appointment->show_max_app_number();

        $appointment_number = 0;

		foreach($appointment_max_num as $row)
		{
			$appointment_number = $row["appointment_number"];
		}

        $_SESSION['appointment_number_max'] = $appointment_number + 1;

        // Insert the appointment
        $appointment->staff_id = $_SESSION['staff_available'];
        $appointment->client_id = $_SESSION['client_id'];
        $appointment->staff_schedule_id = $_SESSION['staff_schedule'];
        $appointment->appointment_number = $_SESSION['appointment_number_max'];
        $appointment->purpose_for_appointment = $purpose;
        $appointment->other_purpose = $others;
        $appointment->appointment_date = $date;
        $appointment->appointment_time = $time;
        $appointment->status = $status;
        $appointment->client_came = $client_came;
        if($appointment->add_appointment()){
            //redirect user to appointment list page
            header('location: appointment.list.php');
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

            <fieldset disabled>
                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="firstname">First Name</label>
                        <input type="text" id="firstname" class="form-control" value="<?php echo $_SESSION['user_firstname'] ?>">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="lastname">Last Name</label>
                        <input type="text" id="lastname" class="form-control" value="<?php echo $_SESSION['user_lastname'] ?>">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" id="email" class="form-control" value="<?php echo $_SESSION['user_email'] ?>">
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" id="phone" class="form-control" value="<?php echo $_SESSION['user_phone'] ?>">
                    </div>
                </div>
            </fieldset>

                <div class="col-sm-12 mt-3">
                    <div class="form-group">
                        <div class="input-group">
                            <label for="phone">Appointment Date</label>
                            <input class="appointment-form-control" type="date" name="date">
                        </div>
                    </div>
                </div>

                <div class="col-sm-12 mt-3">
                    <div class="form-group">
                        <div class="input-group">
                            <label for="phone">Appointment Time</label>
                            <input class="appointment-form-control" type="time" name="time">
                        </div>
                    </div>
                </div>
                
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

                        <option value="<?php echo $row['id'] ?>"><?php echo $row['purpose'] ?></option>
                        <?php } ?>
                        </select>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group">
                        <label for="others" class="appointment-label">Others</label>
                        </div>
                        <textarea class="appointment-form-control" id="others" rows="3" name="others" placeholder="Leave Empty if Choice is Selected"></textarea>
                    </div>
                </div>

                <div class=" d-flex flex-column text-center px-5 mt-3 mb-3">
                    <small class="appointment-agree-text">By Booking this appointment you agree to the</small> <a href="#" class="terms">Terms & Conditions</a>
                </div>

                <button class="btn btn-primary btn-block confirm-button" name="confirm">Confirm</button>

            </form>
        </div>
    </div>
</div>     

<?php

require_once '../includes/footer.php';

?>