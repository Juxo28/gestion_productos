<?php
require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/ClientesController.php";

$productoController = new ProductoController();
$productoController->index();

$clientesController = new ClientesController();
$clientesController->index();