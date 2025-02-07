<?php
$host = 'localhost';
$dbname = 'OwaspECommerce';
$user = 'root';
$pass = '';
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];
try {
    $db = new mysqli("mysql:host=$host;port=3306;dbname=$dbname;charset=utf8", $user, $pass, $options);
} 
catch (ErrorException $e) {
    echo $e;
}
