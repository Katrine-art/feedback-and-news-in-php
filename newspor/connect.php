<?php
$servername = "localhost"; 
$username = "ck22962_new"; 
$password = "3qABrTWy"; 
$dbname = "ck22962_new"; 


try {

    $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch (PDOException $e) {
    
    echo "Ошибка подключения к базе данных: " . $e->getMessage();
    exit;
}
?>


