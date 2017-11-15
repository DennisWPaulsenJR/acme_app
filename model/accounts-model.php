<?php

/* 
 * accounts model
 */

// insert site Visitor data to database
    function regClient($ClientFirstName, $ClientLastName,
            $ClientEmail, $ClientPassword){
//create a connection object using the acme connection function
                $db = acmeConnection();
                $sql = 'insert into Clients (Client_first_name, Client_last_name,'
                        . 'Client_email, Client_password) values (:firstname,'
                        . ':lastname, :email, :password)';
//the next line creates the prepared statement using the acme connection
                $stmt = $db->prepare($sql);
//statement with the actual values in the variables 
// and tells the database the type of data it is 
                $stmt->bindvalue(':firstname', $ClientFirstName, PDO::PARAM_STR);
                $stmt->bindvalue(':lastname',  $ClientLastName, PDO::PARAM_STR);
                $stmt->bindvalue(':email', $ClientEmail, PDO::PARAM_STR);
                $stmt->bindvalue(':password', $ClientPassword, PDO::PARAM_STR);
                $stmt->execute();
// test statement, find how many rows returned
                $rowsChanged = $stmt->rowCount();
                //close the db
                $stmt->closeCursor();
                
                //return the count of the rows
                return $rowsChanged;
                }

                
