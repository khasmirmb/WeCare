<?php

    $page_title = 'WeCare - Verify';
    require_once '../includes/header.php';
    require_once '../classes/basic.database.php';
    require_once '../classes/users.class.php';
    
    session_start();

    $unique_id = $_SESSION['unique_id'];
    if(empty($unique_id)){
      header("Location: ../account/signin.php");
    }
    $qry = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$unique_id}'");
    if(mysqli_num_rows($qry) > 0){
      $row = mysqli_fetch_assoc($qry);
      if($row){
        $_SESSION['verification_status'] = $row['verification_status'];
        if($row['verification_status'] == 'Verified'){
          header("Location: signin.php");
        }
      }
    }


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

  <div class="container-signup">
      <div class="col-lg-10 col-xl-9 mx-auto">
        <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
          <div class="card-img-left d-none d-md-flex">
            <!-- Background image for card set in CSS! -->
          </div>
          <div class="form card-body p-4 p-sm-5">
            <h5 class="card-title text-center mb-5 fw-light fs-5">Verify Your Account</h5>
            <p class="fs-6 text-center">We emailed you the four digit code to Continue. Enter the code below to confirm your email address...</p>

            <form action="" autocomplete="off">
                <div class="error-text">Error</div>

                    <div class="filed-inputs text-center">
                        <input type="number" name="otp1" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                        <input type="number" name="otp2" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                        <input type="number" name="otp3" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                        <input type="number" name="otp4" class="otp_field" placeholder="0" min="0" max="9" required onpaste="false">
                    </div>

                <div class="submit d-grid mb-2 mt-3">
                    <input class="button btn btn-lg btn-primary btn-login fw-bold text-uppercase" type="submit" name="submit" value="Verify Now">
                </div>
            </form>
            


          </div>
        </div>
      </div>
  </div>
    <script src="../js/verify.js"></script>