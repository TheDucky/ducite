<?php
    require "admin/include/config/app.php";

$s_year = $ini['s_year'];
$c_year = $ini['c_year'];

?>

<html>
    <body>

        <style>
        body {
            background-image: url("/images/ao.gif");
            color: white;
            font-family: Arial;
            text-align: center;
                }
            

        .footer {
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
            height: 25px;
            background-color: rgb(0, 0, 0);
            opacity: 0.6;
            color: white;
            text-align: center;
                }

        </style>

        <footer class="footer">
            &copy;
        </footer>
    </body>
</html>