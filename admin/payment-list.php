<?php

  $page_title = 'WeCare Admin - Payment List';
  require_once '../includes/admin-header.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  require_once '../includes/admin-sidebar.php';

?>
<div class="container align-items-center pt-3">
    <button class="btn btn-primary" type="button"><a class="text-white text-decoration-none" href="patient-list.php"> < Patient List </a></button>

    <div class="col-12 col-lg-5 pt-4">
        <h2><strong>Payment History</strong></h2>
    </div>

    <div class="row pt-3">
    <div class="col-12 col-lg-3 pb-3"><!--First of payment amount-->
    <label for="amount-payment">Payment Amount</label>
    <input class="form-control" type="number" name="amount-payment" id="amount-payment" placeholder="Input desired amount">
    </div><!--Last of payment amount-->
    
    <div class="col-12 col-lg-3 pb-3"><!--First of Start date-->
    <label for="due-date">Recommended Pay Date</label>
    <input class="form-control" type="date" value="due-date">
    </div><!--Last of Start date-->

    <div class="col-12 col-lg-2 pb-3"> <!--First of Time-->
    <label for="time">Time</label>
    <input class="form-control" type="time" value="time">
    </div><!--End of Time-->
    
    <div class="col-12 col-lg-3"><!--First of button-->
      <div class="pt-4">
      <button type="button" class="btn btn-success">Submit</button> <!--Should put here the modal-->
      </div>
    </div><!--End of button-->
    </div><!--End of row-->

    <div class="table-responsive pt-4"> <!--Start of Table-->
    <table class="table table-striped table-hover table-bordered">
  <thead class="table-info">
    <tr>
      <th scope="col" class="text-center">Month</th>
      <th scope="col">Patient Name</th>
      <th scope="col" class="text-center">Recommended Pay Date</th>
      <th scope="col" class="text-center">Amount Due</th>
      <th scope="col" class="text-center">Status</th>
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

<?php

require_once '../includes/admin-footer.php';

?>