<?php

    $file = "connect.inc.php";
$data = "<?php dbServername = " . "'localhost'; " . "dbUsername = " . "'"$_POST["admin_username"];"';";

$handle = fopen($file, "w") or die(echo "Error");

fwrite($handle, $data) or die(echo "Error");

?>