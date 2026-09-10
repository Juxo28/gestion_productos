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
    $sql = "SELECT 
        producto.id,
        producto.nombre,
        producto.precio,
        categoria.nombre AS categoria,
        proveedor.nombre AS proveedor
        FROM producto
        INNER JOIN proveedor 
            ON producto.id_proveedor = proveedor.id
        INNER JOIN categoria 
            ON producto.id_categoria = categoria.id";

    $consulta = $this->connection->query($sql);

    return $consulta->fetchAll(PDO::FETCH_ASSOC);
}
    public function getById($id)
{
    $sql = "SELECT * FROM producto WHERE id = $id";

    $consulta = $this->connection->query($sql);

    return $consulta->fetch(PDO::FETCH_ASSOC);
}
}