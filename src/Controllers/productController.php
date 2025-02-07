<?php

namespace App\Controllers;

use App\Models\productModel;

class ProductController{
    private $productModel;

    public function __construct() {
        $this->productModel = new productModel();
    }

    public function index() {
        $products = $this->productModel->getProducts();
        require __DIR__ . '/../Views/home.php';
    }
    
}