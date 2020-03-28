<?php

# Let's you read from the file
$ini = parse_ini_file("app.ini");

###################################
#          Display File           #
# Reads different content from the INI file
$app_name = $ini['app_name'];
$com_name = $ini['com_name'];
$app_id   = $ini['app_id'];

$db_host  = $ini['db_host'];
$db_username = $ini['db_username'];
$db_password = base64_decode($ini['db_password']);
$db = $ini['db'];

$s_year = $ini['start_year'];

$new = $ini['new'];
 
?>