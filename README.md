# phpmvc - A Php MVC Toolkit

A Php tool kit for building a web site based on the MVC design pattern. It is codded in Object Oriented Php. This code was design to offer a simple means of getting a workable MVC site going without all the excess baggage found in some (All?) modern Php frameworks.

This is an Open-Source project, see the included MIT License. It is loosely based on Open-source code  Brad Traversy (https://www.traversymedia.com/) designed for his Object Oriented MVC Course through none of Brad's code was copied directly. 

### Tools Used

**xampp** release 7.3.27  (https://www.apachefriends.org/index.html) to demo and test this code. It included Php 8.0, Apache & MariaDB.& MariaDB.

Only jQuery, Bootstrap and Font-awesome have been used to make the UI more pleasant.

In **app/views/inc/header.php**

```javascript
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" 
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
```

In **app/views/inc/footer.php**

```javascript
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" 
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" 
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
```

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






