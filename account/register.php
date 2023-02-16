<?php

session_start();

include_once '../classes/basic.database.php';

$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['pass'];
$cpassword = $_POST['cpass'];
$type = 'client';
$verification_status = '0';


// Checking if fields are not empty
if(!empty($fname) && !empty($lname) && !empty($email) && !empty($phone) && !empty($password) && !empty($cpassword)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        // Checking if email already exists
        $sql = mysqli_query($conn, "SELECT email FROM users WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            echo "$email already Exists";
        }
        else{
            // Checking for password and confirm password
            if($password == $cpassword){
                // Checking if user uploded a file or not
                if(isset($_FILES['image'])){
                    $img_name = $_FILES['image']['name'];   // Getting the image name
                    $img_type = $_FILES['image']['type'];   // Getting the image type
                    $tmp_name = $_FILES['image']['tmp_name'];
                    $img_explode = explode('.', $img_name);
                    $img_extension = end($img_explode);
                    $extensions = ['png', 'jpeg', 'jpg']; // Only accepted these img extensions

                    if(in_array($img_extension, $extensions) === true){
                        $time = time();
                        $newimagename = $time . $img_name;  // Creating a unique name for image
                        if(move_uploaded_file($tmp_name, "../images/". $newimagename)) // Store img in folder
                        {
                            $random_id = rand(time(), 10000000); // create a user unique id
                            $otp = mt_rand(1111,9999); // creating 4 random digits for otp

                            // Inserting Data to SQL
                            $sql2 = mysqli_query($conn, "INSERT INTO users (unique_id, fname, lname, email, phone, password, image, otp, verification_status, type) VALUES ({$random_id}, 
                            '{$fname}', '{$lname}', '{$email}', '{$phone}', '{$password}',
                            '{$newimagename}' , '{$otp}', '{$verification_status}', '{$type}')");

                            if($sql2){
                                $sql3 = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
                                if(mysqli_num_rows($sql3) > 0){
                                    $row = mysqli_fetch_assoc($sql3);   // Fetching Data
                                    $_SESSION['unique_id'] = $row['unique_id'];
                                    $_SESSION['email'] = $row['email'];
                                    $_SESSION['otp'] = $row['otp'];

                                    // Mail function
                                    if($otp){
                                        $reciver = $email;
                                        $subject = "From: $fname $lname <$email>";
                                        $body = "Name " . "$fname $lname \n Email: " . "$email \n" . "$otp";
                                        $sender = "From: WeCare@gmail.com";

                                        if(mail($reciver, $subject, $body, $sender)){
                                            echo "Success";
                                        }
                                        else{
                                            echo "Email Problem" . mysqli_error($conn);
                                        }
                                    }

                                    // Mail Function End
                                }
                            }
                            else{
                                echo "Something went Wrong!";
                            }
                        } 
                    }
                    else{
                        echo "Please Select a Profile Image - JPG, PNG, JPEG";
                    }
                }
                else{
                    echo "Please Select a Profile Image";
                }
            }
            else{
                echo "Confirm Password and Password Doesn't Match";
            }
        }
    }
    else{
        echo "$email is not a Valid Email";
    }
}
else{
    echo "All Input Fields are Required!";
}

?>