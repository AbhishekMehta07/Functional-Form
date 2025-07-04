PHP CRUD Application with MySQL
A simple Create, Read, Update, Delete (CRUD) web application built with PHP and MySQL, featuring a dark-themed Bootstrap UI.

Features
Create: Add new records (name, email, phone number).

Read: View all records in a paginated table.

Update: Edit existing records.

Delete: Remove records (confirmation missing).

Search: Filter records by name.

Responsive Design: Works on mobile and desktop.


Technologies Used
Frontend: Bootstrap 5, CSS3

Backend: PHP, MySQL

Server: Apache/Nginx (XAMPP/WAMP compatible)

Installation
Prerequisites:

PHP (≥7.4)

MySQL (≥5.7)

Web server (Apache/Nginx)

Setup:

bash
git clone https://github.com/yourusername/php-crud-app.git
cd php-crud-app
Database Configuration:

Import database.sql (not provided; create a table with columns id, name, email, number).

Update credentials in connect.php:

php
private $host = "localhost";
private $username = "root";
private $password = "yourpassword";  // Change this
private $database = "datastorage";
private $port = 3307;  // Adjust if needed
Run:

Place the project in your web server's root (e.g., htdocs for XAMPP).

Access via http://localhost/php-crud-app.

Security Notes
⚠️ This project is for learning purposes only. It has critical vulnerabilities:

SQL Injection: Uses raw user input in queries.

No Authentication: Anyone can modify data.

For production:

Use prepared statements (mysqli_prepare).

Implement login/logout (e.g., PHP sessions).

Roadmap
Add delete confirmation (confirm.php).

Implement pagination.

Add user authentication.
