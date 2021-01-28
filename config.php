<?php

$server = "localhost";
$user = "root";
$password = "p@ssw0rd";
$database = "uas_toko_buah";

$db = mysqli_connect($server, $user, $password, $database);

global $db;

if (!$db) {
    die("Error database not connected: " . mysqli_connect_error());
}
