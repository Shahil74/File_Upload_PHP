###################
File Upload & Management System in CodeIgniter 3
###################

This is a simple file upload and management system built using CodeIgniter 3. It allows users to upload files, store them in a MySQL database, display uploaded files in a table, preview image files, and download them.

*******************
Features
*******************

- Upload files with size restrictions (e.g., max 10MB).
- Store file details (name, type, size) in the database.
- Display uploaded files in a structured table.
- Download uploaded files

**************************
Technologies Used
**************************
- CodeIgniter 3 (PHP Framework)
- MySQL (Database)
- HTML, CSS, JavaScript,Bootstrap (Frontend)

##########################
Installation & Setup
##########################

**************************
1. Clone the Repository
**************************
git clone https://github.com/Shahil74/File_Upload_PHP.git
cd File_Upload_PHP

**************************
2. Configure database
**************************
- Create a Database in MySql name file_example.
- Import the database file present inside the database folder.
 Database Structure
=====================
Create a table named *file* in MySQL:

.. code-block:: sql

    CREATE TABLE uploads (
      id INT AUTO_INCREMENT PRIMARY KEY,
      file_name VARCHAR(255) NOT NULL,
      file_type VARCHAR(50) NOT NULL,
      file_size FLOAT NOT NULL,
      file_data LONGBLOB NOT NULL,
      file_path VARCHAR(255) NOT NULL,
      uploaded_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
    );

Database Configuration
======================
Edit `application/config/database.php` and update the database settings:


.. code-block:: php

    $db['default'] = array(
        'dsn'   => '',
        'hostname' => 'localhost',
        'username' => 'root',  // Change if needed
        'password' => '',      // Change if needed
        'database' => 'file_upload_db',
        'dbdriver' => 'mysqli',
    

