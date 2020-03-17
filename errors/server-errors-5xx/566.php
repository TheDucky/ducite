<?php

    header("HTTP/1.1 566 Ducte specified Error");

?>

<!DOCTYPE html>

    <html>

        <head>
            <meta charset="UTF-8">
            <title>566 Error</title>
            <link rel="stylesheet" type="text/css" href="/css/index.css">
            <!--<link rel="stylesheet" type="text/css" href="/css/ul.css">-->

        </head>

        <body>
            <h1>566 Error - Ducite specified error</h1>
                <p style="margin-bottom: 20px;">Ducite encountered an error and can't or will not continue working until it got fixed!</p>
                <p>Error Message:</p>
                <div class="box">
                    <?php 
                        #full URL, allows to read
                        $fulllURL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

                        #Checks if the URL contains "error=noid", then prints error message
                        if (strpos($fulllURL, "error=1")) {
                            echo "<p><span style='color:red;'>[Error Code: 1] Attention: </span>No App ID was found in the app.ini file!";

                        }

                        if (strpos($fulllURL, "error=2")) {
                            echo "<p><span style='color:red;'>[Error Code: 2] Attention: </span>No App INI file was found! Please download the default file from GitHub again or visit the admin panel</p>";

                        }

                        if (strpos($fulllURL, "error=3")) {
                            echo "<p><span style='color:red;'>[Error Code: 3] Attention: </span>App Conf not found, please redownload from GitHub!</p>";
                        }

                        if (strpos($fulllURL, "error=4")) {
                            echo "<p><span style='color:red;'>[Error Code: 4] Attention: </span>App.php not found, please redownload from GitHub!</p>";
                        }

                        if (strpos($fulllURL, "error=5")) {
                            echo "<p><span style='color:red;'>[Error Code: 5] Attention: </span>Variables.php not found, please redownload from GitHub!</p>";
                        }

                        if (strpos($fulllURL, "error=7")) {
                            echo "<p><span style='color:red;'>[Error Code: 7] Attention: </span>Fresh installation! Please visit the admins page and read the documentation!</p>";
                        }

                        if (strpos($fulllURL, "error=0")) {
                            echo "<p><span style='color:red;'>[Error Code: 0] Attention:</span>Error with no further information. Please read the documentation</p>";
                        } else {
                            echo "<p><span style='color:red;'>[Error Code: 0] Attention:</span>Error with no further information. Please read the documentation</p>";
                        };
                    ?>
                </div>

                <p>When you are the owner or requested the site:</p>

                <ul>
                    <li>Do what the error message tells you</li>
                    <li>Check Ducite Documentation for common troubleshooting</li>
                </ul>

                <p>Press <a onclick="back()">here</a> to go back.</p>

                <script>
                    function back() {
                        window.history.back();
                    }
                </script>
        </body>
    </html>