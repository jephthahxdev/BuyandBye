<?php
/* Smarty version 5.5.1, created on 2025-06-25 22:20:28
  from 'file:cart.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685c681c366127_56396110',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b50f49f7d7d6e93605ca3c352d312017bd8934e9' => 
    array (
      0 => 'cart.tpl',
      1 => 1750886423,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685c681c366127_56396110 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_481848922685c681c35a8d1_18542462', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/app.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_481848922685c681c35a8d1_18542462 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?>

    <section class="relative w-full h-[300px] md:h-[500px] flex items-center justify-center">
        <img src="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('asset')->handle(array('path'=>'/images/page-header.jpg'), $_smarty_tpl);?>
" alt="Artisanal ceramic bowls and pottery"
            class="absolute inset-0 w-full h-full object-cover" />
        <!-- Glass container at bottom left -->
        <div class="absolute bottom-4 md:bottom-8 left-4 md:left-8 p-4 md:p-8 rounded-2xl max-w-md">
            <h1 class="text-2xl md:text-4xl lg:text-7xl font-serif mb-2 md:mb-4 tracking-wide text-gray-900">CART</h1>
            <p class="text-sm md:text-lg lg:text-base font-light opacity-90 text-black">Complete your skincare shopping experience</p>
        </div>
    </section>

    <div class="min-h-screen bg-gray-50 py-4 md:py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Progress Steps -->
            <div class="mb-8 md:mb-12">
                <div class="flex items-center justify-center space-x-4 md:space-x-8 overflow-x-auto">
                    <!-- Cart Step -->
                    <div class="flex items-center flex-shrink-0">
                        <div
                            class="flex items-center justify-center w-6 h-6 md:w-8 md:h-8 bg-black text-white rounded-full text-xs md:text-sm font-medium">
                            1
                        </div>
                        <span class="ml-2 md:ml-3 text-xs md:text-sm font-medium text-gray-900">Cart</span>
                    </div>

                    <!-- Arrow -->
                    <svg class="w-4 h-4 md:w-5 md:h-5 text-gray-300 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>

                    <!-- Checkout Step -->
                    <div class="flex items-center flex-shrink-0">
                        <div
                            class="flex items-center justify-center w-6 h-6 md:w-8 md:h-8 bg-gray-200 text-gray-500 rounded-full text-xs md:text-sm font-medium">
                            2
                        </div>
                        <span class="ml-2 md:ml-3 text-xs md:text-sm font-medium text-gray-500">Checkout</span>
                    </div>

                    <!-- Arrow -->
                    <svg class="w-4 h-4 md:w-5 md:h-5 text-gray-300 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>

                    <!-- Payment Step -->
                    <div class="flex items-center flex-shrink-0">
                        <div
                            class="flex items-center justify-center w-6 h-6 md:w-8 md:h-8 bg-gray-200 text-gray-500 rounded-full text-xs md:text-sm font-medium">
                            3
                        </div>
                        <span class="ml-2 md:ml-3 text-xs md:text-sm font-medium text-gray-500">Payment</span>
                    </div>
                </div>
            </div>

            <div class="lg:grid lg:grid-cols-12 lg:gap-8 xl:gap-12">
                <!-- Cart Items Section -->
                <div class="lg:col-span-8">
                    <div class="bg-white rounded-lg shadow-sm p-4 md:p-6">
                        <!-- Cart Header -->
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4 md:mb-6 gap-3">
                            <h1 class="text-xl md:text-2xl font-medium text-gray-900">Cart (<?php echo $_smarty_tpl->getValue('cart_count');?>
 products)</h1>
                            <button class="text-red-500 hover:text-red-600 text-sm font-medium flex items-center clear-cart-btn self-start sm:self-auto">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                Clear cart
                            </button>
                        </div>

                        <!-- Cart Table Header -->
                        <div
                            class="hidden md:grid md:grid-cols-12 gap-4 py-3 border-b border-gray-200 text-sm font-medium text-gray-500">
                            <div class="col-span-6">Product</div>
                            <div class="col-span-2 text-center">Count</div>
                            <div class="col-span-3 text-right">Price</div>
                            <div class="col-span-1"></div>
                        </div>

                        <!-- Cart Items -->
                        <div class="divide-y divide-gray-200">
                            <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('cart')) > 0) {?>
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart'), 'item', false, 'product_id');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product_id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                                    <div class="py-4 md:py-6 cart-item" data-product-id="<?php echo $_smarty_tpl->getValue('product_id');?>
">
                                        <div class="grid grid-cols-1 md:grid-cols-12 gap-3 md:gap-4 items-start md:items-center">
                                            <!-- Product Info -->
                                            <div class="md:col-span-6 flex items-start space-x-3 md:space-x-4">
                                                <div class="w-12 h-12 md:w-16 md:h-16 bg-gray-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                                    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('item')['image'] ?? null))) && $_smarty_tpl->getValue('item')['image']) {?>
                                                        <img src="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('asset')->handle(array('path'=>$_smarty_tpl->getValue('item')['image']), $_smarty_tpl);?>
" alt="<?php echo (($tmp = $_smarty_tpl->getValue('item')['name'] ?? null)===null||$tmp==='' ? 'Product' ?? null : $tmp);?>
" class="w-11 h-11 md:w-15 md:h-15 object-cover rounded-lg">
                                                    <?php } else { ?>
                                                        <div class="w-10 h-10 md:w-12 md:h-12 bg-white rounded-lg shadow-sm flex items-center justify-center">
                                                            <div class="w-6 h-6 md:w-8 md:h-8 bg-gray-200 rounded"></div>
                                                        </div>
                                                    <?php }?>
                                                </div>
                                                <div class="flex-1 min-w-0">
                                                    <h3 class="font-medium text-gray-900 text-sm md:text-base truncate"><?php echo (($tmp = $_smarty_tpl->getValue('item')['name'] ?? null)===null||$tmp==='' ? 'Product' ?? null : $tmp);?>
</h3>
                                                    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('item')['size'] ?? null))) && $_smarty_tpl->getValue('item')['size']) {?>
                                                        <p class="text-xs md:text-sm text-gray-500"><?php echo $_smarty_tpl->getValue('item')['size'];?>
</p>
                                                    <?php }?>
                                                </div>
                                            </div>

                                            <!-- Quantity Controls -->
                                            <div class="md:col-span-2 flex items-center justify-start md:justify-center">
                                                <div class="flex items-center border border-gray-300 rounded-lg">
                                                    <button class="p-1.5 md:p-2 hover:bg-gray-50 text-gray-400 decrease-quantity" data-product-id="<?php echo $_smarty_tpl->getValue('product_id');?>
">
                                                        <svg class="w-3 h-3 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M20 12H4" />
                                                        </svg>
                                                    </button>
                                                    <span class="px-2 md:px-4 py-1.5 md:py-2 text-xs md:text-sm font-medium item-quantity"><?php echo (($tmp = $_smarty_tpl->getValue('item')['quantity'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp);?>
</span>
                                                    <button class="p-1.5 md:p-2 hover:bg-gray-50 text-gray-400 increase-quantity" data-product-id="<?php echo $_smarty_tpl->getValue('product_id');?>
">
                                                        <svg class="w-3 h-3 md:w-4 md:h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M12 4v16m8-8H4" />
                                                        </svg>
                                                    </button>
                                                </div>
                                            </div>

                                            <!-- Price -->
                                            <div class="md:col-span-3 flex items-center justify-between md:justify-end">
                                                <span class="md:hidden text-xs text-gray-500">Price:</span>
                                                <span class="text-base md:text-lg font-semibold text-gray-900 item-price">₦<?php echo ((($tmp = $_smarty_tpl->getValue('item')['price'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp))*sprintf("%.2f",((($tmp = $_smarty_tpl->getValue('item')['quantity'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)));?>
</span>
                                            </div>

                                            <!-- Remove Button -->
                                            <div class="md:col-span-1 flex items-center justify-end">
                                                <button class="text-red-500 hover:text-red-600 remove-item" data-product-id="<?php echo $_smarty_tpl->getValue('product_id');?>
">
                                                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M6 18L18 6M6 6l12 12" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            <?php } else { ?>
                                <!-- Empty Cart -->
                                <div class="py-8 md:py-12 text-center">
                                    <svg class="w-12 h-12 md:w-16 md:h-16 text-gray-400 mx-auto mb-3 md:mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                    </svg>
                                    <h3 class="text-base md:text-lg font-medium text-gray-900 mb-2">Your cart is empty</h3>
                                    <p class="text-sm md:text-base text-gray-600 mb-4 md:mb-6">Looks like you haven't added any products to your cart yet.</p>
                                    <a href="/" class="inline-flex items-center px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800 text-sm md:text-base">
                                        Continue Shopping
                                    </a>
                                </div>
                            <?php }?>
                        </div>

                        <!-- Promotional Banner -->
                        <div class="mt-6 md:mt-8 bg-gray-900 rounded-lg p-4 md:p-6 text-white">
                            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
                                <div>
                                    <h3 class="text-base md:text-lg font-medium mb-1">Check the newest care products</h3>
                                    <p class="text-gray-300 text-xs md:text-sm">Official cosmetic reseller</p>
                                </div>
                                <div class="flex items-center space-x-3 md:space-x-4">
                                    <div class="w-12 h-12 md:w-16 md:h-16 bg-white/10 rounded-lg flex items-center justify-center">
                                        <div class="w-8 h-8 md:w-12 md:h-12 bg-white/20 rounded-lg"></div>
                                    </div>
                                    <button
                                        class="bg-white text-gray-900 px-4 md:px-6 py-2 rounded-lg font-medium hover:bg-gray-100 transition-colors text-sm md:text-base">
                                        Shop now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary Section -->
                <div class="lg:col-span-4 mt-6 lg:mt-0">
                    <div class="bg-white rounded-lg shadow-sm">
                        <!-- Promo Code Section -->
                        <div class="p-4 md:p-6 border-b border-gray-200">
                            <h3 class="text-base md:text-lg font-medium text-gray-900 mb-3 md:mb-4">Promo code</h3>
                            <div class="flex flex-col sm:flex-row space-y-2 sm:space-y-0 sm:space-x-2">
                                <input type="text" placeholder="Type here..."
                                    class="flex-1 px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent text-sm">
                                <button
                                    class="bg-black text-white px-4 md:px-6 py-2 rounded-lg font-medium hover:bg-gray-800 transition-colors text-sm">
                                    Apply
                                </button>
                            </div>
                        </div>

                        <!-- Order Summary -->
                        <div class="p-4 md:p-6">
                            <div class="space-y-3 md:space-y-4">
                                <div class="flex justify-between text-sm md:text-base text-gray-600">
                                    <span>Subtotal</span>
                                    <span class="cart-subtotal">₦<?php echo sprintf("%.2f",(($tmp = $_smarty_tpl->getValue('cart_subtotal') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>
</span>
                                </div>
                                <div class="flex justify-between text-sm md:text-base text-gray-600">
                                    <span>Discount</span>
                                    <span class="cart-discount">-₦0.00</span>
                                </div>
                                <div class="border-t border-gray-200 pt-3 md:pt-4">
                                    <div class="flex justify-between text-base md:text-lg font-semibold text-gray-900">
                                        <span>Total</span>
                                        <span class="cart-total">₦<?php echo sprintf("%.2f",(($tmp = $_smarty_tpl->getValue('cart_total') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>
</span>
                                    </div>
                                </div>
                            </div>

                            <button
                                class="w-full mt-4 md:mt-6 bg-black text-white py-2.5 md:py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors checkout-btn text-sm md:text-base"
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('cart')) == 0) {?>disabled<?php }?>
                                onclick="window.location.href='/checkout'">
                                Continue to checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
