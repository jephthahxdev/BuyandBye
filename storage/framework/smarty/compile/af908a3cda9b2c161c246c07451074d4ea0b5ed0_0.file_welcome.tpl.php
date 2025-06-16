<?php
/* Smarty version 5.5.1, created on 2025-06-16 22:40:59
  from 'file:welcome.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68509d7b780f49_83765506',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af908a3cda9b2c161c246c07451074d4ea0b5ed0' => 
    array (
      0 => 'welcome.tpl',
      1 => 1750113630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68509d7b780f49_83765506 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_105904952568509d7b77f839_18954019', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/app.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_105904952568509d7b77f839_18954019 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?>

    <!-- Hero Section -->
    <section class="relative w-full h-[400px] md:h-[500px] flex items-center justify-center mb-12">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=80" alt="Hero background" class="absolute inset-0 w-full h-full object-cover object-center opacity-80" />
        <div class="relative z-10 text-center text-white max-w-2xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">PRODUCTS FOR THE SOUL</h1>
            <p class="text-lg md:text-xl mb-8 drop-shadow">Breathing new life into cultural craft</p>
            <a href="/shop" class="inline-block bg-white text-gray-900 font-semibold px-8 py-3 rounded-full shadow hover:bg-gray-100 transition">Shop now</a>
        </div>
        <div class="absolute inset-0 bg-black opacity-30"></div>
    </section>

    <!-- Existing Content -->
    <div class="container mx-auto px-4">
        <h2 class="text-xl font-semibold mb-4">Favorites</h2>
        <p class="mb-6">We have made a selection of our customers' favorite products</p>
        <ul class="list-unstyled">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), 'user');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('user')->value) {
$foreach0DoElse = false;
?>
                <li class="p-2 bg-gray-100 mb-2 rounded"><?php echo $_smarty_tpl->getValue('user');?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
        </ul>
        <p class="mt-6 text-gray-500">Current time: <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')(time(),"%Y-%m-%d %H:%M:%S");?>
</p>
    </div>
<?php
}
}
/* {/block "content"} */
}
