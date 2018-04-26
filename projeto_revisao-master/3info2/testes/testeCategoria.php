<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 01/03/18
 * Time: 16:33
 */
require_once '../app/modelos/CategoriaCrud.php';

$crud = new CategoriaCrud();

$cat = new Categoria(null, 'teste', 'trtrtre');

$categorias = $crud->insertCategoria($cat);

echo $categorias;