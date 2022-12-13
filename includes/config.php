<?php

// For each session of a user
session_start();

// Variables
$destination = "mysql:host=localhost; dbname=group8db; charset=utf8";
$username = "root";
$password = ""; 

// PDO - PHP Data Objects [Handling connection errors]
// try catch to capture the error incase of unable to establish connection to database 
try {
    $dbh = new PDO($destination, $username, $password);
    // DEBUG
    // foreach($dbh->query('SELECT * from food') as $row) {
    //     print_r($row);
    // }
} catch (PDOException $e) {
    print "Error!: " . $e->getMessage() . "<br/>";
    die();
}