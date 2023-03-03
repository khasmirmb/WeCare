<?php

  $page_title = 'WeCare Staff - Admission';
  require_once '../includes/staff-header.php';
  session_start();

  if(!isset($_SESSION['staff_logged'])){
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
              <li><a class="dropdown-item" href="#">Something else here</a></li>
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
              <th scope="col" class="text-center">Patient Name</th>
              <th scope="col" class="text-center">Relative Name</th>
              <th scope="col" class="text-center">Relationship</th>
              <th scope="col" class="text-center">Admission No.</th>
              <th scope="col" class="text-center">Status</th>
              <th scope="col" class="text-center">Action</th>
            </tr>
          </thead>
          <tbody>

          <?php foreach($staff_addmi_list as $row){ ?>

            <tr>
              <td class="text-center"><?php echo $row['p_firstname'] . " " . $row['p_lastname'] ?></td>

              <td class="text-center"><?php echo $row['r_firstname'] . " " . $row['r_lastname'] ?></td>

              <td class="text-center"><?php echo $row['inquire'] ?></td>

              <td class="text-center"><?php echo $row['admission_no'] ?></td>

              <td class="text-center"><?php echo $row['status'] ?></td>

              <td class="text-center">
                <a class="action-completed btn btn-success" href="add.completed.php?id=<?php echo $row['id'] ?>">Completed</a>

                <a class="action-noshow btn btn-danger" href="add.canceled.php?id=<?php echo $row['id'] ?>">Canceled</a>
              </td>

            </tr>

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
