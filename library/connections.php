<?php

/*
 * database connections
 */


function acmeConnection(){
    $server = "localhost";
    $database = "acme";
    $User = "iClient";
    $password = "S3rv4ntS41nt";
    $dsn = "mysql:host=$server;dbname=$database";
    $options = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

    try {
        $acmelink = new PDO($dsn, $User, $password, $options);
        return $acmelink;
    } catch (PDOException $ex) {
       header('location: ../errordocs/error_page.html');
    }
}

acmeConnection();