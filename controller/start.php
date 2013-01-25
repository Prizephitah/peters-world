<?php

    include('../view/startView.php');
    include ('../module/posts.php');
    
    if(!isset($_GET['user']) && isset($_COOKIE['login'])){
        $loc = "Location: start.php?user=" . $_COOKIE['login'];
        header($loc);
    }
    
    $posts= new Posts($_GET['user']);
    
    $view = new startView($posts);

?>