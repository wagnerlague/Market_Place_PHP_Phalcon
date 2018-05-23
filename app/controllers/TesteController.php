<?php
//http://meusite.com/controller/action/parametro
class TesteController extends ControllerBase {

    public function indexAction(){
        echo "Ola mundo";
    }

    public function nomeAction(){

        $this->view->dados = Teste::find();
    }
}