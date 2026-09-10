<?php
require_once __DIR__ . "/../models/Categoria.php";

class CategoriaController {
    private $modelo;

    public function __construct() {
        $this->modelo = new Categoria();
    }

    public function index() {
        $categorias = $this->modelo->obtenerTodo();
        require_once __DIR__ . "/../views/categoria/index.php";
    }
}