<?php

    include ('../view/signUpView.php');
    include ('../module/signUp.php');
    
    if(!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['repassword'])){
    
        $signUp = new SignUp($_POST['username'], $_POST['password'], $_POST['repassword']); 
        
    }
    $view = new signUpView();
    
    

?>