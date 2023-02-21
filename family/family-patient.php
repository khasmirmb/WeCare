<?php

    $page_title = 'WeCare - Family Patient';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">
<button type="button" class="btn btn-primary"><a class="text-white text-decoration-none" href="family-moni.php">< Family Monitoring</a></button>


<div class="container">
    <div class="row">
    <div class="col pt-3 text-center">
    <div class="badge rounded-pill bg-primary text-wrap py-4 px-4">
        <h4 class="">Health Status: <strong>Very Good</strong></h4>
    </div>
    </div>
    </div>
</div>
<div class="container">
    <div class="row"><!--Details of the patient-->
    <div class="col-md-8 col-md-4 pt-3"><!--Big blue thing-->
    <div class="bg-primary text-wrap py-3 px-3 text-light rounded float-start">
    <div class="row">
        <div class="col">
        <img src="download.jpg" class="rounded float-start" alt="Datu J. Batumbaka">
        </div>
        <div class="col">
        <div class="row">
        <h5><strong>Datu J. Batumbakal</strong></h5>
        <p>Male - 57 Years Old</p>
        </div>
        <div class="row row-cols-2">
            <div class="col">High BP</div>
            <div class="col">Bedridden</div>
            <div class="col">Fracture</div>
            <div class="col pb-3">Low Hearing</div>
        </div>
        <hr class="divider">
        </div>
        </div>
        <div class="row">
            <div class="col"><h5><strong>Last Check</strong></h4></div>
            <div class="col"><p>Dr. Eljen Mae Augusto on 23rd Dec 2020</p></div>
        </div>
        <div class="row">
            <div class="col"><h5><strong>Observation</strong></h5></div>
            <div class="col"><p>Complexities due to age. Remain tensed about his younger daughter who is addicted and does not have any stable job. Allergic to peanuts.</p></div>
        </div>
</div>
</div> <!--End of details of the patient-->
    <div class="col-6 col-md-4 pt-3"> <!--Appointment-->
        <div class="bg-primary text-wrap py-3 px-3 text-light rounded float-start">
            <h5><strong>Appointment</strong></h5>
            <h6 class="bg-secondary text-white d-inline">5:00 PM - 6:00 PM</strong></h6>
            <p class="text-black-50 pb-5">January 3, 2023</p> 
            <h6><strong>Current Problem:</strong></h6>
            <p class="bd-lead">Feeling pain in chest occasionally in the morning after waking up. No coughing but runny nose. no fever in last 3 weeks. Diarrhea for todays last week.</p>
        </div>
        </div>
</div>
</div>

<!--Table medicine-->
<div class="row">
<div class="col-8 p-3">
    <h4 class="pb-3"><strong>Medicine</strong></h4>
    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col">Name</th>
        <th cope="col" class="text-center">Dose</th>
        <th scope="col" class="text-center">Started at</th>
        <th scope="col" class="text-center">Status</th>
        <th scope="col" class="text-center">Note</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>Ethatin x 40mg</td>
        <td class="text-center">1-0-1</td>
        <td class="text-center">12 Dec 2022</td>
        <td class="text-center">On</td>
        <td class="text-center">Works Fine</td>
       </tr>
        <tr>
        <td>Ethatin x 40mg</td>
        <td class="text-center">1-0-1</td>
        <td class="text-center">12 Dec 2022</td>
        <td class="text-center">On</td>
        <td class="text-center">Works Fine</td>
        </tr>
        <tr>
        <td>Ethatin x 40mg</td>
        <td class="text-center">1-0-1</td>
        <td class="text-center">12 Dec 2022</td>
        <td class="text-center">On</td>
        <td class="text-center">Works Fine</td>
        </tr>
        <tr>
        <td>Ethatin x 40mg</td>
        <td class="text-center">1-0-1</td>
        <td class="text-center">12 Dec 2022</td>
        <td class="text-center">On</td>
        <td class="text-center">Works Fine</td>
        </tr>
        <tr>
        <td>Ethatin x 40mg</td>
        <td class="text-center">1-0-1</td>
        <td class="text-center">12 Dec 2022</td>
        <td class="text-center">On</td>
        <td class="text-center">Works Fine</td>
        </tr>
    </tbody>
</table>
</div>
</div>

    <div class="col-6 col-md-4 pt-3">
        <div class="bg-primary text-wrap py-3 px-3 text-light rounded float-start">
        <h4 class="pb-3"><strong>Reports</strong></h4>
            <div class="row">
                <div class="col-8">
                    <!--Blood Image-->
                    <h6><strong>Complete blood count</strong></h6>
                    <p class="text-black-50">Dec 19, 2022</p>
                </div>
                <div class="col-4">
                    <!--Eye image-->
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <!--Electrict image-->
                    <h6><strong>Electrocardiography</strong></h6>
                    <p class="text-black-50">Dec 19, 2022</p>
                </div>
                <div class="col-4">
                    <!--Eye image-->
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <!--x-ray image-->
                    <h6><strong>X-Ray</strong></h6>
                    <p class="text-black-50">Dec 19, 2022</p>
                </div>
                <div class="col-4">
                    <!--Eye image-->
                </div>
            </div>
            
    </div>
    </div>
    
<!--Table Nutrition-->
<div class="row">
<div class="col-8 p-3">
    <h4 class="pb-3"><strong>Nutrition</strong></h4>
    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col">Name</th>
        <th cope="col" class="text-center">Type</th>
        <th scope="col" class="text-center">Time</th>
        <th scope="col" class="text-center">Status</th>
        <th scope="col" class="text-center">Note</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>Breakfast</td>
        <td class="text-center">Light</td>
        <td class="text-center">07:30 AM</td>
        <td class="text-center">Done</td>
        <td class="text-center">Left Overs</td>
       </tr>
        <tr>
        <td>A.M Snack</td>
        <td class="text-center">Light</td>
        <td class="text-center">10:30 AM</td>
        <td class="text-center">Done</td>
        <td class="text-center">No Left Overs</td>
        </tr>
        <tr>
        <td>Lunch</td>
        <td class="text-center">Light</td>
        <td class="text-center">12:30 AM</td>
        <td class="text-center">Done</td>
        <td class="text-center">Left Overs</td>
       </tr>
        <tr>
        <td>P.M Snack</td>
        <td class="text-center">Light</td>
        <td class="text-center">4:30 AM</td>
        <td class="text-center">Done</td>
        <td class="text-center">Left Overs</td>
        </tr>
        <tr>
        <td>Dinner</td>
        <td class="text-center">Light</td>
        <td class="text-center">8:30 AM</td>
        <td class="text-center">Done</td>
        <td class="text-center">Left Overs</td>
       </tr>
    </tbody>
</table>
</div>
</div>


    <div class="col-6 col-md-4 pt-3">
    <div class="bg-primary text-wrap py-3 px-3 text-light rounded float-start">
        <h4 class="pb-3"><strong>Photo Update</strong></h4>
        <div class="row">
                <div class="col-8">
                    <!--Image-->
                </div>
                <div class="col-4">
                    <!--Eye Image-->
                </div>
         </div>
         <div class="row">
                <div class="col-8">
                    <!--Image-->
                </div>
                <div class="col-4">
                    <!--Eye Image-->
                </div>
         </div>
         <div class="row">
                <div class="col-8">
                    <!--Image-->
                </div>
                <div class="col-4">
                    <!--Eye Image-->
                </div>
         </div>
         <div class="row">
                <div class="col-8">
                    <!--Image-->
                </div>
                <div class="col-4">
                    <!--Eye Image-->
                </div>
         </div>
    </div>
    </div>
    </div>

<!--Table Hygiene-->
<div class="row">
<div class="col-8 p-3">
    <h4 class="pb-3"><strong>Hygiene</strong></h4>
    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col">Name</th>
        <th cope="col" class="text-center">Time</th>
        <th scope="col" class="text-center">Status</th>
        <th scope="col" class="text-center">Note</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <td>Take a Bath</td>
        <td class="text-center">07:30 AM</td>
        <td class="text-center">Done</td>
        <td class="text-center">None</td>
       </tr>
        <tr>
        <td>Brush Teeth</td>
        <td class="text-center">10:30 AM</td>
        <td class="text-center">Done</td>
        <td class="text-center">None</td>
        </tr>
        <tr>
        <td>Change Diaper</td>
        <td class="text-center">12:30 AM</td>
        <td class="text-center">Done</td>
        <td class="text-center">None</td>
       </tr>
        <tr>
        <td>Brush Teeth</td>
        <td class="text-center">4:30 AM</td>
        <td class="text-center">Done</td>
        <td class="text-center">None</td>
        </tr>
        <tr>
        <td>Take a Bath</td>
        <td class="text-center">8:30 AM</td>
        <td class="text-center">Done</td>
        <td class="text-center">None</td>
       </tr>
    </tbody>
</table>
</div>
</div>
</div>

<!--Nurse-->
    <div class="bg-primary text-wrap py-3 px-5 text-light rounded float-start">
        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="button" class="btn btn-outline-light text-primary"><a class="text-light" href="nurse-list.php">Previous Nurse</a></button>
        </div>
        
    <div class="row">
        <div class="col">
             <h6 class="text-center mt-4 pt-3"><strong>Nurse Assign</strong></h6>
            <img src="image/download.jpg" class="rounded-circle" alt="Mikaylah B. Chu">
            <p class="text-center">Mikaylah B. Chu</p>
            </div>
            
        <div class="col">
            <div class="row pt-5">
                <h7><strong>Contact Number</strong></h7>
            </div>
            <div class="row pt-3">
                <p>0956342354</p>
            </div>
        </div>
        <div class="col">
            <div class="row pt-5">
                <h7><strong>Email Address</strong></h7>
            </div>
            <div class="row pt-3">
                <p>mikaylahchu@gmail.com</p>
            </div>
        </div>
        <div class="col">
        <div class="row pt-5">
                <h7><strong>Socials</strong></h7>
            </div>
            <div class="row pt-3">
               <ul class="list-unstyled">
                <li>Facebook</li>
                <li>Instagram</li>
                <li>Tweeter</li>
                <li>LinkedIn</li>
               </ul>
            </div>
        </div>
        </div>    
        </div>
</div><!--Don't touch-->

