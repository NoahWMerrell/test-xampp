## Overview

**Project Title**: Messages (XAMPP Test)

**Project Description**: This project is a basic website that allows for search functionality by utilizing an SQL database and php.

**Project Goals**: To learn how to interface with SQL and php successfully connect them in an environment that can simulate the back end of a website.

## Instructions for Build and Use

Steps to build and/or run the software:

1. Visit the [XAMPP](https://sourceforge.net/projects/xampp/) website, following the instructions for your operating system (Linux, Mac, Windows, etc). Clicking the download button should automatically start the download for your OS.
2. Once finished, run the downloaded installer and follow the instructions. Only Apache, PHP, and MySQL are necessary, everything else is optional.
3. After the installation, you should have created a location for your ```xampp``` folder. Typically, on Windows this is ```C:\xampp``` while on Linux it's ```/opt/lampp```
4. In this directory, you'll find a folder called ```htdocs```, this is where the website is stored. Go into this directory.
5. Replace all the files in ```htdocs``` with the ones provided in this repository.
6. Once finished, in your web browser go to https://localhost/dashboard/.
7. It should say "Welcome to XAMPP". Your almost done, now the SQL database needs to be added to your system.
8. At https://localhost/dashboard/ click on "phpMyAdmin". (Or go to https://localhost/phpmyadmin/)
9. At the top click on "SQL".
10. Here you can run SQL queries. You will need to copy the script in ```test.sql``` contained in the ```sql``` folder in this repository. Paste it into the SQL query on the website.
11. Towards the bottom, click "Go".
12. The script should run successfully, once finished you've successfully set everything up!

Instructions for using the software:

1. Go to https://localhost/test/
2. You will find a list of short messages, such as "Hello world!"
3. You can use the search bar at the top to search and filter the messages.
4. That's it, it's a fairly basic website designed to work with SQL and php!

## Development Environment 

To recreate the development environment, you need the following software and/or libraries with the specified versions:

* [XAMPP](https://sourceforge.net/projects/xampp/)

That's all, XAMPP will take care of other necessary software including MySQL, Apache, and PHP.

## Useful Websites to Learn More

I found these websites useful in developing this software:

* [XAMPP](https://sourceforge.net/projects/xampp/)
* [XAMPP FAQs for Linux](https://www.apachefriends.org/faq_linux.html)
* [XAMPP FAQs for Windows](https://www.apachefriends.org/faq_windows.html)
* [ChatGPT](https://chatgpt.com/) (used to help set up XAMPP and learn php)

## Future Work

The following items I plan to fix, improve, and/or add to this project in the future:

* [ ] Add CSS for a better looking website
* [ ] Create a database with multiple tables containing many attributes and interface with website
* [ ] Apply newly aquired skills for a practical application, particularly with the original project idea (creating a spell list for my custom TTRPG)
