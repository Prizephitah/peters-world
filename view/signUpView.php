<?php

    class signUpView{
    
        function __construct(){

            // load Smarty library
            require('/home/peter/development/peters-world/libs/smarty/libs/Smarty.class.php');
            
            $smarty = new Smarty;

            $smarty->setTemplateDir('/home/peter/development/peters-world/templates');
            $smarty->setConfigDir('/home/peter/development/peters-world/config');
            $smarty->setCacheDir('/home/peter/development/peters-world/cache');
            $smarty->setCompileDir('/home/peter/development/peters-world/templates_c');
            
            $smarty->display('signUp.tpl');
        }

    }

?>