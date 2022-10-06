<?php
$dbHost = 'localhost';
$dbName = 'tiendita';
$dbUser = 'postgres';
$dbPass = 'admin';

try {
    $pdo = new PDO("pgsql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $e) {
    echo $e->getMessage();
}
?>
