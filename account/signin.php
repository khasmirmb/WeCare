<?php
    // Session Start
    session_start();

    $page_title = 'WeCare - Sign In';
    require_once '../includes/header.php';
    require_once '../classes/users.class.php';
    require_once '../classes/staff.class.php';
    require_once '../classes/relative.class.php';

    // If user is already logged in go to homepage
    if(isset($_SESSION['logged_id'])){
      header('location: ../homepage/home.php');
    }

    $users_account = new Users();
    $staff_user = new Staff();
    $relative_user = new Relative();
    
    if(isset($_POST['email']) && isset($_POST['password'])){
    //Sanitizing the inputs of the users. Mandatory to prevent injections!
    $users_account->email = htmlentities($_POST['email']);
    $users_account->password = htmlentities($_POST['password']);
    if($users_account->sign_in()){
        $users = $users_account->get_user_info();
        foreach($users as $row){
            $_SESSION['logged_id'] = $row['id'];
            $_SESSION['fullname'] = $row['fname'] . ' ' . $row['mname'][0] . '. ' . $row['lname'];
            $_SESSION['user_firstname'] = $row['fname'];
            $_SESSION['user_lastname'] = $row['lname'];
            $_SESSION['user_email'] = $row['email'];
            $_SESSION['user_phone'] = $row['phone'];
            $_SESSION['user_type'] = $row['type'];
            $_SESSION['unique_id'] = $row['unique_id'];
            $_SESSION['profile_pic'] = $row['image'];
            $_SESSION['verification_status'] = $row['verification_status'];
        
          //display the appropriate dashboard page for user
          if($row['verification_status'] == '0'){
            header('location: ../account/verify.php');
          }else{
            if($row['type'] == 'admin'){
              header('location: ../admin/dashboard.php');
            }else if($row['type'] == 'staff'){
              $staff =  $staff_user->staff_user_info($row['id']);
              foreach($staff as $value){
                $_SESSION['staff_logged'] = $value['id'];
              }
              header('location: ../staff/patient-list.php');
            }else if($row['type'] == 'client'){
              $relative =  $relative_user->relative_user_info($row['id']);
              foreach($relative as $r_data){
                $_SESSION['relative_id'] = $r_data['id'];
              }
             header('location: ../homepage/home.php');
            }
          }
        }
    }else{
        //set the error message if account is invalid
        $error = 'Invalid email/password. Try again.';
    }
  }


?>

    <nav class="navbar bg-#fff">
      <div class="container-fluid ms-2">
        <a class="navbar-brand" href="../homepage/home.php">
          <!--<img src="../images/logo.png" alt="" width="45" class="d-inline-block align-text-top">--> <button class="btn btn-info" type="button" style="background: #00ACB2; border: #00ACB2; color: #fff; margin-left: 5px; margin-top: 25px;"><i class="fa-solid fa-arrow-left"></i> Return to homepage </button></div>
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
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="signin.php" method="post">

                  <div class="d-flex align-items-center mb-3 pb-1">
                    <a href="../homepage/home.php"><img src="../images/logo.png" alt="" width="50px"></a>
                    <span>WeCare</span>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="email" id="email" class="form-control form-control-lg" name="email" value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>"/>
                    <label class="form-label" for="email">Email address</label>
                  </div>

                  <div class="form-outline mb-1">
                    <input type="password" id="password" class="form-control form-control-lg" name="password" />
                    <label class="form-label" for="password">Password</label>
                  </div>
                  <!--<div class="forgot_password">
                  <a href="#!">Forgot password?</a>
                  </div> -->
                  <div class="pt-1 mb-4">
                    <button class="btn btn-info btn-lg btn-block" type="submit" name="login" style="background: #00ACB2; border: #00ACB2; color: #fff;">Login</button>

                    <?php
                        //Display the error message if there is any.
                        if(isset($error)){
                        echo '<div><p class="text-danger mt-2 mb-2">'.$error.'</p></div>';
                        }
                                    
                     ?>
                    <hr>
                    <p class="lead fw-normal mb-0 me-3 text-center">Or Sign In With:</p>
                    
                    <div class ="signin_icon text-center">
                    <div class="flex-row align-items-center justify-content-center justify-content-lg-start">
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

<?php

require_once '../includes/footer.php';

?>