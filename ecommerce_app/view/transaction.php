<?php
class Transaction {
    public $id;
    public $product_id;
    public $quantity;
    public $total;
    public $date;

    public function __construct($id, $product_id, $quantity, $total, $date) {
        $this->id = $id;
        $this->product_id = $product_id;
        $this->quantity = $quantity;
        $this->total = $total;
        $this->date = $date;
    }
}
?>
