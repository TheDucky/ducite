CREATE USER 'ducite'@'localhost' IDENTIFIED BY "password"; /* Please enter a secure password here. You can also replace the Username */
GRANT ALL PRIVILEGES ON *.* TO 'ducite'@'localhost'; /* Replace the Username, if it is not default */
FLUSH PRIVILEGES;

CREATE DATABASE ducite; /* Replace this, if you'd like to */

exit;
