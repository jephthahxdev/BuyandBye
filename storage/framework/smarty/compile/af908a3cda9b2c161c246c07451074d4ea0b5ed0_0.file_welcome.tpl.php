<?php
/* Smarty version 5.5.1, created on 2025-06-21 17:16:11
  from 'file:welcome.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6856dacbcfcd67_82819543',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'af908a3cda9b2c161c246c07451074d4ea0b5ed0' => 
    array (
      0 => 'welcome.tpl',
      1 => 1750522558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6856dacbcfcd67_82819543 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_551009986856dacbcf1642_13135928', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/app.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_551009986856dacbcf1642_13135928 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?>

    <section class="relative w-full h-screen flex items-center justify-center">
        <img src="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('asset')->handle(array('path'=>'/images/hero-2.jpg'), $_smarty_tpl);?>
" alt="Artisanal ceramic bowls and pottery"
            class="absolute inset-0 w-full h-full object-cover" />
        <!-- Glass container at bottom left -->
        <div class="glass-container absolute bottom-8 left-8 p-8 rounded-2xl max-w-md">
            <h1 class="text-4xl md:text-5xl font-light mb-4 tracking-wide text-[#bb7b4b]">PRODUCTS FOR THE SOUL</h1>
            <p class="text-lg md:text-xl font-light opacity-90 text-[#bb7b4b]">Breathing new life into cultural craft</p>
        </div>

        <!-- Vertical Shop Now button on the right -->
        <div class="absolute right-8 top-1/2 -translate-y-1/2">
            <a href="/shop"
                class="vertical-button inline-flex items-center text-gray-900 hover:text-[#bb7b4b] font-medium px-6 py-12 tracking-wider text-sm group gap-2">
                <span class="">SHOP NOW</span>
                <svg class="arrow-translate w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </a>
        </div>
    </section>

    <div class="bg-white">
        <!-- Favorites Section -->
        <section class="mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 divide-x divide-gray-200">
                <div class="flex flex-col justify-between py-8">
                    <div>
                        <h2 class="text-3xl font-light mb-2 tracking-wide">FAVORITES</h2>
                        <p class="text-gray-600">We have made a selection of our customers' favorite products</p>
                    </div>
                    <div>
                        <a href="/favorites"
                            class="text-sm text-gray-600 hover:text-gray-900 font-medium tracking-wide underline">SEE
                            ALL</a>
                    </div>
                </div>

                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('products'), 'product');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product')->value) {
$foreach0DoElse = false;
?>
                    <div class="product-card bg-white overflow-hidden relative group">
                        <?php if ($_smarty_tpl->getValue('product')->new) {?>
                            <div class="badge badge-new">NEW!</div>
                        <?php } elseif ($_smarty_tpl->getValue('product')->popular) {?>
                            <div class="badge badge-popular">POPULAR</div>
                        <?php }?>
                        <div class="relative overflow-hidden">
                            <img src="<?php if ($_smarty_tpl->getValue('product')->images->isNotEmpty()) {
echo $_smarty_tpl->getSmarty()->getFunctionHandler('asset')->handle(array('path'=>$_smarty_tpl->getValue('product')->images[0]->image_path), $_smarty_tpl);
} else { ?>https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80<?php }?>"
                                alt="<?php echo $_smarty_tpl->getValue('product')->name;?>
"
                                class="w-full h-110 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="flex justify-between p-6">
                            <div>
                                <h3 class="font-medium mb-3 text-lg"><?php echo $_smarty_tpl->getValue('product')->name;?>
</h3>
                                <p class="text-xl font-semibold text-gray-900 mb-4">$<?php echo sprintf("%.2f",$_smarty_tpl->getValue('product')->price);?>
</p>
                            </div>
                            <button
                                class="add-to-cart w-10 h-10 bg-gray-900 text-white rounded-sm hover:bg-gray-800 transition flex items-center justify-center"
                                data-product-id="<?php echo $_smarty_tpl->getValue('product')['id'];?>
" data-product-name="<?php echo $_smarty_tpl->getValue('product')['name'];?>
">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3">
                <!-- Vases -->
                <div class="category-card relative h-150 overflow-hidden cursor-pointer group">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Vases collection"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="category-overlay absolute inset-0 group-hover:bg-black/50 transition-colors duration-300">
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h3 class="text-white text-4xl font-light tracking-widest">VASES</h3>
                    </div>
                    <div
                        class="absolute bottom-6 right-6 w-12 h-12 bg-white/20 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

                <!-- Candles -->
                <div class="category-card relative h-150 overflow-hidden cursor-pointer group">
                    <img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Candles collection"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="category-overlay absolute inset-0 group-hover:bg-black/50 transition-colors duration-300">
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h3 class="text-white text-4xl font-light tracking-widest">CANDLES</h3>
                    </div>
                    <div
                        class="absolute bottom-6 right-6 w-12 h-12 bg-white/20 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

                <!-- Ceramics -->
                <div class="category-card relative h-150 overflow-hidden cursor-pointer group">
                    <img src="https://images.unsplash.com/photo-1578749556568-bc2c40e68b61?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Ceramics collection"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="category-overlay absolute inset-0 group-hover:bg-black/50 transition-colors duration-300">
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h3 class="text-white text-4xl font-light tracking-widest">CERAMICS</h3>
                    </div>
                    <div
                        class="absolute bottom-6 right-6 w-12 h-12 bg-white/20 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php
}
}
/* {/block "content"} */
}
