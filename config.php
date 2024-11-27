<?php
session_start();
$servername="localhost";
$username="root";
$database="portfolio";
$password="";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // echo "connection established";
    }catch(PDOException $e) {
echo "Connection failed" . $e->getMessage();
}
