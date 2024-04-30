<?php
// Routing
if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'category'; // Halaman default
}

// Include controller sesuai halaman yang diminta
require_once "controller/" . ucfirst($page) . "Controller.php";

// Buat objek controller dan panggil method index
$controllerName = ucfirst($page) . "Controller";
$controller = new $controllerName();
$controller->index();
?>
