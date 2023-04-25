<?php

  $page_title = 'WeCare Staff - Billing List';
  require_once '../includes/staff-header.php';
  require_once '../classes/patient.class.php';
  require_once '../classes/payment.class.php';
  session_start();

    if (!isset($_SESSION['staff_logged']) || $_SESSION['user_type'] != 'staff'){
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

  if(isset($_POST['confirm'])){

    $payment = new Payment;

    if(isset($_FILES['receipt'])){

        $file_name = $_FILES['receipt']['name'];
        $file_type = $_FILES['receipt']['type'];
        $file_tmp_name = $_FILES['receipt']['tmp_name'];
        $file_explode = explode('.', $file_name);
        $file_extension = end($file_explode);

        $extensions = ['pdf'];

        if(in_array($file_extension, $extensions) === true){

            $date = date("Y_m_d");
            $patient_fullname = $patient->firstname . "_" . $patient->middlename[0] . "_" . $patient->lastname;
            $file_new_name = $patient_fullname . "_Receipt_" . $date . "_" . $file_name;

            if(move_uploaded_file($file_tmp_name, "../receipt/". $file_new_name)){

                $payment->payment_method = $_POST['payment_method'];
                $payment->payment_date = $_POST['paid_date'];
                $payment->receipt = $file_new_name;
                $payment->status = "Paid";

                if($payment->paid_payment($_POST['pay_id'])){

                    //redirect user to program page after saving
                    header('location: payment-list.php?id=' . $patient->id);
        
                }
            }

        }else{
            $error_file_type = "Please Upload a PDF FILE";
          
        }
    
    } else{
        $error_image = "Please Complete the Form";
    }

  }



  require_once '../includes/staff-sidebar.php';

?>
<div class="content">

<div class="container align-items-center pt-3">
    <button class="btn btn-info" type="button" style="background: #00ACB2; border: #00ACB2; color: #fff;"><a class="text-white text-decoration-none" href="patient-list.php" ><i class="fa-solid fa-arrow-left"></i>Patient List </a></button>

    <div class="col-12 col-lg-5 pt-4">
        <h2><strong>Billing History</strong></h2>
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
        <button type="submit" class="btn btn-info" style="background: #198754; border: #198754; color: #fff;"><i class="fa-solid fa-credit-card me-2"></i>Add Billing</button> <!--Should put here the modal-->
        </div>
      </div><!--End of button-->

      <div class="col-12 col-lg-3"><!--First of button-->
        <div class="pt-4">
        <?php
            //Display the error message if there is any.
            if(isset($error_image)){
            echo '<div><p class="text-danger">'.$error_image.'</p></div>';
            }
            if(isset($error_file_type)){
            echo '<div><p class="text-danger">'.$error_file_type.'</p></div>';
            } 
        ?>
        </div>
      </div><!--End of button-->
      </div><!--End of row-->
  </form>
    <div class="table-responsive pt-4"> <!--Start of Table-->
    <table class="table table-striped table-hover table-bordered">
  <thead class="table-info">
    <tr>
      <th scope="col"  style="background: #00ACB2; color: #fff;" class="text-center">Due Start Date</th>
      <th scope="col"  style="background: #00ACB2; color: #fff;" class="text-center">Due End Date</th>
      <th scope="col" style="background: #00ACB2; color: #fff;"  class="text-center">Total Amount</th>
      <th scope="col" style="background: #00ACB2; color: #fff;"  class="text-center">Status</th>
      <th scope="col" style="background: #00ACB2; color: #fff;"  class="text-center">Action</th>
    </tr>
  </thead>
  <?php

    $payment = new Payment;

    $payment_list = $payment->show_payment_list_by_patient($patient->id);

  ?>
  <tbody>
  <?php foreach($payment_list as $row){ ?>
    <tr>
        <th class="text-center"><a class="link-primary" href="" style="text-decoration: none;"><?php echo date("M j, Y", strtotime($row['start_due'])) ?></a></th>
        <th class="text-center"><a class="link-primary" href="" style="text-decoration: none;"><?php echo date("M j, Y", strtotime($row['end_due'])) ?></a></th>
        <td class="text-center">₱<?php echo number_format($row['total_amount']) ?></td>
        <td class="text-center"><?php if($row['status'] == "Paid"){ ?><strong><span class="text-success"> <?php echo $row['status'] ?></span></strong><?php } else { ?> <strong><span class="text-danger "><?php echo $row['status'] ?></span></strong><?php } ?></td>
        <td>
        <div class="d-flex gap-1 justify-content-center">
            <button class="btn btn-success" type="button" data-bs-toggle="modal" data-bs-target="#paid<?php echo $row['pay_id'] ?>">Paid</button> <!--Should put here the modal-->
            <button class="btn btn-danger" type="button">Delete</button> <!--Should put here the modal-->
        </div>
        </td>
    </tr>

    <div class="modal fade" id="paid<?php echo $row['pay_id'] ?>" tabindex="-1" aria-labelledby="paid_modalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="paid_modalLabel">Payment Paid</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="payment-list.php?id=<?php echo $patient->id ?>" method="POST" enctype="multipart/form-data">
              <div class="mb-2">
                <label for="paid_date" class="col-form-label"><strong>Payment Paid Date:</strong></label>
                <input type="date" class="form-control" id="paid_date" name="paid_date">
              </div>
              <div class="mb-2">
                <input type="text" class="form-control" id="pay_id" name="pay_id" value="<?php echo $row['pay_id'] ?>" hidden>
                <input type="text" class="form-control" id="p_id" name="p_id" value="<?php echo $patient->id ?>" hidden>

                <label for="payment_method" class="col-form-label"><strong>Payment Method:</strong></label>

                <select class="form-select" aria-label="Default select example" name="payment_method">
                  <option value="Cash">Cash</option>
                  <option value="Credit Card">Credit</option>
                  <option value="Digital Wallet">Check</option>
                </select>
                </div>
                <div class="mb-2">
                    <label for="receipt" class="form-label"><strong>Receipt:</strong></label>
                    <input class="form-control" type="file" id="receipt" name="receipt" required accept="application/pdf, .pdf">
                </div>
            
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="confirm">Confirm</button>
          </div>
          </form>
        </div>
      </div>
    </div>

  <?php } ?>
    </tbody>
    </table>
    </div><!--End of table-->
</div><!--End of container-->
</div>

<?php

require_once '../includes/staff-footer.php';

?>