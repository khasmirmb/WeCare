<?php

    $page_title = 'WeCare Staff - Patient Edit';
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
    
    require_once '../includes/staff-sidebar.php';

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

?>

<div class="content">

    <div class="container align-items-center pt-3 container-fluid">
    <button type="button" class="patient-back-btn"><a class="text-white text-decoration-none" href="../staff/patient-profile.php?id=<?php echo $patient->id ?>"><i class="fa-solid fa-arrow-left"></i>Back</a></button>

<div class="container">
        <div class="row">
            <div class="col pt-3 text-center">
                <div class="badge rounded-pill text-wrap py-4 px-4" style="background: #00ACB2;">
                        <h4 class="">Health Status: <input type="text" class="form-control mt-3" id="exampleInputPassword1"></h4>
                </div>
            </div>
        </div>
</div>
<div class="container">
    <form action="patient-edit.php?id=<?php echo $patient->id ?>" method="POST">
    <div class="col-12 col-lg-3 pt-3">
      <button class="btn btn-success" name="Confirm"><i class="fa-solid fa-check me-1"></i>Confirm</button>
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
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="col">
                <label for="exampleInputPassword1" class="form-label"><strong>Condition One:</strong></label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="col">
                <label for="exampleInputPassword1" class="form-label"><strong>Condition Two:</strong></label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="col">
                <label for="exampleInputPassword1" class="form-label"><strong>Condition Three:</strong></label>
                <input type="text" class="form-control" id="exampleInputPassword1">
            </div>
        </div>
        <hr class="divider">
        </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4"><h5><strong>Last Check</strong></h4></div>
            <div class="col-12 col-lg-8">
                <label for="exampleInputPassword1" class="form-label"><strong>Doctor Name:</strong></label>
                <input type="text" class="form-control" id="exampleInputPassword1">

                <label for="exampleInputPassword1" class="form-label"><strong>Check Date:</strong></label>
                <input type="date" class="form-control" id="exampleInputPassword1">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-12 col-lg-4"><h5><strong>Observation</strong></h5></div>
            <div class="col-12 col-lg-8 mt">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
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
                    <input type="time" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label"><strong>Appointment End Time:</strong></label>
                    <input type="time" class="form-control" id="exampleInputPassword1">
                </div>
            </div>
            
            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label"><strong>Appointment Date:</strong></label>
                <input type="date" class="form-control" id="exampleInputPassword1">
            </div>

            <div class="mb-2">
                <label for="exampleInputPassword1" class="form-label"><strong>Appointment Reason:</strong></label> 
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
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