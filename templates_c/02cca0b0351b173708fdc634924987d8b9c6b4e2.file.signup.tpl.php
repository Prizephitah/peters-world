<?php /* Smarty version Smarty-3.1.12, created on 2013-01-12 21:00:12
         compiled from "C:\xampp\htdocs\MVC\templates\signup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:899650f181ecae4dd5-14592655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '02cca0b0351b173708fdc634924987d8b9c6b4e2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MVC\\templates\\signup.tpl',
      1 => 1358020811,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '899650f181ecae4dd5-14592655',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f181ecb151a0_65562444',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f181ecb151a0_65562444')) {function content_50f181ecb151a0_65562444($_smarty_tpl) {?><html>
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css"> 
    </head>
    
    <body>
        <div class='container'>
            <div class='hero-unit'>
                
                
                <div class="offset4">
                    <div class="content">
                        <div class="row">
                            <div class="login-form">
                                <h2>SignUp</h2>
                                <form action="" method="post">
                                    <fieldset>
                                        <div class="clearfix">
                                            <input type="text" name="username" placeholder="Username">
                                        </div>
                                        <div class="clearfix">
                                            <input type="password" name="password" placeholder="Password">
                                        </div>
                                        <div class="clearfix">
                                            <input type="password" name="repassword" placeholder="Repeat Password">
                                        </div>
                                        <button class="btn primary" type="submit">Sign up</button>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                
                
            </div>
        </div>

    </body>
</html><?php }} ?>