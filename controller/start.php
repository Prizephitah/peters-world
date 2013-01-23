<?php

    include('../view/startView.php');
    include ('../module/posts.php');
    
    $requestURI = explode('/', $_SERVER['REQUEST_URI']);
    echo $requestURI[1];
    echo $_COOKIE['login'];
    
        $posts= new posts($_GET['user']);
    
    $view = new startView($posts);

?>