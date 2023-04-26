<?php

  $page_title = 'WeCare Admin - Feedback';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

?>

<div class="content">
<div class="container align-items-center pt-3">
    <h2 class="pb-3" style="color: #00ACB2;">Feedback</h2><!--Feedback title-->

    <div class="pt-2 mb-3">
        <ul class="nav nav-pills nav-fill flex-column flex-sm-row" id="pills-tab" role="tablist">
                <li class="nav-item bg-secondary">
                <button class="nav-link active text-white" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">
                    All Feedback
                </button>
                </li>
                <li class="nav-item bg-secondary">
                <button class="nav-link text-white" id="pills-unread-tab" data-bs-toggle="pill" data-bs-target="#pills-unread" type="button" role="tab" aria-controls="pills-unread" aria-selected="false">
                    Unread
                </button>
                </li>
                <li class="nav-item bg-secondary">
                <button class="nav-link text-white" id="pills-read-tab" data-bs-toggle="pill" data-bs-target="#pills-read" type="button" role="tab" aria-controls="pills-read" aria-selected="false">
                    Read
                </button>
                </li>
        </ul>
	</div>

    <div class="tab-content pt-3" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

        <!-- Feedback Here -->
        <div class="row">
            <div class="col-12">
                

            </div>
        </div>
        <ul class="list-group pt-3">
            <li class="list-group-item">An item</li>
            <li class="list-group-item">A second item</li>
            <li class="list-group-item">A third item</li>
            <li class="list-group-item">A fourth item</li>
            <li class="list-group-item">And a fifth one</li>
            </ul>

        </div>
    </div>

</div><!--End of all-->
</div>

<?php

require_once '../includes/admin-footer.php';

?>