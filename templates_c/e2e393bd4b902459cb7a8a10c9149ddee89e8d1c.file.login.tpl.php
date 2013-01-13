<?php /* Smarty version Smarty-3.1.12, created on 2013-01-12 16:31:06
         compiled from "C:\xampp\htdocs\MVC\templates\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:187250f180c068f182-11614382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e2e393bd4b902459cb7a8a10c9149ddee89e8d1c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC\\templates\\login.tpl',
      1 => 1358004610,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '187250f180c068f182-11614382',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f180c06c0c51_76746537',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f180c06c0c51_76746537')) {function content_50f180c06c0c51_76746537($_smarty_tpl) {?><html>
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css"> 
    </head>
    <body>
            
        <div class="container">
            <div class="hero-unit">
                <h1>Peters World</h1>   
        
   
                <div class="offset8">
                    <div class="content">
                        <div class="row">
                            <div class="login-form">
                                <h2>Login</h2>
                                <form action="" method="post">
                                    <fieldset>
                                        <div class="clearfix">
                                            <input type="text" name="username" placeholder="Username">
                                        </div>
                                        <div class="clearfix">
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
                                        <button class="btn primary" type="submit">Sign in</button>
                                    </fieldset>
                                </form>
                                <p><a href="signUp.php" class="btn btn-primary btn-large">Sign Up &raquo;</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html><?php }} ?>