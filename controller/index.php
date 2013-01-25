<?php

    include ('../view/indexView.php');
    include ('../module/login.php');

    if(isset($_POST['username']) && isset($_POST['password'])){
    	
        $login = new Login($_POST['username'], $_POST['password']);
        
        $user = $login->getUser();
        
        if(!empty($user['username'])){
            setcookie("login", $_POST['username'], time()+3600);
            $loc = "Location: start.php?user=" . $_POST['username'];
            header($loc);
        }
        
    }
        
        $view = new indexView();
        
?>