<!DOCTYPE html>

    <html>

        <head>

            <title>Admin Panel</title>
            <link rel="stylesheet" type="text/css" href="/css/index.css">
            <link rel="stylesheet" type="text/css" href="css/index.css">
            <meta property="author" content="TheDucky">
        </head>

        <body>

            <h1>Ducite Admin Panel SETUP</h1>

                <p>We need you to fill out some boxes below, for the integration with this website to the Database</p>
                <p><b>It is very important, that you fill in the right information<b></p>

                <form class="box" action="includes/setup.php" method="POST">

                    <input type="text" name="server" placeholder="Please enter here, on what server your MySQL Database is, for default it is 'localhost'" style="width:490px;margin-top:20px;">
                        <br><br>
                    <input type="text" name="username" placeholder="Please enter your MySQL username here" style="width:250px;">
                        <br><br>
                    <input type="password" name="password" placeholder="Your secret password here" style="width:200px;">
                        <br><br>
                    <input type="text" name="dbase" placeholder="The Name of a existing database" style="width:250px;">
                        <br><br>
                    <button type="submit" name="submit" style="margin-bottom:20px;" class="button">Finish</button>
        </body>

    </html>