<?php
/* Smarty version 5.5.1, created on 2025-06-16 22:11:38
  from 'file:partials/footer.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6850969a0ae705_90471981',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2269d1d00fb24b0b9c099865980817f4073a2d82' => 
    array (
      0 => 'partials/footer.tpl',
      1 => 1750111046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6850969a0ae705_90471981 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/partials';
?><footer class="bg-gray-100 py-4 mt-auto">
    <div class="container mx-auto px-4 text-center text-gray-600">
        <p>&copy; <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),"%Y");?>
 Buyandbye. All rights reserved.</p>
    </div>
</footer> <?php }
}
