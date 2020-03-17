<?php

    require "../check.php";

    $year = date("Y");



?>

<!DOCTYPE html>

    <html>

    <head>
            <meta charset="UTF-8">
            <title>Ducite Admin Panel</title>
            <link rel="stylesheet" type="text/css" href="/css/ul.css">
            <link rel="stylesheet" type="text/css" href="/css/index.css">
        </head>

        <body>
            <ul>
                <li><a href="admin.php">Admin Panel</a></li>
                <li><a href="creator.php">Create a Webform</a></li>
                <li><a href="manage.php">Manage your Webforms</a></li>
                <li><a href="about.php">About Ducite</a></li>
                <br>
                <br>
                <br>
                <li><a href="#">Server Settings</a></li>
            </ul>
            <?php

            $fulllURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

            if (strpos($fulllURL, "error=noid")) {
                echo "<br><span style='color:red;' class='box'>There was an error: You have no ID in the app ini file!</span>";
                error_log("No ID specified in app.ini!", 2, "$_SERVER[DOCUMENT_ROOT]/logs/error.log");
            }

            if (strpos($fulllURL, "error=noini")) {
                echo "<br><span style='color:red;' class='box'>There was an fatal error: The App INI file could not be found!</span";
                error_log("No App INI found!", 1, "$_SERVER[DOCUMENT_ROOT]/logs/error.log");
            }

            if (strpos($fulllURL, "error=nE")) {
                echo "<br><span style='color:red;' class='box'>There was an error, but we can't give more info about it!</span>";
                error_log("Error occured, but no more information about it!", 2, "$_SERVER[DOCUMENT_ROOT]/logs/error.log");
            }

            ?>

                <div id="ssettings" style="margin-top:120px;">
                    <h2>Server Settings</h2>
                        <p>Configurations server-wide.<br><span style="color:red;">Make sure the entered data is valid and nothing is empty!</span></p>

                        <form style="background-color: rgba(102, 104, 111, 0.2);padding:20px;" action="include/config/app_conf.php" method="POST" id="form" class="box">
                                <p>The name of your Website</p>
                                <input class="input" type="text" name="app_name" placeholder="The name of your website">
                                    <br><br>
                                <p>The name of your Company/Project/Website</p>
                                <input class="input" type="text" name="com_name" placeholder="Your 'Companies'/Organisations/Websites/Projects name">
                                    <br><br>
                                <p>When did you started with your Company/...?</p>
                                <input class="input" type="number" min="1900" max="<?php  echo $year; ?>" name="s_year" placeholder="2016">
                                    <br><br>
                                <p>Please enter again the username, password and database for ducite!</p>
                                    <p>Database Username</p>
                                <input class="input" type="text" name="db_username" placeholder="Username">
                                    <br><br>
                                    <p>You can enter your password here, we encode it for you into base64</p>
                                <input class="input" type="password" name="db_password" placeholder="your password">
                                    <br><br>
                                    <p>Database host</p>
                                <input class="input" type="text" name="db_host" placeholder="example: localhost">
                                    <br><br>
                                    <p>Database that Ducite should use</p>
                                <input class="input" type="text" name="db" placeholder="example: ducite">
                                    <br><br>
                                <button class="button" type="submit" name="submit">Apply!</button>

                        </form>
                </div>
                <br><br><br><br>

        </body>
</html>