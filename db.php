<?php

$servername = "sreesql.mysql.database.azure.com";
$username = "sreenivas";
$password = "jade@123";
$db = "apricot-store";

// Create connection
$con = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}


?>
