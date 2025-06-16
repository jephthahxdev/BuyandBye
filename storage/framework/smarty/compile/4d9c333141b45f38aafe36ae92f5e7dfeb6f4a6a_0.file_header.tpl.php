<?php
/* Smarty version 5.5.1, created on 2025-06-16 22:41:23
  from 'file:partials/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68509d93e1e0e9_62210076',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d9c333141b45f38aafe36ae92f5e7dfeb6f4a6a' => 
    array (
      0 => 'partials/header.tpl',
      1 => 1750113681,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68509d93e1e0e9_62210076 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/partials';
?><header class="bg-white shadow">
    <nav class="container mx-auto px-4">
        <div class="flex justify-between items-center h-16">
            <!-- Left navigation -->
            <div class="flex space-x-6">
                <a href="/collection" class="text-gray-600 hover:text-gray-900">Collection</a>
                <a href="/shop" class="text-gray-600 hover:text-gray-900">Shop</a>
                <a href="/about" class="text-gray-600 hover:text-gray-900">About</a>
            </div>
            <!-- Center logo/title -->
            <a href="/" class="text-2xl font-bold tracking-wide text-gray-800 absolute left-1/2 transform -translate-x-1/2 uppercase">Buy&Bye</a>
            <!-- Right navigation -->
            <div class="flex space-x-6 items-center">
                <a href="/wishlist" class="text-gray-600 hover:text-gray-900">Wishlist</a>
                <a href="/signin" class="text-gray-600 hover:text-gray-900">Login</a>
                <a href="/bag" class="text-gray-600 hover:text-gray-900">Bag</a>
            </div>
        </div>
    </nav>
</header> <?php }
}
