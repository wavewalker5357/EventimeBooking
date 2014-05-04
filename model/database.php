<?php

$dsn = 'mysql:host=localhost:3306;dbname=reservation_sys';
$username = 'root';
$password = '910107';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php');
    exit();
}
?>