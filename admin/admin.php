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
                <li><a href="#">General Settings</a></li>
            </ul>

        

                <div id="gsettings">

                    <h2>General Settings</h2>
                        <p>Welcome, here you can change the general settings.</p>
                        <p style="color:red;">Please fill out everything correctly, otherwise it could cause lots of errors.</p>
                        <p>You should use the same database as used in /includes/db.inc.php!</p>
                        <form style="background-color: rgba(102, 104, 111, 0.2);padding:20px;" action="include/changeconnect.inc.php" method="POST" id="form" class="box">
                            

                                <input class ="input" type="text" name="admin_username" placeholder="The Admins Username">
                                    <br><br>
                                <input class="input" type="password" name="admin_password" placeholder="ultra secret password">
                                    </br><br>
                                <input class="input" type="text" name="database" placeholder="ducite">
                                    <br><br>
                                <button class="button" type="submit" name="submit">Apply Changes!</button>
                        </form>
                </div>

        </body>
</html>