<?php

    $page_title = 'Admin - Unread Feedback';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>

<div class="container align-items-center pt-3">
    <h2 class="pb-3">Feedback</h2><!--Feedback title-->

    <div class="d-flex justify-content-center"><!--start of button-->
    <div class="btn-group btn-group-lg" role="group" aria-label="Basic radio toggle button group" style="width: 100%;">
    <button type="button" class="btn btn-outline-primary"><a href="feedback-all.php" class="text-decoration-none">All</a></button>
    <button type="button" class="btn btn-outline-primary"><a href="feedback-unread.php" class="text-decoration-none">Unread</a></button>
    <button type="button" class="btn btn-outline-primary"><a href="feedback-read.php" class="text-decoration-none">Read</a></button>
    </div>
    </div><!--End of button-->

    <div class="d-flex justify-content-center pt-2"><!--start of button refresh,delete, mark all-->
    <div class="btn-group btn-group-lg" role="group" style="width: 100%;">
    <button type="button" class="btn btn-light">Refresh</button><!--should have icon-->
    <button type="button" class="btn btn-light">Delete</button><!--should have icon and modal for delete-->
    <button type="button" class="btn btn-light">Mark All</button><!--should have icon-->
    </div>
    </div><!--end of button refresh,delete, mark all-->

    <div class="list-group pt-5"><!--Starting of the messages-->
    <a href="#" class="list-group-item list-group-item-action"><!--This should be modal after clicking this link-->
        <div class="row">
                <div class="col-1 col-lg-1 pt-4">
                <input class="form-check-input " type="checkbox" value="" id="mark">
                </div>
                <div class="col-8 col-lg-8">
                    <div class="row">
                        <h8 class="pt-2"><strong>Carla Brown</strong></h8>
                    </div>
                    <div class="row">
                        <p class="h9">Your sidebar doesn't work properly</p>
                    </div>
                </div>
                <div class="col-2 col-lg-2 pt-4">
                    <p style="position: absolute; right: 10px; margin: 0;"><strong>8:30 PM</strong></p>
                </div>
            </div>
    </a>
    <a href="#" class="list-group-item list-group-item-action"><!--This should be modal after clicking this link-->
        <div class="row">
                <div class="col-1 col-lg-1 pt-4">
                <input class="form-check-input " type="checkbox" value="" id="mark">
                </div>
                <div class="col-8 col-lg-8">
                    <div class="row">
                        <h8 class="pt-2"><strong>Carla Brown</strong></h8>
                    </div>
                    <div class="row">
                        <p class="h9">Your sidebar doesn't work properly</p>
                    </div>
                </div>
                <div class="col-2 col-lg-2 pt-4">
                    <p style="position: absolute; right: 10px; margin: 0;"><strong>8:30 PM</strong></p>
                </div>
            </div>
    </a>
    <a href="#" class="list-group-item list-group-item-action"><!--This should be modal after clicking this link-->
        <div class="row">
                <div class="col-1 col-lg-1 pt-4">
                <input class="form-check-input " type="checkbox" value="" id="mark">
                </div>
                <div class="col-8 col-lg-8">
                    <div class="row">
                        <h8 class="pt-2"><strong>Carla Brown</strong></h8>
                    </div>
                    <div class="row">
                        <p class="h9">Your sidebar doesn't work properly</p>
                    </div>
                </div>
                <div class="col-2 col-lg-2 pt-4">
                    <p style="position: absolute; right: 10px; margin: 0;"><strong>8:30 PM</strong></p>
                </div>
            </div>
    </a>
    <a href="#" class="list-group-item list-group-item-action"><!--This should be modal after clicking this link-->
        <div class="row">
                <div class="col-1 col-lg-1 pt-4">
                <input class="form-check-input " type="checkbox" value="" id="mark">
                </div>
                <div class="col-8 col-lg-8">
                    <div class="row">
                        <h8 class="pt-2"><strong>Carla Brown</strong></h8>
                    </div>
                    <div class="row">
                        <p class="h9">Your sidebar doesn't work properly</p>
                    </div>
                </div>
                <div class="col-2 col-lg-2 pt-4">
                    <p style="position: absolute; right: 10px; margin: 0;"><strong>8:30 PM</strong></p>
                </div>
            </div>
    </a>
    <a href="#" class="list-group-item list-group-item-action"><!--This should be modal after clicking this link-->
        <div class="row">
                <div class="col-1 col-lg-1 pt-4">
                <input class="form-check-input " type="checkbox" value="" id="mark">
                </div>
                <div class="col-8 col-lg-8">
                    <div class="row">
                        <h8 class="pt-2"><strong>Carla Brown</strong></h8>
                    </div>
                    <div class="row">
                        <p class="h9">Your sidebar doesn't work properly</p>
                    </div>
                </div>
                <div class="col-2 col-lg-2 pt-4">
                    <p style="position: absolute; right: 10px; margin: 0;"><strong>8:30 PM</strong></p>
                </div>
            </div>
    </a>
    </div><!--Done of the button esh table-->

</div><!--End of all-->
