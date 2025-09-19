<?php

$host = 'db';
$database = 'app_db';
$username = 'user';
$password = 'password';
$port = 3306;

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$database;charset=utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
    echo "Erro na conexão: " . $e->getMessage();
}


?>