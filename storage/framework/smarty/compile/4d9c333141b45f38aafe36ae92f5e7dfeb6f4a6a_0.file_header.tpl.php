<?php
/* Smarty version 5.5.1, created on 2025-06-17 13:47:37
  from 'file:partials/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685171f920be19_66857959',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d9c333141b45f38aafe36ae92f5e7dfeb6f4a6a' => 
    array (
      0 => 'partials/header.tpl',
      1 => 1750168055,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685171f920be19_66857959 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/partials';
?><header class="absolute bg-transparent top-0 left-0 right-0 z-50">
    <nav class="container mx-auto px-6">
        <div class="flex justify-between items-center h-16">
            <!-- Left navigation -->
            <div class="flex space-x-8">
                <a href="/collection" class="text-black hover:text-[#e37c00] transition font-light">Collection</a>
                <a href="/shop" class="text-black hover:text-[#e37c00] transition font-light">Shop</a>
                <a href="/about" class="text-black hover:text-[#e37c00] transition font-light">About</a>
            </div>
            <!-- Center logo/title -->
            <a href="/"
                class="text-2xl font-bold tracking-wider text-black absolute left-1/2 transform -translate-x-1/2">BUY&BYE</a>
            <!-- Right navigation -->
            <div class="flex space-x-8 items-center">
                <a href="/wishlist" class="text-black hover:text-[#e37c00] transition font-light">Wishlist</a>
                <a href="/login" class="text-black hover:text-[#e37c00] transition font-light">Login</a>
                <a href="/bag" class="text-black hover:text-[#e37c00] transition font-light">Bag</a>
            </div>
        </div>
    </nav>
</header><?php }
}
