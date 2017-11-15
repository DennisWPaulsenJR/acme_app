<?php

/* 
 * create a model for insertion of new categories into the db
 */

//create function to insert new categories into the database
                function newCategory($categoryName){
//create a connection object using the acme connection function
                    $db = acmeConnection();
                    $sql = 'inser into categories (categoryName)'
                            . ' values (:categoryName)';
//create  a prepared statement witht the actual values in the variables
                    $stmt = $db->prepare($sql);
//actual values in the variables and data types
                    $stmt->bindvalue(':categoryName', $categoryName, PDO::param_str);
//test statement, find rows changed
                    $rowsChanged = $stmt->rowCount();
//close the db
                    $stmt->closeCursor();
//return the count of the rows changed
                    return $rowsChanged;
                }