<?php

  $page_title = 'WeCare Admin - Admission';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

?>

<div class="content">

<div class="container align-items-center pt-3">
<div class="card text-center">
<div class="card-header"><!--Start of Card-->
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link"  href="../admin/admission.php">Admission Pending</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/appointment.php">Appointment Pending</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" aria-current="true" href="../admin/appointment-accepted.php">Appointment Accepted</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="../admin/admission-accepted.php">Admission Accepted</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="../admin/visitor-log.php">Visitor</a>
      </li>
    </ul>
  </div><!--End of Card-->
  
  <div class="col-7 col-lg-2 pt-4"> <!--Start of name of appointment-->
    <h4 class="mb-4">Admission</h4>
  </div><!--End of name of appointment-->


  <div class="col-12 col-lg-12"> <!--Start of 1st table-->
    <div class="container table-responsive table-rounded">

      <?php
          require_once '../classes/admission.class.php';

          $admin_admission = new Admission;

          $admission_list = $admin_admission->accepted_admission_admin();

      ?>

  <table class="table table-hover table-sm">
    <thead>
      <tr class="table-primary">
        <th scope="col" style="background: #00ACB2; color: #fff;">PATIENT</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">CREATED DATE</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ADMISSION NO.</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ASSIGNED TO</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">STATUS</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">ACTION</th>
      </tr>
    </thead>
    <tbody>

    <?php foreach($admission_list as $row){ ?>

      <tr>
        <th class="pt-4"><a href="../admin/admission-detail.php?id=<?php echo $row['id'] ?>" class="text-decoration-none text-dark text-left"><?php echo $row['p_firstname'] . " " . $row['p_middlename'][0] . ". " . $row['p_lastname'] ?></a></th>

        <td scope="row" class="pt-4"><?php echo date("m/d/y g:i A", strtotime($row['created_at'])) ?></td>

        <td scope="row" class="pt-4"><?php echo $row['admission_no']?></td>

        <td scope="row" class="pt-4"><?php echo $row['s_fname'] ." ". $row['s_mname'][0] . ". " . $row['s_lname'] ?></td>


      <td scope="row" class="pt-4"><?php echo $row['status'] ?></td>

      <td>
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#deleteModal">Delete</button>
        <button type="button" class="btn btn-primary" style="background: #00ACB2; color: #fff; border: #00ACB2;">Edit</button>
        </div>
      </td>

      </tr>

    <?php } ?>

    </tbody>
  </table>
</div>
</div><!--End of 1st Table-->


</div>
</div>

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
				<p>Do you really want to delete? This process cannot be undone.</p>
			</div>
      <div class="del-modal-footer">
        <button type="button" class="cancel-btn" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="del-btn">Delete</button></a>
      </div>
    </div>
  </div>
</div>

</div>

<?php

require_once '../includes/admin-footer.php';

?>