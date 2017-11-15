<?php

/*
 * 
 * product controller
 *
 */

// get the database connection file
require_once '../library/connections.php';
// get the acme model for use as needed
require_once '../model/acme-model.php';
// get the accounts model
require_once '../model/categories-model.php';

//create a products array
$products = getProducts();
echo products;
//var_dump($categories);
//exit;
// Build a select optionst using the $categories array
$selList = '<select>';
foreach ($categories as $category) {
    $selList .= "<option><a href='/acme/view/index.php?action=$category[categoryName]' "
            . "title='View our $category[categoryName] product option'>"
            . "$category[categoryName]</a></option>";
}
$selList .= '</select>';



$action = filter_input(INPUT_POST, 'action');
if ($action == null) {
    $action = filter_input(INPUT_GET, 'action');
}


switch ($action) {

    case 'newCategory':


        //filter and stor the data
        $newCategory = filter_input(INPUT_POST, 'categoryName');


        //check for missing data
        if (empty($categoryName){
            $message = '<p>please provide information for all empty form fields.</p>';
            include '../view/addCategory.php';
            exit;
        }
        //send the data to the model
        $regOutcome = regCoptionent($CoptionentFirstName, $CoptionentLastName, $CoptionentEmail, $CoptionentPassword);

        // check and report the result
        if ($regOutcome === 1) {
            $message = "<p>thanks for registering $CoptionentFirstName, please use Your 
           email and password to login.</p>";
            include '../view/registration.php';
            exit;
        } else {
            $message = "<p>sorry $CoptionentFirstName, but the registration failed,
               so please try again.</p>";
            include '../view/registration.php';
            exit;
        }


        break;

    default:
}
