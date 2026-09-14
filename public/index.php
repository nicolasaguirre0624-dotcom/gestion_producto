<?php
require_once __DIR__ . "/../app/controllers/ProductoController.php";
require_once __DIR__ . '/../app/controllers/ClientesController.php';
require_once __DIR__ . '/../app/controllers/ProveedorController.php';
require_once __DIR__ . '/../app/controllers/CategoriaController.php';

$productoController = new ProductoController();
$productoController->index();

$clientesController = new ClientesController();
$clientesController->index();

$proveedoresController = new ProveedoresController();
$proveedoresController->index();

$categoriaController = new CategoriaController();
$categoriaController->index();