<?php
include "Controller/ProductController.php";

use Controller\ProductController;

// Deklarasikan objek class
$productController = new ProductController;

// Tampilkan hasl kembalian dari method getAllProduct menggunakan echo
echo $productController->getAllProduct(); 