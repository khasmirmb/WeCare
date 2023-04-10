<?php

  $page_title = 'WeCare Admin - Payment List';
  require_once '../includes/admin-header.php';
  require_once '../classes/patient.class.php';
  require_once '../classes/payment.class.php';
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
    <button class="btn btn-info" type="button" style="background: #00ACB2; border: #00ACB2; color: #fff;"><a class="text-white text-decoration-none" href="patient-list.php" ><i class="fa-solid fa-arrow-left"></i>Patient List </a></button>

    <div class="col-12 col-lg-5 pt-4">
        <h2><strong>Payment History</strong></h2>
    </div>
  <form action="add-payment.php" method="GET">
      <div class="row pt-3">
      <div class="col-12 col-lg-3"><!--Patient Name-->
      <label for="amount-payment"><strong>Patient</strong></label>
      <button class="form-control" type="button"><?php echo ucfirst($patient->firstname) . " " . ucfirst($patient->middlename[0]) . ". " . ucfirst($patient->lastname) ?></button>

      <input type="hidden" id="id" name="id" value="<?php echo $patient->id ?>">

      </div><!--End Patient Name-->
      
      <div class="col-12 col-lg-3"><!--First of button-->
        <div class="pt-4">
        <button type="submit" class="btn btn-info" style="background: #198754; border: #198754; color: #fff;"><i class="fa-solid fa-credit-card"></i>Add Payment</button> <!--Should put here the modal-->
        </div>
      </div><!--End of button-->
      </div><!--End of row-->
  </form>
    <div class="table-responsive pt-4"> <!--Start of Table-->
    <table class="table table-striped table-hover table-bordered">
  <thead class="table-info">
    <tr>
      <th scope="col" style="background: #00ACB2; color: #fff;" class="text-center">Created Date</th>
      <th scope="col"  style="background: #00ACB2; color: #fff;" class="text-center">Due Start Date</th>
      <th scope="col"  style="background: #00ACB2; color: #fff;" class="text-center">Due End Date</th>
      <th scope="col" style="background: #00ACB2; color: #fff;"  class="text-center">Total Amount</th>
      <th scope="col" style="background: #00ACB2; color: #fff;"  class="text-center">Status</th>
      <th scope="col" style="background: #00ACB2; color: #fff;"  class="text-center">Payment</th>
    </tr>
  </thead>
  <?php

    $payment = new Payment;

    $payment_list = $payment->show_payment_list_by_patient($patient->id);

  ?>
  <tbody>
  <?php foreach($payment_list as $row){ ?>
    <tr>
        <th class="text-center"><?php echo date("M j, Y", strtotime($row['created_at'])) ?></th>
        <td class="text-center"><?php echo date("M j, Y", strtotime($row['start_due'])) ?></td>
        <td class="text-center"><?php echo date("M j, Y", strtotime($row['end_due'])) ?></td>
        <td class="text-center">₱<?php echo $row['total_amount'] ?></td>
        <td class="text-center"><?php echo $row['status'] ?></td>
        <td>
        <div class="d-flex gap-2 justify-content-center">
        <button class="btn btn-outline-danger" type="button">Not Paid</button> <!--Should put here the modal-->
        <button class="btn btn-success" type="button">Paid</button><!--Should put here the modal-->
        </div>
        </td>
    </tr>
  <?php } ?>
    </tbody>
    </table>
    </div><!--End of table-->
</div><!--End of container-->
</div>

<?php

require_once '../includes/admin-footer.php';

?>