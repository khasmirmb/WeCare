<?php

    $page_title = 'WeCare Staff - Patient Profile';
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


    if(isset($_POST['submit-med'])){

        $medicine = new Medicine;

        $medicine->patient_id = $patient->id;
        $medicine->name = htmlentities($_POST['med-name']);
        $medicine->dose = htmlentities($_POST['med-dose']);
        $medicine->started_at = htmlentities($_POST['med-start']);
        $medicine->status = htmlentities($_POST['med-status']);
        $medicine->note = htmlentities($_POST['med-note']);

        $medicine->add_medicine();


    }

    if(isset($_POST['submit-hy'])){

        $hyiegne = new Hyiegne;

        $hyiegne->patient_id = $patient->id;
        $hyiegne->name = htmlentities($_POST['hy-name']);
        $hyiegne->time = htmlentities($_POST['hy-time']);
        $hyiegne->status = htmlentities($_POST['hy-status']);
        $hyiegne->note = htmlentities($_POST['hy-note']);

        $hyiegne->add_hyiegne();


    }

    if(isset($_POST['submit-nut'])){

        $nutrition = new Nutrition;

        $nutrition->patient_id = $patient->id;
        $nutrition->name = htmlentities($_POST['nut-name']);
        $nutrition->type = htmlentities($_POST['nut-type']);
        $nutrition->time = htmlentities($_POST['nut-time']);
        $nutrition->status = htmlentities($_POST['nut-status']);
        $nutrition->note = htmlentities($_POST['nut-note']);

        $nutrition->add_nutrition();


    }

    if(isset($_POST['submit-detail'])){

        $monitoring_details = new Monitoring;

        $monitoring_details->patient_id = $patient->id;
        $monitoring_details->health_status = htmlentities($_POST['hstatus']);
        $monitoring_details->detail_bp = htmlentities($_POST['blood']);
        $monitoring_details->detail_con1 = htmlentities($_POST['con1']);
        $monitoring_details->detail_con2 = htmlentities($_POST['con2']);
        $monitoring_details->detail_con3 = htmlentities($_POST['con3']);
        $monitoring_details->detail_lastchecked = htmlentities($_POST['dname']);
        $monitoring_details->detail_datechecked = htmlentities($_POST['cdate']);
        $monitoring_details->detail_observation = htmlentities($_POST['obser']);

        $monitoring_details->add_monitoring_details();

    }

    if(isset($_POST['submit-app-detail'])){

        $monitoring_app_details = new Monitoring;

        $monitoring_app_details->patient_id = $patient->id;
        $monitoring_app_details->app_detail_time_start = htmlentities($_POST['time_start']);
        $monitoring_app_details->app_detail_time_end = htmlentities($_POST['time_end']);
        $monitoring_app_details->app_detail_date = htmlentities($_POST['app_date']);
        $monitoring_app_details->app_detail_problem = htmlentities($_POST['problem']);

        $monitoring_app_details->add_monitoring_appointment_details();

    }

?>

<div class="content">

    <div class="container align-items-center pt-3 container-fluid">
    <button type="button" class="patient-back-btn"><a class="text-white text-decoration-none" href="../staff/patient-list.php"><i class="fa-solid fa-arrow-left"></i>Patient List</a></button>

<div class="container">
        <div class="row">
            <div class="col pt-3 text-center">
                <div class="badge rounded-pill text-wrap py-4 px-4" style="background: #00ACB2;">
                        <h4 class="">Health Status: <strong><?php if(!empty($monitoring->health_status)){ echo $monitoring->health_status; } else{ echo "No Data"; } ?></strong></h4>
                </div>
            </div>
        </div>
</div>
<div class="container">
    <div class="col-12 col-lg-3 pt-3">
      <?php if(!empty($monitoring->fetch_monitoring_details($patient->id)) && !empty($monitoring->fetch_monitoring_app_details($patient->id))) { ?>
      <a class="btn btn-success" href="patient-edit.php?id=<?php echo $patient->id ?>"><i class="fa-solid fa-pen-to-square"></i>Edit Details</a>
      <?php } else { ?>
      <a class="btn btn-success" href="patient-add-details.php?id=<?php echo $patient->id ?>"><i class="fa-solid fa-pen-to-square"></i>Add Details</a>
      <?php } ?>
      <a class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#delete-patient"><i class="fa-solid fa-eraser"></i>Delete</a>
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
            <div class="col"><?php if(!empty($monitoring->detail_bp)){ echo $monitoring->detail_bp; } else{ echo "Currently No Data"; } ?></div>
            <div class="col"><?php if(!empty($monitoring->detail_con1)){ echo $monitoring->detail_con1; } else{ echo "Currently No Data"; } ?></div>
            <div class="col pt-3"><?php if(!empty($monitoring->detail_con2)){ echo $monitoring->detail_con2; } else{ echo "Currently No Data"; } ?></div>
            <div class="col pt-3 pb-3"><?php if(!empty($monitoring->detail_con3)){ echo $monitoring->detail_con3; } else{ echo "Currently No Data"; } ?></div>
        </div>
        <hr class="divider">
        </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4"><h5><strong>Last Check</strong></h4></div>
            <div class="col-12 col-lg-8"><p>
            <?php if(!empty($monitoring->detail_lastchecked) && !empty($monitoring->detail_datechecked)){ echo $monitoring->detail_lastchecked;  ?>
             on <?php echo date("M j, Y", strtotime($monitoring->detail_datechecked)); } else{ echo "Currently No Data"; } ?></p></div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4"><h5><strong>Observation</strong></h5></div>
            <div class="col-12 col-lg-8"><p><?php if(!empty($monitoring->detail_observation)){ echo $monitoring->detail_observation; } else{ echo "Currently No Data"; } ?></p></div>
        </div>
        
        </div>
</div> <!--End of details of the patient-->



<div class="modal fade" id="add-details" tabindex="-1" aria-labelledby="add-detailsLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-detailsLabel">Add Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="patient-profile.php?id=<?php echo $patient->id ?>" method="POST">

          <div class="mb-3">
            <label for="hstatus" class="col-form-label">Health Status:</label>
            <input type="text" class="form-control" id="hstatus" name="hstatus" placeholder="Ex. Very Good" required>
          </div>

          <div class="mb-3">
            <label for="blood" class="col-form-label">Blood Pressure:</label>
            <input type="text" class="form-control" id="blood" name="blood" placeholder="Ex. High BP" required>
          </div>

          <div class="mb-3">
            <label for="con1" class="col-form-label">Condition 1:</label>
            <input type="text" class="form-control" id="con1" name="con1" placeholder="Ex. Bedridden" required>
          </div>

          <div class="mb-3">
            <label for="con2" class="col-form-label">Condition 2:</label>
            <input type="text" class="form-control" id="con2" name="con2" placeholder="Ex. Bedridden" required>
          </div>

          <div class="mb-3">
            <label for="con3" class="col-form-label">Condition 3:</label>
            <input type="text" class="form-control" id="con3" name="con3" placeholder="Ex. Bedridden" required>
          </div>

          <div class="mb-3">
            <label for="dname" class="col-form-label">Doctor Name:</label>
            <input type="text" class="form-control mb-2" id="dname" name="dname" placeholder="Doctor Name" required>
            <label for="cdate" class="col-form-label">Date Checked:</label>
            <input type="date" class="form-control" id="cdate" name="cdate" placeholder="Date" required>
          </div>

          <div class="mb-3">
            <label for="obser" class="col-form-label">Observation:</label>
            <textarea class="form-control" name="obser" id="obser" cols="3" rows="3" required></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

        <button class="btn btn-primary" name="submit-detail" style="background: #00ACB2; border: #00ACB2; color: #fff;">Submit</button>

      </div>
    </form>
    </div>
  </div>
</div>


    
<div class="col-12 col-lg-4 pt-3"> <!--Appointment-->
        <div class="text-wrap py-3 px-3 text-light rounded float-start" style="background: #00ACB2;">
        
            <h5><strong>Appointment</strong></h5>
   
            <h6 class="bg-secondary text-white d-inline">
            <?php if(!empty($monitoring->app_detail_time_start) && !empty($monitoring->app_detail_time_end)){ echo date("g:i A", strtotime($monitoring->app_detail_time_start)); ?> - <?php echo date("g:i A", strtotime($monitoring->app_detail_time_end)); } else{ echo "Currently No Data"; }?></strong></h6>
            
            <p class="text-black-50 pb-5"><?php if(!empty($monitoring->app_detail_date)){ echo date("M j, Y", strtotime($monitoring->app_detail_date)); } else{ echo "Currently No Data"; } ?></p> 

            <h6><strong>Current Problem:</strong></h6>
            <p class="bd-lead"><?php if(!empty($monitoring->app_detail_problem)){ echo $monitoring->app_detail_problem; } else{ echo "Currently No Data"; } ?></p>
        </div>
</div>

</div>
</div>

<div class="modal fade" id="add-appointment" tabindex="-1" aria-labelledby="add-appointmentLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="add-appointmentLabel">Add Appointment Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="patient-profile.php?id=<?php echo $patient->id ?>" method="POST">

          <div class="mb-3">
            <label for="time_start" class="col-form-label">Time Start:</label>
            <input type="time" class="form-control" id="time_start" name="time_start" required>
          </div>

          <div class="mb-3">
            <label for="time_end" class="col-form-label">Time End:</label>
            <input type="time" class="form-control" id="time_end" name="time_end" required>
          </div>

          <div class="mb-3">
            <label for="app_date" class="col-form-label">Date:</label>
            <input type="date" class="form-control" id="app_date" name="app_date" required>
          </div>

          <div class="mb-3">
            <label for="problem" class="col-form-label">Current Problem:</label>
            <textarea class="form-control" name="problem" id="problem" cols="3" rows="3" required></textarea>
          </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>

        <button class="btn btn-primary" name="submit-app-detail" style="background: #00ACB2; border: #00ACB2; color: #fff;">Submit</button>

      </div>
    </form>
    </div>
  </div>
</div>

    

    <h2 class="pt-4" ><strong>Patient Monitoring</strong></h2>
    
    
    <?php include_once 'patient-medicine.php' ?> <!-- Medicine For Patient --> 


    <?php include_once 'patient-hyiegne.php' ?> <!-- Hyiegne For Patient --> 


    <?php include_once 'patient-nutrition.php' ?> <!-- Nutrition For Patient --> 

   
</div> <!--Don't touch-->

<!-- Delete Patient -->
<div class="modal fade" id="delete-patient" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delete-patientLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="delete-patientLabel">Confirmation to Delete Patient Details</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to delete this details? This will cannot be undone.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>

<?php

  require_once '../includes/staff-footer.php';

?>