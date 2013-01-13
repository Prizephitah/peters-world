<?php

    include ('../View/indexView.php');

    if(isset($_POST['username']) && isset($_POST['password'])){
    
        $dbh = new PDO("mysql:host=localhost; dbname=petersworld;", "root","");
        
        $sth = $dbh->prepare('SELECT * FROM users WHERE username = ? AND password = ?');
        
        $sth->execute(array($_POST['username'], $_POST['password']));
        $anv = $sth->fetchAll(PDO::FETCH_COLUMN, 1);
        
        if(isset($anv[0])){
            echo 'Success';
        }
        
    }
        
        $view = new indexView();
        
?>