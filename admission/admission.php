<?php
    $page_title = 'WeCare - Admission';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../homepage/home.php');
    }

    require_once '../includes/topnav.php';
?>



<?php

    require_once '../includes/footer.php';

?>