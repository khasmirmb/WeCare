<?php

session_start();

include_once '../classes/basic.database.php';
require_once '../classes/users.class.php';

$otp1 = $_POST['otp1'];
$otp2 = $_POST['otp2'];
$otp3 = $_POST['otp3'];
$otp4 = $_POST['otp4'];
$unique_id = $_SESSION['unique_id'];
$session_otp = $_SESSION['otp'];
$otp = $otp1.$otp2.$otp3.$otp4;

$users_account = new Users();

if(!empty($otp)){
    if($otp == $session_otp){
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}' AND otp = '{$otp}'");
        if(mysqli_num_rows($sql) > 0){ // if unique id and session otp matches
            $null_otp = 0; // send the otp value 0 it means verified user
            $sql2 = mysqli_query($conn, "UPDATE users SET `verification_status` = 'Verified', `otp` = '$null_otp' WHERE unique_id = '{$unique_id}'");
            if($sql2){
                $row = mysqli_fetch_assoc($sql);
                $_SESSION['unique_id'] = $row['unique_id'];
                $_SESSION['verification_status'] = $row['verification_status'];
                echo "Success";
                if($users_account->sign_in()){
                    $users = $users_account->get_user_info();
                    foreach($users as $row){
                        $_SESSION['logged_id'] = $row['id'];
                        $_SESSION['fullname'] = $row['fname'] . ' ' . $row['lname'];
                        $_SESSION['user_type'] = $row['type'];
                        $_SESSION['unique_id'] = $row['unique_id'];
                        $_SESSION['profile_pic'] = $row['image'];
                        $_SESSION['verification_status'] = $row['verification_status'];
                        //display the appropriate dashboard page for user
                        if($row['type'] == 'admin'){
                          header('location: ../admin/dashboard.php');
                        }else if($row['type'] == 'staff'){
                          header('location: ../staff/dashboard.php');
                        }else if($row['type'] == 'client'){
                         header('location: ../homepage/home.php');
                        }
                      }
                    }

            }

        }
    }
    else{
        echo "Wrong Verification Numbers!";
    }
}
else{
    echo "Input The Verification Numbers";
}

?>