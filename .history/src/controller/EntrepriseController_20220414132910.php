<?php
namespace src\controller;
use libs\system\Controller;

class EntrepriseController extends Controller{
    public function add(){
        return $this->view->load("role/add");
    }
    
    public function index(){
        
    }
}
?>