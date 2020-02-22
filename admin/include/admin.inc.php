<?php


/*Be carefully!*/

$dbServername = "localhost";
$dbUsername = ""; /* Insert your MySQL Username here */
$dbPassword = base64_decode("SGF2ZBmdW4gd2l0aCBEdWNpdGU=");  /* And insert here your password, should be clear, huh?*/
/* Attention: We suggest encoding your password to base64, because it's much safer! But you can also type it here not decoded. You can use this site: https://cryptii.com/pipes/text-to-base64 */
$dbName = "ducite"; /* As well the database*/

$conn = mysqli_connect($dbServername, $dbUsername, "bryanb551", $dbName);

if (mysqli_connect_error()) {
    die("<link rel='stylesheet' type='text/css' href='/css/index.css'><br><h1>\n"
     . "Database Connection failed: " . mysqli_connect_error()) . "</h1>";
}

else {

echo "<link rel='stylesheet' type='text/css' href='/css/index.css'><br><h1>\nEverything Succed!";
};
?>