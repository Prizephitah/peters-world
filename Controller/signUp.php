<?php

    include('../View/signUpView.php');
    
    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['repassword'])){
    
        if($_POST['password'] == $_POST['repassword']){
        
            $dbh = new PDO("mysql:host=localhost; dbname=petersworld;", "root","");

            $sth = $dbh->prepare('SELECT * FROM users WHERE username = ?');
                
            $sth->execute(array($_POST['username']));
            $anv = $sth->fetchAll(PDO::FETCH_COLUMN, 1);
            
            if(isset($anv[0]))
                echo 'name in use';
            else{
                $sth = $dbh->prepare('INSERT INTO users VALUES (null, ?, ?)');
                
                $sth->execute(array($_POST['username'], $_POST['password']));
                
                echo 'signed up';
            }
                
        }
        else
            echo 'pass does not match';
    }
    $view = new signUpView();
    
    

?>