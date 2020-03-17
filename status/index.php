<?php
    require "../admin/include/config/app.php";
    require "../check.php";

$web_name = $ini["app_name"]; // Before Version v13022020 v0.2.1 it was called web_name

?>
<html>
    <head>
        <title> <?php echo $web_name ?> | Statuspage</title>
        <link rel="stylesheet" type="text/css" href="/css/index.css">
    </head>

    <body>
        <h1><?php echo $web_name ?>'s Statuspage</h1>

    </body>

</html>