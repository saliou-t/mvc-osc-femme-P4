<?php
namespace src\controller;
use libs\system\Controller;

class EntrepriseController extends Controller{
    public function index(){
        return $this->view()->load("entreprise/index");
    }

    public function add(){
        return $this->view->load("entrerpise/new");
    }
    
}
?>