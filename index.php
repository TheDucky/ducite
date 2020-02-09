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
                    <form style="background-color: rgba(102, 104, 111, 0.2);" action="includes/form.inc.php" method="POST">
                        <br><br>
                        <input class="input" type="text" name="name" placeholder="Your first Name">
                        <br><br>
                        <input class="input" type="email" name="email" placeholder="youremail@email.com">
                        <br><br>
                        <input class="input" type="text" name="username" placeholder="Username">
                        <br><br>
                        <input class="input" type="password" name="password" placeholder="Your super secret Password">
                        <br><br><br>

                        <button class="button" type="submit" name="submit">Send Form</button>
                        <style>
                        .button {
                            background-color: rgba(102, 104, 111, 0.671);
                            border: solid;
                            color: white;
                            padding: 16px 32px;
                            text-align: center;
                            font-size: 16px;
                            margin: 4px 2px;
                            opacity: 0.6;
                            transition: 0.3s;
                            display: inline-block;
                            text-decoration: none;
                            cursor: pointer;
                            border-radius: 20%
                            }
                          
                        .button:hover {opacity: 1}

                        .input {
                            color:rgb(39, 40, 48);
                            height: 0.75cm;
                            text-align: center;
                            width: 6cm; 
                            border-color: rgba(99, 101, 108, 0.3);
                            background-color: rgba(102, 104, 111, 0.3);
                            opacity: 1;
                            }
                            
                        .input:hover {

                            opacity: 0.6; 
                            transition: 0.3s; 
                        }
                        

                          
                        </style>
                        <br><br><br>

                    </form>

                
                </div>
        </body>

    </html>