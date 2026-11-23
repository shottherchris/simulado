<?php
namespace App;
use PDO;
class Produto{
    public $id;
    public $nome;
    public $descricao;
    public $preco;
    public $quantidade;
    public $categoria;
    public function cadastrar(){
        
        $db = new DataBase('produto');
        $this->id = $db->insert([
            "nome"       => $this->nome,
            "descricao"  => $this->descricao,
            "preco"      => $this->preco,
            "quantidade" => $this->quantidade,
            "categoria"  => $this->categoria
        ]);
        return true;        
    } 
    public function alterar(){
        
        return (new DataBase('produto'))->update("id=".(int)$this->id,[ 
            "nome"       => $this->nome,
            "descricao"  => $this->descricao,
            "preco"      => $this->preco,
            "quantidade" => $this->quantidade,
            "categoria"  => $this->categoria
        ]);       
    } 
    public function excluir(){
        return (new DataBase('produto'))->delete('id='.(int)$this->id);

    }
    public static function listar($where = null, $order = 'id', $limit = null){
        return (new DataBase('produto'))->select($where, $order, $limit)->fetchAll(PDO::FETCH_CLASS, self::class);
    }
    public static function buscarPorId($id){
        return (new DataBase('produto'))->select('id = '.(int)$id)->fetchObject(self::class);
    }
}
