<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 26/04/18
 * Time: 16:47
 */

require 'BDConection.php';
require 'Produto.php';

class ProdutoCrud
{
    public function __construct()
    {
        $this->conexao = BDConection::getConexao();
    }

    public function getProduto(){

        $sql = "select * from categoria order by nome_categoria";
        $resultado = $this->conexao->query($sql);

        $categorias = $resultado->fetchAll(PDO::FETCH_CLASS,'Categoria', ['id_categoria' , ' nome_categoria', 'descricao_descricao']);

        return $categorias;
    }

    public function getProduto(int $id){

        $sql      = "SELECT * FROM categoria WHERE id_categoria = $id";
        $resultado = $this->conexao->query($sql);
        $categoria  = $resultado->fetch(PDO::FETCH_ASSOC);

        return new Produto ($produto);
    }

    public function insertProduto($produto){

        $sql = "INSERT INTO produto (nome_categoria, descricao_categoria') VALUES ( '".$categoria->getNome()."', '".$categoria->getDescricao()."');";
        echo $sql;
        try{
            $res = $this->conexao->exec($sql);
            return $res;

        }catch (PDOException $e){
            return $e->getMessage();
        }
    }
    public function updateProduto($produto){

        $consulta="UPDATE categoria 
                  SET nome_categoria = $categoria->getNome(),
                  descricao_categoria = $categoria->getDescricao()
                  WHERE id_categoria = $categoria->getId";
    }
}
