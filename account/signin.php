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
                header('location: ../client/index.php');
            }
        }
    }else{
        //set the error message if account is invalid
        $error = 'Invalid email/password. Try again.';
    }
  }
?>
<body id="sign-up">
    <!-- Header -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark background-color-green">
        <div class="container-fluid">
            <a class="navbar-brand" href="../home/">
                <img class="logo-icon" src="../img/greenscreen_logo_green.png" alt="">
                <!-- <span class="logo-name">GreenScreen</span> -->
            </a>
        </div>
        </nav>
    </header>
    <main class="py-md-4">
        <div class="container-fluid d-flex align-items-md-center justify-content-md-center">
            <div class="container-fluid sign-in p-sm-5">
                <div class="row">
                    <div class="col">
                        <h2 class="fw-bold text-center green">Sign in to apply</h2>
                    </div>
                </div>
                <div class="row mt-4">
                    <p class="text-center continue-google">
                        <a class="btn btn-lg btn-success background-color-green btn-continue btn-font" href="#">
                            <i class="fa-brands fa-google"></i>
                            Continue with Google
                        </a>
                    </p>
                </div>
                <div class="row">
                    <div class="col-md">
                        <div class="text-center">
                            <hr class="mt-4 mb-1">
                            <span class="p-2 or">or</span>
                        </div>
                        <form class="needs-validation" action="signin.php" method="post">
                            <div class="row g-3">
                                <div class="col-12">
                                    <label for="email" class="form-label">Email Address<span class="text-muted"></span></label>
                                    <input type="text" class="form-control" id="email" placeholder="" name="email" required>
                                    <div class="invalid-feedback">
                                        Please enter a valid email address.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="" required>
                                    <div class="invalid-feedback">
                                        Please enter valid password.
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-check form-check-inline me-0">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                        <label class="form-check-label" for="inlineCheckbox1">Remember me</label>
                                    </div>
                                    <div class="form-check form-check-inline float-end me-0">
                                        <a class="green fw-bold text-decoration-none text-end" href="forgotpassword.php">Forgot password?</a>
                                    </div>
                                </div>
                                <div class="col-12 pt-2 mb-3">
                                    <input class="btn btn-lg btn-success background-color-green btn-continue btn-font" type="submit" value="Continue with Email" name="login">
                                </div>
                                <?php
                                    //Display the error message if there is any.
                                    if(isset($error)){
                                        echo '<div><p class="error">'.$error.'</p></div>';
                                    }
                                ?>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <p class="text-center">
                        Don't have an account? <a class="green" href="signup.php">Sign up</a>
                    </p>
                </div>
            </div>
        </div>
    </main>
</body>
</html>