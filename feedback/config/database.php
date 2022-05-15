<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'nasuru');
define('DB_PASS', 'nazru1994');
define('DB_NAME', 'php_course');

// CREATE CONNECTION
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// CHECK CONNECTION
if ($connection->connect_error) {
    die('Connection failed' . $connection->connect_error);
}
