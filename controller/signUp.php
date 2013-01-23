<?php

    include('../view/signUpView.php');
    
    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['repassword'])){
    
        if($_POST['password'] == $_POST['repassword']){
        
            $dbh = new PDO("mysql:host=localhost; dbname=peters-world;", "root","");

            $sth = $dbh->prepare('SELECT * FROM users WHERE username = ?');
                
            $sth->execute(array($_POST['username']));
            $anv = $sth->fetch();
            
            if(isset($anv['username']))
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