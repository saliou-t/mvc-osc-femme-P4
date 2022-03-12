<?php
    class Autoload{
        static function register(){
            spl_autoload_register(array(__CLASS__, "autoload"));
        }

        static function autoload($class){
            if (file_exists("src/model/".$class.".php")) {                
                require_once "src/model/".$class.".php";
            }
            else if (file_exists("src/controller/".$class.".php")) {
                require_once "src/controller/".$class.".php";
            }
            //les namespaces
            else if (file_exists(str_replace("\\", "/", $class. "php"))) {
                require_once str_replace("\\", "/", $class. "php");
            }
            else {
                echo "lkkl";
            }
        }
    }  
    Autoload::register();
?>