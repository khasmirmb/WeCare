<?php

    $page_title = 'WeCare - Request List';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
?>

<div class="align-items-center ms-3 pt-3">
    <button type="button" class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="monitoring.php"><i class="fa-solid fa-arrow-left"></i> Back</a></button>
</div>
    <h2 class="ms-3 mt-3"><strong>Family Monitoring Request List</strong></h2>

<div class="new-admission d-flex me-5 justify-content-end">
    <a type="button" class="btn btn-secondary" id="action-cancel" href="request.php" style="background: #198754; border: #198754; color: #fff;">Request Monitoring</a>
</div>

<div class="p-3 table-responsive">
        <?php
          require_once '../classes/relative.class.php';

          $relative = new Relative;

          $relative_id = isset($_SESSION['relative_id']);

          $request_list = $relative->show_relative_request_by_user($_SESSION['logged_id']);

        ?>
<table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" style="background: #00ACB2; color: #fff;">User</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">Patient Name</th>
        <th cope="col" class="text-center" style="background: #00ACB2; color: #fff;">Relationship</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Action</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($request_list as $row){ ?>
        <tr>

        <td><?php echo $row['fname'] . " " . $row['mname'][0] . ". ". $row['lname'] ?></td>


        <td><?php echo $row['patient_fname'] . " " . $row['patient_mname'][0] . ". ". $row['patient_lname'] . " " . $row['patient_suffix'] ?></td>

        <td class="text-center"><?php echo $row['relationship'] ?></td>

        <td class="text-center">Pending</td>

        <td class="text-center">
            <div class="btn-group" role="group">
                <a type="button" class="delete-req mx-2 d-flex justify-content-center text-decoration-none text-danger" data-bs-toggle="modal" data-bs-target="#monitoring-request"><i class="fa-solid fa-trash"></i>Delete</a>
            </div>
        </td>

<!-- Modal -->
<div class="modal fade" id="monitoring-request" tabindex="-1" aria-labelledby="monitoring-requestLabel" aria-hidden="true">
  <div class="modal-lg modal-dialog modal-dialog-centered d-flex align-items-center">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="monitoring-requestLabel">Confirm Request Deletion</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Are you sure you want to delete this Family Monitoring Request for <strong><?php echo $row['patient_fname'] . " " . $row['patient_mname'][0] . ". ". $row['patient_lname'] . " " . $row['patient_suffix'] ?></strong>? This action cannot be undone.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <a type="button" class="btn btn-danger" href="delete-request.php?id=<?php echo $row['id'] ?>">Delete</a>
      </div>
    </div>
  </div>
</div>

    <?php } ?>
        </tr>
    </tbody>
</table>
</div>

