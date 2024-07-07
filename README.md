PHP Form with MySQL Integration
This project demonstrates a basic PHP form that interacts with a MySQL database.

Features
Allows users to submit form data (name, email, message).
Saves form submissions to a MySQL database.
Basic validation for form fields.
Installation
Clone the repository:

bash
Copy code
git clone https://github.com/harshitalamba1/php_form_mysql.git
Navigate into the directory:

bash
Copy code
cd php_form_mysql
Import the database schema:

Use phpmyadmin or MySQL command line to import database.sql file.
Configure database connection:

Open config.php file.
Update $server, $username, $password, and $dbname variables with your MySQL database credentials.
Usage
Start your local server:

Ensure PHP is installed and configured.
Start the PHP development server:
bash
Copy code
php -S localhost:8000
Open your web browser:

Go to http://localhost:8000 to view the application.
Submit the form:

Fill in the form fields (name, email, message) and click Submit.
Check the MySQL database to verify the submission.
Technologies Used
PHP
MySQL
Contributing
Fork the repository.
Create your feature branch: git checkout -b feature-branch
Commit your changes: git commit -am 'Add some feature'
Push to the branch: git push origin feature-branch
Submit a pull request.
License
MIT License

