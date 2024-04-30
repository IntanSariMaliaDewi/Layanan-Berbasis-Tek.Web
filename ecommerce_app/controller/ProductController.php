<?php
require_once "model/ProductModel.php";

class ProductController {
    public function index() {
        // Panggil model untuk mendapatkan data produk
        $productModel = new ProductModel();
        $products = $productModel->getAllProducts();

        // Panggil view untuk menampilkan halaman produk
        require_once "view/product.php";
    }
}
?>
