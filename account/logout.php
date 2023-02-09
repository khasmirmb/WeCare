<?php

    //resume session
    session_start();
    require_once "../tools/config.php";
	unset($_SESSION['access_token']);
	$gClient->revokeToken();
    //destroy session
    session_destroy();
    //then send user to login page
    header('location: ../index.php');

?>