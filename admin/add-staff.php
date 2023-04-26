<?php

  $page_title = 'WeCare Admin - Add Staff';
  require_once '../includes/admin-header.php';
  require_once '../tools/functions.php';
  require_once '../classes/users.class.php';
  require_once '../classes/staff.class.php';
  session_start();

  if(!isset($_SESSION['logged_id']) || $_SESSION['user_type'] != 'admin'){
  header('location: ../account/signin.php');
  }

  if(isset($_POST['submit'])){

    $staff = new Staff;
    $user = new Users;

    $password = htmlentities($_POST['password']);
    $cpassword = htmlentities($_POST['cpass']);
    
    if($password == $cpassword){
      if(isset($_FILES['image']) && validate_add_staff($_POST)){
        $img_name = $_FILES['image']['name'];   // Getting the image name
        $img_type = $_FILES['image']['type'];   // Getting the image type
        $tmp_name = $_FILES['image']['tmp_name'];
        $img_explode = explode('.', $img_name);
        $img_extension = end($img_explode);
        $extensions = ['png', 'jpeg', 'jpg']; // Only accepted these img extensions

        if(in_array($img_extension, $extensions) === true){

          $time = time();
          $new_img_name = "Staff_Image_" . $time . $img_name;
          if(move_uploaded_file($tmp_name, "../images/". $new_img_name)){

            //User Info
            $user->unique_id = rand(time(), 10000000);
            $user->firstname = htmlentities($_POST['firstname']);
            $user->middlename = htmlentities($_POST['middlename']);
            $user->lastname = htmlentities($_POST['lastname']);
            $user->email = htmlentities($_POST['email']);
            $user->phone = htmlentities($_POST['phone']);
            $user->image = $new_img_name;
            $user->password = htmlentities($_POST['password']);
            $user->otp = 0;
            $user->verification_status = 'Verified';
            $user->type = 'staff';

            if($user->add_user()){
              if($user->fetch_user_email($user->email)){
                $data = $user->fetch_user_email($user->email);
                $user->id = $data['id'];

                //Staff Info
                $staff->user_id = $user->id;
                $staff->firstname = htmlentities($_POST['firstname']);
                $staff->lastname = htmlentities($_POST['lastname']);
                $staff->middlename = htmlentities($_POST['middlename']);
                $staff->suffix = htmlentities($_POST['suffix']);
                $staff->address = htmlentities($_POST['address']);
                $staff->date_of_birth = htmlentities($_POST['dateofbirth']);
                $staff->degree = htmlentities($_POST['degree']);
                $staff->position = htmlentities($_POST['position']);
                $staff->status = htmlentities($_POST['status']);

                if($staff->add_staff()){
                  header('location: staff-accounts.php');
                }

              }
            }

          }else{
              $error_file_type = "Please Select an Image - JPG, PNG, JPEG";
          }
      }else{
          $error_image = "Please Select an Image";
      }
      }
      
    } else{
      $pass_error = "Confirm Password and Password Doesn't Match";
    }

  }

  require_once '../includes/admin-sidebar.php';

?>

<div class="content">
<div class="container align-items-center pt-3">
    <button class="btn btn-info" type="button" style="background: #00ACB2; border: #00ACB2; color:#fff;"><a class="text-white text-decoration-none" href="../admin/staff-accounts.php"><i class="fa-solid fa-arrow-left"></i> Back </a></button>

    <div class="pt-4">
    <h2 class="mb-4"><strong>Add Staff</strong></h2>
    <div class="container form-control">
    <div class="container-fluid">
   

  <form action="add-staff.php" enctype="multipart/form-data" method="POST"><!--Starting of the form-->
  <div class="pt-3">

  <div class="row"><!--First row-->
  <div class="col-sm">
  <label for="firstname"><strong>Firstname:</strong></label><br>
  <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Ex.Juan" required value="<?php if(isset($_POST['firstname'])) { echo $_POST['firstname']; } ?>"><br>

  <?php
    if(isset($_POST['submit']) && !validate_first_name($_POST)){
  ?>
    <p class="text-danger mb-2">Invalid Firstname Input.</p>
  <?php
  }
  ?>
  </div>


  
  <div class="col-sm">
  <label for="middlename"><strong>Middlename:</strong></label><br>
  <input class="form-control" type="text" name="middlename" id="middlename" placeholder="Ex. Buenaventura" required value="<?php if(isset($_POST['middlename'])) { echo $_POST['middlename']; } ?>"><br>

  <?php
    if(isset($_POST['submit']) && !validate_middlename_name($_POST)){
  ?>
    <p class="text-danger mb-2">Invalid Middlename Input.</p>
  <?php
  }
  ?>
  </div>

  <div class="col-sm">
  <label for="lastname"><strong>Lastname:</strong></label><br>
  <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Ex. Carlos" required value="<?php if(isset($_POST['lastname'])) { echo $_POST['lastname']; } ?>"><br>

  <?php
    if(isset($_POST['submit']) && !validate_last_name($_POST)){
  ?>
    <p class="text-danger mb-2">Invalid Middlename Input.</p>
  <?php
  }
  ?>
  </div>

  <div class="col-sm">
  <label for="suffix"><strong>Suffix:</strong></label><br>
  <input class="form-control" type="text" name="suffix" id="suffix" placeholder="Ex. Jr" value="<?php if(isset($_POST['suffix'])) { echo $_POST['suffix']; } ?>"><br>
  </div>
  </div><!--End of First row-->

  <div class="row"><!--Second row-->
    <div class="col-sm">
    <label for="dateofbirth"><strong>Date of Birth</strong></label><br>
    <input class="form-control" type="date" name="dateofbirth" id="dateofbirth" required value="<?php if(isset($_POST['dateofbirth'])) { echo $_POST['dateofbirth']; } ?>"><br>
    </div>
  
    <div class="col-sm">
    <label for="address"><strong>Address:</strong></label><br>
    <input class="form-control" type="text" name="address" id="address" required value="<?php if(isset($_POST['address'])) { echo $_POST['address']; } ?>"><br>
    <?php
      if(isset($_POST['submit']) && !validate_address($_POST)){
    ?>
      <p class="text-danger mb-2">Invalid Address Input.</p>
    <?php
    }
    ?>
    </div>

    <div class="col-sm">
    <label for="phone"><strong>Phone Number:</strong></label><br>
    <input class="form-control" type="tel" name="phone" id="phone" required pattern="[0-9]{11}" oninvalid="this.setCustomValidity('Enter 11 Digits Number')" oninput="this.setCustomValidity('')" required value="<?php if(isset($_POST['phone'])) { echo $_POST['phone']; } ?>"><br>
    <?php
      if(isset($_POST['submit']) && !validate_phone($_POST)){
    ?>
      <p class="text-danger mb-2">Invalid Phone Input.</p>
    <?php
    }
    ?>
    </div>

    <div class="col-sm">
    <label for="degree"><strong>Degree:</strong></label><br>
    <input class="form-control" type="text" name="degree" id="degree" required value="<?php if(isset($_POST['degree'])) { echo $_POST['degree']; } ?>"><br>
    <?php
      if(isset($_POST['submit']) && !validate_degree($_POST)){
    ?>
      <p class="text-danger mb-2">Invalid Degree Input.</p>
    <?php
    }
    ?>
    </div>

</div><!--End of Second row-->
    <div class="row"> <!--Third row-->
    <div class="col-sm">
    <label for="image"><strong>Profile Image:</strong></label><br>
    <input class="form-control" type="file" name="image" id="image" required oninvalid="this.setCustomValidity('Select a Profile Image')" oninput="this.setCustomValidity('')" accept="image/*"><br>
    <?php
    //Display the error message if there is any.
    if(isset($error_image)){
      echo '<div><p class="text-danger">'.$error_image.'</p></div>';
    }
    if(isset($error_file_type)){
      echo '<div><p class="text-danger">'.$error_file_type.'</p></div>';
    } 
    ?>
    </div>

    <div class="col-sm">
    <label for="position"><strong>Position:</strong></label><br>
    <input class="form-control" type="text" name="position" id="position" required value="<?php if(isset($_POST['position'])) { echo $_POST['position']; } ?>"><br>
    <?php
      if(isset($_POST['submit']) && !validate_position($_POST)){
    ?>
      <p class="text-danger mb-2">Invalid Position Input.</p>
    <?php
    }
    ?>
    </div>

    <div class="col-sm">
    <label for="status"><strong>Status:</strong></label><br>
    <select name="status" id="status" class="form-control">
          <option value="Active" <?php if(isset($_POST['status'])) { if ($_POST['status'] == 'Active') echo ' selected="selected"'; } ?>>Active</option>
          <option value="Inactive" <?php if(isset($_POST['status'])) { if ($_POST['status'] == 'Inactive') echo ' selected="selected"'; } ?>>Inactive</option>
        </select>
    </div>

    </div><!--End of Third row-->

    <div class="row"> <!--Fourth row-->
    <div class="col-sm">
    <label for="email"><strong>Email:</strong></label><br>
    <input class="form-control" type="email" name="email" id="email" required value="<?php if(isset($_POST['email'])) { echo $_POST['email']; } ?>"><br>
    <?php
      if(isset($_POST['submit']) && !validate_email_fully($_POST)){
    ?>
      <p class="text-danger mb-2">Email Exist or Invalid Email Input.</p>
    <?php
    }
    ?>
    </div>

    <div class="col-sm">
    <label for="password"><strong>Password:</strong></label><br>
    <input class="form-control" type="password" name="password" id="password" required value="<?php if(isset($_POST['password'])) { echo $_POST['password']; } ?>"><br>
    <?php
      if(isset($_POST['submit']) && !validate_password($_POST)){
    ?>
      <p class="text-danger mb-2">Password must be 8 or above and have 1 number, 1 uppercase, 1 lowercase.</p>
    <?php
    }
    ?>
    </div>

    <div class="col-sm">
    <label for="cpass"><strong>Confirm Password:</strong></label><br>
    <input class="form-control" type="password" name="cpass" id="cpass" required value="<?php if(isset($_POST['cpass'])) { echo $_POST['cpass']; } ?>"><br>
    <?php
    //Display the error message if there is any.
    if(isset($pass_error)){
      echo '<div><p class="text-danger">'.$pass_error.'</p></div>';
    }
    ?>
    </div>
    </div>

    </div><!--End of Fourth row-->

  <div class="d-grid gap-2 d-md-flex justify-content-md-end pt-3 pb-3"><!--Starting of buttons-->
    <button class="btn btn-danger me-md-2" type="button" type="button" data-bs-toggle="modal" data-bs-target="#delete-staffdata">Clear Data</button> <!--Should have modal-->

    <button class="btn btn-info" name="submit" style="background: #00ACB2; border: #00ACB2; color: #fff;">Add Staff</button> <!--Should have modal-->
    
  </div><!--End of buttons-->

    </div><!--Last of the div inside of the form-->
    </form><!--Last of the form-->
    </div><!--Last of the container fluid-->
    </div><!--Last of the container form-control-->
    </div> <!--Last of the div-->
</div><!--End of first container-->


</div>

<!-- Delete data -->
<div class="modal fade" id="delete-staffdata" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="delete-staffdataLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="delete-staffdataLabel">Delete User Confirmation</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Are you sure you want to clear this data?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
        <button type="button" class="btn btn-primary">Yes</button>
      </div>
    </div>
  </div>
</div>

<script>
  function clearinput() {
  document.getElementById("firstname").value = "";
  document.getElementById("middlename").value = "";
  document.getElementById("lastname").value = "";
  document.getElementById("suffix").value = "";
  document.getElementById("dateofbirth").value = "";
  document.getElementById("address").value = "";
  document.getElementById("phone").value = "";
  document.getElementById("degree").value = "";
  document.getElementById("position").value = "";
  document.getElementById("email").value = "";
  document.getElementById("password").value = "";
  document.getElementById("cpass").value = "";
  document.getElementById("image").value = "";
}
</script>

<?php

require_once '../includes/admin-footer.php';

?>

