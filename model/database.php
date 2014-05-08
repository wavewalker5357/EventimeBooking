<?php

$dsn = 'mysql:host=localhost:3306;dbname=reservation_sys';
$username = 'ticket_booking';
$password = 'password';

try {
    $db = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    $error_message = $e->getMessage();
    include('../errors/database_error.php');
    exit();
}
?>