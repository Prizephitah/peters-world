<?php /* Smarty version Smarty-3.1.12, created on 2013-01-23 02:34:18
         compiled from "/home/peter/development/peters-world/templates/blogUpdate.tpl" */ ?>
<?php /*%%SmartyHeaderCode:98248868350f48218ab61d9-77845533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '24628aa837986a77c21c6390c466448c2e4c70d2' => 
    array (
      0 => '/home/peter/development/peters-world/templates/blogUpdate.tpl',
      1 => 1358904780,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98248868350f48218ab61d9-77845533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f48218ad5868_26654612',
  'variables' => 
  array (
    'title' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f48218ad5868_26654612')) {function content_50f48218ad5868_26654612($_smarty_tpl) {?><html>
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css"> 
    </head>
    <body>

        <div class="container">
            <br>
            <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h1>
            <br>
            <p><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</p>
            <br>
            <p class="text-info">Posted: 2013-01-14, 23:11</p>
            <p class="text-warning">Edited: Never</p>
        
        </div>
    
    </body>
</html><?php }} ?>