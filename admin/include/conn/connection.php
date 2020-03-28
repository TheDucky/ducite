<?php

require "../config/app.php";

$conn = mysqli_connect($db, $db_hostname, $db_username, base64_decode($db_password));

if (mysqli_connect_error()) {
    die("<link rel='stylesheet' type='text/css' href='/css/index.css'><br><h1>\n"
    . "Database Connection failed: " . mysqli_connect_error()) . "</h1>";
    } else {
        echo "<link rel='stylesheet' type='text/css' href='/css/index.css'><br><h1>\nEverything Succed!";
    };
?>