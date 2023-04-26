<?php

    $page_title = 'WeCare - Family Patient';
    require_once '../includes/header.php';
    require_once '../classes/monitoring.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    $monitoring = new Monitoring;

    if($monitoring->fetch_monitoring_info($_GET['id'])){
        // Data for Patient Info
        $data = $monitoring->fetch_monitoring_info($_GET['id']);
        $monitoring->id = $data['id'];
        $monitoring->staff_id = $data['s_id'];
        $monitoring->patient_id = $data['p_id'];
        $monitoring->firstname = $data['p_fname'];
        $monitoring->middlename = $data['p_mname'];
        $monitoring->lastname = $data['p_lname'];
        $monitoring->suffix = $data['p_suffix'];
        $monitoring->gender = $data['p_gender'];
        $monitoring->image = $data['p_image'];
        $monitoring->date_of_birth = date_diff(date_create($data['p_bday']), date_create('today'))->y;

        // Data for Staff Info
        if($monitoring->fetch_monitoring_staff_info($monitoring->staff_id)){
            $staff = $monitoring->fetch_monitoring_staff_info($monitoring->staff_id);
            $monitoring->s_fname = $staff['s_fname'];
            $monitoring->s_mname = $staff['s_mname'];
            $monitoring->s_lname = $staff['s_lname'];
            $monitoring->s_email = $staff['s_email'];
            $monitoring->s_phone = $staff['s_phone'];
            $monitoring->s_image = $staff['s_image'];
        }

        // Data for Report List
        $report_list = $monitoring->fetch_monitoring_records_patient($monitoring->patient_id);

        // Data for Medecine List
        $medecine_list = $monitoring->fetch_monitoring_medecine_patient($monitoring->patient_id);

        // Data for Nutrition List
        $nutrition_list = $monitoring->fetch_monitoring_nutrition_patient($monitoring->patient_id);

        // Data for Photo Update List
        $photo_update_list = $monitoring->fetch_monitoring_photo_update_patient($monitoring->patient_id);

        // Data for Hyiegne List
        $hyiegne_list = $monitoring->fetch_monitoring_hygiene_patient($monitoring->patient_id);


        // Data for Patient Details and Appointment
        if($monitoring->fetch_monitoring_details($monitoring->patient_id) && $monitoring->fetch_monitoring_app_details($monitoring->patient_id)){
            $input = $monitoring->fetch_monitoring_details($monitoring->patient_id);
            $monitoring->health_status = $input['health_status'];
            $monitoring->date_updated = $input['update_date'];
            $monitoring->detail_bp = $input['detail_bp'];
            $monitoring->detail_con1 = $input['detail_con1'];
            $monitoring->detail_con2 = $input['detail_con2'];
            $monitoring->detail_con3 = $input['detail_con3'];
            $monitoring->detail_lastchecked = $input['detail_lastchecked'];
            $monitoring->detail_datechecked = $input['detail_datechecked'];
            $monitoring->detail_observation = $input['detail_observation'];

            $input2 = $monitoring->fetch_monitoring_app_details($monitoring->patient_id);
            $monitoring->app_detail_time_start = $input2['app_detail_time_start'];
            $monitoring->app_detail_time_end = $input2['app_detail_time_end'];
            $monitoring->app_detail_date = $input2['app_detail_date'];
            $monitoring->app_detail_problem = $input2['app_detail_problem'];
    
        }
    }

    require_once '../includes/navbar.php';
?>

<div class="container align-items-center pt-3">
<button type="button" class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="../family/monitoring.php"> <i class="fa-solid fa-arrow-left"></i> Back</a></button>


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
    <div class="row"><!--Details of the patient-->
    <div class="col-12 col-lg-8 pt-3"><!--Big blue thing-->
    <div class="text-wrap py-3 px-3 text-light rounded float-start" style="background: #00ACB2;">
    <div class="row">
        <div class="col-12 col-lg-4 pb-3">
        <img src="../images/<?php echo $monitoring->image ?>" class="rounded float-start img-thumbnail img-fluid" alt="Datu J. Batumbaka">
        </div>
        <div class="col-12 col-lg-8">
        <div class="row">
        <h4><strong><?php echo $monitoring->firstname . " " . $monitoring->middlename[0] . ". " . $monitoring->lastname . " " . $monitoring->suffix ?></strong></h4>
        <p class="pb-3"><?php echo $monitoring->gender ?> - <?php echo $monitoring->date_of_birth ?> Years Old</p>
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

<!--Table medicine-->
<div class="row">
<div class="col-12 col-lg-12 p-3">
    <h4 class="pb-3"><strong>Medicine</strong></h4>
    <div class="table-responsive">
    <table class="table table-hover table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" style="background: #00ACB2; color: #fff;">Name</th>
        <th cope="col" class="text-center" style="background: #00ACB2; color: #fff;">Dose</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Started at</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Note</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($medecine_list as $medecine){ ?>
        <tr>

        <td><?php echo $medecine['medecine_name'] ?></td>

        <td class="text-center"><?php echo $medecine['medecine_dose'] ?></td>

        <td class="text-center"><?php echo date("M j, Y", strtotime($medecine['medecine_started'])) ?></td>

        <td class="text-center"><?php echo $medecine['medecine_status'] ?></td>

        <td class="text-center"><?php echo $medecine['medecine_note'] ?></td>

       </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</div>

    
<!--Table Nutrition-->
<div class="col-12 col-lg-12 p-3">
    <h4 class="pb-3"><strong>Nutrition</strong></h4>
    <div class="table-responsive">
    <table class="table table-hover table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" style="background: #00ACB2; color: #fff;">Name</th>
        <th cope="col" class="text-center" style="background: #00ACB2; color: #fff;">Type</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Time</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Note</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($nutrition_list as $nutrition){ ?>
        <tr>
        <td><?php echo $nutrition['nutrition_name'] ?></td>

        <td class="text-center"><?php echo $nutrition['nutrition_type'] ?></td>

        <td class="text-center"><?php echo date("g:i A", strtotime($nutrition['nutrition_time'])) ?></td>

        <td class="text-center"><?php echo $nutrition['nutrition_status'] ?></td>

        <td class="text-center"><?php echo $nutrition['nutrition_note'] ?></td>

       </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</div>

<!--Table Hygiene-->
<div class="col-12 col-lg-12 p-3">
<div class="row">
    <h4 class="pb-3"><strong>Hygiene</strong></h4>
    <div class="table-responsive">
    <table class="table table-hover table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" style="background: #00ACB2; color: #fff;">Name</th>
        <th cope="col" class="text-center" style="background: #00ACB2; color: #fff;">Time</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Note</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($hyiegne_list as $hyiegne){ ?>
        <tr>

        <td scope="col"><?php echo $hyiegne['hyiegne_name'] ?></td>

        <td cope="col" class="text-center"><?php echo date("g:i A", strtotime($hyiegne['hyiegne_time'])) ?></td>

        <td scope="col" class="text-center"><?php echo $hyiegne['hyiegne_status'] ?></td>

        <td scope="col" class="text-center"><?php echo $hyiegne['hyiegne_note'] ?></td>

        </tr>
    <?php } ?>
    </tbody>
</table>
</div>
</div>
</div>

<!--Nurse-->
<div class="col-12 col-lg-12">
    <div class="text-wrap py-3 px-5 text-light rounded" style="background: #00ACB2;">
        <div class="d-grid justify-content-md-end">
        <button type="button" class="btn btn-outline-light" data-bs-toggle="modal" data-bs-target="#previous-nurse">Previous Nurse</button>
        </div>
        
    <div class="row">
        <div class="col-12 col-lg-4">
             <h6 class="text-center mt-4 pt-3 pb-3"><strong>Nurse Assign</strong></h6>
             <img src="../images/<?php echo $monitoring->s_image ?>" class="rounded-circle img-thumbnail img-fluid mx-auto d-block" alt="Nurse Image" style="width: 30%; height: auto;">
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

</div><!--Don't touch-->

<!-- Modal -->
<div class="modal fade" id="previous-nurse" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="previous-nurseLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="previous-nurseLabel">Previous Nurse</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <ul class="list-group list-group-flush">
        <li class="list-group-item">Aila Chrishel Dagalea</li>
        <li class="list-group-item">Aila Chrishel Dagalea</li>
        <li class="list-group-item">Aila Chrishel Dagalea</li>
        <li class="list-group-item">Aila Chrishel Dagalea</li>
        <li class="list-group-item">Aila Chrishel Dagalea</li>
        </ul>
      </div>
    </div>
  </div>
</div>