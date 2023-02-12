<?php

    $page_title = 'WeCare - Sign Up';
    require_once '../includes/header.php';
    
    session_start();

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
            <h5 class="card-title text-center mb-5 fw-light fs-5">Sign Up</h5>
            <form action="" enctype="multipart/form-data">
              
              <div class="error-text">Error</div>

              <div class="form-floating mb-3">
                <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required pattern="[a-zA-Z'-'\s]*">
                <label for="fname">Firstname</label>
              </div>

              <div class="form-floating mb-3">
                <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required pattern="[a-zA-Z'-'\s]*">
                <label for="lname">Lastname</label>
              </div>

              <div class="form-floating mb-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="Eneter Your Email" required>
                <label for="email">Email</label>
              </div>

              <div class="form-floating mb-3">
                <input type="tel" name="phone" class="form-control" id="phone" placeholder="Phone Number" required pattern="[0-9]{11}" oninvalid="this.setCustomValidity('Enter 11 Digits Number')" oninput="this.setCustomValidity('')">
                <label for="phone">Phone Number</label>
              </div>

              <div class="mb-3">
                <label for="image-preview" class="form-label">Upload Profile Image</label>
                <input class="form-control" name="image" type="file" id="image-preview" required oninvalid="this.setCustomValidity('Select a Profile Image')" oninput="this.setCustomValidity('')">
              </div>

              <hr>

              <div class="form-floating mb-3">
                <input type="password" name="pass" class="form-control" id="pass" placeholder="Password" required>
                <label for="pass">Password</label>
              </div>

              <div class="form-floating mb-3">
                <input type="password" name="cpass"class="form-control" id="cpass" placeholder="Confirm Password" required>
                <label for="cpass">Confirm Password</label>
              </div>


              <div class="submit d-grid mb-2">
                <input class="btn btn-lg btn-primary btn-login fw-bold" type="submit" name="submit" value="Register">
              </div>

              <a class="d-block text-center mt-2 small" href="../account/signin.php">Have an account? Sign In</a>

              <hr class="my-4">

              <div class="d-grid mb-2">
                <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                    <i class="fa-brands fa-google"></i> Sign up with Google
                </button>
              </div>

              <div class="d-grid">
                <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                    <i class="fa-brands fa-facebook"></i> Sign up with Facebook
                </button>
              </div>

              </div>
            </form>
          </div>
        </div>
      </div>
  </div>
  <script src="../js/signup.js"></script>