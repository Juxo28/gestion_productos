<?php
require_once __DIR__ . "/../app/controllers/ProductoController.php";

$productoController = new ProductoController();
$productoController->index();