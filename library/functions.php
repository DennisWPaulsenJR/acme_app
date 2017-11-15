<?php

/* 
 *email validation function
 */

function checkEmail($ClientEmail){
    $valEmail = filter_var($ClientEmail, FILTER_VALIDATE_EMAIL);
    return $valEmail;
}

function checkPassword($ClientPassword){
    $pattern='/^(?=.*[[:digit:]])(?=.*[[:punct:]])[[:print:]]{8,}$/';
    return preg_match($pattern, $ClientPassword);
}