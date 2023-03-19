<?php

  $page_title = 'WeCare Admin - Payment Details';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

?>
<div class="content">
<div class="container align-items-center pt-3">
    <button class="btn btn-secondary" type="button" style="background: #00ACB2; border: #00ACB2; color: #fff;"><a class="text-white text-decoration-none" href="patient-list.php"> < Patient List </a></button>

<div class="container">
    <div class="row">
    <div class="col pt-3 text-center">
    <div class="badge rounded-pill text-wrap py-4 px-4" style="background: #00ACB2;">
        <h4 class="">Health Status: <strong>Very Good</strong></h4>
    </div>
    </div>
    </div>
</div>
<div class="container">
    <div class="col-12 col-lg-3 pt-3">
    <button class="btn btn-secondary" type="edit" style="background: #00ACB2; border: #00ACB2; color: #fff;">Edit</button>
    </div>
    <div class="row"><!--Details of the patient-->
    <div class="col-12 col-lg-8 pt-2"><!--Big blue thing-->
    <div class="text-wrap py-3 px-3 text-light rounded float-start" style="background: #00ACB2;">
    <div class="row">
        <div class="col-12 col-lg-4 pb-3">
        <img src="../images/download.jpg" class="rounded float-start img-thumbnail img-fluid" alt="Datu J. Batumbaka">
        </div>
        <div class="col-12 col-lg-8">
        <div class="row">
        <h4><strong>Datu J. Batumbakal</strong></h4>
        <p class="pb-3">Male - 57 Years Old</p>
        </div>
        <div class="row row-cols-2">
            <div class="col">High BP</div>
            <div class="col">Bedridden</div>
            <div class="col pt-3">Fracture</div>
            <div class="col pt-3 pb-3">Low Hearing</div>
        </div>
        <hr class="divider">
        </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4"><h5><strong>Last Check</strong></h4></div>
            <div class="col-12 col-lg-8"><p>Dr. Eljen Mae Augusto on 23rd Dec 2020</p></div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-4"><h5><strong>Observation</strong></h5></div>
            <div class="col-12 col-lg-8"><p>Complexities due to age. Remain tensed about his younger daughter who is addicted and does not have any stable job. Allergic to peanuts.</p></div>
        </div>
        
</div>
    <div class="card">
    <div class="card-body">
    Last Updated and Inputed: 01:00 PM December 07, 2022
    </div>
    </div>
</div> <!--End of details of the patient-->
    
    <div class="col-12 col-lg-4 pt-3"> <!--Appointment-->
    <div class="col-12 col-lg-4 pb-2">
    <button class="btn btn-secondary" type="edit" style="background: #00ACB2; border: #00ACB2; color: #fff;">Edit</button><!--Edit button-->
    </div>
        <div class="text-wrap py-3 px-3 text-light rounded float-start" style="background: #00ACB2;">
            <h5><strong>Appointment</strong></h5>
            <h6 class="bg-secondary text-white d-inline">5:00 PM - 6:00 PM</strong></h6>
            <p class="text-black-50 pb-5">January 3, 2023</p> 
            <h6><strong>Current Problem:</strong></h6>
            <p class="bd-lead">Feeling pain in chest occasionally in the morning after waking up. No coughing but runny nose. no fever in last 3 weeks. Diarrhea for todays last week.</p>
        </div>
</div>
</div>
</div>

<!--Nurse-->
<div class="col-12 col-lg-12 pt-3">
    <div class="col-12 col-lg-2 pb-2">
        <button class="btn btn-secondary" type="edit" style="background: #00ACB2; border: #00ACB2; color: #fff;">Edit</button><!--Edit button-->
        </div>
    <div class="text-wrap py-3 px-5 text-light rounded" style="background: #00ACB2; border: #00ACB2; color: #fff;">
        <div class="d-grid justify-content-md-end">
        <button type="button" class="btn btn-outline-light text-secondary"><a class="text-decoration-none text-light" href="nurse-list.php">Previous Nurse</a></button>
        </div>
    <div class="row pb-3">
        <div class="col-12 col-lg-4">
             <h6 class="text-center mt-4 pt-3 pb-3"><strong>Nurse Assign</strong></h6>
             <img src="../images/download.jpg" class="rounded-circle img-thumbnail img-fluid mx-auto d-block" alt="Mikaylah B. Chu" style="width: 30%; height: auto;">
            <p class="text-center pt-3">Mikaylah B. Chu</p>
            </div>
        <div class="col-12 col-lg-2">
            <div class="row pt-5">
                <h7><strong>Contact Number</strong></h7>
            </div>
            <div class="row pt-2">
                <p>0956342354</p>
            </div>
        </div>
        <div class="col-12 col-lg-3">
            <div class="row pt-5">
                <h7><strong>Email Address</strong></h7>
            </div>
            <div class="row pt-2">
                <p>mikaylahchu@gmail.com</p>
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


<!--Table medicine-->
<div class="row">
<div class="col-12 col-lg-8 p-3">
    <h4 class="pb-3"><strong>Medicine</strong></h4>
    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" style="background: #00ACB2; border: #00ACB2; color: #fff;">Name</th>
        <th cope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Dose</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Started at</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Note</th>
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


    <div class="col-12 col-lg-4 pt-3">
        <div class="col-12 col-lg-8 pb-2">
        <button class="btn btn-secondary" type="edit" style="background: #00ACB2; border: #00ACB2; color: #fff;">Edit</button><!--Edit button-->
        </div>
        <div class="text-wrap py-3 px-3 text-light rounded float-start" style="background: #00ACB2;">
        <h4 class="pb-3"><strong>Reports</strong></h4>
            <div class="row">
                <div class="col-8 col-lg-8">
                    <!--Blood Image-->
                    <h6><strong>Complete blood count</strong></h6>
                    <p class="text-black-50">Dec 19, 2022</p>
                </div>
                <div class="col-4 col-lg-4">
                    <!--Eye image-->
                </div>
            </div>
            <div class="row">
                <div class="col-8 col-lg-8">
                    <!--Electrict image-->
                    <h6><strong>Electrocardiography</strong></h6>
                    <p class="text-black-50">Dec 19, 2022</p>
                </div>
                <div class="col-4 col-lg-4">
                    <!--Eye image-->
                </div>
            </div>
            <div class="row">
                <div class="col-8 col-lg-8">
                    <!--x-ray image-->
                    <h6><strong>X-Ray</strong></h6>
                    <p class="text-black-50">Dec 19, 2022</p>
                </div>
                <div class="col-4 col-lg-4">
                    <!--Eye image-->
                </div>
            </div>
            
    </div>
    </div>
    
<!--Table Nutrition-->
<div class="col-12 col-lg-8 p-3">
    <h4 class="pb-3"><strong>Nutrition</strong></h4>
    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" style="background: #00ACB2; border: #00ACB2; color: #fff;">Name</th>
        <th cope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Type</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Time</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Note</th>
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


    <div class="col-12 col-lg-4 pt-3">
    <div class="col-12 col-lg-4 pb-2">
    <button class="btn btn-secondary" type="edit" style="background: #00ACB2; border: #00ACB2; color: #fff;">Edit</button><!--Edit button-->
    </div>
    <div class="text-wrap py-3 px-3 text-light rounded float-start" style="background: #00ACB2;">
        <h4 class="pb-3"><strong>Photo Update</strong></h4>
        <div class="row">
                <div class="col-8">
                <img src="../images/download.jpg" class="rounded float-start img-thumbnail img-fluid" alt="Datu J. Batumbaka">
                    <!--Image-->
                </div>
                <div class="col-4">
                    <!--Eye Image-->
                </div>
         </div>
         <div class="row">
                <div class="col-8 pt-3">
                <img src="../images/download.jpg" class="rounded float-start img-thumbnail img-fluid" alt="Datu J. Batumbaka">
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
<div class="col-12 col-lg-8 p-3">
<div class="row">
    <h4 class="pb-3"><strong>Hygiene</strong></h4>
    <div class="table-responsive">
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" style="background: #00ACB2; border: #00ACB2; color: #fff;">Name</th>
        <th cope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Time</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Note</th>
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

<div class="col-12 col-lg-8 pb-2">
    <h4><strong>Relatives</strong></h4>
</div>

<div class="col-12 col-lg-12">
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
  <tbody>
    <tr>
      <td class="pl-5"><img src="../images/download.jpg" class="gap-2" alt="Marites D. Karen" style="width: 50px; height: 50px; border: 2px solid white; border-radius: 50%;"></td>
      <td>Marites D. Karen</td>
      <td>Father</td>
      <td>09812356</td>
    </tr>
    <tr>
      <td class="p1-5"><img src="../images/download.jpg" class="gap-2" alt="Marites D. Karen" style="width: 50px; height: 50px; border: 2px solid white; border-radius: 50%;"></td>
      <td>Marites D. Karen</td>
      <td>Father</td>
      <td>09812356</td>
    </tr>
    <tr>
      <td class="p1-5"><img src="../images/download.jpg" class="gap-2" alt="Marites D. Karen" style="width: 50px; height: 50px; border: 2px solid white; border-radius: 50%;"></td>
      <td>Marites D. Karen</td>
      <td>Father</td>
      <td>09812356</td> 
    </tr>
    </tbody>    
    </table>
    </div>
    </div>
    </div>

</div><!--Don't touch-->

<?php

require_once '../includes/admin-footer.php';

?>