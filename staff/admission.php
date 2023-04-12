<?php

  $page_title = 'WeCare Staff - Admission';
  require_once '../includes/staff-header.php';
  session_start();

  if(!isset($_SESSION['staff_logged']) || $_SESSION['user_type'] != 'staff'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/staff-sidebar.php';

?>

<div class="content">
  <div class="cont-header">
    <h3 class="content-text">Admission</h3>
  </div>
  <div class="cont-table">
    <div class="container mt-5 px-2">
      <div class="table_border">
        <div class="mb-2 d-flex justify-content-between align-items-center">

          <div class="position-relative">
      
          </div>

          <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Sort by
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
              <li><a class="dropdown-item" href="#">Name</a></li>
              <li><a class="dropdown-item" href="#">Date</a></li>
            </ul>
          </div>

        <?php
          require_once '../classes/admission.class.php';

          $staff_admission = new Admission;

          $staff_addmi_list = $staff_admission->show_assigned_staff_admission($_SESSION['logged_id'], $_SESSION['staff_logged']);

        ?>

        </div>
        <div class="table-responsive">
          <table class="table table-responsive table-bordered">

          <thead>
            <tr class="tab-row">
              <th scope="col" class="text-center">User</th>
              <th scope="col" class="text-center">Patient Name</th>
              <th scope="col" class="text-center">Relative Name</th>
              <th scope="col" class="text-center">Admission Date</th>
              <th scope="col" class="text-center">Admission No.</th>
              <th scope="col" class="text-center">Status</th>
              <th scope="col" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>

          <?php foreach($staff_addmi_list as $row){ ?>

            <tr>
              <td class="text-center"><?php echo $row['fname'] . " " . $row['mname'][0] . ". " . $row['lname'] ?></td>

              <td class="text-center"><?php echo $row['p_firstname'] . " " . $row['p_middlename'][0] . ". " . $row['p_lastname'] ?></td>

              <td class="text-center"><?php echo $row['r_firstname'] . " " . $row['r_middlename'][0] . ". " . $row['r_lastname'] ?></td>

              <td class="text-center"><?php echo date("M j, Y", strtotime($row['add_date']))?></td>

              <td class="text-center"><?php echo $row['admission_no'] ?></td>

              <td class="text-center"><?php echo $row['status'] ?></td>

              <td class="text-center">
                <button class="action-completed btn btn-success" data-bs-toggle="modal" data-bs-target="#admission-done<?php echo $row['id'] ?>">Done</button>

                <button class="action-noshow btn btn-danger" data-bs-toggle="modal" data-bs-target="#admission-cancel<?php echo $row['id'] ?>">Cancel</button>

              </td>

            </tr>

            <!--Modal done-->
            <div class="modal fade" id="admission-done<?php echo $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="admission-doneLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 text-success" id="admission-doneLabel">Confirmation Admission Done</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                    Are you sure <strong><?php echo $row['p_firstname'] . " " . $row['p_middlename'][0] . ". " . $row['p_lastname'] ?></strong> process is done and he/she is admitted?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark bg-secondary text-white border-secondary" data-bs-dismiss="modal">No</button>
                    <a type="button" class="btn btn-primary" href="add.completed.php?id=<?php echo $row['id'] ?>">Yes</a>
                  </div>
                </div>
              </div>
            </div>
            </div>

            <!--Modal cancel-->
            <div class="modal fade" id="admission-cancel<?php echo $row['id'] ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="admission-cancelLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h1 class="modal-title fs-5 text-danger" id="admission-cancelLabel">Confirmation Admission Cancel</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body text-center">
                  Are you sure you want to cancel the admission of <strong><?php echo $row['p_firstname'] . " " . $row['p_middlename'][0] . ". " . $row['p_lastname'] ?></strong> made by <strong><?php echo $row['fname'] . " " . $row['mname'][0] . ". " . $row['lname'] ?></strong>?
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-dark bg-secondary text-white border-secondary" data-bs-dismiss="modal">No</button>
                    <a class="btn btn-primary" href="add.canceled.php?id=<?php echo $row['id'] ?>">Yes</a>
                  </div>
                </div>
              </div>

          <?php } ?>
          </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



<?php

require_once '../includes/staff-footer.php';

?>
