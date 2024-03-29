<?php 
// Validate Contact Us
function validate_first_name($POST){
    if(!isset($POST['firstname'])){
        return false;
    }else if(strlen(trim($POST['firstname']))<1){
        return false;
    }else if(strlen($POST['firstname']) > 30 ){
        return false;
    }
    else if(!preg_match("/^[a-zA-z]*$/", $POST['firstname'])){
        return false;
    }
    return true;
}

function validate_middlename_name($POST){
    if(!isset($POST['middlename'])){
        return false;
    }else if(strlen(trim($POST['middlename']))<1){
        return false;
    }else if(strlen($POST['middlename']) > 30 ){
        return false;
    }
    else if(!preg_match("/^[a-zA-z]*$/", $POST['middlename'])){
        return false;
    }
    return true;
}


function validate_last_name($POST){
    if(!isset($POST['lastname'])){
        return false;
    }else if(strlen(trim($POST['lastname']))<1){
        return false;
    }else if(strlen($POST['lastname']) > 30 ){
        return false;
    }
    if(!preg_match("/^[a-zA-z]*$/", $POST['lastname'])){
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
    if(!validate_first_name($POST) || !validate_middlename_name($POST) || !validate_last_name($POST) || !validate_email($POST)){
        return false;
     }
    return true;
}

// Validate Survey Information
function validate_survey_question_walk($POST){
    if(!isset($POST['walk'])){
        return false;
    }
    return true;
}
function validate_survey_question_wheelchair($POST){
    if(!isset($POST['wheelchair'])){
        return false;
    }
    return true;
}
function validate_survey_question_bedridden($POST){
    if(!isset($POST['bedridden'])){
        return false;
    }
    return true;
}
function validate_survey_question_memory($POST){
    if(!isset($POST['memory'])){
        return false;
    }
    return true;
}
function validate_survey_question_bath($POST){
    if(!isset($POST['bath'])){
        return false;
    }
    return true;
}
function validate_survey_question_eating($POST){
    if(!isset($POST['eating'])){
        return false;
    }
    return true;
}
function validate_survey_question_restless($POST){
    if(!isset($POST['restless'])){
        return false;
    }
    return true;
}
function validate_survey_question_feeding($POST){
    if(!isset($POST['feeding'])){
        return false;
    }
    return true;
}
function validate_survey_questions($POST){
    if(!validate_survey_question_walk($POST) || !validate_survey_question_wheelchair($POST) || !validate_survey_question_bedridden($POST) || !validate_survey_question_memory($POST) || !validate_survey_question_bath($POST) || !validate_survey_question_eating($POST) || !validate_survey_question_restless($POST) || !validate_survey_question_feeding($POST)){
        return false;
     }
    return true;
}
function validate_services($POST){
    if(!isset($POST['services'])){
        return false;
    }
    return true;
}
function validate_inquire($POST){
    if(!isset($POST['inquire'])){
        return false;
    }
    return true;
}

function validate_addmission_date($POST){
    if(!isset($POST['add_date'])){
        return false;
    }else if($POST['add_date'] == date("Y-m-d")){
        return false;
    }
    else if($POST['add_date'] < date("Y-m-d")){
        return false;
    }
    else if(date('l', strtotime($_POST['add_date'])) == "Sunday"){
        return false;
    }
    return true;
}

function validate_add_survey($POST){
    if(!validate_survey_questions($POST) || !validate_services($POST) || !validate_inquire($POST) || !validate_addmission_date($POST)){
        return false;
     }
    return true;
}

// Validate Patient Information
function validate_patient_firstname($POST){
    if(!isset($POST['p_firstname'])){
        return false;
    }else if(strlen(trim($POST['p_firstname']))<1){
        return false;
    }
    else if(!preg_match("/^[a-zA-z]*$/", $POST['p_firstname'])){
        return false;
    }
    return true;
}
function validate_patient_middlename($POST){
    if(!isset($POST['p_middlename'])){
        return false;
    }else if(strlen(trim($POST['p_middlename']))<1){
        return false;
    }
    else if(!preg_match("/^[a-zA-z]*$/", $POST['p_middlename'])){
        return false;
    }
    return true;
}
function validate_patient_lastname($POST){
    if(!isset($POST['p_lastname'])){
        return false;
    }else if(strlen(trim($POST['p_lastname']))<1){
        return false;
    }
    else if(!preg_match("/^[a-zA-z]*$/", $POST['p_lastname'])){
        return false;
    }
    return true;
}
function validate_patient_place_of_birth($POST){
    if(!isset($POST['p_place_birth'])){
        return false;
    }
    else if(!preg_match('/^[0-9a-zA-Z\xe0-\xef\x80-\xbf._-]+\s*/', $POST['p_place_birth'])){
        return false;
    }
    return true;
}
function validate_patient_street($POST){
    if(!isset($POST['p_street'])){
        return false;
    }
    else if(!preg_match('/^[0-9a-zA-Z\xe0-\xef\x80-\xbf._-]+\s*/', $POST['p_street'])){
        return false;
    }
    return true;
}
function validate_patient_barangay($POST){
    if(!isset($POST['p_barangay'])){
        return false;
    }
    else if(!preg_match('/^[0-9a-zA-Z\xe0-\xef\x80-\xbf._-]+\s*/', $POST['p_barangay'])){
        return false;
    }
    return true;
}
function validate_patient_postal($POST){
    if(!isset($POST['p_postal'])){
        return false;
    }else if($POST['p_postal'] == 0){
        return false;
    }
    return true;
}
function validate_add_patient_info($POST){
    if(!validate_patient_firstname($POST) || !validate_patient_middlename($POST) || !validate_patient_lastname($POST) || !validate_patient_place_of_birth($POST) || !validate_patient_street($POST) || !validate_patient_barangay($POST) || !validate_patient_postal($POST)){
        return false;
     }
    return true;
}

// Validate Relative Information
function validate_relative_firstname($POST){
    if(!isset($POST['r_firstname'])){
        return false;
    }else if(strlen(trim($POST['r_firstname']))<1){
        return false;
    }
    else if(!preg_match("/^[a-zA-z]*$/", $POST['r_firstname'])){
        return false;
    }
    return true;
}
function validate_relative_middlename($POST){
    if(!isset($POST['r_middlename'])){
        return false;
    }else if(strlen(trim($POST['r_middlename']))<1){
        return false;
    }
    else if(!preg_match("/^[a-zA-z]*$/", $POST['r_middlename'])){
        return false;
    }
    return true;
}
function validate_relative_lastname($POST){
    if(!isset($POST['r_lastname'])){
        return false;
    }else if(strlen(trim($POST['r_lastname']))<1){
        return false;
    }
    else if(!preg_match("/^[a-zA-z]*$/", $POST['r_lastname'])){
        return false;
    }
    return true;
}
function validate_relative_place_birth($POST){
    if(!isset($POST['r_place_birth'])){
        return false;
    }
    else if(!preg_match('/^[0-9a-zA-Z\xe0-\xef\x80-\xbf._-]+\s*/', $POST['r_place_birth'])){
        return false;
    }
    return true;
}
function validate_relative_street($POST){
    if(!isset($POST['r_street'])){
        return false;
    }
    else if(!preg_match('/^[0-9a-zA-Z\xe0-\xef\x80-\xbf._-]+\s*/', $POST['r_street'])){
        return false;
    }
    return true;
}
function validate_relative_barangay($POST){
    if(!isset($POST['r_barangay'])){
        return false;
    }
    else if(!preg_match('/^[0-9a-zA-Z\xe0-\xef\x80-\xbf._-]+\s*/', $POST['r_barangay'])){
        return false;
    }
    return true;
}
function validate_relative_postal($POST){
    if(!isset($POST['p_postal'])){
        return false;
    }else if($POST['p_postal'] == 0){
        return false;
    }
    return true;
}
function validate_add_relative_info($POST){
    if(!validate_relative_firstname($POST) || !validate_relative_middlename($POST) || !validate_relative_lastname($POST) || !validate_relative_place_birth($POST) || !validate_relative_street($POST) || !validate_relative_barangay($POST) || !validate_relative_postal($POST) || !validate_email($POST)){
        return false;
     }
    return true;
}

function validate_appointment_date($POST){
    if(!isset($POST['date'])){
        return false;
    }else if($POST['date'] == date("Y-m-d")){
        return false;
    }
    else if($POST['date'] < date("Y-m-d")){
        return false;
    }
    else if(date('l', strtotime($_POST['date'])) == "Sunday"){
        return false;
    }
    return true;
}

function validate_appointment_time($POST){
    $start_time = strtotime('9am');
    $end_time = strtotime('9pm');
    if(!isset($POST['time'])){
        return false;
    }else if($POST['time'] > date("H:i:s", $end_time)){
        return false;
    }
    else if($POST['time'] < date("H:i:s", $start_time)){
        return false;
    }
    return true;
}

function validate_appointment_others($POST){
    if(!preg_match('/^\s*$/', $POST['others'])){
        return false;
    }
    return true;
}

function validate_email_fully($POST){
    // Remove all illegal characters from email
    $email = filter_var($POST['email'], FILTER_SANITIZE_EMAIL);
    $users = new Users();

    // Validate e-mail
    if(!isset($email)){
        return false;
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    } else if($users->check_for_duplicate_email($email)){
        return false;
    }
    return true;
    
}

function validate_password($POST){
    if(!isset($POST['password'])){
        return false;
    }else if(strlen($POST['password']) < 8 ){
        return false;
    }else if(strlen($POST['password']) > 20 ){
        return false;
    }
    else if(!preg_match("#[0-9]+#", $POST['password'])){
        return false;
    }
    else if(!preg_match("#[A-Z]+#", $POST['password'])){
        return false;
    }
    else if(!preg_match("#[a-z]+#", $POST['password'])){
        return false;
    }
    return true;
}

function validate_current_password($POST){
    if(!isset($POST['current-password'])){
        return false;
    }
    return true;
}

function validate_confirm_password($POST){
    if(!isset($POST['cpassword'])){
        return false;
    }
    return true;
}

function validate_phone($POST){
    if(!isset($POST['phone'])){
        return false;
    }else if(strlen(trim($POST['phone'])) < 11){
        return false;
    }
    else if(!preg_match("/^[0-9]+$/", $POST['phone'])){
        return false;
    }
    return true;
}

function validate_address($POST){
    if(!isset($POST['address'])){
        return false;
    }
    else if(!preg_match('/^[0-9a-zA-Z\xe0-\xef\x80-\xbf._-]+\s*/', $POST['address'])){
        return false;
    }
    return true;
}

function validate_degree($POST){
    if(!isset($POST['degree'])){
        return false;
    }
    else if(!preg_match('/^[0-9a-zA-Z\xe0-\xef\x80-\xbf._-]+\s*/', $POST['degree'])){
        return false;
    }
    return true;
}

function validate_position($POST){
    if(!isset($POST['position'])){
        return false;
    }
    else if(!preg_match('/^[0-9a-zA-Z\xe0-\xef\x80-\xbf._-]+\s*/', $POST['position'])){
        return false;
    }
    return true;
}

function validate_add_staff($POST){
    if(!validate_first_name($POST) || !validate_last_name($POST) || !validate_middlename_name($POST) || !validate_address($POST) || !validate_phone($POST) || !validate_degree($POST) || !validate_position($POST) || !validate_email_fully($POST) || !validate_password($POST)){
        return false;
     }
    return true;
}

function validate_change_details($POST){
    if(!validate_first_name($POST) || !validate_last_name($POST) || !validate_middlename_name($POST) || !validate_address($POST) || !validate_phone($POST)){
        return false;
     }
    return true;
}

?>