<?php

ob_start(); // Turns on Output Buffering - Waiting on all the content on the page to load before output
session_start(); // Help to tell you weather user is logged in or not

date_default_timezone_set("Australia/Perth"); // Setting default timezone

try{
    $con  = new PDO("mysql:dbname=sankflix;host=localhost", "root", ""); // PDO = PHP Data Object
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING); // Setting error reporting on database
}
catch (PDOException $e){
    exit("Connection failed: " . $e->getMessage());
}
?>
