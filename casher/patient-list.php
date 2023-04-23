<?php

    $page_title = 'WeCare Cashier - Patient List';
    require_once '../includes/cash-header.php';
    require_once '../classes/patient.class.php';
    session_start();

    if(!isset($_SESSION['staff_logged']) || $_SESSION['user_type'] != 'staff'){
      header('location: ../account/signin.php');
    }

    $patient = new Patient;

    $patient_list = $patient->show_patient_staff($_SESSION['staff_logged']);

    require_once '../includes/cash-sidebar.php';

?>
<div class="content">
    <div class="container pt-3">

    </div>
</div>