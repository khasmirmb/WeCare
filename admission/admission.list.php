<?php

    $page_title = 'WeCare - Admission List';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';


?>
<div class="header-monitoring pt-3">
    <h2 class="ms-3"><strong>Admission</strong></h2>
</div>
<div class="new-admission d-flex me-5 justify-content-end">
    <a type="button" class="btn btn-info" id="action-cancel" href="admission.php" style="background: #00ACB2; border: #00ACB2; color: #fff;"><i class="fa-solid fa-user-plus"></i>Add Admission</a>
</div>
    <div class="table-responsive mt-5 mb-5">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                <th style="background: #00ACB2; color: #fff;">Patient Name</th>
                <th style="background: #00ACB2; color: #fff;">Relative Name</th>
                <th style="background: #00ACB2; color: #fff;">Relationship</th>
                <th style="background: #00ACB2; color: #fff;">Admission Date</th>
                <th style="background: #00ACB2; color: #fff;">Admission Number</th>
                <th style="background: #00ACB2; color: #fff;">Status</th>
                </tr>
            </thead>
            <tbody>
            <?php 

            require_once '../classes/admission.class.php';

            $admission = new Admission();

            $admission_list = $admission->show_user_admission($_SESSION['logged_id']);

            foreach($admission_list as $row){

            ?>
                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <p class="fw-normal mb-1"><?php echo $row['firstname'] . " ". $row['middlename'][0] . ". " .$row['lastname'] ?></p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <p class="fw-normal mb-1"><?php echo $row['r_firstname'] . " ". $row['r_middlename'][0] . ". " .$row['r_lastname'] ?></p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <p class="fw-normal mb-1"><?php echo $row['inquire'] ?></p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <p class="fw-normal mb-1"><?php echo date("M jS, Y", strtotime($row['add_date'])) ?></p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <p class="fw-normal mb-1"><?php echo $row['admission_no'] ?></p>
                        </div>
                    </div>
                </td>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <p class="fw-normal mb-1"><?php if($row['status'] == "Completed"){?> <strong class="text-success"><?php echo $row['status'] ?></strong><?php } else { echo $row['status']; }?> </p>
                        </div>
                    </div>
                </td>
                
            <?php
                }
            ?>
            </tbody>
        </table>
    </div>