<?php /* Smarty version Smarty-3.1.12, created on 2013-01-25 01:37:47
         compiled from "/home/peter/development/peters-world/templates/head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:197825579850f46b2431cf01-53541956%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7b3cd7b39e30aedfbace5472be9fa940ea7a6441' => 
    array (
      0 => '/home/peter/development/peters-world/templates/head.tpl',
      1 => 1359074144,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '197825579850f46b2431cf01-53541956',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f46b2433d6f4_90247048',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f46b2433d6f4_90247048')) {function content_50f46b2433d6f4_90247048($_smarty_tpl) {?><html>
    <head>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css" type="text/css"> 
    </head>
    <body>
        <br>
        
        <div class="container">
            <ul class="nav nav-tabs">
                <li class="active"><a href="start.php">Page</a></li>
                <li><a href="update.php">Update</a>
                <li><a href="">Settings</a></li>
                
                <form class="navbar-search pull-right" action="search.php" method="post">
                    <li><input type="text" class="search-query" placeholder="Search" name="search"></li>
                </form>
                
            </ul>
        </div>
    </body>
</html><?php }} ?>