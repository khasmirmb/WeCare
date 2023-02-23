<?php

    $page_title = 'WeCare - Admission List';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';

    $login_id = $_SESSION['logged_id'];

?>
<div class="test text-center my-5">
    <h1>Admission Success!</h1>
    <a href="../homepage/home.php">Click Here to Go back Home</a>
</div>