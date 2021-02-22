# phpmvc - A Php MVC Toolkit

A Php tool kit for building a web site based on the MVC design pattern. It is codded in Object Oriented Php. This code was design to offer a simple means of getting a workable MVC site going without all the excess baggage found in some (All?) modern Php frameworks.

This is an Open-Source project, see the included MIT License. It is loosely based on Open-source code  Brad Traversy (https://www.traversymedia.com/) designed for his Object Oriented MVC Course through none of Brad's code was copied directly. 

### Tools Used

Only jQuery, Bootstrap and Font-awesome have been used to make the UI more pleasant.

**xampp** release 7.3.27  (https://www.apachefriends.org/index.html) to demo and test this code. It included Php 8.0, Apache & MariaDB.& MariaDB.

### Getting this code to work

**Apache**

It is assumed that you have installed a Php development environment and will place this code is a folder off the Apache document root. If you are using a vhost you will have to adjust. 

**.htaccess** file use Apache rewrite to make REST call function and to control visibility. Look through them!  

***NOTE*** If you do not use **localhost/phpmvc** as you based URL you may need to adjust the .htaccess files.

**MariaDB**

Phpmyadmin is installed with xampp. Use the code in the sample_sql folder to import and a database and a couple of tables. You might need to add a user.

**Php Code**

The **app/config/config.php** containts constants that are used through out the app. You may have to modify them for your environment.

**app/bootstrap.php** registers an autoloader and containts other require statements.






