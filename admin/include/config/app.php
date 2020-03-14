<?php

# Let's you read from the file
$ini = parse_ini_file("app.ini");

###################################
#          Display File           #

$app_name = $ini['app_name'];
$com_name = $ini['com_name'];
$app_id   = $ini['app_id'];

$db_host  = $ini['db_host'];
$db_username = $ini['db_username'];
$db_password = base64_decode($ini['db_password']);

$c_year = $ini['c_year'];
$s_year = $ini['s_year'];

?>