<?php

    include ('../view/updateView.php');
    include ('../module/update.php');
    
    if(!empty($_POST['title']) && !empty($_POST['text']) && isset($_COOKIE['login'])){
        
        $update = new Update($_COOKIE['login'], $_POST['title'], $_POST['text']);
    
    }
    
    $view = new updateView();

?>