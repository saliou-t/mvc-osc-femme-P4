<?php
namespace src\controller;
use libs\system\Controller;

class EntrepriseController extends Controller{
    public function index(){
        return $this->view()->load("entreprise/index");
    }

    <?php
    namespace src\controller;
    use libs\system\Controller;
    
    class RoleController extends Controller{
        public function add(){
            return $this->view->load("role/add");
        }
    }
    ?>
    
}
?>