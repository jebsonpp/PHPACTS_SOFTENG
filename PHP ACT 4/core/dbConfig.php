<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "carrental2";
$dsn = "mysql:host=$host;dbname=$dbname";

$pdo = new PDO($dsn, $user, $password);
?>