<?php

session_start();
require_once '../classes/users.class.php';

$users_account = new Users();
if(isset($_POST['email']) && isset($_POST['password'])){
//Sanitizing the inputs of the users. Mandatory to prevent injections!
$users_account->email = htmlentities($_POST['email']);
$users_account->password = htmlentities($_POST['password']);
if($users_account->sign_in()){
    $users = $users_account->get_user_info();
    foreach($users as $row){
        $_SESSION['logged_id'] = $row['id'];
        $_SESSION['fullname'] = 'Temporary';
        $_SESSION['user_type'] = $row['type'];
        //display the appropriate dashboard page for user
        if($row['type'] == 'admin'){
            header('location: ../admin/dashboard.php');
        }else if($row['type'] == 'staff'){
            header('location: ../staff/dashboard.php');
        }else if($row['type'] == 'client'){
            header('location: ../homepage/home.php');
        }
    }
}else{
    //set the error message if account is invalid
    $error = 'Invalid email/password. Try again.';
}
}

?>