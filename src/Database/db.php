<?php

try {
    $db = new mysqli("mysql:host=localhost;port=3306;dbname=OwaspECommerce", "root", "root");
} 
catch (ErrorException $e) {
    echo $e;
}