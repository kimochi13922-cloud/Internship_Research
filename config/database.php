<?php
// config/database.php
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'intern_research';

// Using MySQLi which is available in PHP 5.0+ and much better than the deprecated mysql_*
$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Set charset
$conn->set_charset("utf8");
?>
