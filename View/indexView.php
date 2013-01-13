<?php

    class indexView{
    
        function __construct(){

            // load Smarty library
            require('C:/xampp/htdocs/MVC/libs/smarty/libs/Smarty.class.php');

            $smarty = new Smarty;

            $smarty->template_dir = 'C:/xampp/htdocs/MVC/templates';
            $smarty->config_dir = 'C:/xampp/htdocs/MVC/config';
            $smarty->cache_dir = 'C:/xampp/htdocs/MVC/cache';
            $smarty->compile_dir = 'C:/xampp/htdocs/MVC/templates_c';
            
            
            $smarty->display('login.tpl');
            
        }

    }

?>