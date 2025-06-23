<?php
/* Smarty version 5.5.1, created on 2025-06-20 12:27:41
  from 'file:partials/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685553bdb7f8f6_55145659',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d9c333141b45f38aafe36ae92f5e7dfeb6f4a6a' => 
    array (
      0 => 'partials/header.tpl',
      1 => 1750422282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685553bdb7f8f6_55145659 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/partials';
?><header class="absolute bg-transparent top-0 left-0 right-0 z-50">
    <nav class="container mx-auto px-6">
        <div class="flex justify-between items-center h-16">
            <!-- Left navigation -->
            <div class="flex space-x-8">
                <a href="/collection" class="text-black hover:text-[#bb7b4b] transition font-light">Collection</a>
                <a href="/shop" class="text-black hover:text-[#bb7b4b] transition font-light">Shop</a>
                <a href="/about" class="text-black hover:text-[#bb7b4b] transition font-light">About</a>
            </div>
            <!-- Center logo/title -->
            <a href="/"
                class="text-2xl font-serif tracking-tight text-black absolute left-1/2 transform -translate-x-1/2">buyandbye.</a>
            <!-- Right navigation -->
            <div class="flex space-x-8 items-center">
                <a href="/wishlist" class="text-black hover:text-[#bb7b4b] transition font-light">Wishlist</a>
                <?php if ($_smarty_tpl->getValue('is_logged_in')) {?>
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/account" class="text-black hover:text-[#bb7b4b] transition font-light">Account</a>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/login" class="text-black hover:text-[#bb7b4b] transition font-light">Login</a>
                <?php }?>
                <a href="/cart" class="text-black hover:text-[#bb7b4b] transition font-light">Cart<span id="cart-count"
                        class="ml-2 inline-block min-w-[1.5em] px-2 py-0.5 text-xs leading-tight font-semibold text-white bg-[#bb7b4b] rounded-full text-center"
                        style="display:none;">0</span></a>
            </div>
        </div>
    </nav>
</header><?php }
}
