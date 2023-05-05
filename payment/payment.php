<?php

    $page_title = 'WeCare - Billing';
    require_once '../includes/header.php';  
    require_once '../classes/payment.class.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
        header('location: ../account/signin.php');
    }

    require_once '../includes/navbar.php';


?>

<div class="p-5 text-white" style="background: #00ACB2">
    <div class="container">
        <?php

            $recent = new Payment;

            $recent_due = $recent->show_recent_due_date_by_user($_SESSION['logged_id']);

            $recent_total = $recent->show_recent_total_by_user($_SESSION['logged_id']);

            if(!empty($recent->show_payment_list_by_relative($_SESSION['logged_id']))){
        ?>
        
            
                <div class="row">
                    <?php foreach($recent_total as $data){ ?>
                    <div class="col">
                        <h5>Total Payment Amount</h5>
                        <h3><strong><?php if(!empty($data['total'])) { echo "₱" . number_format($data['total'], 2); }else { echo 'No Payment'; } ?></strong></h3>
                    </div>  
                    <?php } ?>
                    <?php foreach($recent_due as $data){ ?>
                        <div class="col">
                            <h5>Recent Payment Due Date</h5>
                            <h3><strong><?php if(!empty($data['recent_date'])) { echo date("M j, Y", strtotime($data['recent_date'])); }else { echo 'No Payment'; } ?></strong></h3>
                        </div>
                    <?php } ?>
                </div>
        <?php 
        
        } else {
        ?>

            <div class="row">
                <div class="col">
                    <h5>Total Payment Amount</h5>
                    <h3><strong>No Payment</strong></h3>
                </div>
                <div class="col">
                    <h5>Recent Payment Due Date</h5>
                    <h3><strong>No Payment</strong></h3>
                </div>
            </div>

        <?php } ?>
</div>
</div>

<div class="p-5 table-responsive">
    <h2 class="pb-3"><strong>Billing History</strong></h2>
    <table class="table table-hover table-striped table-bordered">
    <thead class="table-info">
        <tr>
        <th scope="col" style="background: #00ACB2; color: #fff;">Patient Name</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Status</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Billing Date</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Amount Due</th>
        <th scope="col" class="text-center" style="background: #00ACB2; color: #fff;">Action</th>
        </tr>
    </thead>
        <?php

            $payment = new Payment;

            $payment_list = $payment->show_payment_list_by_relative($_SESSION['logged_id']);

        ?>
    <tbody>
    <?php foreach($payment_list as $row){ ?>
        <tr>
            <th><?php echo ucfirst($row['fname']) . " " . ucfirst($row['mname'][0]) . ". " . ucfirst($row['lname']) . " "  . ucfirst($row['suffix'])?></th>

            <td class="text-center"><?php if($row['status'] == "Paid"){ ?><strong><span class="text-success"> <?php echo $row['status'] ?></span></strong><?php } else { ?> <strong><span class="text-danger "><?php echo $row['status'] ?></span></strong><?php } ?></td>

            <td class="text-center"><?php echo date("M j, Y", strtotime($row['date'])) ?></td>
            
            <td class="text-center gap-2">₱<?php echo number_format($row['total_amount'], 2) ?></td>
            <td class="text-center gap-2">
                <a class="btn btn-info" style="background: #00ACB2; border: #00ACB2; color:#fff; margin-left: 30px" href="payment-details.php?id=<?php echo $row['id'] ?>">Review<a>
            </td>
        </tr>
    <?php } ?>
    </tbody>
</table>
</div>