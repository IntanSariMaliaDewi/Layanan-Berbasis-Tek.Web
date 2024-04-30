<?php
require_once "model/SupplierModel.php";

class SupplierController {
    public function index() {
        // Panggil model untuk mendapatkan data supplier
        $supplierModel = new SupplierModel();
        $suppliers = $supplierModel->getAllSuppliers();

        // Panggil view untuk menampilkan halaman supplier
        require_once "view/supplier.php";
    }
}
?>
