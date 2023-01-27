<?php
    $page_title = 'WeCare - Appointment';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../homepage/home.php');
    }

    require_once '../includes/topnav.php';
?>
<!-- Breadcrumb Section Begin -->
<section class="breadcrumb-option spad set-bg" data-setbg="../image/homes.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Appointment</h2>
                        <div class="breadcrumb__links">
                            <a href="../home/home.php">Home</a>
                            <span>Appointment</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

     <!-- Appointment Section Begin -->
     <section class="book" id="book">

        <h1 class="heading"> <span>Get An</span> Appointment</h1>

        <div class="row">

            <!--<div class="image">
                <img src="../img/careg.jpg" alt="">
            </div> -->
            <div class="services__appoinment">
                        <div class="services__title">
                        </div>
                        <form action="#">
                            <input type="text" placeholder="First Name">
                            <input type="text" placeholder="Last Name">
                            <input type="number" placeholder="Contact No.">
                            <input type="text" placeholder="Email">
                            <div class="datepicker__item">
                                <input type="text" placeholder="Date for the Appointment" class="datepicker">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <!--<select>
                                <option value="">Type of service</option>
                                <option value="">Caregiving</option>
                                <option value="">Treatment</option>
                                <option value="">Consultation</option>
                                <option value="">On Job Training</option>
                            </select>-->
                            <button type="submit" class="site-btn">Book appointment</button>

        </div>

        </section>

     <!-- Appointment Section Begin -->

<?php

    require_once '../includes/footer.php';

?>