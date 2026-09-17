<?php
require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . '/../app/controllers/ClientesController.php';
require_once __DIR__ . '/../app/controllers/ProveedorController.php';
require_once __DIR__ . '/../app/controllers/CategoriaController.php';

$productoController = new ProductoController();
$productoController->index();

$clienteController = new ClienteController();
$clienteController->index();

$proveedorController = new ProveedorController();
$proveedorController->index();

$categoriaController = new CategoriaController();
$categoriaController->index();