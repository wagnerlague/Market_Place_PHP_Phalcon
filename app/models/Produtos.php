<?php
use Phalcon\Mvc\Model;
class Produtos extends Model
{
    public $id;
    public $nome;
    public $preco;
    public $vendedor;
    public $descricao;
    public $vendido;

    public function initialize(){
        $this->setSource("produtos");
    }
}