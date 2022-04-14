<?php
namespace src\controller;
use libs\system\Controller;

class EntrepriseController extends Controller{
    public function index(){
        return $this->view()->load("entreprises/index");
    }

    public function add(){
        return $this->view->load("entrerpises/new");
    }

    public function edit(){
        return $this->view->load("entrerpises/edit");
    }
    
}
?>