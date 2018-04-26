<?php
// CONTROLADORES/PRODUTOS.PHP

if (isset($_GET['acao'])){
    $acao = $_GET;['acao'];

}else{
    $acao = 'index';
}

switch ($acao){

    case 'index';
    $produtos = $crud->getProduto;
    include '../visoes/templates/cabecalho.php';
     include '../visoes/produtos/index.php';
     break;

     case 'show';
     include '../visoes/templates/cabecalho.php';
     include '../visoes/produtos/show.php';
      break;

     case 'inserir';
      echo 'Voce escolheu inserir';
      break;

    default:
        echo 'bla bla';
}