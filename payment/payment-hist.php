<?php

    $page_title = 'WeCare - Payment History';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';
    session_start();

    require_once '../includes/navbar.php';
?>
<div class="bg-primary p-5 text-white">
    <div class="container">
        <div class="row">
            <div class="col">
                <h5>Next Payment Amount</h5>
                <h3><strong>₱30,000</strong></h3>
            </div>
            <div class="col">
                <h5>Next Payment Due Date</h5>
                <h3>February 23, 2023</h3>
            </div>
    </div>
</div>
</div>

<div class="p-5">
    <h2 class="pb-3"><strong>Payment History</strong></h2>
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info">
        <tr>
        <th scope="col" class="text-center">Month</th>
        <th scope="col">Patient Name</th>
        <th scope="col" class="text-center">Recommended Pay Date</th>
        <th scope="col" class="text-center">Amount Due</th>
        </tr>
    </thead>
    <tbody>
        <tr>
        <th scope="row" class="text-center">1</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Dec 20, 2028</td>
        <td class="text-center">₱30, 000</td>
        </tr>
        <tr>
        <th scope="row" class="text-center">2</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Jan 25, 2023</td>
        <td class="text-center">₱30, 000</td>
        </tr>
        <tr>
        <th scope="row" class="text-center">3</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Jan 25, 2023</td>
        <td class="text-center">₱30, 000</td>
        </tr>
        <th scope="row" class="text-center">4</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Jan 25, 2023</td>
        <td class="text-center">₱30, 000</td>
        </tr>
        <tr>
        <th scope="row" class="text-center">5</th>
        <td>Al-khasmir Basaluddin</td>
        <td class="text-center">Jan 25, 2023</td>
        <td class="text-center">₱30, 000</td>
        </tr>
    </tbody>
</table></div>
