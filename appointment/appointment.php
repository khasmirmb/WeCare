<?php

    $page_title = 'WeCare - Appointment';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
?>

<div class="appointment-container mt-5 mb-5 d-flex justify-content-center">
    <div class="appointment-card px-1 py-4">
        <div class="appointment-card-body">
            <h6 class="appointment-card-title mb-3">Appointment Form</h6>
            <!--<div class="d-flex flex-row"> <label class="radio mr-1"> <input type="radio" name="add" value="anz" checked> <span> <i class="fa fa-user"></i> Anz CMK </span> </label> <label class="radio"> <input type="radio" name="add" value="add"> <span> <i class="fa fa-plus-circle"></i> Add </span> </label> </div>-->
            <h6 class="information mt-4">Please provide following information about you</h6>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <!-- <label for="name">Name</label> --> 
                        <input class="appointment-form-control" type="number" placeholder="Phone"> </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="appointment-form-control" type="date" placeholder="Appointment Date"> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <input class="appointment-form-control" type="text" placeholder="Email"> </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <label for="exampleFormControlSelect1" class="appointment-label"> Select Services</label> </div>
                        <select class="appointment-form-control" id="exampleFormControlSelect1">
                        <option>Caregiving</option>
                        <option>Rehabilitation</option>
                        <option>Consultation</option>
                        <option>Apply to us</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="form-group">
                        <div class="input-group"> <label for="exampleFormControlTextarea1" class="appointment-label">Others</label> </div>
                        <textarea class="appointment-form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>
            <div class=" d-flex flex-column text-center px-5 mt-3 mb-3"> <small class="appointment-agree-text">By Booking this appointment you agree to the</small> <a href="#" class="terms">Terms & Conditions</a> </div> <button class="btn btn-primary btn-block confirm-button">Confirm</button>
        </div>
    </div>
</div>     

<?php

require_once '../includes/footer.php';

?>