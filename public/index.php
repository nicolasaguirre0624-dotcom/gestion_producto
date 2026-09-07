<?php
require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . '/../app/controllers/ClientesController.php';
require_once __DIR__ . '/../app/controllers/ProveedorController.php';

$productoController = new ProductoController();
$productoController->index();

$clientesController = new ClientesController();
$clientesController->index();

$proveedoresController = new ProveedoresController();
$proveedoresController->index();