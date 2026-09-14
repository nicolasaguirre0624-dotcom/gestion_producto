<?php
require_once __DIR__ . "/../models/Categoria.php";

class CategoriaController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Categoria();
    }

   public function index() {
    $categoriaModel = new Categoria();
    $categorias = $categoriaModel->obtenerTodo();

    require_once __DIR__ . '/../views/categoria/index.php';
}
}