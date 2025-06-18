<?php
/* Smarty version 5.5.1, created on 2025-06-18 10:17:58
  from 'file:layouts/app.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68529256dd7845_61318582',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8933468c4f41b2754cd9ea24850b30f5f32b50c0' => 
    array (
      0 => 'layouts/app.tpl',
      1 => 1750241824,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/header.tpl' => 1,
    'file:partials/footer.tpl' => 1,
  ),
))) {
function content_68529256dd7845_61318582 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/layouts';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('csrf_token')->handle(array(), $_smarty_tpl);?>
">
    <title><?php echo (($tmp = $_smarty_tpl->getValue('title') ?? null)===null||$tmp==='' ? 'Buyandbye' ?? null : $tmp);?>
</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link href="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('asset')->handle(array('path'=>'/css/output.css'), $_smarty_tpl);?>
" rel="stylesheet">
</head>
<body class="min-h-screen">
    <?php $_smarty_tpl->renderSubTemplate("file:partials/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    
    <main>
        <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_187536374868529256dd2424_51244396', "content");
?>

    </main>

    <?php $_smarty_tpl->renderSubTemplate("file:partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>
    <?php echo '<script'; ?>
 src="/js/addtoCart.js"><?php echo '</script'; ?>
>
</body>
</html> <?php }
/* {block "content"} */
class Block_187536374868529256dd2424_51244396 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/layouts';
}
}
/* {/block "content"} */
}
