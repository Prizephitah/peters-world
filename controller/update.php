<?php

    include('../view/updateView.php');
    
    if(!empty($_POST['title']) && !empty($_POST['text']) && isset($_COOKIE['login'])){
        
        $dbh = new PDO("mysql:host=localhost; dbname=peters-world;", "root","");
        
        $sth = $dbh->prepare('
        
                SELECT *
        
                FROM users
        
                WHERE username = ?
        
                ');
        
        $sth->execute(array($_COOKIE['login']));
        
        $login = $sth->fetch();
        
        
        $sth = $dbh->prepare('INSERT INTO posts VALUES (null, ?, ?, ?)');
                
        $sth->execute(array($login['id'], $_POST['title'], $_POST['text']));
    
    }
    
    $view = new updateView();

?>