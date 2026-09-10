<?php
require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . "/../app/controllers/ClientesController.php";
require_once __DIR__ . "/../app/controllers/ProveedorController.php";

$productoController = new ProductoController();
$productoController->index();

$clientesController = new ClientesController();
$clientesController->index();

$proveedorController = new ProveedorController();
$proveedorController->index();

