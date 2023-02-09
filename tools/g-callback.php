<?php
    require_once '../tools/config.php';
    require_once '../classes/account.class.php';

    if (isset($_SESSION['access_token']))
        $gClient->setAccessToken($_SESSION['access_token']);
    else if (isset($_GET['code'])) {
        $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['access_token'] = $token;
    } else {
        header('Location: ../account/signin.php');
        exit();
    }

    // Get User Info
    $oAuth = new Google_Service_Oauth2($gClient);
	$userData = $oAuth->userinfo_v2_me->get();

    $users = new Users();

    $users->email = $userData['email'];
    $users->firstname = $userData['given_name'];
    $users->lastname = $userData['family_name'];
    $users->gender = $userData['gender'];
    $users->picture = $userData['picture'];
    $users->verifiedEmail = $userData['verified_email'];
    $users->type = "client";
    if($users->add_user()){
        $user = $users->get_account_info();
        foreach($user as $row){
            $_SESSION['logged_id'] = $row['id'];
            $_SESSION['fullname'] = 'Temporary';
            $_SESSION['user_type'] = $row['type'];
            //display the appropriate dashboard page for user
            if($row['type'] == 'admin'){
                header('location: ../admin/dashboard.php');
                exit();
            }else if($row['type'] == 'staff'){
                header('location: ../staff/dashboard.php');
                exit();
            }else if($row['type'] == 'client'){
                header('location: ../homepage/home.php');
                exit();
            }
        }
    }

    


?>