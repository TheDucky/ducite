<?php

# This file handles various errors and redirects you to a error page if one of the errors below occur!
# More info can be found on the error page or in the ErrorCodes.md file!

require "admin/include/config/app.php";

$file_ini = "$_SERVER[DOCUMENT_ROOT]/admin/include/config/app.ini";
$file_iniConf = "$_SERVER[DOCUMENT_ROOT]/admin/include/config/app_conf.php";
$file_conf = "$_SERVER[DOCUMENT_ROOT]/admin/include/config/app.php";
$file_variables = "$_SERVER[DOCUMENT_ROOT]/admin/include/variables.php";

#Handles Errorcode 1: App ID not found/specified! CRITICAL!
if(isset($app_id) == 0) {
    header("Location: /errors/server-errors-5xx/566.php?error=1", "HTTP/1.1 566 Ducite specified Error");
}

#Handles Errorcode 7: Fresh installation!
if($ini['new'] == "true" /* 1 */) {
    header("Location: /errors/server-errors-5xx/566.php?error=7", "HTTP/1.1 566 Ducite specified Error");
}

#Handles Errorcode 2: App INI not found! CRITICAL!
if(file_exists($file_ini) == false /* 0 */) {
    header("Location: /errors/server-errors-5xx/566.php?error=2", "HTTP/1.1 566 Ducite specified Error");
}

#Handles Errorcode 3: App Conf not found!
if(file_exists($file_iniConf) == false /* 0 */) {
    header("Location: /errors/server-errors-5xx/566.php?error=3", "HTTP/1.1 566 Ducite specified Error");
}

#Handles Errorcode 4: App.php not found! CRITICAL!
if(file_exists($file_conf) == false /* 0 */) {
    header("Location: /errors/server-errors-5xx/566.php?error=4", "HTTP/1.1 566 Ducite specified Error");
}

#Handles Errorcode 5: Variables.php not found! CRITICAL for webform creation
if(file_exists($file_variables) == false /* 0 */) {
    header("Location: /errors/server-errors-5xx/566.php?error=5", "HTTP/1.1 566 Ducite specified Error");
};
?>