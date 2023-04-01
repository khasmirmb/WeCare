<?php

    $page_title = 'WeCare - Help & Support';
    require_once '../includes/header.php';
    require_once '../classes/appointment.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';
    

?>
<div class="container pt-3">
    <div class="">

    </div>
</div>