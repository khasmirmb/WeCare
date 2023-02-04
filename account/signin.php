<?php

    $page_title = 'WeCare - Sign In';
    require_once '../includes/header.php';
    require_once '../classes/account.class.php';

    session_start();

    $account_obj = new Account();
  if(isset($_POST['email']) && isset($_POST['password'])){
    //Sanitizing the inputs of the users. Mandatory to prevent injections!
    $account_obj->email = htmlentities($_POST['email']);
    $account_obj->password = htmlentities($_POST['password']);
    if($account_obj->sign_in()){
        $account = $account_obj->get_account_info();
        foreach($account as $row){
            $_SESSION['logged_id'] = $row['id'];
            $_SESSION['fullname'] = 'Temporary';
            $_SESSION['user_type'] = $row['type'];
            //display the appropriate dashboard page for user
            if($row['type'] == 'admin'){
                header('location: ../admin/dashboard.php');
            }else if($row['type'] == 'staff'){
                header('location: ../staff/dashboard.php');
            }else if($row['type'] == 'client'){
                header('location: ../homepage/home.php');
            }
        }
    }else{
        //set the error message if account is invalid
        $error = 'Invalid email/password. Try again.';
    }
  }

?>

<body id="sign-in">
<!-- Header -->
<header>
    <div class="col-lg-2">
        <div class="header_logo">
            <a href="../homepage/home.php"><img src="../images/logo.png" alt="" class="logo_login"></a>
        </div>
    </div>
</header>
    <!-- End Header -->

    <form action="signin.php" method="post">
        <label for="email">Email Address</label>
        <input type="email" name="email" placeholder="Email" required>

        <label for="password">Password</label>
        <input type="password" name="password" placeholder="Password" required>

        <button type="submit" name="submit">Login</button>
    </form>

</body>