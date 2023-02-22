<?php 

function validate_first_name($POST){
    if(!isset($POST['firstname'])){
        return false;
    }else if(strlen(trim($POST['firstname']))<1){
        return false;
    }
    else if(strlen(trim($POST['firstname'])) > 1  && strlen(trim($$POST['firstname'])) < 255 && !preg_match("/^[a-zA-z]*$/", $POST['firstname'])){
        return false;
    }
    return true;
}

function validate_last_name($POST){
    if(!isset($POST['lastname'])){
        return false;
    }else if(strlen(trim($POST['lastname']))<1){
        return false;
    }
    if(strlen(trim($POST['lastname'])) > 1  && strlen(trim($$POST['lastname'])) < 255 && !preg_match("/^[a-zA-z]*$/", $POST['lastname'])){
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

?>