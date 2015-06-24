<?php

$host = 'mysql';
$username = 'root';
$password = 'kittinan';
$dbname = 'kittinandb';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    echo "connected";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
