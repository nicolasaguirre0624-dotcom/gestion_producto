<?php

require_once __DIR__ . "/../models/Producto.php";

Class ProductoController {

    public function index(){
        $producto = new Producto();
        $productos = $producto->getAll();

        require_once __DIR__ . "/../views/producto/index.php";
    }
    
}
