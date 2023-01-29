<?php
    $page_title = 'WeCare - Family Monitoring';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../homepage/home.php');
    }

    require_once '../includes/topnav.php';
?>

<div class="row justify-content-center">
    <div class="col-auto">
      <table class="table table-responsive table-bordered text-center">
        <thead>
            <tr>
            <th class="table-info" scope="col">Patient ID</th>
            <th class="table-info" scope="col">Full Name</th>
            <th class="table-info" scope="col">Room</th>
            <th class="table-info" scope="col">Status</th>
            <th class="table-info" scope="col">Nurse</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Datu Batumbakal</td>
            <td>Room 1</td>
            <td>Active</td>
            <td>Eljen Augusto</td>
            </tr>
        </tbody>
      </table>
    </div>
  </div>

<?php

    require_once '../includes/footer.php';

?>