<?php

require_once __DIR__ . "/../models/Clientes.php";

Class ClientesController {

    public function index(){
        $cliente = new Clientes();
        $clientes = $cliente->getAll();

        require_once __DIR__ . "/../views/clientes/index.php";
    }
}