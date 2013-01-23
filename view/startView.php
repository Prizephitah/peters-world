<?php

    class startView{
    
        function __construct($posts){

            // load Smarty library
            require('/home/peter/development/peters-world/libs/smarty/libs/Smarty.class.php');
            
            $smarty = new Smarty;

            $smarty->setTemplateDir('/home/peter/development/peters-world/templates');
            $smarty->setConfigDir('/home/peter/development/peters-world/config');
            $smarty->setCacheDir('/home/peter/development/peters-world/cache');
            $smarty->setCompileDir('/home/peter/development/peters-world/templates_c');
            


            
            $smarty->display('head.tpl');
            
            if($posts->getTitles() == null)
                $smarty->display('login.tpl');
            
           
            $title = $posts->getTitles();
            $text = $posts->getTexts();
            
            for($i = 0; $i < count($title); $i++){
                $smarty->assign('title', $title[$i]);
                $smarty->assign('text', $text[$i]);
                $smarty->display('blogUpdate.tpl');
            }
            
        }

    }

?>