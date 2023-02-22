<?php

    $page_title = 'Staff - Patient';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">
    <button type="button" class="btn btn-primary"><a class="text-white text-decoration-none" href="family-list.php">< Patient List</a></button>

    <div class="pt-3">
    <div class=" container bg-primary p-3">
    <div class="row">
        <div class="col-4 pt-3">
        <img src="\images\amongus2.jpg" class="img-thumbnail img-fluid" alt="among us"><!--Image of the patient-->
        </div>
        <div class="col-8 text-light">
            <h1><strong>Carl Bonifacio Jr</strong></h1>
            <h5>MALE - 75 years old</h5>
            <h5 class="pt-3">Diseases:</h5>
            <p>Pneumonia, High Blood, Diabetic</p>
    </div>
    </div>    
    </div>
    </div> <!--End of Patient Card-->

    <h2 class="pt-4"><strong>Patient Monitoring</strong></h2>
    
    <div class="row pt-3">
        <div class="col-4 pb-3">
        <div class="form-group">
        <label for="date-input">Date:</label>
        <input type="date" class="form-control" id="date-input">
        </div>

        </div>
        <div class="col-4 pb-3">
        <div class="form-group">
        <label for="time-input">Time:</label>
        <input type="time" class="form-control" id="time-input">
        </div>
        </div>

        <div class="col-4 pb-3">
        <div class="form-group">
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
        <h2 class="bg-primary bg-gradient py-3 px-3 text-white">Medicine</h2>
        <div class="p-3 pt-0">
        <div class="row">
            <div class="col-3">
                <h5>Check</h5>
            </div>
            <div class="col-2">
                <h5 class="text-center">Time</h5>
            </div>
            <div class="col-4">
                <h5 class="text-center">Measurement</h5>
            </div>
            <div class="col-2">
            </div>
            <hr class="divider">
        </div>
        <div class="row pt-2">
        <div class="col-3">
            <input type="checkbox" id="medicine" name="medicine">
            <label for="medicine">Biogesic</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-2">
        <div class="col-3">
            <input type="checkbox" id="medicine" name="medicine">
            <label for="medicine">Lasartan</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
            
        </div>
        <div class="d-grid gap-2 pt-3">
        <button class="btn btn-primary" type="button">Add more</button>
        </div>
    </div>
    </div>
    </div><!--Last of Medicine-->

    <div class="pt-3"><!--Starting of Health-->
    <div class="container form-control p-0">
        <h2 class="bg-primary bg-gradient py-3 px-3 text-white">Health</h2>
        <div class="p-3 pt-0">
        <div class="row">
            <div class="col-3">
                <h5>Check</h5>
            </div>
            <div class="col-2">
                <h5 class="text-center">Time</h5>
            </div>
            <div class="col-4">
                <h5 class="text-center">Measurement</h5>
            </div>
            <div class="col-2">
            </div>
            <hr class="divider">
        </div>
        <div class="row pt-2">
        <div class="col-3">
            <input type="checkbox" id="medicine" name="medicine">
            <label for="medicine">Check Blood Pressure</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-3">
            <input type="checkbox" id="sugar" name="sugar">
            <label for="sugar">Check Blood Sugar</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
            
        </div>
        <div class="d-grid gap-2 pt-3">
        <button class="btn btn-primary" type="button">Add more</button>
        </div>
    </div>
    </div>
    </div><!--Last of Health-->
   
    <div class="pt-3"><!--Starting of Nutrition-->
    <div class="container form-control p-0">
        <h2 class="bg-primary bg-gradient py-3 px-3 text-white">Nutrition</h2>
        <div class="p-3 pt-0">
        <div class="row">
            <div class="col-3">
                <h5>Check</h5>
            </div>
            <div class="col-2">
                <h5 class="text-center">Time</h5>
            </div>
            <div class="col-4">
                <h5 class="text-center">Measurement</h5>
            </div>
            <div class="col-2">
            </div>
            <hr class="divider">
        </div>
        <div class="row pt-2">
        <div class="col-3">
            <input type="checkbox" id="breakfast" name="breakfast">
            <label for="breakfast">Breakfast</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-3">
            <input type="checkbox" id="am-snack" name="am-snack">
            <label for="am-snack">A.M Snack</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-3">
            <input type="checkbox" id="lunch" name="lunch">
            <label for="lunch">Lunch</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-3">
            <input type="checkbox" id="pm-snack" name="pm-snack">
            <label for="pm-snack">P.M Snack</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-3">
            <input type="checkbox" id="dinner" name="dinner">
            <label for="dinner">Dinner</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 pt-3">
        <button class="btn btn-primary" type="button">Add more</button>
        </div>
    </div>
    </div>
    </div><!--Last of Nutrition-->

     <div class="pt-3"> <!--Starting of Hygiene-->
     <div class="container form-control p-0">
        <h2 class="bg-primary bg-gradient py-3 px-3 text-white">Hygiene</h2>
        <div class="p-3 pt-0">
        <div class="row pt-2">
            <div class="col-3">
                <h5>Check</h5>
            </div>
            <div class="col-2">
                <h5 class="text-center">Time</h5>
            </div>
            <div class="col-4">
                <h5 class="text-center">Measurement</h5>
            </div>
            <div class="col-2">
            </div>
            <hr class="divider">
        </div>
        <div class="row pt-2">
        <div class="col-3">
            <input type="checkbox" id="bath" name="bath">
            <label for="bath">Take a bath</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-3">
            <input type="checkbox" id="diapers" name="diapers">
            <label for="diapers">Change Diapers</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-3">
            <input type="checkbox" id="clothes" name="clothes">
            <label for="clothes">Change Clothes</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-3">
            <input type="checkbox" id="hair" name="hair">
            <label for="hair">Combed Hair</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-3">
            <input type="checkbox" id="teeth" name="teeth">
            <label for="teeth">Brushed Teeth</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 pt-3">
        <button class="btn btn-primary" type="button">Add more</button>
        </div>
    </div>
    </div>
    </div><!--Last of hygiene-->

    <div class="pt-3"> <!--Starting of room cleaning-->
     <div class="container form-control p-0">
        <h2 class="bg-primary bg-gradient py-3 px-3 text-white">Room Cleaning</h2>
        <div class="p-3 pt-0">
        <div class="row pt-2">
            <div class="col-3">
                <h5>Check</h5>
            </div>
            <div class="col-2">
                <h5 class="text-center">Time</h5>
            </div>
            <div class="col-4">
                <h5 class="text-center">Measurement</h5>
            </div>
            <div class="col-2">
            </div>
            <hr class="divider">
        </div>
        <div class="row pt-2">
        <div class="col-3">
            <input type="checkbox" id="bedsheets" name="bedsheets">
            <label for="bedsheets">Change bedsheets</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="row pt-3">
        <div class="col-3">
            <input type="checkbox" id="floors" name="floors">
            <label for="floors">Clean Floors</label>
            </div>
            <div class="col-2">
                <input type="time" class="form-control" id="time-input">
            </div>
            <div class="col-4">
                <input type="text" class="form-control" id="text-input">
            </div>
            <div class="col-2">
                <div class="btn-group" role="group">
                <button type="button" class="btn btn-primary d-flex"><a class="text-white text-decoration-none" href="#">Rename</a></button>
                <button type="button" class="btn btn-danger mx-2 d-flex"><a class="text-white text-decoration-none" href="#">Delete</a></button>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 pt-3">
        <button class="btn btn-primary" type="button">Add more</button>
        </div>
    </div>
    </div>
    </div><!--Last of room cleaning-->

    <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3 pb-5">
    <button class="btn btn-outline-primary me-md-2" type="button">Clear</button>
    <button class="btn btn-primary" type="button">Save</button>
    </div>

</div> <!--Don't touch-->


