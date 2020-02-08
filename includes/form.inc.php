<?php

include_once "db.inc.php";

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "INSERT INTO users (user_name, user_username, user_email, user_password)
                        VALUES ('$name', '$email', '$username', '$password');";
                        
mysqli_query($conn, $sql);

   header("Location: ../index.php?signup=sucess");

   /* This is still a WIP, please be patient */

?>