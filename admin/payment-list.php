<?php

  $page_title = 'WeCare Admin - Payment List';
  require_once '../includes/admin-header.php';
  require_once '../classes/patient.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  $patient = new Patient;

  if($patient->fetch_patient_data($_GET['id'])){
    // Data for the Patient
    $p_data = $patient->fetch_patient_data($_GET['id']);
    $patient->staff_id = $p_data['staff_id'];
    $patient->id = $p_data['id'];
    $patient->firstname = $p_data['fname'];
    $patient->middlename = $p_data['mname'];
    $patient->lastname = $p_data['lname'];
    $patient->suffix = $p_data['suffix'];
    $patient->picture = $p_data['image'];
    $patient->date_of_birth = date_diff(date_create($p_data['date_birth']), date_create('today'))->y;
    $patient->gender = $p_data['gender'];
  }

  require_once '../includes/admin-sidebar.php';

?>
<div class="content">

<div class="container align-items-center pt-3">
    <button class="btn btn-info" type="button" style="background: #00ACB2; border: #00ACB2; color: #fff;"><a class="text-white text-decoration-none" href="patient-list.php" > < Patient List </a></button>

    <div class="col-12 col-lg-5 pt-4">
        <h2><strong>Payment History</strong></h2>
    </div>
  <form action="add-payment.php" method="POST">
      <div class="row pt-3">
      <div class="col-12 col-lg-3"><!--Patient Name-->
      <label for="amount-payment"><strong>Patient</strong></label>
      <button class="form-control" type="button"><?php echo ucfirst($patient->firstname) . " " . ucfirst($patient->middlename[0]) . ". " . ucfirst($patient->lastname) ?></button>

      <input type="hidden" id="id" name="id" value="<?php echo $patient->id ?>">

      </div><!--End Patient Name-->
      
      <div class="col-12 col-lg-3"><!--First of button-->
        <div class="pt-4">
        <button type="submit" class="btn btn-info" style="background: #00ACB2; border: #00ACB2; color: #fff;">Add Payment</button> <!--Should put here the modal-->
        </div>
      </div><!--End of button-->
      </div><!--End of row-->
  </form>
    <div class="table-responsive pt-4"> <!--Start of Table-->
    <table class="table table-striped table-hover table-bordered">
  <thead class="table-info">
    <tr>
      <th style="background: #00ACB2; color: #fff;" scope="col" class="text-center">Month</th>
      <th scope="col" style="background: #00ACB2; color: #fff;" >Patient Name</th>
      <th scope="col"  style="background: #00ACB2; color: #fff;" class="text-center">Recommended Pay Date</th>
      <th scope="col" style="background: #00ACB2; color: #fff;"  class="text-center">Amount Due</th>
      <th scope="col" style="background: #00ACB2; color: #fff;"  class="text-center">Status</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <th scope="row" class="text-center">1</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Dec 20, 2028</td>
        <td class="text-center">₱30, 000</td>
        <td>
        <div class="d-flex gap-2 justify-content-center">
        <button class="btn btn-outline-danger" type="button">Not Paid</button> <!--Should put here the modal-->
        <button class="btn btn-success" type="button">Paid</button><!--Should put here the modal-->
        </div>
        </td>
    </tr>
    <tr>
        <th scope="row" class="text-center">1</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Dec 20, 2028</td>
        <td class="text-center">₱30, 000</td>
        <td>
        <div class="d-flex gap-2 justify-content-center">
        <button class="btn btn-outline-danger" type="button">Not Paid</button> <!--Should put here the modal-->
        <button class="btn btn-success" type="button">Paid</button><!--Should put here the modal-->
        </div>
        </td>
    </tr>
    <tr>
        <th scope="row" class="text-center">1</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Dec 20, 2028</td>
        <td class="text-center">₱30, 000</td>
        <td>
        <div class="d-flex gap-2 justify-content-center">
        <button class="btn btn-outline-danger" type="button">Not Paid</button> <!--Should put here the modal-->
        <button class="btn btn-success" type="button">Paid</button> <!--Should put here the modal-->
        </div>
        </td>
    </tr>
    </tbody>
    </table>
    </div><!--End of table-->
</div><!--End of container-->
</div>

<?php

require_once '../includes/admin-footer.php';

?>