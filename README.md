# Portfolio

This is My Personal Portfolio.

## Installation

There are only few steps to run this website:

1 . Install PHP : Download and install PHP from the official PHP website and installation instructions for your operating system.

2 . Install a Web Server :You may need a web server to run PHP files Apache: Apache HTTP Server like  Nginx, XAMPP,WampServer.

3 . Start Server : Start Apache and MySQL

4 . Navigate to the htdocs Directory : XAMPP serves files from the htdocs directory located within the XAMPP installation directory.Navigate to the htdocs directory. The default location on Windows is typically C:\xampp\htdocs

5. Download the PHP project from GitHub or clone it using Git into the htdocs directory.

6 . Access the Project via Web Browser : Open your web browser and navigate to http://localhost/Portfolio/index.php.



## Step to solve Email Error 

1 . open XAMPP installation Directory.
2 . Go To C:\xampp\php and open php.ini file.
3 . Find [mail function] by pressing ctrl + f.
4 . search and pass following value :
    SMTP = smtp.gmail.com
    smtp_port = 25
    sendmail_from=YOUR_GMAIL
    sendmail_path = "\"C:\xampp\sendmail\sendmail.exe.
    
    then save file.
5 . Now Go To C:\xampp\sendmail\ and open the sendmail.ini file.
6 . Find [sendmail] by pressing ctrl + f.
7 . search and pass following value :
    smtp_server = smtp.gmail.com
    smtp_port = 587
    error_logfile=error.log
    debug_logfile=debug.log
    auth_username=yourgmail@gmail.com
    auth_password=yourpassword
    force_sender=yourgmail@gmail.com

    then save file


    And HopeFully Problem Solved.
## License

Bhautik
