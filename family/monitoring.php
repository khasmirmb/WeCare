<?php

    $page_title = 'WeCare - Family Monitoring';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
?>

<div class="header-monitoring d-flex">
    <h2 class="ms-3 mt-5"><strong>Family Monitoring</strong></h2>
</div>

<div class="new-admission d-flex me-5 justify-content-end">
    <a type="button" class="btn btn-secondary me-3" id="action-cancel" href="request-list.php" style="background: #00ACB2; border: #00ACB2; color: #fff;"><i class="fas fa-clipboard-list"></i>Request List</a>
    <a type="button" class="btn btn-secondary" id="action-cancel" href="request.php" style="background: #00ACB2; border: #00ACB2; color: #fff;"><i class="fas fa-desktop-alt"></i>Request Monitoring</a>
</div>

<div class="p-3 table-responsive">
        <?php
          require_once '../classes/monitoring.class.php';

          $monitoring = new Monitoring;

          $monitoring_list = $monitoring->get_relative_monitoring($_SESSION['logged_id']);

        ?>
<table class="table table-hover table-striped table-bordered">
    <thead class="table-info ">
        <tr>
        <th scope="col" style="background: #00ACB2; color: #fff;">Patient Name</th>
        <th cope="col" class="text-center" style="background: #00ACB2; color: #fff;">Relationship</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Room</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Nurse</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">View</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach($monitoring_list as $row){ ?>
        <tr>
        <td><?php echo ucfirst($row['fname']) . " " . ucfirst($row['mname'][0]) . ". ". ucfirst($row['lname']) ?></td>

        <td class="text-center"><?php echo $row['relationship'] ?></td>

        <td class="text-center"><?php echo $row['room'] ?></td>

        <td class="text-center"><?php echo $row['status'] ?></td>

        <td class="text-center"><?php echo $row['firstname'] . " " . $row['middlename'][0] . ". ". $row['lastname']?></td>

        <td class="text-center">
            <a href="patient.monitoring.php?id=<?php echo $row['id'] ?>"><i class="fa-regular fa-eye"></i></a>
        </td>
    <?php } ?>
        </tr>
    </tbody>
</table>
</div>