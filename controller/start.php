<?php

    include('../view/startView.php');
    include ('../module/posts.php');
    
    $posts= new posts();
    
    $view = new startView($posts);

?>