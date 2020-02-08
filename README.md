# Ducite
![GitHub contributors](https://img.shields.io/github/contributors/TheDucky/ducite)  ![GitHub repo size](https://img.shields.io/github/repo-size/TheDucky/ducite)  ![GitHub issues](https://img.shields.io/github/issues-raw/TheDucky/ducite)   ![GitHub language count](https://img.shields.io/github/languages/count/TheDucky/ducite)

Ducite is a fast and lightweight Open-Source Project, enabling you to create Databases and Webforms within one Click.





# Features
Currently Ducite allows you to:

**- create Webforms**

## Features we are planning

**- create Webforms online, without going to the source code**

**- create a automated setup**

***- more comming***

## Requirements

We want to mention, that Ducite was only tested on Apache2.4 on a Raspberry Pi. Actually, this is a open-source for the Raspberry Pi, but we don't guarantee that it also works on other OS or Pi Models.

**- PHP 7.3**
**- Apache 2.4**
**- MySQL (known as MariaDB)**

## Installation
(This is a installation guide for the Raspberry Pi 4 using Apache2.4)

## Total Beginners Guide

**If you haven't installed Apache2, PHP 7.3 and MYSQL before, please run this command:**
`sudo apt-get install php7.3 apache2 mysql-server phpmyadmin -y`

Follow all instructions on the screen. If errors occur, please check the command again, otherwise create a new issue.

From now on, follow the "Casual-User Installation Guide".

## Casual-User Installation Guide
Please ensure you have php7.3, apache2 and mysql installed before continuing

First, you need to go to the webroot of your website, you can do this with the `cd` command.

Second, you need to clone this repository with the 
`git clone https://github.com/TheDucky/ducite.git` command.

Then:

`cd ducite`

Maybe you need to configure the `.htaccess` and `.htpasswd` file. It's very important for the security.

***

**Congratulations!** You have installed ducite succesfully!
But we are not ready here.

Next you need to edit the `db.inc.php` file and enter real values there.

`$dbServername`: Please enter the Servername. Usually you can just




***

**Thank you for using Ducite!**
