<?php

    $page_title = 'WeCare - Appointment';
    require_once '../includes/header.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';


?>

<div class="p-5 text-white" style="background: #00ACB2; color: #fff;">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5>Next Payment Amount</h5>
                <h3><strong>₱30,000</strong></h3>
            </div>
            <div class="col">
                <h5>Next Payment Due Date</h5>
                <h3><strong>February 23, 2023</strong></h3>
            </div>
    </div>
</div>
</div>

<div class="p-5 table-responsive">
    <h2 class="pb-3"><strong>Payment History</strong></h2>
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info">
        <tr>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Month</th>
        <th scope="col" style="background: #00ACB2; color: #fff;">Patient Name</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Recommended Pay Date</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Amount Due</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row" class="text-center">1</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Jan 25, 2023</td>
        <td class="text-center gap-2">₱30, 000 
        <a class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;" type="button" href="payment-details.php">Review<a></td><!--Should position sa dulo ng table-->       
        </tr>
        <tr>
        <th scope="row" class="text-center">2</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Jan 25, 2023</td>
        <td class="text-center gap-2">₱30, 000 
        <a class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;" type="button" href="payment-details.php">Review<a></td><!--Should position sa dulo ng table-->       
        </tr>
        <tr>
        <th scope="row" class="text-center">3</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Jan 25, 2023</td>
        <td class="text-center gap-2">₱30, 000 
        <a class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;" type="button" href="payment-details.php">Review<a></td><!--Should position sa dulo ng table-->       
        </tr>
        <th scope="row" class="text-center">4</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Jan 25, 2023</td>
        <td class="text-center gap-2">₱30, 000 
        <a class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;" type="button" href="payment-details.php">Review<a></td><!--Should position sa dulo ng table-->       
        </tr>
        <tr>
        <th scope="row" class="text-center">5</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Jan 25, 2023</td>
        <td class="text-center gap-2">₱30, 000 
        <a class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;" type="button" href="payment-details.php">Review<a></td><!--Should position sa dulo ng table-->       
        </tr>
    </tbody>
</table>
</div>