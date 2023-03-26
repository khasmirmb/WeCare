<?php

    $page_title = 'Admin - Feedback Read';
    require_once '../includes/admin-header.php';
    session_start();
  
    if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
    header('location: ../account/signin.php');
    }
  
    require_once '../includes/admin-sidebar.php';
  
?>

<div class="content">

<div class="container align-items-center pt-3">
    <h2 class="pb-3">Feedback</h2><!--Feedback title-->

    <div class="d-flex justify-content-center"><!--start of button-->
    <div class="btn-group btn-group-lg" role="group" aria-label="Basic radio toggle button group" style="width: 100%;">
    <button type="button" class="btn btn-outline-primary"><a href="../admin/feedback.php" class="feedback-a">All</a></button>
    <button type="button" class="btn btn-outline-primary"><a href="../admin/feedback-unread.php" class="feedback-a">Unread</a></button>
    <button type="button" class="btn btn-outline-primary"><a href="../admin/feedback-read.php" class="feedback-a">Read</a></button>
    </div>
    </div><!--End of button-->

    <div class="d-flex justify-content-center pt-2"><!--start of button refresh,delete, mark all-->
    <div class="btn-group btn-group-lg" role="group" style="width: 100%;">
    <button type="button" class="btn btn-light"><i class="fa-solid fa-rotate-right"></i>Refresh</button><!--should have icon-->
    <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#deleteModal"><i class="fa-solid fa-trash"></i>Delete</button><!--should have icon and modal for delete-->
    <button type="button" class="btn btn-light"><i class="fa-solid fa-square-check"></i>Mark All</button><!--should have icon-->
    </div>
    </div><!--end of button refresh,delete, mark all-->

    <div class="list-group pt-5"><!--Starting of the messages-->
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true"><!--This should be modal after clicking this link-->
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
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true"><!--This should be modal after clicking this link-->
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
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true"><!--This should be modal after clicking this link-->
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
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true"><!--This should be modal after clicking this link-->
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
    <a href="#" class="list-group-item list-group-item-action active" aria-current="true"><!--This should be modal after clicking this link-->
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

<!-- Delete Modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="del-modal-header">
      <div class="icon-box">
					<i class="material-icons">&#xE5CD;</i>
				</div>	
        <h5 class="del-modal-title" id="exampleModalLabel">Are you sure?</h5>
      </div>
      <div class="del-modal-body">
				<p>Do you really want to delete these feedbacks? This process cannot be undone.</p>
			</div>
      <div class="del-modal-footer">
        <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="del-btn">Delete</button></a>
      </div>
    </div>
  </div>
</div>

</div>