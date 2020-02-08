<!DOCTYPE html>

    <html>

        <head>
            <meta charset="UTF-8">
            <title>Your cool Page</title>
            <meta property="og:title" content="Your Site"> <!--Please change this-->
            <meta property="og:description" content="What makes your site so special? Let your Clients know here!"> <!--Also change this-->
            <link rel="stylesheet" type="text/css" href="css/index.css">
        </head>

        <body>
            <h1>Your Site</h1>

                <p>You can create your special form below, we suggest changing kinda everything until you like it</p>

                <div class="box" id="form">
                    <form action="includes/form.inc.php" method="POST">

                        <input type="text" name="name" placeholder="Your first Name">
                        <br>
                        <input type="email" name="email" placeholder="youremail@email.com">
                        <br>
                        <input type="text" name="username" placeholder="Username">
                        <br>
                        <input type="password" name="password" placeholder="Your super secret Password">
                        <br>

                        <button type="submit" name="submit">Send Form</button>

                    </form>

                
                </div>
        </body>

    </html>