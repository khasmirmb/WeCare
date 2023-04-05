<?php

  $page_title = 'WeCare Admin - Patient List';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

?>

<div class="content">

<div class="container align-items-center pt-3">

<div class="row">
    <div class="col-7 col-lg-4"> <!--Name-->
    <h3>Patient List</h3>
    </div><!--End of Name-->
    <div class="col-4 col-lg-1 pb-3"><!--Request button-->
        <a class="btn btn-secondary" href="request.php" role="button" style="background: #00ACB2; border: #00ACB2; color: #fff;">Request</a>
    </div>
    <div class="col-4 col-lg-1"><!--Button Filter-->
        <div class="dropdown">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background: #00ACB2; border: #00ACB2; color: #fff;">
            Filter
            </button>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Ascending</a></li>
            <li><a class="dropdown-item" href="#">Descending</a></li>
            </ul>
        </div>
        </div><!--End of Button Filter-->
    <div class="col-6 col-lg-2 pb-3"><!--Add Patient button-->
        <a class="btn btn-secondary" href="add-patient.php" role="button" style="background: #198754;; border: #198754;; color: #fff;"><i class="fa-solid fa-user-plus"></i>Add Patient</a>
    </div><!--End of Add Patient button-->
    <div class="col-12 col-lg-4"><!--Start of Search bar-->
        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-secondary" type="submit" style="background: #00ACB2; border: #00ACB2; color: #fff;">Search</button>
        </form>
    </div><!--End of search bar-->
    </div><!--End of row-->

    <?php 
        require_once '../classes/patient.class.php';

        $patient = new Patient;

        $patient_list = $patient->show_patient_data();

    ?>
    <div class="row">
    
    <?php foreach($patient_list as $row){ ?>
        <div class="col-12 col-lg-4 pt-3">
        <div class="card" style="width: 18rem;">
        <div class="card-body rounded shadow">
            <div class="d-flex justify-content-md-end pb-2">
            <a class="btn btn-secondary me-2" href="payment-list.php?id=<?php echo $row['id'] ?>" role="button" style="background: #28a745; border: #28a745; color: #fff;"><i class="fa-solid fa-receipt"></i>Payment</a>
            <a class="btn btn-secondary" href="patient-backup.php?id=<?php echo $row['id'] ?>" role="button" style="background: #00ACB2; border: #00ACB2; color: #fff;"><i class="fa-solid fa-folder-open"></i>Records</a>
            </div>
            <div class="pb-2">
            <img src="../images/<?php echo $row['image'] ?>" class="rounded-circle img-thumbnail img-fluid" alt="Patient Image" style="width: 45%; height: auto; border-color: #00ACB2; object-fit: cover;">
            </div>
            <h5 class="card-title"><?php echo ucfirst($row['fname']) . " " . ucfirst($row['mname'][0]) . ". " . ucfirst($row['lname'])  ?></h5>
            <h6 class="card-subtitle mb-2 text-muted pb-3"><?php echo $row['room'] ?></h6>
            <h6 class="card-subtitle mb-2 text-muted">Age</h6>
            <p class="card-text"><?php echo date_diff(date_create($row['date_birth']), date_create('today'))->y; ?></p>
            <h6 class="card-subtitle mb-2 text-muted">Date of Birth</h6>
            <p class="card-text"><?php echo date("M j, Y", strtotime($row['date_birth'])) ?></p>
            <h6 class="card-subtitle mb-2 text-muted">Status</h6>
            <p class="card-text"><?php echo $row['status'] ?></p>
            <div class="d-grid mx-auto">
            <a class="btn btn-secondary" href="patient-details.php?id=<?php echo $row['id'] ?>" role="button" style="background: #00ACB2; border: #00ACB2; color: #fff;"><i class="fa-solid fa-circle-info"></i>Patient Details</a>
            </div>
        </div>
        </div>
        </div><!--End of col-->
    <?php }?>
    </div> <!--End of row-->

</div><!--End of container-->
</div>

<?php

require_once '../includes/admin-footer.php';

?>