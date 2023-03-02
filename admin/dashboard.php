<?php

    $page_title = 'Admin - Dashboard';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">

    <div class="row"><!--Start of first row-->
        <div class="col-12 col-lg-4 pt-3"><!--Start of 1 column-->
        <div class="card p-3 mb-2 border shadow">
            <div class="card-body">
                <!--Need to put graph in javascript here-->
                <h5 class="card-title">Weekly Appointment</h5>
                <p class="card-text h9" style="opacity:0.8;"><!-- Up/down Icon needeed to put here-->10% increase</p> <!--Icons needeed to put here-->
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><!-- Time Icon needeed to put here-->Updated 1 day ago</p><!--Icons needeed to put here-->
            </div><!--End of Card-body-->
            </div><!--End of Card-->
        </div><!--End of 1 column-->
        <div class="col-12 col-lg-4 pt-3"><!--Start of 2 column-->
        <div class="card p-3 mb-2 border shadow">
            <div class="card-body">
                <!--Need to put graph in javascript here-->
                <h5 class="card-title">Weekly Admissions</h5>
                <p class="card-text h9" style="opacity:0.8;">Last Campaign Performance</p>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><!-- Time Icon needeed to put here-->Updated 1 day ago</p><!--Icons needeed to put here-->
            </div><!--End of Card-body-->
            </div><!--End of Card-->
        </div><!--End of 2 column-->
        <div class="col-12 col-lg-4 pt-3"><!--Start of 3 column-->
        <div class="card p-3 mb-2 border shadow">
            <div class="card-body">
                <!--Need to put graph in javascript here-->
                <h5 class="card-title">Completed Tasks</h5>
                <p class="card-text h9" style="opacity:0.8;">Last Campaign Performance</p>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><!-- Time Icon needeed to put here-->Updated 1 day ago</p><!--Icons needeed to put here-->
            </div><!--End of Card-body-->
            </div><!--End of Card-->
        </div><!--End of 3 column-->
        </div><!--End of 1st row-->

        <div class="row">
        <div class="col-12 col-lg-3 pt-3"><!--Start of 1 column-->
        <div class="card border shadow">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p>icon</p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Total Staffs</h5>
                <p class="card-text h9 text-end">10</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><!-- calendar Icon needeed to put here-->Last 1 day ago</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 2nd column-->

        <div class="col-12 col-lg-3 pt-3"><!--Start of 2 column-->
        <div class="card border shadow">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p>icon</p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Total Patient</h5>
                <p class="card-text h9 text-end">30</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><!-- calendar Icon needeed to put here-->Last 1 day ago</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 3rd column-->

        <div class="col-12 col-lg-3 pt-3"><!--Start of 3rd column-->
        <div class="card border shadow">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p>icon</p> <!--Here should be icon-->
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
        <div class="card border shadow">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p>icon</p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Visited</h5>
                <p class="card-text h9 text-end">50</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><!-- time Icon needeed to put here-->Just Updated</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 4th column-->
        </div><!--End of first row-->

        <div class="row"><!--Start of 2nd row-->
        <div class="col-12 col-lg-3 pt-3"><!--Start of 1 column-->
        <div class="card border shadow">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p>icon</p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Total Visit</h5>
                <p class="card-text h9 text-end">20</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><!-- calendar Icon needeed to put here-->Last 1 day ago</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 2nd column-->

        <div class="col-12 col-lg-3 pt-3"><!--Start of 2 column-->
        <div class="card border shadow">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p>icon</p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Total Staff</h5>
                <p class="card-text h9 text-end">40</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><!-- calendar Icon needeed to put here-->Last 1 day ago</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 3rd column-->

        <div class="col-12 col-lg-3 pt-3"><!--Start of 3rd column-->
        <div class="card border shadow">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p>icon</p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Bed Available</h5>
                <p class="card-text h9 text-end">10</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><!-- calendar Icon needeed to put here-->Last 1 day ago</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 3rd column-->
        
        <div class="col-12 col-lg-3 pt-3"><!--Start of 4th column-->
        <div class="card border shadow">
            <div class="card-body">
                <div class="row">
                <div class="col">
                <div class="card border bg-success">
                    <p>icon</p> <!--Here should be icon-->
                </div>
                </div>
                <div class="col">
                <h5 class="card-title text-end" style="opacity:0.8;">Room Available</h5>
                <p class="card-text h9 text-end">10</p>
                </div>
                </div>
                <hr class="bg-secondary">
                <p class="card-text h9" style="opacity:0.5;"><!-- calendar Icon needeed to put here-->Last 1 day ago</p><!--Icons needeed to put here-->
            </div>
        </div>
        </div><!--End of 4th column-->
        </div><!--End of second row-->

        <div class="row g-5"><!--Start of 3 row-->
        <div class="col-12 col-lg-7 pt-3 pb-3">
        <div class="card border shadow">
            <div class="card-body p-0">
                <div class="row">
                <div class="card-body bg-success text-white rounded" style="width; 40%">
                <h3 class="card-title">New User</h3>
                <p>List of New User</p>
                </div>
                </div>
              <div class="container container-fluid pt-3 pb-3">
                <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                <tr>
                <th scope="col" class="text-success">Username</th>
                <th scope="col" class="text-success">Fullname</th>
                <th scope="col" class="text-success">Contact</th>
                <th scope="col" class="text-success">Address</th>
                <th scope="col" class="text-success">Email</th>
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

        <div class="col-12 col-lg-5 pt-3 pb-3">
            <div class="card border shadow">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="card-body bg-warning text-white rounded">
                            <div class="col-3 col-lg-3">
                            <h5 class="card-title">Tasks:</h5>
                            </div>
                            <div class="col-12 col-lg-12">
                            <div class="text-center">
                            <div class="btn-group" role="group" aria-label="Default button group">
                            <input type="checkbox" class="btn-check" id="bugs">
                            <label class="btn btn-outline-light" for="bugs">BUGS</label> <!--Should have icon here-->
                            <input type="checkbox" class="btn-check" id="website">
                            <label class="btn btn-outline-light" for="website">WEBSITE</label> <!--Should have icon here-->
                            <input type="checkbox" class="btn-check" id="server">
                            <label class="btn btn-outline-light" for="server">SERVER</label> <!--Should have icon here-->
                            </div>
                            </div>
                            </div>
                        </div>
                    </div><!--End of row-->
                    <div class="container container-fluid pt-3 pb-3"><!--Start of container-->
                    <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action">
                        <div class="row">
                            <div class="col-1">
                                <input class="form-check-input" type="checkbox" value="check" id="mark">
                            </div>
                            <div class="col-6">
                                <p>Sign contact for "What are conference organizers afraid of?"</p>
                            </div>
                            <div class="col-4 pt-3">
                            <div class="d-grid gap-2">
                            <button type="button" class="btn btn-primary">Edit</button> 
                            <button type="button" class="btn btn-outline-danger">Cancel</button>
                            </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                    <div class="row">
                            <div class="col-1">
                                <input class="form-check-input" type="checkbox" value="" id="mark">
                            </div>
                            <div class="col-6">
                                <p>Sign contact for "What are conference organizers afraid of?"</p>
                            </div>
                            <div class="col-4 pt-3">
                            <div class="d-grid gap-2">
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Cancel</button>
                            </div>
                            </div>
                        </div>
                    </a>
                    <a href="#" class="list-group-item list-group-item-action">
                    <div class="row">
                            <div class="col-1">
                                <input class="form-check-input" type="checkbox" value="" id="mark">
                            </div>
                            <div class="col-6">
                                <p>Sign contact for "What are conference organizers afraid of?"</p>
                            </div>
                            <div class="col-4 pt-4">
                            <div class="d-grid btn-block d-flex gap-1">
                            <button type="button" class="btn btn-primary">Edit</button>
                            <button type="button" class="btn btn-outline-danger">Cancel</button>
                            </div>
                            </div>
                    </div>
                    </a>
                        </div><!--End of list group-->
                    </div> <!--End of container-->
                </div><!--End of card body-->
            </div><!--End of card border-->
        </div><!--End of column-->
       
        </div><!--End of row-->






</div><!--End of container alignment-->
