CREATE TABLE users (
    user_id int(11) AUTO_INCREMENT PRIMARY KEY not null,
    user_name varchar(256) not null,
    user_username varchar(256) not null,
    user_email varchar(256) not null,
    user_password varchar(256) not null
);


/*
*       This could be a help for you, we advise you to install phpmyadmin onto your PC/Raspberry or whatever you have.
*       The Interface is much better. For installing type 'sudo apt-get install phpmyadmin -y' and follow the instructions.
*       After you installed phpmyadmin, create a database and go to db.inc.php and edit the values.
*       You can also find a tutorial/wiki on our Github Page!
*
*/