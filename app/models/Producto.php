<?php

require_once __DIR__ . "/../../config/Database.php";

class Producto {
    private $connection;

    public function __construct()
    {
        $database = new Database();
        $this->connection = $database->connect();
    }

   public function getAll(){
       $sql = "SELECT productos.*, proveedor.nombre AS nombre_proveedor
        FROM productos
        LEFT JOIN proveedor ON productos.id_proveedor = proveedor.id";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}