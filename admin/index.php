<?php

    include_once "include/admin.inc.php";
    session_start();

?>

<!DOCTYPE html>

    <html>

    <head>
            <meta charset="UTF-8">
            <title>Ducite Admin Panel</title>
            <link rel="stylesheet" type="text/css" href="css/index.css">
            <link rel="stylesheet" type="text/css" href="/css/ul.css">
            <link rel="stylesheet" type="text/css" href="/css/index.css">
        </head>

        <body>
            <ul>
                <li><a href="admin.php">Admin Panel</a></li>
                <li><a href="creator.php">Create a Webform</a></li>
                <li><a href="manage.php">Manage your Webforms</a></li>
                <li><a href="about.php">About Ducite</a></li>
            </ul>
            <div id="begin" class="box" style="margin-top:20px;">
                <h1>Welcome to Ducite</h1>
                    <p>So, welcome to Ducite. As you read or maybe not, Ducite is a fast, lightweight and Open-Source Form Builder.</p>
                    <p>If you followed the automated setup ("setup/total-beginners.sh"), then PHP 7.3, Apache2, phpmyadmin and mySQL is installed for you hopefully.</p>
                        <hr>
                    <h2>1. But for what do I need the Requirements above?</h2>
                        <p><br>Well, <b>PHP7.3 is needed to run PHP Scripts, without it, this Webform Creator tool wouldn't work.</b><br>Apache2 is used as Webserver, it is easy-to-use and very popular.<br>mySQL is used to store your Data, that got submitted in a form, in a database.<br>And the last one, phpmyadmin is optional but very useful if you don't want to see your data from the CLI (Command-Line-Interface).</p>
                        <hr>
                    <h2>2. How can I configure Ducite?</h2>
                        <p>You can configure Ducite firstly with the "total-beginners.sh", but in there are not really configurations just for Ducite.</p>
                        <p><b>Please edit the includes/db.inc.php file to valid values, then go to the index.html and enter values you like to. Then you will see a a error or success message, depending on the db.inc.php file.</b></p>
                        <p>You can also configure Ducite through the <a href="admin.php">Admin Panel</a></p>
                    
                    <p style="color:red;">If you have any questions or you get errors durin the installation or use of Ducite, please write us a email at<br> <a href="mailto:info@duck-developing-studio.ga">info@duck-developing-studio.ga</a><br>! Thank you!</p>
            </div>
        </body>
    </html>