<?php

class UsuarioController extends ControllerBase {
    public function indexAction(){
        echo "metodo principal do controller";
    }

    public function loginAction(){
        echo "pagina de login do usuario";
    }

    public function registroAction(){
        echo "pagina registro ";
    }

    public function perfilAction(){
        echo "pagina perfil usuario";
    }
}