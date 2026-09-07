<?php
require_once __DIR__ . '/../models/Cliente.php';

class ClientesController {
    public function index() {
        $clienteModel = new Cliente();
        $clientes = $clienteModel->getAll();

        require_once __DIR__ . '/../views/Cliente/index.php';
    }
}