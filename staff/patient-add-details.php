<?php

    $page_title = 'WeCare Staff - Patient Add Details';
    require_once '../includes/staff-header.php';
    require_once '../classes/monitoring.class.php';
    require_once '../classes/patient.class.php';
    require_once '../classes/medicine.class.php';
    require_once '../classes/hyiegne.class.php';
    require_once '../classes/nutrition.class.php';
    session_start();

    if(!isset($_SESSION['staff_logged']) || $_SESSION['user_type'] != 'staff'){
        header('location: ../account/signin.php');
    }
    

    $monitoring = new Monitoring;
    $patient = new Patient;

    if($patient->fetch_patient_info($_GET['id'], $_SESSION['staff_logged'])){

        $p_data = $patient->fetch_patient_info($_GET['id'], $_SESSION['staff_logged']);

        $patient->id = $p_data['id'];
        $patient->firstname = $p_data['fname'];
        $patient->lastname = $p_data['lname'];
        $patient->middlename = $p_data['mname'];
        $patient->suffix = $p_data['suffix'];
        $patient->gender = $p_data['gender'];
        $patient->date_of_birth = date_diff(date_create($p_data['date_birth']), date_create('today'))->y;
        $patient->picture = $p_data['image'];

        if($monitoring->fetch_monitoring_details($patient->id)){
            // Details Info
            $input = $monitoring->fetch_monitoring_details($patient->id);
            $monitoring->detail_id = $input['detail_id'];
            $monitoring->health_status = $input['health_status'];
            $monitoring->detail_bp = $input['detail_bp'];
            $monitoring->detail_con1 = $input['detail_con1'];
            $monitoring->detail_con2 = $input['detail_con2'];
            $monitoring->detail_con3 = $input['detail_con3'];
            $monitoring->detail_lastchecked = $input['detail_lastchecked'];
            $monitoring->detail_datechecked = $input['detail_datechecked'];
            $monitoring->detail_observation = $input['detail_observation'];
    
        }

        if($monitoring->fetch_monitoring_app_details($patient->id)){
            // App Details Info
            $input2 = $monitoring->fetch_monitoring_app_details($patient->id);
            $monitoring->app_detail_id = $input2['app_detail_id'];
            $monitoring->app_detail_time_start = $input2['app_detail_time_start'];
            $monitoring->app_detail_time_end = $input2['app_detail_time_end'];
            $monitoring->app_detail_date = $input2['app_detail_date'];
            $monitoring->app_detail_problem = $input2['app_detail_problem'];

        }

    }

    if(isset($_POST['confirm'])){

        $moni_insert = new Monitoring;

        $moni_insert->patient_id = $patient->id;
        
        $moni_insert->health_status = $_POST['health_status'];
        $moni_insert->detail_bp = htmlentities($_POST['blood_p']);
        $moni_insert->detail_con1 = htmlentities($_POST['con1']);
        $moni_insert->detail_con2 = htmlentities($_POST['con2']);
        $moni_insert->detail_con3 = htmlentities($_POST['con3']);
        $moni_insert->detail_lastchecked = htmlentities($_POST['doc_name']);
        $moni_insert->detail_datechecked = htmlentities($_POST['check_date']);
        $moni_insert->detail_observation = htmlentities($_POST['observation']);

        $moni_insert->app_detail_time_start = htmlentities($_POST['app_start']);
        $moni_insert->app_detail_time_end = htmlentities($_POST['app_end']);
        $moni_insert->app_detail_date = htmlentities($_POST['app_date']);
        $moni_insert->app_detail_problem = htmlentities($_POST['app_prob']);

        if($moni_insert->add_monitoring_details() && $moni_insert->add_monitoring_appointment_details()){
            header('location: patient-profile.php?id=' . $patient->id);
        }

    }

    require_once '../includes/staff-sidebar.php';

?>

<div class="content">

    <div class="container align-items-center pt-3 container-fluid">
    <button type="button" class="patient-back-btn"><a class="text-white text-decoration-none" href="../staff/patient-profile.php?id=<?php echo $patient->id ?>"><i class="fa-solid fa-arrow-left"></i>Back</a></button>

<div class="container">
    <form action="patient-add-details.php?id=<?php echo $patient->id ?>" method="POST">
        <div class="row">
            <div class="col pt-3 text-center">
                <div class="badge rounded-pill text-wrap py-4 px-4" style="background: #00ACB2;">
                        <h4 class="p-2">Health Status:
                            <select class="form-select form-select-lg mt-2" name="health_status" id="health_status">
                                <option value="Excellent">Excellent</option>
                                <option value="Very Good">Very Good</option>
                                <option value="Good">Good</option>
                                <option value="Fair">Fair</option>
                                <option value="Poor">Poor</option>
                                <option value="Very Bad">Very Bad</option>
                            </select>
                        </h4>
                </div>
            </div>
        </div>
</div>
<div class="container"> 
    <div class="col-12 col-lg-3 pt-3">
        <button class="btn btn-success" name="confirm" type="submit"><i class="fa-solid fa-check me-1"></i>Confirm</button>
    </div>
    <div class="row"><!--Details of the patient-->
    <div class="col-12 col-lg-8 pt-2"><!--Big blue thing-->
    <div class="text-wrap py-3 px-3 text-light rounded float-start" style="background: #00ACB2;">
    <div class="row">
        <div class="col-12 col-lg-4 pb-3">
        <img src="../images/<?php echo $patient->picture ?>" class="rounded float-start img-thumbnail img-fluid" alt="Patient Profile">
        </div>
        <div class="col-12 col-lg-8">

        <div class="row">
        <h4><strong><?php echo ucfirst($patient->firstname) . " " . ucfirst($patient->middlename[0]) . ". " . ucfirst($patient->lastname) . " " . ucfirst($patient->suffix) ?></strong></h4>
        <p class="pb-3"><?php echo $patient->gender ?> - <?php echo $patient->date_of_birth ?> Years Old</p>
        </div>
        <div class="row row-cols-2">
            <div class="col">
                <label for="exampleInputPassword1" class="form-label"><strong>Blood Pressure:</strong></label>
                <input type="text" class="form-control" id="blood_p" name="blood_p" required value="<?php echo  $monitoring->detail_bp ?>">
            </div>
            <div class="col">
                <label for="exampleInputPassword1" class="form-label"><strong>Condition One:</strong></label>
                <input type="text" class="form-control" id="con1" name="con1" required value="<?php echo  $monitoring->detail_con1 ?>">
            </div>
            <div class="col">
                <label for="exampleInputPassword1" class="form-label"><strong>Condition Two:</strong></label>
                <input type="text" class="form-control" id="con2" name="con2" required value="<?php echo  $monitoring->detail_con2 ?>">
            </div>
            <div class="col">
                <label for="exampleInputPassword1" class="form-label"><strong>Condition Three:</strong></label>
                <input type="text" class="form-control" id="con3" name="con3" required value="<?php echo  $monitoring->detail_con3 ?>">
            </div>
        </div>
        <hr class="divider">
        </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4"><h5><strong>Last Check</strong></h4></div>
            <div class="col-12 col-lg-8">
                <label for="exampleInputPassword1" class="form-label"><strong>Doctor Name:</strong></label>
                <input type="text" class="form-control" id="doc_name" name="doc_name" required value="<?php echo $monitoring->detail_lastchecked ?>">

                <label for="exampleInputPassword1" class="form-label"><strong>Check Date:</strong></label>
                <input type="date" class="form-control" id="check_date" name="check_date" required value="<?php echo $monitoring->detail_datechecked ?>">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-lg-4"><h5><strong>Observation</strong></h5></div>
            <div class="col-12 col-lg-8 mt">
                <textarea class="form-control" id="observation" name="observation" required rows="3"> <?php echo $monitoring->detail_observation ?></textarea>
            </div>
        </div>
        
        </div>
</div> <!--End of details of the patient-->

    
<div class="col-12 col-lg-4 pt-3"> <!--Appointment-->
        <div class="text-wrap py-3 px-3 text-light rounded float-start" style="background: #00ACB2;">
        
            <h5><strong>Appointment</strong></h5>
   
            <div class="d-inline">
                <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label"><strong>Appointment Start Time:</strong></label>
                    <input type="time" class="form-control" id="app_start" name="app_start" value="<?php echo $monitoring->app_detail_time_start ?>" required>
                </div>
                <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label"><strong>Appointment End Time:</strong></label>
                    <input type="time" class="form-control" id="app_end" name="app_end" value="<?php echo $monitoring->app_detail_time_end ?>" required>
                </div>
            </div>
            
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label"><strong>Appointment Date:</strong></label>
                <input type="date" class="form-control" id="app_date" name="app_date" value="<?php echo $monitoring->app_detail_date ?>" required>
            </div>

            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label"><strong>Appointment Reason:</strong></label> 
                <textarea class="form-control" id="app_prob" name="app_prob" rows="4" required><?php echo $monitoring->app_detail_problem ?></textarea>
            </div>
        </div>
</div>

</form>
</div>
</div>
</div> <!--Don't touch-->

<?php

  require_once '../includes/staff-footer.php';

?>