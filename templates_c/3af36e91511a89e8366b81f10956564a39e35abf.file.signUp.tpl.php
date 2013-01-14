<?php /* Smarty version Smarty-3.1.12, created on 2013-01-14 21:41:29
         compiled from "/home/peter/development/peters-world/templates/signUp.tpl" */ ?>
<?php /*%%SmartyHeaderCode:203388913450f4500daa90f1-95683328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3af36e91511a89e8366b81f10956564a39e35abf' => 
    array (
      0 => '/home/peter/development/peters-world/templates/signUp.tpl',
      1 => 1358196087,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '203388913450f4500daa90f1-95683328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f4500dac6881_53961208',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f4500dac6881_53961208')) {function content_50f4500dac6881_53961208($_smarty_tpl) {?><html>
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css"> 
    </head>
    <body>
        <div class='container'>
            
            <br>
            <div class="offset4">
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
                <p><a href="index.php" class="btn btn-primary btn-warning btn-small">&raquo; back</a></p>
            </div>   
        </div>
    </body>
</html><?php }} ?>