<?php /* Smarty version Smarty-3.1.12, created on 2013-01-24 00:32:09
         compiled from "/home/peter/development/peters-world/templates/login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:174230011750f40104a02890-49947430%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '167ef7e59f119c565f3eacd268d2b42b1dfbaa5f' => 
    array (
      0 => '/home/peter/development/peters-world/templates/login.tpl',
      1 => 1358983923,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '174230011750f40104a02890-49947430',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f40104a37054_61545465',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f40104a37054_61545465')) {function content_50f40104a37054_61545465($_smarty_tpl) {?><html>
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
                                <form action="index.php" method="post">
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