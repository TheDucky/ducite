
<?php

$dbServername = "localhost";
$dbUsername = "";
$dbpassword = "";
$dbname = "ducite";

$conn = mysqli_connect($dbServername, $dbUsername, $dbpassword, $dbname);

if (mysqli_connect_error()) {
    die("<link rel='stylesheet' type='text/css' href='/css/index.css'><br><h1>
"
    . "Database Connection failed: " . mysqli_connect_error()) . "</h1>";
    } else {
        echo "<link rel='stylesheet' type='text/css' href='/css/index.css'><br><h1>
Everything Succed!";
    };
?>
