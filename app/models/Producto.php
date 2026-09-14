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
        $sql = "SELECT productos.*, proveedor.nombre AS nombre_proveedor, categorias.nombre AS nombre_categoria
                FROM productos
                LEFT JOIN proveedor ON productos.id_proveedor = proveedor.id
                LEFT JOIN categorias ON productos.id_categoria = categorias.id";
                
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id){
        $sql = "SELECT 
                    productos.id,
                    productos.nombre AS producto_nombre,
                    productos.precio,
                    productos.id_categoria,
                    productos.id_proveedor,
                    proveedor.nombre AS proveedor_nombre,
                    categorias.nombre AS nombre_categoria
                FROM productos 
                INNER JOIN proveedor ON productos.nombre_proveedor = proveedor.nombre
                INNER JOIN categorias ON productos.nombre_categoria = categorias.nombre
                WHERE productos.id = :id";

        $stmt = $this->connection->prepare($sql);
        $stmt->execute([':id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}