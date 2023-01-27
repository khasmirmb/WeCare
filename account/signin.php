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

<form action="signin.php" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</body>