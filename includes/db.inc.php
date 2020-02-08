<?php

$dbServername = "localhost";
$dbUsername = ""; /* Insert your MySQL Username here */
$dbPassword = "";  /* And insert here your password, should be clear, huh?*/
$dbName = ""; /* As well the database*/

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

if (mysqli_connect_error()) {
    die("Database Connection failed: " . mysqli_connect_error());
}

else {

echo "Everything Succed!";
};
?>