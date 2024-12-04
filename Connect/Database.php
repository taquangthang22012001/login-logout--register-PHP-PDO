<?php
$servername = "localhost:3307";
$username = "root";
$password = "";

try {
  $pdo = new PDO("mysql:host=$servername;dbname=todolist;charset=utf8", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {

}