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

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>SignIn To WeCare</h4>
                    </div>
                    <div class="card-body">
                        <form action="signin.php" method="post" class="need-validation">
                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <input type="text" name="email"class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password"class="form-control" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="Submit" class="btn btn-primary login-button">SignIn</button>
                            </div>
                            <div class="col-md">
                                <hr class="mt-4 mb-4">
                            </div>
                            <div class="form-group mt-3">
                                <p class="text-center continue-google">
                                <a href="#" class="btn btn-primary custom">
                                <i class="fa-brands fa-google"></i>
                                SignIn with Google
                                </a>
                                </p>
                            </div>
                            <div class="form-group mt-1">
                                <p class="text-center continue-google">
                                <a href="#" class="btn btn-primary custom">
                                <i class="fa-brands fa-facebook"></i>
                                SignIn with Facebook
                                </a>
                                </p>
                            </div>
                        </form>
                        <div class="row mt-3 text-center">
                            <p class="text-center">
                                Don't have an account? <a class="green" href="signup.php">Sign up</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>