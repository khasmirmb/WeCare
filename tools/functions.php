<?php 

function validate_first_name($POST){
    if(!isset($POST['fn'])){
        return false;
    }else if(strlen(trim($POST['fn'])) > 1  && strlen(trim($POST['fn'])) < 255 && !preg_match("/^[a-zA-z]*$/", $POST['fn'])){
        return false;
    }
    return true;
}

function validate_last_name($POST){
    if(!isset($POST['ln'])){
        return false;
    }else if(strlen(trim($POST['ln'])) > 1  && strlen(trim($POST['ln'])) < 255 && !preg_match("/^[a-zA-z]*$/", $POST['ln'])){
        return false;
    }
    return true;
}

function validate_email($POST){
    // Remove all illegal characters from email
    $email = filter_var($POST['email'], FILTER_SANITIZE_EMAIL);
    // Validate e-mail
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    }else {
        return false;
    }
}
function validate_contact_us($POST){
    if(!validate_first_name($POST) || !validate_last_name($POST) || !validate_email($POST)){
        return false;
     }
    return true;
}

?>