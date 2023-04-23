<?php

    $page_title = 'WeCare Staff - Patient List';
    require_once '../includes/staff-header.php';
    require_once '../classes/patient.class.php';
    session_start();

    if(!isset($_SESSION['staff_logged']) || $_SESSION['user_type'] != 'staff'){
      header('location: ../account/signin.php');
    }

    $patient = new Patient;

    $patient_list = $patient->show_patient_staff($_SESSION['staff_logged']);

    require_once '../includes/staff-sidebar.php';

?>

    <div class="content">
      <div class="container">
        <div class="row pt-3">
          <div class="col-12 col-lg-3 "><!--Label-->
        <div class="header-monitoring">
        <h2 class="ms-3" style="color: #00ACB2;"><strong>Patient List</strong></h2>
        </div>
        </div><!--Label-->
        <div class="col-12 col-lg-4">
        <div class="input-group d-flex">
            <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
            <button type="button" class="btn btn-info" style="background-color: #00ACB2; color: #ffffff;border: none;">Search</button>
          </div>
        </div>
        <div class="col-12 col-lg-4">
        <div class="dropdown d-flex">
          <button class="btn btn-info dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" style="background-color: #00ACB2; color: #ffffff; border: none;">
            Sort by
          </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            <li><a class="dropdown-item" href="#">Name</a></li>
            <li><a class="dropdown-item" href="#">Room</a></li>
            <li><a class="dropdown-item" href="#">Status</a></li>
          </ul>
        </div>
        </div>
        </div><!--row-->
<!--table-->
  <section class="intro-table">
  <div class="gradient-custom-1 h-100">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="table-responsive">
              <table class="table mb-0 table-bordered">
                <thead style="background-color: #00ACB2;">
                  <tr>
                    <th scope="col" class="text-center" >NAMES</th>
                    <th scope="col" class="text-center">ROOM</th>
                    <th scope="col" class="text-center" >STATUS</th>
                    <th scope="col" class="text-center" >BILLING</th>
                  </tr>
                </thead>
                <tbody>
                <?php foreach($patient_list as $row) {?>
                  <tr>
                    <th scope="row" style="color: #666666;"><a href="../staff/patient-profile.php?id=<?php echo $row['id'] ?>" class="patient-prof"><?php echo ucfirst($row['fname']) . " " . ucfirst($row['mname'][0]) . ". " . ucfirst($row['lname']) ?></a></th>

                    <td class="text-center"><?php echo $row['room'] ?></td>

                    <td class="text-center"><?php echo $row['status'] ?></span>

                    <button type="button" class="Discharge-btn" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-three-dots-vertical" viewBox="0 0 16 16">
                      <path d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                    </svg></button> <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#discharged">Discharged</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#reassigned">Reassigned Patient</a></li>
                    <li><a class="dropdown-item" data-bs-toggle="modal" data-bs-target="#deceased">Deceased</a></li>
                  </ul>
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
  </div>
</section>
</div>
</div>


<!-- Modal of discharge -->
<div class="modal fade" id="discharged" tabindex="-1" aria-labelledby="dischargedLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="dischargedLabel">Patient Discharge Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Are you sure you want to discharge this patient?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark bg-secondary text-white border-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary" >Yes</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal of reassigned -->
<div class="modal fade" id="reassigned" tabindex="-1" aria-labelledby="reassignedLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="reassignedLabel">Patient Reassign</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
          <label for="nurse-name" class="col-form-label">Nurse:</label>
          <select class="form-select" id="nurse-name">
            <option selected>Select nurse</option>
            <option value="1">Nurse 1</option>
            <option value="2">Nurse 2</option>
            <option value="3">Nurse 3</option>
          </select>
          </div>
          <div class="mb-3">
            <label for="reason-text" class="col-form-label">Reason:</label>
            <textarea class="form-control" id="reason-text"></textarea>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark bg-secondary text-white border-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#reassigned-confirm">Reassigned</button>
      </div>
    </div>
  </div>
</div>

<!--reassigned-confirm-->
<div class="modal fade" id="reassigned-confirm" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="reassigned-confirmLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="reassigned-confirmLabel">Reassign Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      Are you sure to reassign this patient <strong>[name of the patient]</strong> to <strong>[nurse]</strong>?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark bg-secondary text-white border-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Confirm</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal of deceased -->
<div class="modal fade" id="deceased" tabindex="-1" aria-labelledby="deceasedLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="deceasedLabel">Deceased Patient</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       Are you sure this patient <strong>[patient name]</strong> is deceased?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-dark bg-secondary text-white border-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>

<?php

  require_once '../includes/staff-footer.php';

?>