<?php

  $page_title = 'WeCare Admin - Patient Details';
  require_once '../includes/admin-header.php';
  require_once '../classes/patient.class.php';
  require_once '../classes/monitoring.class.php';
  require_once '../classes/hyiegne.class.php';
  require_once '../classes/medicine.class.php';
  require_once '../classes/nutrition.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

  $patient = new Patient;
  $monitoring = new Monitoring;

  if($patient->fetch_patient_data($_GET['id'])){
    // Data for the Patient
    $p_data = $patient->fetch_patient_data($_GET['id']);
    $patient->staff_id = $p_data['staff_id'];
    $patient->id = $p_data['id'];
    $patient->firstname = $p_data['fname'];
    $patient->middlename = $p_data['mname'];
    $patient->lastname = $p_data['lname'];
    $patient->suffix = $p_data['suffix'];
    $patient->picture = $p_data['image'];
    $patient->date_of_birth = date_diff(date_create($p_data['date_birth']), date_create('today'))->y;
    $patient->gender = $p_data['gender'];


    // Data for Staff Assigned
    if($monitoring->fetch_monitoring_staff_info($patient->staff_id)){
        $staff = $monitoring->fetch_monitoring_staff_info($patient->staff_id);
        $monitoring->s_fname = $staff['s_fname'];
        $monitoring->s_mname = $staff['s_mname'];
        $monitoring->s_lname = $staff['s_lname'];
        $monitoring->s_email = $staff['s_email'];
        $monitoring->s_phone = $staff['s_phone'];
        $monitoring->s_image = $staff['s_image'];
    }

    // Data for Report List
    $report_list = $monitoring->fetch_monitoring_records_patient($patient->id);

    // Data for Medecine List
    $medecine_list = $monitoring->fetch_monitoring_medecine_patient($patient->id);

    // Data for Nutrition List
    $nutrition_list = $monitoring->fetch_monitoring_nutrition_patient($patient->id);

    // Data for Photo Update List
    $photo_update_list = $monitoring->fetch_monitoring_photo_update_patient($patient->id);

    // Data for Hyiegne List
    $hyiegne_list = $monitoring->fetch_monitoring_hygiene_patient($patient->id);

    // Data for Patient Details and Appointment
    if($monitoring->fetch_monitoring_details($patient->id) && $monitoring->fetch_monitoring_app_details($patient->id)){
        $input = $monitoring->fetch_monitoring_details($patient->id);
        $monitoring->health_status = $input['health_status'];
        $monitoring->date_updated = $input['update_date'];
        $monitoring->detail_bp = $input['detail_bp'];
        $monitoring->detail_con1 = $input['detail_con1'];
        $monitoring->detail_con2 = $input['detail_con2'];
        $monitoring->detail_con3 = $input['detail_con3'];
        $monitoring->detail_lastchecked = $input['detail_lastchecked'];
        $monitoring->detail_datechecked = $input['detail_datechecked'];
        $monitoring->detail_observation = $input['detail_observation'];

        $input2 = $monitoring->fetch_monitoring_app_details($patient->id);
        $monitoring->app_detail_time_start = $input2['app_detail_time_start'];
        $monitoring->app_detail_time_end = $input2['app_detail_time_end'];
        $monitoring->app_detail_date = $input2['app_detail_date'];
        $monitoring->app_detail_problem = $input2['app_detail_problem'];

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


  }

?>
<div class="content">
<div class="container align-items-center pt-3">
    <button class="btn btn-secondary" type="button" style="background: #00ACB2; border: #00ACB2; color: #fff;"><a class="text-white text-decoration-none" href="patient-list.php"> <i class="fa-solid fa-arrow-left"></i> Patient List </a></button>

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
      <a class="btn btn-danger" href=""><i class="fa-solid fa-eraser"></i>Delete</a>
    </div>
    <div class="row"><!--Details of the patient-->
    <div class="col-12 col-lg-8 pt-2"><!--Big blue thing-->
    <div class="text-wrap py-3 px-3 text-light rounded float-start" style="background: #00ACB2;">
    <div class="row">
        <div class="col-12 col-lg-4 pb-3">
        <img src="../images/<?php echo $patient->picture ?>" class="rounded float-start img-thumbnail img-fluid" alt="Datu J. Batumbaka">
        </div>
        <div class="col-12 col-lg-8">
        <div class="row">
        <h4><strong><?php echo $patient->firstname . " " . $patient->middlename[0] . ". " . $patient->lastname . " " . $patient->suffix ?></strong></h4>
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
    <div class="card">
    <div class="card-body">
    Last Updated and Inputed: <?php echo date('M d Y h:i A', strtotime($monitoring->date_updated)) ?>
    </div>
    </div>
</div> <!--End of details of the patient-->
    
    <div class="col-12 col-lg-4 pt-3"> <!--Appointment-->
    <div class="col-12 col-lg-4 pb-2">
    <!--<button class="btn btn-secondary" type="edit" style="background: #00ACB2; border: #00ACB2; color: #fff;">Edit</button> --> <!--Edit button-->
    </div>
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

<!--Nurse-->
<div class="col-12 col-lg-12 pt-3">
    <div class="col-12 col-lg-2 pb-2">
        <!--<button class="btn btn-secondary" type="edit" style="background: #00ACB2; border: #00ACB2; color: #fff;">Edit</button>--> <!--Edit button-->
        </div>
    <div class="text-wrap py-3 px-5 text-light rounded" style="background: #00ACB2; border: #00ACB2; color: #fff;">
        <div class="d-grid justify-content-md-end">
        <button type="button" class="btn btn-outline-light text-secondary"><a class="text-decoration-none text-light" href="#">Previous Nurse</a></button>
        </div>
    <div class="row pb-3">
        <div class="col-12 col-lg-4">
             <h6 class="text-center mt-4 pt-3 pb-3"><strong>Nurse Assign</strong></h6>
             <img src="../images/<?php echo $monitoring->s_image ?>" class="rounded-circle img-thumbnail img-fluid mx-auto d-block" alt="Mikaylah B. Chu" style="width: 30%; height: auto;">
             <p class="text-center pt-3"><?php echo $monitoring->s_fname . " " . $monitoring->s_mname[0] . ". " . $monitoring->s_lname ?></p>
            </div>
        <div class="col-12 col-lg-2">
            <div class="row pt-5">
                <h7><strong>Contact Number</strong></h7>
            </div>
            <div class="row pt-2">
                <p><?php echo $monitoring->s_phone ?></p>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="row pt-5">
                <h7><strong>Email Address</strong></h7>
            </div>
            <div class="row pt-2">
                <p><?php echo $monitoring->s_email ?></p>
            </div>
        </div>
        <div class="col-12 col-lg-2">
        <div class="row pt-5">
                <h7><strong>Socials</strong></h7>
            </div>
            <div class="row pt-3">
                <div class="col">
                    <p>Facebook</p>
                    <p>Instagram</p>
                </div>
                <div class="col">
                    <p>Tweeter</p>
                    <p>LinkedIn</p>
                </div>
            </div>
        </div>
        </div>    
        </div>
        </div>
    

    <?php include_once 'patient-medicine.php' ?> <!-- Medicine For Patient --> 

    

    <?php include_once 'patient-nutrition.php' ?> <!-- Nutrition For Patient --> 


    <?php include_once 'patient-hyiegne.php' ?> <!-- Hyiegne For Patient --> 


<div class="col-12 col-lg-8 pb-2">
    <h4><strong>Relatives</strong></h4>
</div>

<div class="table-responsive col-12 col-lg-12">
    <div class="p-3 mb-2 rounded" style="background: #00ACB2; border: #00ACB2; color: #fff;">
    <table class="table table-borderless text-white">
    <thead>
    <tr>
      <th scope="col">Profile</th>
      <th scope="col">Name</th>
      <th scope="col">Relationship</th>
      <th scope="col">Contact #</th>
    </tr>
  </thead>
    <?php

    require_once '../classes/relative.class.php';

    $relative = new Relative;

    $relative_list = $relative->fetch_patient_relative($patient->id);

    ?>
  <tbody>
    <?php foreach ($relative_list as $relative){ ?>
    <tr>
      <td class="pl-5"><img src="../images/<?php echo $relative['image'] ?>" class="gap-2" alt="Marites D. Karen" style="width: 50px; height: 50px; border: 2px solid white; border-radius: 50%;"></td>
      <td><?php echo $relative['fname'] . " " . $relative['mname'][0] . ". " . $relative['lname'] ?></td>
      <td><?php echo $relative['relationship'] ?></td>
      <td><?php echo $relative['phone'] ?></td>
    </tr>
    <?php } ?>
    </tbody>    
    </table>
    </div>
    </div>
</div><!--Don't touch-->

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

<?php

require_once '../includes/admin-footer.php';

?>