<?php
    // Session Start
    session_start();

    $page_title = 'WeCare - Sign In';
    require_once '../includes/header.php';
    require_once '../classes/users.class.php';

    // If user is already logged in go to homepage
    if(isset($_SESSION['logged_id'])){
      header('location: ../homepage/home.php');
    }


?>

    <nav class="navbar bg-#fff">
      <div class="container-fluid ms-2">
        <a class="navbar-brand" href="../homepage/home.php">
          <img src="../images/logo.png" alt="" width="45" class="d-inline-block align-text-top">
        </a>
      </div>
    </nav>

<section style="background: #fff">
  <div class="container-signin py-5 h-100">
    <div class="d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10 justify-content-center align-items-center h-100">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="image-side col-md-6 col-lg-5 d-none d-md-block">
              <img src="../images/terrace.jpg"
                alt="login form" class="img-fluids" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="form col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="login.php" method="post" autocomplete="off">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <a href="../homepage/home.php"><img src="../images/logo.png" alt="" width="50px"></a>
                    <span>WeCare</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="error-text">Error</div>

                  <div class="form-floating mb-4">
                    <input type="email" name="email" class="form-control" id="email" placeholder="Eneter Your Email" required>
                    <label for="email">Email</label>
                  </div>

                  <div class="form-floating mb-3">
                    <input type="password" name="pass" class="form-control" id="pass" placeholder="Password" required>
                    <label for="pass">Password</label>
                  </div>
                  <!--<div class="forgot_password">
                  <a href="#!">Forgot password?</a>
                  </div> -->
                  <div class="submit pt-1 mb-4">
                    <input class="btn btn-dark btn-lg btn-block" type="submit" name="login" value="Login">

                    <hr>
                    <p class="lead fw-normal mb-0 me-3 text-center">Or Sign In With:</p>
                    
                    <div class ="signin_icon text-center">
                    <div class="flex-row align-items-center justify-content-center justify-content-lg-start">
                        <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-facebook-f"></i>
                        </button>
                        
                        <button type="button" class="btn btn-primary btn-floating mx-1">
                        <i class="fab fa-google"></i>
                        </button>
                    </div>
                  </div>
                  <a class="d-block mt-2 small text-center" href="../account/signup.php">Don't have an account? Sign Up</a>
                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</section>