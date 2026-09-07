<?php
require_once __DIR__ . '/../models/Proveedor.php';

class ProveedoresController {
    public function index() {
        $proveedorModel = new Proveedor();
        $proveedores = $proveedorModel->getAll();

        require_once __DIR__ . '/../views/proveedor/index.php';
    }
}