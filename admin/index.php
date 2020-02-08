<!DOCTYPE html>

    <html>

        <head>

            <title>Admin Panel</title>
            <link rel="stylesheet" type="text/css" href="/css/index.css">
            <meta property="author" content="TheDucky">
        </head>

        <body>

            <h1>Ducite Admin Panel SETUP</h1>

                <p>We need you to fill out some boxes below, for the integration with this website to the Database</p>

                <form class="box" action="includes/setup.php" method="POST">

                    <input type="text" name="server" placeholder="Please enter here, on what server your MySQL Database is, for default it is 'localhost'">
                        <br>
                    <input type="text" name="username" placeholder="Please enter your MySQL username here">
                        <br>
                    <input type="text" name="password" placeholder="Your secret password here">
                        <br>
                    <input type="text" name="dbase" placeholder="The Name of a existing database">

                    <button type="submit" name="submit">
        </body>

    </html>