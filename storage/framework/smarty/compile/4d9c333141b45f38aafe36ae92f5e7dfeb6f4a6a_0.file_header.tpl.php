<?php
/* Smarty version 5.5.1, created on 2025-06-25 15:17:35
  from 'file:partials/header.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685c04ff74ee43_18912580',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4d9c333141b45f38aafe36ae92f5e7dfeb6f4a6a' => 
    array (
      0 => 'partials/header.tpl',
      1 => 1750861042,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685c04ff74ee43_18912580 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/partials';
?><header class="absolute bg-transparent top-0 left-0 right-0 z-50">
    <nav class="container mx-auto px-6">
        <div class="flex justify-between items-center h-16">
            <!-- Desktop Left navigation -->
            <div class="hidden md:flex space-x-8">
                <a href="/collection" class="text-black hover:text-[#bb7b4b] transition font-light">Collection</a>
                <a href="/shop" class="text-black hover:text-[#bb7b4b] transition font-light">Shop</a>
                <a href="/about" class="text-black hover:text-[#bb7b4b] transition font-light">About</a>
            </div>

            <!-- Mobile hamburger button -->
            <button class="md:hidden text-black hover:text-[#bb7b4b] transition" onclick="toggleMobileMenu()">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
                    </path>
                </svg>
            </button>

            <!-- Center logo/title -->
            <a href="/"
                class="text-2xl font-serif tracking-tight text-black absolute left-1/2 transform -translate-x-1/2">buyandbye.</a>

            <!-- Desktop Right navigation -->
            <div class="hidden md:flex space-x-8 items-center">
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

            <!-- Mobile cart icon -->
            <a href="/cart" class="md:hidden text-black hover:text-[#bb7b4b] transition font-light">
                <i class="fa-solid fa-cart-shopping"></i>
                <span id="mobile-cart-count"
                    class="absolute top-3 right-2 inline-block min-w-[1.5em] px-1.5 py-0.5 text-xs leading-tight font-semibold text-white bg-[#bb7b4b] rounded-full text-center"
                    style="display:none;">0</span>
            </a>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="md:hidden hidden bg-white border-t border-gray-200 py-4">
            <div class="flex flex-col space-y-4">
                <a href="/collection" class="text-black hover:text-[#bb7b4b] transition font-light">Collection</a>
                <a href="/shop" class="text-black hover:text-[#bb7b4b] transition font-light">Shop</a>
                <a href="/about" class="text-black hover:text-[#bb7b4b] transition font-light">About</a>
                <a href="/wishlist" class="text-black hover:text-[#bb7b4b] transition font-light">Wishlist</a>
                <?php if ($_smarty_tpl->getValue('is_logged_in')) {?>
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/account" class="text-black hover:text-[#bb7b4b] transition font-light">Account</a>
                <?php } else { ?>
                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/login" class="text-black hover:text-[#bb7b4b] transition font-light">Login</a>
                <?php }?>
            </div>
        </div>
    </nav>
</header><?php }
}
