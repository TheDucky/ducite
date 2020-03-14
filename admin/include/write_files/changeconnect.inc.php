<?php

    require "variables.php";
    

$data_1 = $_POST['admin_username'];
$dbpswd = $_POST['admin_password'];
$dbname = $_POST['database'];

$text = "<link rel='stylesheet' type='text/css' href='/css/index.css'><br><h1>Changed connect.inc.php with the entered values!</h1><br><p>Test the connection <a href='connect.inc.php'>here</a></p>";

$file = "connect.inc.php";

$data = <<< DATA

<?php

\$dbServername = "localhost";
\$dbUsername = "$data_1";
\$dbpassword = "$dbpswd";
\$dbname = "$dbname";

\$conn = mysqli_connect(\$dbServername, \$dbUsername, \$dbpassword, \$dbname);

if (mysqli_connect_error()) {
    die("<link rel='stylesheet' type='text/css' href='/css/index.css'><br><h1>\n"
    . "Database Connection failed: " . mysqli_connect_error()) . "</h1>";
    } else {
        echo "<link rel='stylesheet' type='text/css' href='/css/index.css'><br><h1>\nEverything Succed!";
    };
?>

DATA;

    $handle = fopen($file, "w") or die("Couldn't open the file : " . $file);

    fwrite($handle, $data) or die("Can't write on file : " . $file);

    fclose($handle);

    echo($text);
?>