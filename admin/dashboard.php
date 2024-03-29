<?php

  $page_title = 'WeCare Admin - Dashboard';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

?>


<div class="content">

<!-- <h1>test</h1> -->


<div class="container align-items-center pt-3">

    <div class="row"><!--Start of first row-->
        <div class="col-12 col-lg-4 pt-3"><!--Start of 1 column-->
        <div class="card p-3 mb-2 border shadow">
            <div class="card-body">
                <!--Need to put graph in javascript here-->
                
                <h5 class="card-title">Weekly Appointment</h5>
                <div class="chart chart-one flex-center">
                    <canvas id="myChart"></canvas>
                </div>
                <p class="card-text h9" style="opacity:0.8;"><i class="fa-solid fa-arrow-up"></i><!-- Up/down Icon needeed to put here-->10% increase</p> <!--Icons needeed to put here-->
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><img src="../images/update-icon.png" class="udpate-icon"><!-- Time Icon needeed to put here-->Updated 1 day ago</p><!--Icons needeed to put here-->
            </div><!--End of Card-body-->
            </div><!--End of Card-->
        </div><!--End of 1 column-->
        <div class="col-12 col-lg-4 pt-3"><!--Start of 2 column-->
        <div class="card p-3 mb-2 border shadow">
            <div class="card-body">
                <!--Need to put graph in javascript here-->
                <h5 class="card-title">Weekly Admissions</h5>
                <div class="chart chart-one flex-center">
                    <canvas id="adCharts"></canvas>
                </div>
                <p class="card-text h9" style="opacity:0.8;">Last Campaign Performance</p>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><img src="../images/update-icon.png" class="udpate-icon"><!-- Time Icon needeed to put here-->Updated 1 day ago</p><!--Icons needeed to put here-->
            </div><!--End of Card-body-->
            </div><!--End of Card-->
        </div><!--End of 2 column-->
        <div class="col-12 col-lg-4 pt-3"><!--Start of 3 column-->
        <div class="card p-3 mb-2 border shadow">
            <div class="card-body">
                <!--Need to put graph in javascript here-->
                <h5 class="card-title">Completed Tasks</h5>
                <div class="chart chart-one flex-center">
                    <canvas id="taskCharts"></canvas>
                </div>
                <p class="card-text h9" style="opacity:0.8;">Last Campaign Performance</p>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><img src="../images/update-icon.png" class="udpate-icon"><!-- Time Icon needeed to put here-->Updated 1 day ago</p><!--Icons needeed to put here-->
            </div><!--End of Card-body-->
            </div><!--End of Card-->
        </div><!--End of 3 column-->
        </div><!--End of 1st row-->

        <div class="row">
        <div class="col-12 col-lg-3 pt-3"><!--Start of 1 column-->
        <div class="card border shadow h-100">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p class="icon_background"><i class="fas fa-users"></i></p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Total Users</h5>
                <p class="card-text h9 text-end">10</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><img src="../images/update-icon.png" class="udpate-icon"><!-- calendar Icon needeed to put here-->Last 1 day ago</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 2nd column-->

        <div class="col-12 col-lg-3 pt-3"><!--Start of 2 column-->
        <div class="card border shadow h-100">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p class="icon_background"><i class="fa-solid fa-person-cane"></i></p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Total Patient</h5>
                <p class="card-text h9 text-end">30</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><img src="../images/update-icon.png" class="udpate-icon"><!-- calendar Icon needeed to put here-->Last 1 day ago</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 3rd column-->

        <div class="col-12 col-lg-3 pt-3"><!--Start of 3rd column-->
        <div class="card border shadow h-100">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p class="icon_background"><i class="fa-solid fa-bug"></i></p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Fix Issues</h5>
                <p class="card-text h9 text-end">50</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><!-- tag Icon needeed to put here-->Tracked from Github</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 4th column-->

        <div class="col-12 col-lg-3 pt-3"><!--Start of 4th column-->
        <div class="card border shadow h-100">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p class="icon_background"><i class="fa-brands fa-facebook"></i></p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Visited</h5>
                <p class="card-text h9 text-end">50</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><img src="../images/update-icon.png" class="udpate-icon"><!-- time Icon needeed to put here-->Just Updated</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 4th column-->
        </div><!--End of first row-->

        <div class="row"><!--Start of 2nd row-->
        <div class="col-12 col-lg-3 pt-3"><!--Start of 1 column-->
        <div class="card border shadow h-100">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p class="icon_background"><i class="fa-solid fa-person-walking"></i></p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Total Visit</h5>
                <p class="card-text h9 text-end">20</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><img src="../images/update-icon.png" class="udpate-icon"><!-- calendar Icon needeed to put here-->Last 1 day ago</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 2nd column-->

        <div class="col-12 col-lg-3 pt-3"><!--Start of 2 column-->
        <div class="card border shadow h-100">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p class="icon_background"><i class="fa-solid fa-user-nurse"></i></p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Total Staff</h5>
                <p class="card-text h9 text-end">40</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><img src="../images/update-icon.png" class="udpate-icon"><!-- calendar Icon needeed to put here-->Last 1 day ago</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 3rd column-->

        <div class="col-12 col-lg-3 pt-3"><!--Start of 3rd column-->
        <div class="card border shadow h-100">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p class="icon_background"><i class="fa-solid fa-bed"></i></p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Bed Available</h5>
                <p class="card-text h9 text-end">10</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><img src="../images/update-icon.png" class="udpate-icon"><!-- calendar Icon needeed to put here-->Last 1 day ago</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 3rd column-->
        
        <div class="col-12 col-lg-3 pt-3"><!--Start of 4th column-->
        <div class="card border shadow h-100">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p class="icon_background"><i class="fa-sharp fa-solid fa-people-roof"></i><!--<img src="../images/room.png" class="room-icon">--></p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Room Available</h5>
                <p class="card-text h9 text-end">10</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><!--<img src="../images/update-icon.png" class="udpate-icon">--><!-- calendar Icon needeed to put here-->Last 1 day ago</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 4th column-->
        </div><!--End of second row-->

        <div class="row g-5"><!--Start of 3 row-->
        <div class="col-12 col-lg-7 pt-3 pb-3">
        <div class="card border shadow">
            <div class="card-body p-0">
                <div class="row">
                <div class="card-body text-white rounded" style="width: 40%; background: #00ACB2;">
                <h3 class="card-title">New User</h3>
                <p style="color: #000; font-weight: bold;">List of New User</p>
                </div>
                </div>
              <div class="container container-fluid pt-3">
                <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                <tr>
                <th scope="col">Username</th>
                <th scope="col">Fullname</th>
                <th scope="col">Contact</th>
                <th scope="col">Address</th>
                <th scope="col">Email</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <th scope="row">Khasmir69</th>
                <td>Khasmir Basaluddin</td>
                <td>09565656566</td>
                <td>Sta.Catalina</td>
                <td>khb@gmail.com</td>
                </tr>
                <tr>
                <th scope="row">Khasmir69</th>
                <td>Khasmir Basaluddin</td>
                <td>09565656566</td>
                <td>Sta.Catalina</td>
                <td>khb@gmail.com</td>
                </tr>
                <tr>
                <th scope="row">Khasmir69</th>
                <td>Khasmir Basaluddin</td>
                <td>09565656566</td>
                <td>Sta.Catalina</td>
                <td>khb@gmail.com</td>
                </tr>
                <tr>
                <th scope="row">Khasmir69</th>
                <td>Khasmir Basaluddin</td>
                <td>09565656566</td>
                <td>Sta.Catalina</td>
                <td>khb@gmail.com</td>
                </tr>
                <tr>
                <th scope="row">Khasmir69</th>
                <td>Khasmir Basaluddin</td>
                <td>09565656566</td>
                <td>Sta.Catalina</td>
                <td>khb@gmail.com</td>
                </tr>
                <tr>
                <th scope="row">Khasmir69</th>
                <td>Khasmir Basaluddin</td>
                <td>09565656566</td>
                <td>Sta.Catalina</td>
                <td>khb@gmail.com</td>
                </tr>
            </tbody>
            </table>
            </div> 
            </div> 
            </div>
            </div> 
            </div><!--End of col-->

            <!--Might Remove-->
        <div class="col-12 col-lg-5 pt-3 pb-3">
            <div class="card border shadow">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="card-body text-white rounded" style="background: #00ACB2;">
                            <div class="col-12 col-lg-8">
                            <h3 class="card-title">Patient</h3>
                            </div>
                        </div>
                    </div><!--End of row-->
                    <div class="container-fluid pt-3 pb-3"><!--Start of container-->
                    <div class="list-group">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">Name</th>
                            <th scope="col">Age</th>
                            <th scope="col">Room</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>1</td>
                            </tr>
                            <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>2</td>
                            </tr>
                            <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>2</td>
                            </tr>
                            <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>2</td>
                            </tr>
                            <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>2</td>
                            </tr>
                            <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>2</td>
                            </tr>
                        </tbody>
                        </table>
                    </div> <!--End of container-->
                </div><!--End of card body-->
            </div><!--End of card border-->
        </div><!--End of column-->
       
        </div><!--End of row-->




</div>

<?php

require_once '../includes/admin-footer.php';

?>