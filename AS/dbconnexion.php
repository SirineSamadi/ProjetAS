<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=coiff', 'root', '');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    echo 'Connected Successfully!';
} catch (PDOException $e) {
    exit('Error Connecting To DataBase');
    echo 'Error found!';
    
}


?>
