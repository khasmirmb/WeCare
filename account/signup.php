<?php

    $page_title = 'WeCare - Sign Up';
    require_once '../includes/header.php';
    session_start();
?>

<div class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h4>SignUp Form</h4>
                    </div>
                    <div class="card-body">
                        <form action="" class="need-validation">
                            <div class="form-group mb-3">
                                <label for="">FirstName</label>
                                <input type="text" name="firstname"class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">LastName</label>
                                <input type="text" name="lastname"class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Email Address</label>
                                <input type="text" name="email"class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Password</label>
                                <input type="password" name="password"class="form-control" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Confirm Password</label>
                                <input type="password" name="confirm_password"class="form-control" required>
                            </div>
                            <div class="form-group text-center">
                                <button type="Submit" class="btn btn-primary login-button">Create Account</button>
                            </div>
                            <div class="col-md">
                                <hr class="mt-4 mb-4">
                            </div>
                            <div class="form-group mt-3">
                                <p class="text-center continue-google">
                                <a href="#" class="btn btn-primary custom">
                                <i class="fa-brands fa-google"></i>
                                SignUp with Google
                                </a>
                                </p>
                            </div>
                            <div class="form-group mt-1">
                                <p class="text-center continue-google">
                                <a href="#" class="btn btn-primary custom">
                                <i class="fa-brands fa-facebook"></i>
                                SignUp with Facebook
                                </a>
                                </p>
                            </div>
                        </form>
                        <div class="row mt-3">
                            <p class="text-center">
                                Already have an account? <a class="green" href="signin.php">Sign in</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
