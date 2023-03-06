<?php

    $page_title = 'Admin - Payment List';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3">
    <button class="btn btn-primary" type="button"><a class="text-white text-decoration-none" href="patient-list.php"> < Patient List </a></button>

    <div class="col-12 col-lg-5 pt-3">
        <h2><strong>Payment History</strong></h2>
    </div>

    <div class="table-responsive pt-3">
    <table class="table table-striped table-hover table-bordered ">
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
        <button class="btn btn-primary" type="button">Button</button>
        <button class="btn btn-primary" type="button">Button</button>
        </td>
    </tr>
    <tr>
        <th scope="row" class="text-center">1</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Dec 20, 2028</td>
        <td class="text-center">₱30, 000</td>
    </tr>
    <tr>
        <th scope="row" class="text-center">1</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Dec 20, 2028</td>
        <td class="text-center">₱30, 000</td>
    </tr>
    </tbody>
    </table>
    </div>
</div>