# Ducite
![Ducite Logo](https://ducite.ga/ducite-logo.png)

![GitHub contributors](https://img.shields.io/github/contributors/TheDucky/ducite)  ![GitHub repo size](https://img.shields.io/github/repo-size/TheDucky/ducite)  ![GitHub issues](https://img.shields.io/github/issues-raw/TheDucky/ducite)   ![GitHub language count](https://img.shields.io/github/languages/count/TheDucky/ducite)

Ducite is a fast and lightweight Open-Source Project, enabling you to create Databases and Webforms within one Click.





# Features
Currently Ducite allows you to:

**- create Webforms**

**- create a automated setup**

## Features we are planning

**- create Webforms online, without going to the source code**

***- more comming***

## Requirements

We want to mention, that Ducite was only tested on Apache2.4 on a Raspberry Pi. Actually, this is a open-source for the Raspberry Pi, but we don't guarantee that it also works on other OS or Pi Models.

**- PHP 7.3**

**- Apache 2.4**

**- MySQL (known as MariaDB)**

## Installation
(This is a installation guide for Debian 10 Buster (Raspian) using Apache2.4)

## Total Beginners Guide

This guide is for really total beginners. If you aren't a beginner, you have the requirements installed and added a user and database for this project already
Please proceed with the following only, if you have not installed PHP 7.3, Apache2 and MySQL yet.
Otherwise proceed with the "Casual Users Guide".

You can choose between two Options, an manual installation and a automated installation.

If during the Installation you get any errors, please open an issue.
***

### Option 1: Manual Installation

`sudo apt-get install php7.3 apache2 mysql-server phpmyadmin -y`

Follow all instructions on the screen. If errors occur, please check the command again, otherwise create a new issue.
**You can also start the `total-beginners.sh` if you don't want to perform the first step**
You should have created a root user with the mySQL installation.
now type `sudo mysql -p` then enter your password.

Type into the console `CREATE USER 'ducite'@'localhost' IDENTIFIED BY 'password';`
Please replace `ducite` and `password` with the value you like.
Now type `GRANT ALL PRIVILEGES ON *.* TO 'ducite'@'localhost';`
at the end type `FLUSH PRIVILEGES;`

now we are going to setup a database
with this command `CREATE DATABASE ducite`.
You can replace `ducite` with everything else.

Now type `exit`.

For creating a table, please look into `sql/dbc.sql`

### Option 2: Automated Installation

If you want to run a automated installation, please run the script `setup/total-beginners.sh`.
Follow everything on the screen and check for errors and texts, it might be useful.

**To check that everything works fine, we need to configurate Apache2**

***

Go to `/etc/apache2/sites-enabled`.
Open the `000-default.conf` and copy & paste the following:


`<VirtualHost *:80>

	ServerAdmin webadmin@localhost
	DocumentRoot /var/www/your-webroot/ducite
	ServerName localhost

	ErrorDocument 404 /errors/client-errors-4xx/404.html
	ErrorDocument 401 /errors/client-errors-4xx/401.html
	ErrorDocument 500 /errors/server-errors-5xx/500.html

	ErrorLog ${APACHE_LOG_DIR}/error.log
	CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>`

Ensure to change "/var/www/your-webroot/ducite" to an existing folder. **Your folder should be named "`/var/www/ducite/ducite`"**
For now this is enough.
Open a new CLI (Shell) and type `sudo service apache2 restart`.
Hurray, we have configured Apache2 with Ducite.


If an error occured, open an issue!
***

From now on, follow the "Casual-User Installation Guide".

## Casual-User Installation Guide
Please ensure you have php7.3, apache2 and mysql installed before continuing

First, you need to go to the webroot of your website, you can do this with the `cd` command.

Second, you need to clone this repository with the 
`git clone https://github.com/TheDucky/ducite.git` command.

**You skipped the Total Beginners Guide, please ensure you have a Database and a user with that you can access the database and change values.**

Then:

`cd ducite`

Maybe you need to configure the `/admin/.htaccess` and `/admin/.htpasswd` file. It's very important for the security.

***

**Congratulations!** You have installed Ducite succesfully!
But we are not ready here.

### The last things!
Next you need to visit the `/admin/admin.php` in your browser. If you get prompted you enter a password and username and a text named "Admins Only", type in "ducite" and the default password is: "ducite"

Enter now the admins username for your database, the admins password and the ducite database.
Then the entered values are going to be written in a new file.


Congratz! You are now ready-to-use with Ducite!





***

## Optional/Other/FAQ

Here you can find optional things and FAQs.

# Why are there different Versions of Ducite?
Well, we also make updates so we may not loose our files we worked on.
Every important changes will be backuped and may also uploaded to GitHub.
So check out the GitHub branches!

## How can I get help?
You can write us an email: info@duck-developing-studio.ga
or you can create a ticket on GitHub under the Issues tab!

**For more FAQ check out the `FAQ.md` file**

**Thank you for using Ducite!**

***


## References

We used a repository to write the error texts.

Repository:

website-template by **TheDucky**: https://github.com/TheDucky/website-template/tree/master/error-pages/
(the template isn't finished and it won't be finished by TheDucky)
