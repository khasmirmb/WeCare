<?php

    $page_title = 'WeCare - Appointment';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';

    require_once '../classes/basic.database.php';

    $login_id = $_SESSION['logged_id'];

    $sql = "SELECT * FROM appointment JOIN appointment_purpose ON purpose_for_appointment = appointment_purpose.id WHERE user_id = $login_id ORDER BY status DESC";
    $result = $conn->query($sql);
    

?>
    <div class="table-responsive mt-5 mb-5">
        <table class="table align-middle mb-0 bg-white">
            <thead class="bg-light">
                <tr>
                <th>Name</th>
                <th>Appointment Purpose</th>
                <th>Appointment Time</th>
                <th>Appointment Date</th>
                <th>Status</th>
                <th>Actions</th>
                </tr>
            </thead>
            <tbody>
            <?php if($result->num_rows > 0){
                while($row = $result->fetch_assoc()) {
            
            ?>
                <tr>
                <td>
                    <div class="d-flex align-items-center">
                        <div class="ms-2">
                            <p class="fw-bold mb-1"><?php echo $_SESSION['fullname'] ?></p>
                            <p class="text-muted mb-0"><?php echo $_SESSION['user_email'] ?></p>
                        </div>
                    </div>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo $row['purpose'] ?></p>
                    <?php if($row['purpose'] == 'Others'){ ?>
                        <p class="text-muted mb-0"><?php echo $row['other_purpose'] ?></p>
                    <?php } ?>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo $row['appointment_time'] ?></p>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo $row['appointment_date'] ?></p>
                </td>
                <td>
                    <p class="fw-normal mb-1"><?php echo $row['status'] ?></p>
                </td>
                <td>
                    <button type="button" class="btn btn-danger">Cancel</button>
                </td>
                </tr>
            <?php
                }
            }
            ?>
            </tbody>
        </table>
    </div>