<?php
require_once "model/TransactionModel.php";

class TransactionController {
    public function index() {
        // Panggil model untuk mendapatkan data transaksi
        $transactionModel = new TransactionModel();
        $transactions = $transactionModel->getAllTransactions();

        // Panggil view untuk menampilkan halaman transaksi
        require_once "view/transaction.php";
    }
}
?>
