# Public Folder

These are the public facing resources for the web site. Access is managed by an .htaccess file with Apache directives.

The resources are:
* stylesheets (public/css)
* JavaScript (public/js)
* images (public/images)

**index.php** is the root code, it instantiates the core class and requires the bootstrap.php files which handles includes. 

***NOTE:*** If you do not use phpmvc as the root node of your site URL you will need to modify the .htaccess file.
