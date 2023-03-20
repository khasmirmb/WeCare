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
        $patient->allergies = $p_data['allergies'];

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

?>

    <div class="content">

    <div class="container align-items-center pt-3 container-fluid">
    <button type="button" class="patient-back-btn"><a class="text-white text-decoration-none" href="../staff/patient-list.php"><i class="fa-solid fa-arrow-left"></i>Patient List</a></button>

    <div class="pt-3">
    <div class=" container p-3 container-fluid" style="background: #00ACB2">
    <div class="row">
        <div class="col-4 pt-3">
        <img src="../images/<?php echo $patient->picture ?>" class="rounded float-start img-thumbnail img-fluid" alt="Datu J. Batumbaka"><!--Image of the patient-->
        </div>
        <div class="col-8 col-md-6 text-light">
            <h1><strong><?php echo ucfirst($patient->firstname) . " " . ucfirst($patient->middlename[0]) . ". " . ucfirst($patient->lastname) . " " . ucfirst($patient->suffix) ?></strong></h1>
            <h5><?php echo $patient->gender ?> - <?php echo $patient->date_of_birth ?> years old</h5>
            <h5 class="pt-3">Allergies:</h5>
            <p><?php echo $patient->allergies ?></p>
    </div>
    </div>    
    </div>
    </div> <!--End of Patient Card-->

    <h2 class="pt-4"><strong>Patient Monitoring</strong></h2>
    
    <div class="row">
        <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
        <div class="form-group">
        <label for="date-input">Date:</label>
        <input type="date" class="form-control" id="date-input">
        </div>

        </div>
        <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
        <div class="form-group">
        <label for="time-input">Time:</label>
        <input type="time" class="form-control" id="time-input">
        </div>
        </div>

        <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
        <div class="form-group justify-content-center">
            <label for="health-stat">Health Status</label><br>
            <select name="health-stat" id="health-stat"> 
                <option value="healthy">Healthy</option>
                <option value="good">Good</option>
                <option value="somewhat-good">Somewhat Good</option>
            </select>   
            </div>
            </div>
    </div> <!--Done for the date, time, and health status-->
    
    <?php include_once 'patient-medicine.php' ?> <!-- Medicine For Patient --> 


    <?php include_once 'patient-hyiegne.php' ?> <!-- Hyiegne For Patient --> 


    <?php include_once 'patient-nutrition.php' ?> <!-- Nutrition For Patient --> 

   
</div> <!--Don't touch-->

<!--Pop Out-->
<!--
    <div class="container">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name"><br>
        
    <div class="btn-group pt-3" role="group">
        <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
        <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
    </div>
</div>
-->
<div id="delete-dialog" class="dialog" title="Delete">
    <p><span>Are you sure you want to delete the selected record?</span></p>
</div>

</div>

<script>
    $(document).ready(function() {
        $("#delete-dialog").dialog({
            resizable: false,
            draggable: false,
            height: "auto",
            width: 400,
            modal: true,
            autoOpen: false
        });
        $("#delete-hy").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");

            $("#delete-dialog").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "Cancel" : function() {
                    $(this).dialog("close");
                }
            });

            $("#delete-dialog").dialog("open");
        });

        $("#delete-med").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");

            $("#delete-dialog").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "Cancel" : function() {
                    $(this).dialog("close");
                }
            });

            $("#delete-dialog").dialog("open");
        });

        $("#delete-nut").on('click', function(e) {
            e.preventDefault();
            var theHREF = $(this).attr("href");

            $("#delete-dialog").dialog('option', 'buttons', {
                "Yes" : function() {
                    window.location.href = theHREF;
                },
                "Cancel" : function() {
                    $(this).dialog("close");
                }
            });

            $("#delete-dialog").dialog("open");
        });
    });
</script>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>



<?php

  require_once '../includes/staff-footer.php';

?>