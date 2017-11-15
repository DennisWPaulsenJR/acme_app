<?php

/*
 * 
 * account controller
 *
 */

// get the database connection file
require_once '../library/connections.php';
// get the accounts-model.php to getCategories
require_once '../model/acme-model.php';
// get the accounts-model.php to regClient(register a new account)
require_once '../model/accounts-model.php';
// get the functions.php file to checkEmail and checkPassword
require_once '../library/functions.php';



$action = filter_input(INPUT_POST, 'action');
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
}


switch ($action) {

    case 'register':


        //filter and store the data
        $ClientFirstName = filter_input(INPUT_POST, 'ClientFirstName', 
                FILTER_SANITIZE_STRING);
        $ClientLastName = filter_input(INPUT_POST, 'ClientLastName', 
                FILTER_SANITIZE_STRING);
        $ClientEmail = filter_input(INPUT_POST, 'ClientEmail', 
                FILTER_SANITIZE_EMAIL);
        $ClientPassword = filter_input(INPUT_POST, 'ClientPassword', 
                FILTER_SANITIZE_STRING);

        $ClientEmail = checkEmail($ClientEmail);
     //   $checkPassword = checkPassword($ClientPassword);
        
        
        
        //check for missing data
        if (empty($ClientFirstName) || empty($ClientLastName) || empty($ClientEmail) 
                || empty($ClientPassword)) {
            $message = '<p class="notice"> * please provide valid information for all fields.</p>';
            include '../view/registration.php';
            exit;
        }
        //send the data to the model
        $regOutcome = regClient($ClientFirstName, $ClientLastName, $ClientEmail, 
                $ClientPassword);

        // check and report the result
        if ($regOutcome === 1) {
            $message = "<p>thanks for registering $ClientFirstName, please use Your 
           email and password to login.</p>";
            include '../view/registration.php';
            exit;
        } else {
            $message = "<p>sorry $ClientFirstName, but the registration failed,
               so please try again.</p>";
            include '../view/registration.php';
            exit;
        }
break;
        
    case 'registration':
            include '../view/registration.php';
        
break;
    
    case 'login':
        
        $ClientEmail = filter_input(INPUT_POST, 'ClientEmail', 
                FILTER_SANITIZE_EMAIL);
        $ClientPassword = filter_input(INPUT_POST, 'ClientPassword', 
                FILTER_SANITIZE_STRING);
        
        
        $ClientEmail = checkEmail($ClientEmail);
 //       $checkPassword = checkPassword($ClientPassword);
        
        if(empty($ClientEmail) 
                || empty($ClientPassword)) {
            $message = '<p class="notice"> * please provide valid information for all fields.</p>';
            include '../view/login.php';
            exit;
        } else {
            
        }
        
break;

    default:
        include '../view/login.php';
        
}

