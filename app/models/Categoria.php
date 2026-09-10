<?php
require_once __DIR__ . '/../../config/Database.php';

class Categoria {
    private $connection;

    public function __construct() {
        $database = new Database();
        $this->connection = $database->connect();
    }

    public function obtenerTodo() {
        $sql = "SELECT * FROM Categorias";
        $consulta = $this->connection->query($sql);
        return $consulta->fetchAll(PDO::FETCH_ASSOC);
    }
}