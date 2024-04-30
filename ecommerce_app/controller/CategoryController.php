<?php
require_once "model/CategoryModel.php";

class CategoryController {
    public function index() {
        // Panggil model untuk mendapatkan data kategori
        $categoryModel = new CategoryModel();
        $categories = $categoryModel->getAllCategories();

        // Panggil view untuk menampilkan halaman kategori
        require_once "view/category.php";
    }
}
?>
