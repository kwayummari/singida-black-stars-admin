<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'u750269652_pandadigital');
define('DB_PASSWORD', 'PandaDigital.2020');
define('DB_NAME', 'u750269652_pandadigital');
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

