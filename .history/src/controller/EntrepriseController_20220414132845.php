<?php
namespace src\controller;
use libs\system\Controller;

class RoleController extends Controller{
    public function add(){
        return $this->view->load("role/add");
    }
}
?>