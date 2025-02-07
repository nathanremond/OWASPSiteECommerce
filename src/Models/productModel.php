<?php

namespace App\Models;

use App\Database\db;
use PDO;

class productModel {
     private $pdo;

    public function __construct() {
        $this->pdo = db::getInstance()->getConnection();
    }

    public function getProducts() {
        $stmt = $this->pdo->prepare('SELECT * FROM product');
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

?>