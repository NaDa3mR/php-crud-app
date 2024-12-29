# php-crud-app
-This is a simple CRUD (Create, Read, Update, Delete) web application built with **PHP**, **MySQL**, and **Bootstrap**. It provides a user-friendly interface for managing records stored in a MySQL database.
**Import the database**:
   - Open your MySQL management tool (e.g., phpMyAdmin).
   - Create a new database (e.g., `php_crud`).
   - Import the `database.sql` file provided in the project.

**Configure the database connection**:
   - Open `Database.php` (or your database configuration file).
   - Update the credentials for your MySQL database:
     ```php
     <?php
     namespace App;

    class Database{

    private $dbconn;

    public function __construct()
    {
        $this->dbconn = mysqli_connect("localhost", "root", "", "php_crud");
    }
    }
     ?>
    ```
 **Run the application using the PHP built-in server**:
   - Start the PHP development server from your project directory:
     ```bash
     php -S localhost:8080 -t public
     ```
   - Open your browser and navigate to:
     ```
     http://localhost:8080/
     ```

## Usage

1. Access the application in your browser.
2. Use the form to add new records.
3. View contacts' records displayed in a table.
4. Edit or delete records as needed.

## Technologies Used

- **PHP**: Backend logic for CRUD operations.
- **MySQL**: Database for storing records.
- **Bootstrap**: Frontend framework for responsive design.

## Acknowledgments

- **Bootstrap** for the UI framework.
- PHP and MySQL for the core functionality.
- Any tutorials or resources you used for inspiration.


