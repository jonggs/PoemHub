<?php
$dsn = 'mysql:host=localhost;dbname=poemhubdb';
$username = 'root';
$password = '';
try {
$connection = new PDO($dsn, $username, $password);
} catch(PDOException $e) {

}