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
- Preview image files using AJAX.
- Download uploaded files.

**************************
Technologies Used
**************************
- CodeIgniter 3 (PHP Framework)
- MySQL (Database)
- HTML, CSS, JavaScript, Bootstrap (Frontend)
- AJAX for image preview

##########################
Installation & Setup
##########################

**************************
1. Clone the Repository
**************************
.. code-block:: bash

    git clone https://github.com/Shahil74/File_Upload_PHP.git
    cd File_Upload_PHP

**************************
2. Configure Database
**************************
- Create a database in MySQL named `file_example`.
- Import the database file present inside the `database` folder.

**************************
3. Configure CodeIgniter Database Settings
**************************
Edit `application/config/database.php` and update the database settings:

.. code-block:: php

    $db['default'] = array(
        'dsn'   => '',
        'hostname' => 'localhost',
        'username' => 'root',  # Change if needed
        'password' => '',      # Change if needed
        'database' => 'file_example',
        'dbdriver' => 'mysqli',
    );

**************************
4. Run the Project
**************************
- Start your local server (XAMPP, WAMP, etc.).
- Place the project inside the `htdocs` (XAMPP) or `www` (WAMP) folder.
- Open your browser and visit:

.. code-block:: bash

    http://localhost/File_Upload_PHP/

**************************
5. Upload & Manage Files
**************************
- Click "Upload File" to add a new file.
- Uploaded images will be previewed automatically.
- All files can be downloaded from the table.

##########################
License
##########################
This project is open-source and free to use.
