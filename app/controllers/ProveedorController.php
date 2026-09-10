<?php

require_once __DIR__ . "../../models/Proveedor.php";

class ProveedorController
{
    public function index()
    {
        $proveedor = new Proveedor();

        $proveedores = $proveedor->getAll();

        require_once __DIR__ . "/../views/proveedor/index.php";
    }
}