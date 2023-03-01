<?php

    $page_title = 'Admin - Admission';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">
<div class="card text-center">
  <div class="card-header"><!--Start of Card-->
    <ul class="nav nav-tabs card-header-tabs">
      <li class="nav-item">
        <a class="nav-link active" aria-current="true" href="admission.php">Admission</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="appointment.php">Appointment</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="visitor-log.php">Visitor</a>
      </li>
    </ul>
  </div><!--End of Card-->
  
  <div class="col-7 col-lg-2 pt-4"> <!--Start of name of appointment-->
    <h4 class="mb-4">Admission</h4>
  </div><!--End of name of appointment-->

  <div class="col-4 col-lg-2"><!--Start of date-->
    <h6>Tomorrow</h6>
  </div><!--End of date-->

  <div class="col-12 col-lg-12"> <!--Start of 1st table-->
    <div class="container table-responsive table-rounded">
  <table class="table table-hover table-sm">
    <thead>
      <tr class="table-primary">
        <th scope="col">TIME</th>
        <th scope="col">USER</th>
        <th scope="col">ASSIGNED TO</th>
        <th scope="col">STATUS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row" class="pt-4">10:30 AM</th>
        <td class="pt-4"><a href="admission-details.php" class="text-decoration-none text-dark text-left">Clinton Squidward</a></td>
        <td class="pt-4">
          <div class="input-group" >
          <select name="assigned" id="assigned" class="form-control">
          <option value="adhyne">Adhyne Greanne Pogoy</option>
          <option value="jorylle">Jorylle Reyes</option>
          </select>
          </div>
      </td>
        <td>
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-secondary">Decline</button>
        <button type="button" class="btn btn-primary">Confirm</button>
        </div>
      </td>
      </tr>
      <tr>
        <th scope="row" class="pt-4">10:30 AM</th>
        <td class="pt-4"><a href="admission-details.php" class="text-decoration-none text-dark text-left">Clinton Squidward</a></td>
        <td class="pt-4">
          <div class="input-group" >
          <select name="assigned" id="assigned" class="form-control">
          <option value="adhyne">Adhyne Greanne Pogoy</option>
          <option value="jorylle">Jorylle Reyes</option>
          </select>
          </div>
      </td>
        <td>
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-secondary">Decline</button>
        <button type="button" class="btn btn-primary">Confirm</button>
        </div>
      </td>
      </tr>
    </tbody>
  </table>
</div>
</div><!--End of 1st Table-->

  <div class="col-6 col-lg-2 pt-3"> <!--Start of Date-->
      <h6>March 25, 2023</h6>
    </div><!--End of Date-->

<div class="col-12 col-lg-12"><!--Start of 2nd Table-->
    <div class="container table-responsive table-rounded">
  <table class="table table-hover table-sm">
    <thead>
      <tr class="table-primary">
        <th scope="col">TIME</th>
        <th scope="col">USER</th>
        <th scope="col">ASSIGNED TO</th>
        <th scope="col">STATUS</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row" class="pt-4">10:30 AM</th>
        <td class="pt-4"><a href="admission-details.php" class="text-decoration-none text-dark text-left">Clinton Squidward</a></td>
        <td class="pt-4">
          <div class="input-group" >
          <select name="assigned" id="assigned" class="form-control">
          <option value="adhyne">Adhyne Greanne Pogoy</option>
          <option value="jorylle">Jorylle Reyes</option>
          </select>
          </div>
      </td>
        <td>
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-secondary">Decline</button>
        <button type="button" class="btn btn-primary">Confirm</button>
        </div>
      </td>
      </tr>
      <tr>
        <th scope="row" class="pt-4">10:30 AM</th>
        <td class="pt-4"><a href="admission-details.php" class="text-decoration-none text-dark text-left">Clinton Squidward</a></td>
        <td class="pt-4">
          <div class="input-group" >
          <select name="assigned" id="assigned" class="form-control">
          <option value="adhyne">Adhyne Greanne Pogoy</option>
          <option value="jorylle">Jorylle Reyes</option>
          </select>
          </div>
      </td>
        <td>
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-secondary">Decline</button>
        <button type="button" class="btn btn-primary">Confirm</button>
        </div>
      </td>
      </tr>
      <tr>
        <th scope="row" class="pt-4">10:30 AM</th>
        <td class="pt-4"><a href="admission-details.php" class="text-decoration-none text-dark text-left">Clinton Squidward</a></td>
        <td class="pt-4">
          <div class="input-group" >
          <select name="assigned" id="assigned" class="form-control">
          <option value="adhyne">Adhyne Greanne Pogoy</option>
          <option value="jorylle">Jorylle Reyes</option>
          </select>
          </div>
      </td>
        <td>
        <div class="d-grid gap-2">
        <button type="button" class="btn btn-outline-secondary">Decline</button>
        <button type="button" class="btn btn-primary">Confirm</button>
        </div>
      </td>
      </tr>
    </tbody>
  </table>
</div>
</div><!--End of 2nd Table-->

</div>
</div>