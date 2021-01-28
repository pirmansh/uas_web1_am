<?php

$server = "localhost";
$user = "root";
$password = "p@ssw0rd";
$database = "quiz_pra_uas";

$db = mysqli_connect($server, $user, $password, $database);

global $db;

if( !$db ){
    die("Error database not connected: " . mysqli_connect_error());
}