<?php

require "../admin/include/config/app.php";
require "../check.php";



$conn = mysqli_connect($db_host, $db_username, base64_decode($db_password), $db);

if (mysqli_connect_error()) {
    die("<link rel='stylesheet' type='text/css' href='/css/index.css'><br><h1>\n"
     . "Database Connection failed: " . mysqli_connect_error()) . "</h1>";
}

else {

echo "<link rel='stylesheet' type='text/css' href='/css/index.css'><br><h1>\nEverything Succed!";
};
?>