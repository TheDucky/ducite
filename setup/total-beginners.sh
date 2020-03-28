
sudo apt-get install php7.3 apache2 mariadb-server phpmyadmin certbot -y
wait
echo "Please proceed now from the Ducite GitHub Page, the first step is done";
echo "If any errors occured, please open a issue on the Ducite GitHub Page https://github.com/TheDucky/ducite/issues";
echo "**Please enter your password for MySQL below**";
sudo mysql_secure_installation
wait
sudo mysql -u root -p < /var/www/ducite/ducite/setup/total-beginners.sql
wait
echo "Enter your password now. A automated script will follow then.";
