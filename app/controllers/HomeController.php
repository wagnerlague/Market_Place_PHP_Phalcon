<?php
class HomeController extends ControllerBase{

    public function indexAction(){

    	$this->assets->addCss("css/bootstrap.css");
    	$this->assets->addJs("js/bootstrap.css");

        $this->view->produtos = Produtos::find();

    }
}