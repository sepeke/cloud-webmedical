<?php
    $dsn = 'mysql:host=localhost;dbname=althealth_webmedical';
    $username = 'client';
    $password = 'admin';
    
    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database/database_error.php');
        exit();
    }
?>