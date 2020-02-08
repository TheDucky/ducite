<?php 

    $servername = $_POST['name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $dname = $_POST['dbase'];

    $conn = mysqli_connect($servername, $username, $password, $dname);

    if (mysqli_connect_error()) {
        die("Database Connection failed: " . mysqli_connect_error());
    }

    else {

    echo "Test completed! You can now delete the setup.php and index.php from the admin folder!";
    fopen("duck.txt", "w");
    fwrite("Success!");
};
?>