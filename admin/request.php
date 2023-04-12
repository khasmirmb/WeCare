<?php

  $page_title = 'WeCare Admin - Request';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

  require_once '../classes/relative.class.php';

  $relative = new Relative;

  $request_list = $relative->show_relative_request();

  

?>
<div class="content">
<div class="container align-items-center pt-3">
    <button class="btn btn-primary" type="button" style="background: #00ACB2; border: #00ACB2; color: #fff;"><a class="text-white text-decoration-none" href="patient-list.php"> <i class="fa-solid fa-arrow-left"></i> Patient List </a></button>

    <h1 class="pt-3"><strong>Family Monitoring Request</strong></h1>

    <div class="table-responsive pt-3"> <!--Start of Table-->
    <table class="table table-striped table-hover table-bordered">
  <thead class="table-info">
    <tr>
      <th scope="col" style="background: #00ACB2; border: #00ACB2; color: #fff;">User</th>
      <th scope="col" style="background: #00ACB2; border: #00ACB2; color: #fff;">Patient Name</th>
      <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">ID/Proof</th>
      <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Patient List</th>
      <th scope="col" class="text-center" style="background: #00ACB2; border: #00ACB2; color: #fff;">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $i = 0;
  foreach($request_list as $row){ ?>
    <tr>
        <td><?php echo $row['fname'] . " " . $row['mname'][0] . ". ". $row['lname'] ?></td>

        <td>
        <?php echo $row['patient_fname'] . " " . $row['patient_mname'][0] . ". ". $row['patient_lname'] . " " . $row['patient_suffix'] ?>
        </td>

        <td class="text-center">
          <a class="btn btn-secondary" href="../uploads/<?php echo $row['proof'] ?>" role="button" style="background: #00ACB2; border: #00ACB2; color: #fff;" download>Download</a>
          <?php
            //Display the error message if there is any.
            if(isset($error_no_file)){
              echo '<div><p class="text-danger text-center">'.$error_no_file.'</p></div>';
            }

          ?>

        </td>

        <form id="request-form" action="accept-request.php" method="GET">
        <td class="text-center">
        <?php
            require_once '../classes/patient.class.php';

            $patient = new Patient;

            $patient_list = $patient->show_patient_data();
          ?>
            <select name="patient" id="patient<?php echo $i; ?>" class="form-select form-select-sm">

            <?php foreach($patient_list as $data){ ?>
            <option value="<?php echo $data['id'] ?>"><?php echo ucfirst($data['fname']) ." ". ucfirst($data['mname'][0]) . ". " . ucfirst($data['lname']) . " " . ucfirst($data['suffix']) ?></option>
            <?php } ?>

            <input type="hidden" id="id" name="id" value="<?php echo $row['id'] ?>">

            <input type="hidden" id="user_iden" name="user_iden" value="<?php echo $row['user_iden'] ?>">

        </td>

        <td>

        <div class="d-flex gap-2 justify-content-center">

          <button type="button" class="btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#reject-monitoring<?php echo $row['id'] ?>">Reject</button>

          <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#accept-monitoring<?php echo $row['id'] ?>" onclick="getUserInput(<?php echo $i; ?>)">Approve</button>

        </div>
        </td>

    <!-- Reject Modal -->
    <div class="modal fade" id="reject-monitoring<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="reject-monitoringLabel" aria-hidden="true">
      <div class="modal-lg modal-dialog modal-dialog-centered d-flex align-items-center">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 text-danger" id="reject-monitoringLabel">Reject Request</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <h6 class="text-center">Are you sure to reject the request of <strong><?php echo $row['fname'] . " " . $row['mname'][0] . ". ". $row['lname'] ?></strong> for the requested patient <strong>        <?php echo $row['patient_fname'] . " " . $row['patient_mname'][0] . ". ". $row['patient_lname'] . " " . $row['patient_suffix'] ?></strong>?</h6>
          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>

            <a class="btn btn-danger" href="reject-request.php?id=<?php echo $row['id'] ?>">Yes</a>

          </div>
        </div>
      </div>
    </div>

    <!-- Approve Modal -->
    <div class="modal fade" id="accept-monitoring<?php echo $row['id'] ?>" tabindex="-1" aria-labelledby="accept-monitoringLabel" aria-hidden="true">
      <div class="modal-lg modal-dialog modal-dialog-centered d-flex align-items-center">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5 text-success" id="accept-monitoringLabel">Approve Request</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <h6 class="text-center">Just to confirm, are you sure that the requested patient <strong><?php echo $row['patient_fname'] . " " . $row['patient_mname'][0] . ". ". $row['patient_lname'] . " " . $row['patient_suffix'] ?></strong> is the same as <strong class="text-primary"><span id="patient_name<?php echo $i; ?>"></span></strong>?</h6>
          </div>
          <div class="modal-footer">

            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>

            <button type="submit" name="submit" class="btn btn-success">Yes</button>

          </div>
        </div>
      </div>
    </div>


        </form>
    </tr>

    
  <?php

  $i++;

 } ?>
    </tbody>
    </table>
    </div><!--End of table-->
</div>
</div>

<script>

function getUserInput(id) {

  var patient = document.getElementById('patient'+id); 
  var text = patient.options[patient.selectedIndex].text;

  document.getElementById('patient_name'+id).innerHTML = text;

}

</script>





<?php

require_once '../includes/admin-footer.php';

?>