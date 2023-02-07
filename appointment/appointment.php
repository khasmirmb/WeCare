<?php

    $page_title = 'WeCare - Appointment';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../homepage/home.php');
    }

    require_once '../includes/navbar.php';
?>

        

<?php

require_once '../includes/footer.php';

?>