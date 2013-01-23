<?php

    include('../view/updateView.php');
    
    if(!empty($_POST['title']) && !empty($_POST['text'])){
        
        $dbh = new PDO("mysql:host=localhost; dbname=peters-world;", "root","");
        
        $sth = $dbh->prepare('INSERT INTO posts VALUES (null, 0, ?, ?)');
                
        $sth->execute(array($_POST['title'], $_POST['text']));
    
    }
    
    $view = new updateView();

?>