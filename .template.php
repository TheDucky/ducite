<!DOCTYPE html>

    <html>

        <head>
            <meta charset="UTF-8">
            <title>Your cool Page</title>
            <meta property="og:title" content="Your Site"> <!--Please change this-->
            <meta property="og:description" content="What makes your site so special? Let your Clients know here!"> <!--Also change this-->
            <link rel="stylesheet" type="text/css" href="css/index.css">
            <link rel="stylesheet" type="text/css" href="css/ul.css">
        </head>

        <body>
            <ul>
                <li><a href="/admin/">Log In</a></li>
            </ul>

            <h1>Your Site</h1>


                <p>You can create your special form below, we suggest changing kinda everything until you like it</p>

                <div class="box" id="form">
                    <form style="background-color: rgba(102, 104, 111, 0.2);" action="includes/form.inc.php" method="POST">
                        <br><br>
                        <input class="input" type="text" name="name" placeholder="Your first Name">
                        <br><br>
                        <input class="input" type="email" name="email" placeholder="youremail@email.com">
                        <br><br>
                        <input class="input" type="text" name="username" placeholder="Username">
                        <br><br>
                        <input class="input" type="password" name="password" placeholder="Your super secret password">
                        <br><br>
                        <input class="input" type="password" name="password" placeholder="Confirm your password">
                        <br>
                        <button class="button" type="submit" name="submit">Send Form</button>
                        
                        <br><br><br><br><br><br><br><br><br><br><br><br>

                    </form>

                
                </div>

                <br><br><br>

                       

        </body>

    </html>
    