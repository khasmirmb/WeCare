<?php

    $page_title = 'WeCare - Monitoring Request';
    require_once '../includes/header.php';
    require_once '../classes/relative.class.php';
    require_once '../tools/functions.php';
    session_start();

    if(!isset($_SESSION['logged_id'])){
      header('location: ../account/signin.php');
    }

    // If user submit the form
    if(isset($_POST['submit'])){

      $relative = new Relative;

      if(isset($_FILES['proof']) && validate_first_name($_POST) && validate_last_name($_POST) && validate_middlename_name($_POST)){

        $file_name = $_FILES['proof']['name'];
        $file_type = $_FILES['proof']['type'];
        $file_tmp_name = $_FILES['proof']['tmp_name'];
        $file_explode = explode('.', $file_name);
        $file_extension = end($file_explode);

        $extensions = ['pdf'];

        if(in_array($file_extension, $extensions) === true){

          $time = time();
          $file_new_name = $_SESSION['fullname'] . "_Request_" . $time . "_" . $file_name;

          if(move_uploaded_file($file_tmp_name, "../uploads/". $file_new_name)){

            $relative->firstname = htmlentities($_POST['firstname']);
            $relative->lastname = htmlentities($_POST['lastname']);
            $relative->middlename = htmlentities($_POST['middlename']);
            $relative->suffix = htmlentities($_POST['suffix']);
            $relative->relationship = htmlentities($_POST['relationship']);
            $relative->user_id = $_SESSION['logged_id'];
            $relative->proof = $file_new_name;
            $relative->patient_id = 0;

            if(validate_first_name($_POST) && validate_last_name($_POST) 
            && validate_middlename_name($_POST)){
    
              if($relative->add_relative_request()){
    
                header("Location: request-list.php");
    
              }
    
            }

          }

        } else{
          $error_file_type = "Please Upload a PDF FILE";
        
        }
        

      } else{
        $error_image = "Please Select a PDF FILE";
      }





    }



    require_once '../includes/navbar.php';
?>
<div class="container align-items-center pt-3 p-0">
<button type="button" class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;"><a class="text-white text-decoration-none" href="monitoring.php"><i class="fa-solid fa-arrow-left"></i> Back</a></button>
<h2 class="pb-3 pt-3"><strong>Monitoring Request</strong></h2>
<div class="container form-control p-0">
<div class="p-3 pt-0">
<form class="row needs-validation p-0" action="request.php" method="POST" enctype="multipart/form-data">
<h4 class="bg-gradient py-3 px-3 p-0 text-white" style="background: #00ACB2; color: #fff;"><strong>Patient Information</strong></h2>

  <div class="row pt-3 pb-3">
    <div class="col-sm">
    <label for="firstname"><strong>Firstname:</strong></label><br>
    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="Ex.Juan" required value="<?php if(isset($_POST['firstname'])) { echo $_POST['firstname']; } ?>"><br>
    </div>

    <?php
      if(isset($_POST['submit']) && !validate_first_name($_POST)){
    ?>
      <p class="text-danger">First name is invalid.</p>
    <?php
    }
    ?>
    
    <div class="col-sm">
    <label for="lastname"><strong>Lastname:</strong></label><br>
    <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Ex.Villanueva" required value="<?php if(isset($_POST['lastname'])) { echo $_POST['lastname']; } ?>"><br>
    </div>

    <?php
      if(isset($_POST['submit']) && !validate_last_name($_POST)){
    ?>
      <p class="text-danger">Last name is invalid.</p>
    <?php
    }
    ?>

    <div class="col-sm">
    <label for="middlename"><strong>Middlename:</strong></label><br>
    <input class="form-control" type="text" name="middlename" id="middlename" placeholder="Ex.Carlos" required value="<?php if(isset($_POST['middlename'])) { echo $_POST['middlename']; } ?>"><br>
    </div>

    <?php
      if(isset($_POST['submit']) && !validate_middlename_name($_POST)){
    ?>
      <p class="text-danger">Middlename is invalid.</p>
    <?php
    }
    ?>

    <div class="col-sm">
    <label for="suffix"><strong>Suffix:</strong></label><br>
    <input class="form-control" type="text" name="suffix" id="suffix" placeholder="Ex.Jr" value="<?php if(isset($_POST['suffix'])) { echo $_POST['suffix']; } ?>"><br>
    </div>
  
  <div class="row">
  <div class="col-sm">
    <label for="relationship"><strong>Relationship to the patient:</strong></label><br>
    <select name="relationship" id="relationship" class="form-select" style="width: 50%;">

      <option value="Mother" <?php if(isset($_POST['relationship'])) { if ($_POST['relationship'] == 'Mother') echo ' selected="selected"'; } ?>>Mother</option>

      <option value="Father" <?php if(isset($_POST['relationship'])) { if ($_POST['relationship'] == 'Father') echo ' selected="selected"'; } ?>>Father</option>

      <option value="Grandmother" <?php if(isset($_POST['relationship'])) { if ($_POST['relationship'] == 'Grandmother') echo ' selected="selected"'; } ?>>Grandmother</option>

      <option value="Grandfather" <?php if(isset($_POST['relationship'])) { if ($_POST['relationship'] == 'Grandfather') echo ' selected="selected"'; } ?>>Grandfather</option>

      <option value="Mother-in-law" <?php if(isset($_POST['relationship'])) { if ($_POST['relationship'] == 'Mother-in-law') echo ' selected="selected"'; } ?>>Mother in Law</option>

      <option value="Father-in-law" <?php if(isset($_POST['relationship'])) { if ($_POST['relationship'] == 'Father-in-law') echo ' selected="selected"'; } ?>>Father in Law</option>

      <option value="Aunt" <?php if(isset($_POST['relationship'])) { if ($_POST['relationship'] == 'Aunt') echo ' selected="selected"'; } ?>>Aunt</option>

      <option value="Uncle" <?php if(isset($_POST['relationship'])) { if ($_POST['relationship'] == 'Uncle') echo ' selected="selected"'; } ?>>Uncle</option>

      <option value="Close-Relative" <?php if(isset($_POST['relationship'])) { if ($_POST['relationship'] == 'Close-Relative') echo ' selected="selected"'; } ?>>Close Relative</option>

      <option value="Friend" <?php if(isset($_POST['relationship'])) { if ($_POST['relationship'] == 'Friend') echo ' selected="selected"'; } ?>>Friend</option>

      <option value="Other" class="mb-3" <?php if(isset($_POST['relationship'])) { if ($_POST['relationship'] == 'Other') echo ' selected="selected"'; } ?>>Other</option>
    </select>
</div>
</div>
</div>
<h4 class="bg-gradient py-3 px-3 text-white" style="background: #00ACB2; color: #fff;"><strong>Upload ID or any Identification that you're related to patient (Compile all in One PDF FILE)</strong></h4>
<div class="row pt-3">
<div class="mb-3">
  <input class="form-control" type="file" id="formFileMultiple" name="proof" required accept="application/pdf, .pdf">
</div>
</div>
<?php
 //Display the error message if there is any.
 if(isset($error_image)){
  echo '<div><p class="text-danger">'.$error_image.'</p></div>';
 }
 if(isset($error_file_type)){
  echo '<div><p class="text-danger">'.$error_file_type.'</p></div>';
 } 
?>

<div class="d-grid gap-2 d-md-flex justify-content-md-end p-3">

    <button class="btn btn-primary" style="background: #00ACB2; border: #00ACB2;" name="submit">Submit</button>
</div>

</form>
</div>
</div>