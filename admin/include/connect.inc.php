<?php


/*Be carefully!*/

$dbServername = "localhost";
$dbUsername = ""; 
$dbPassword = base64_decode("SGF2ZBmdW4gd2l0aCBEdWNpdGU=");
$dbName = "ducite";

$conn = mysqli_connect($dbServername, $dbUsername, "bryanb551", $dbName);

if (mysqli_connect_error()) {
    die("<link rel='stylesheet' type='text/css' href='/css/index.css'><br><h1>\n"
     . "Database Connection failed: " . mysqli_connect_error()) . "</h1>";
}

else {

echo "<link rel='stylesheet' type='text/css' href='/css/index.css'><br><h1>\nEverything Succed!";
};
?>