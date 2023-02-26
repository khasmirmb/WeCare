<?php

    $page_title = 'WeCare Staff - Patient Profile';
    require_once '../includes/staff-header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }
    
    require_once '../includes/staff-sidebar.php';

?>

    <div class="content">

    <div class="container align-items-center pt-3 container-fluid">
    <button type="button" class="patient-back-btn"><a class="text-white text-decoration-none" href="../staff/patient-list.php"><i class="fa-solid fa-arrow-left"></i>Patient List</a></button>

    <div class="pt-3">
    <div class=" container p-3 container-fluid" style="background: #00ACB2">
    <div class="row">
        <div class="col-4 pt-3">
        <img src="../images/download.jpg" class="rounded float-start img-thumbnail img-fluid" alt="Datu J. Batumbaka"><!--Image of the patient-->
        </div>
        <div class="col-8 col-md-6 text-light">
            <h1><strong>Carl Bonifacio Sr</strong></h1>
            <h5>MALE - 75 years old</h5>
            <h5 class="pt-3">Diseases:</h5>
            <p>Pneumonia, High Blood, Diabetic</p>
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
    
    <div class="pt-3"><!--Starting of Medicine-->
    <div class="container form-control p-0">
        <h2 class="py-3 px-3 text-white" style="background: #00ACB2">Medicine</h2>
        <div class="p-3 pt-0">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-3">
                <h6>Check</h6>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-3">
                <h6 class="text-center">Time</h6>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <h6 class="text-center">Measurement</h6>
            </div>
            <hr class="divider">
        </div>
        <div class="row pt-2">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="medicine" name="medicine">
            <label for="medicine">Biogesic</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-2">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="medicine" name="medicine">
            <label for="medicine">Lasartan</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
            
        </div>
        <div class="d-grid gap-2 pt-3">
        <button class="btn btn-primary" type="button" style="background: #00ACB2; border: none;"><i class="fa-solid fa-circle-plus"></i>Add more</button>
        </div>
    </div>
    </div>
    </div><!--Last of Medicine-->

    <div class="pt-3"><!--Starting of Health-->
    <div class="container form-control p-0">
        <h2 class="py-3 px-3 text-white" style="background: #00ACB2;">Health</h2>
        <div class="p-3 pt-0">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-3">
                <h6>Check</h6>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-3">
                <h6 class="text-center">Time</h6>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <h6 class="text-center">Measurement</h6>
            </div>
            <hr class="divider">
        </div>
        <div class="row pt-2">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="medicine" name="medicine">
            <label for="medicine">Check Blood Pressure</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="sugar" name="sugar">
            <label for="sugar">Check Blood Sugar</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
            
        </div>
        <div class="d-grid gap-2 pt-3">
        <button class="btn btn-primary" type="button" style="background: #00ACB2; border: none;"><i class="fa-solid fa-circle-plus"></i>Add more</button>
        </div>
    </div>
    </div>
    </div><!--Last of Health-->
   
    <div class="pt-3"><!--Starting of Nutrition-->
    <div class="container form-control p-0">
        <h2 class="py-3 px-3 text-white" style="background: #00ACB2;">Nutrition</h2>
        <div class="p-3 pt-0">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-4 col-3">
                <h6>Check</h6>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-3">
                <h6 class="text-center">Time</h6>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-3">
                <h6 class="text-center">Measurement</h6>
            </div>
            <hr class="divider">
        </div>
        <div class="row pt-2">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="breakfast" name="breakfast">
            <label for="breakfast">Breakfast</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="am-snack" name="am-snack">
            <label for="am-snack">A.M Snack</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="lunch" name="lunch">
            <label for="lunch">Lunch</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="pm-snack" name="pm-snack">
            <label for="pm-snack">P.M Snack</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="dinner" name="dinner">
            <label for="dinner">Dinner</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 pt-3">
        <button class="btn btn-primary" type="button" style="background: #00ACB2; border: none;"><i class="fa-solid fa-circle-plus"></i>Add more</button>
        </div>
    </div>
    </div>
    </div><!--Last of Nutrition-->

     <div class="pt-3"> <!--Starting of Hygiene-->
     <div class="container form-control p-0">
        <h2 class="py-3 px-3 text-white" style="background: #00ACB2;">Hygiene</h2>
        <div class="p-3 pt-0">
        <div class="row pt-2">
            <div class="col-lg-3 col-md-3 col-sm-4 col-3">
                <h6>Check</h6>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-2">
                <h6 class="text-center">Time</h6>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <h6 class="text-center">Measurement</h5>
            </div>
            <hr class="divider">
        </div>
        <div class="row pt-2">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="bath" name="bath">
            <label for="bath">Take a bath</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="diapers" name="diapers">
            <label for="diapers">Change Diapers</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="clothes" name="clothes">
            <label for="clothes">Change Clothes</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="hair" name="hair">
            <label for="hair">Combed Hair</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="teeth" name="teeth">
            <label for="teeth">Brushed Teeth</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 pt-3">
        <button class="btn btn-primary" type="button" style="background: #00ACB2; border: none;"><i class="fa-solid fa-circle-plus"></i>Add more</button>
        </div>
    </div>
    </div>
    </div><!--Last of hygiene-->

    <div class="pt-3"> <!--Starting of room cleaning-->
     <div class="container form-control p-0">
        <h2 class="py-3 px-3 text-white" style="background: #00ACB2;">Room Cleaning</h2>
        <div class="p-3 pt-0">
        <div class="row pt-2">
            <div class="col-lg-3 col-md-3 col-sm-4 col-3">
                <h6>Check</h6>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-2">
                <h6 class="text-center">Time</h6>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-4">
                <h6 class="text-center">Measurement</h6>
            </div>
            <hr class="divider">
        </div>
        <div class="row pt-2">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="bedsheets" name="bedsheets">
            <label for="bedsheets">Change bedsheets</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-lg-3 col-md-3 col-sm-4 pb-3">
            <input type="checkbox" id="floors" name="floors">
            <label for="floors">Clean Floors</label>
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-lg-2 col-md-3 col-sm-4 pb-3">
                <div class="btn-group" role="group">
                <button type="button" class="patient-edit d-flex"><i class="fa-solid fa-pen"></i><a class="text-decoration-none" style="color: #00ACB2;" href="#">Edit</a></button>
                <button type="button" class="patient-delete mx-2 d-flex"><i class="fa-solid fa-trash"></i><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 pt-3">
        <button class="btn btn-primary" type="button" style="background: #00ACB2; border: none;"><i class="fa-solid fa-circle-plus"></i>Add more</button> <!--This should be a pop out-->
        </div>
    </div>
    </div>
    </div><!--Last of room cleaning-->

    <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3 pb-5">
    <button class="patient-reset-btn" type="button">Reset</button>
    <button class="patient-save-btn" type="button">Save</button>
    </div>

   
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



</div>

<?php

  require_once '../includes/staff-footer.php';

?>