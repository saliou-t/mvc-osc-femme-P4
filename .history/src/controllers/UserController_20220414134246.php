<?php
namespace src\controller;
use libs\system\Controller;

class UseController extends Controller{

    public function add(){
        return $this->view->load("users/register");
    }

    public function login(){
        return $this->view->load("users/login");
    }
}