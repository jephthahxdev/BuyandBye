<?php
/* Smarty version 5.5.1, created on 2025-06-16 13:24:40
  from 'file:welcome.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68501b187ac6b8_92228293',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af908a3cda9b2c161c246c07451074d4ea0b5ed0' => 
    array (
      0 => 'welcome.tpl',
      1 => 1750080275,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68501b187ac6b8_92228293 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?><!DOCTYPE html>
<html>
<head>
    <title><?php echo $_smarty_tpl->getValue('title');?>
</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .container { max-width: 800px; margin: 0 auto; }
        ul { list-style-type: none; padding: 0; }
        li { padding: 5px; background: #f5f5f5; margin: 2px 0; }
    </style>
</head>
<body>
    <div class="container">
        <h1 text-red><?php echo $_smarty_tpl->getValue('title');?>
</h1>
        <p><?php echo $_smarty_tpl->getValue('message');?>
</p>
        
        <h2>Users:</h2>
        <ul>
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), 'user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user')->value) {
$foreach0DoElse = false;
?>
                <li><?php echo $_smarty_tpl->getValue('user');?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
        
        <p>Current time: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),"%Y-%m-%d %H:%M:%S");?>
</p>
    </div>
</body>
</html><?php }
}
