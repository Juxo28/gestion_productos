<?php

require_once __DIR__ . "/../models/Categoria.php";

Class CategoriaController {

    public function index(){
        $categoria = new Categoria();
        $categorias = $categoria->getAll();

        require_once __DIR__ . "/../views/categoria/index.php";
    }
}