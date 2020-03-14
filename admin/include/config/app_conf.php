<?php

# WRITES INTO THE INI FILE 

    require "app.ini";

$ini = parse_ini_file("app.ini");

###########################################
#              Form Handling              #

$web_name = $_POST['web_name'];
$com_name = $_POST['com_name'];
$app_id   = rand(111111111, 666666666);
$db_username = $_POST['db_username'];
$db_password = base64_encode($_POST['db_password']);


###########################################
#   Content for creating a new INI File   #

# File name. DO NOT CHANGE :)
$file = "app.ini";

# INI Files Data to be written
$data = <<< DATA

[server]

; if you see this comment, then you didn't configured the page within the admin.php file
; For now you see the explanation for each configuration. Also after configuring you'll see the explanation

; your websites name
app_name = "$web_name"
; your companies/organisations name
com_name = "$com_name"
; your app id. Never EVER change this ID, after your created an webform, this will just cause unwanted trouble. You may note down this Number!!!
app_id = $app_id

[database connection]

; this will not be changed
db_driver = mysql
; specifies on what server the database is running. localhost means it is running on the same server as the website runs too
db_host = "localhost"
; database that ducite should use
db_database = "ducite"

; username and password required for auth, password encrypted in base64
db_username = "$db_username"
db_password = "$db_password"
db_prefix = 

[languages]

default_language = "english"
other_language = "german"

DATA;



$handle = fopen($file, "w") or die("Couldn't open the file : " . $file);

    fwrite($handle, $data) or die("Can't write on file : " . $file);

    fclose($handle);

    echo($text);

?>