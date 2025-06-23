<?php
/* Smarty version 5.5.1, created on 2025-06-23 00:22:19
  from 'file:payment-success.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6858902bdc9999_09911086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ad1aee59ccf6d2fa896f6b42039daaa93c856711' => 
    array (
      0 => 'payment-success.tpl',
      1 => 1750634525,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6858902bdc9999_09911086 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_18165027456858902bdc2484_64965484', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/app.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_18165027456858902bdc2484_64965484 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?>

    <div class="min-h-screen bg-gray-50 py-24">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Success Header -->
            <div class="text-center mb-12">
                <div class="mx-auto flex items-center justify-center h-16 w-16 rounded-full bg-green-100 mb-6">
                    <svg class="h-8 w-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Payment Successful!</h1>
                <p class="text-lg text-gray-600">Thank you for your purchase. Your order has been confirmed.</p>
            </div>

            <!-- Order Details Card -->
            <div class="bg-white rounded-lg shadow-sm overflow-hidden mb-8">
                <div class="px-6 py-4 bg-green-50 border-b border-green-200">
                    <h2 class="text-xl font-semibold text-green-800">Order Confirmation</h2>
                </div>
                
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide mb-2">Order Details</h3>
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Order Number:</span>
                                    <span class="font-semibold text-gray-900">
                                        <?php if ($_smarty_tpl->getValue('order')['order_number']) {?>
                                            <?php echo $_smarty_tpl->getValue('order')['order_number'];?>

                                        <?php } else { ?>
                                            ORD-<?php echo $_smarty_tpl->getValue('order')['id'];?>

                                        <?php }?>
                                    </span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Transaction ID:</span>
                                    <span class="font-semibold text-gray-900"><?php echo $_smarty_tpl->getValue('payment')['transaction_reference'];?>
</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Payment Method:</span>
                                    <span class="font-semibold text-gray-900"><?php echo (($tmp = $_smarty_tpl->getValue('payment')['card_type'] ?? null)===null||$tmp==='' ? 'Card' ?? null : $tmp);?>
 ending in <?php echo $_smarty_tpl->getValue('payment')['last4'];?>
</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Order Date:</span>
                                    <span class="font-semibold text-gray-900"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('order')['created_at'],'%B %d, %Y at %I:%M %p');?>
</span>
                                </div>
                            </div>
                        </div>
                        
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 uppercase tracking-wide mb-2">Shipping Address</h3>
                            <div class="text-gray-900">
                                <p class="font-semibold"><?php echo $_smarty_tpl->getValue('order')['shipping_name'];?>
</p>
                                <p><?php echo $_smarty_tpl->getValue('order')['shipping_address'];?>
</p>
                                <p><?php echo $_smarty_tpl->getValue('order')['shipping_city'];?>
, <?php echo $_smarty_tpl->getValue('order')['shipping_state'];?>
 <?php echo $_smarty_tpl->getValue('order')['shipping_zip'];?>
</p>
                                <p><?php echo $_smarty_tpl->getValue('order')['shipping_country'];?>
</p>
                                <?php if ($_smarty_tpl->getValue('order')['shipping_phone']) {?>
                                    <p class="mt-2 text-gray-600">Phone: <?php echo $_smarty_tpl->getValue('order')['shipping_phone'];?>
</p>
                                <?php }?>
                            </div>
                        </div>
                    </div>

                    <!-- Order Items -->
                    <div class="border-t border-gray-200 pt-6">
                        <h3 class="text-lg font-semibold text-gray-900 mb-4">Items Ordered</h3>
                        <div class="space-y-4">
                            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('order')['items'], 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                            <div class="flex items-center space-x-4 p-4 border border-gray-200 rounded-lg">
                                <div class="flex-shrink-0">
                                    <?php if ($_smarty_tpl->getValue('item')['image']) {?>
                                        <img src="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('asset')->handle(array('path'=>$_smarty_tpl->getValue('item')['image']), $_smarty_tpl);?>
" alt="<?php echo $_smarty_tpl->getValue('item')['name'];?>
" class="w-16 h-16 object-cover rounded-lg">
                                    <?php } else { ?>
                                        <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
                                            <div class="w-8 h-8 bg-gray-200 rounded"></div>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="flex-1">
                                    <h4 class="font-semibold text-gray-900"><?php echo $_smarty_tpl->getValue('item')['name'];?>
</h4>
                                    <?php if ($_smarty_tpl->getValue('item')['size']) {?>
                                        <p class="text-sm text-gray-600">Size: <?php echo $_smarty_tpl->getValue('item')['size'];?>
</p>
                                    <?php }?>
                                    <p class="text-sm text-gray-600">Quantity: <?php echo $_smarty_tpl->getValue('item')['quantity'];?>
</p>
                                </div>
                                <div class="text-right">
                                    <p class="font-semibold text-gray-900">₦<?php echo sprintf("%.2f",($_smarty_tpl->getValue('item')['price']*$_smarty_tpl->getValue('item')['quantity']));?>
</p>
                                </div>
                            </div>
                            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                        </div>
                    </div>

                    <!-- Order Summary -->
                    <div class="border-t border-gray-200 pt-6 mt-6">
                        <div class="max-w-sm ml-auto">
                            <div class="space-y-2">
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Subtotal:</span>
                                    <span class="font-semibold">₦<?php echo sprintf("%.2f",$_smarty_tpl->getValue('order')['subtotal']);?>
</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Tax:</span>
                                    <span class="font-semibold">₦<?php echo sprintf("%.2f",$_smarty_tpl->getValue('order')['tax']);?>
</span>
                                </div>
                                <div class="flex justify-between">
                                    <span class="text-gray-600">Shipping:</span>
                                    <span class="font-semibold text-green-600">Free</span>
                                </div>
                                <div class="border-t border-gray-200 pt-2">
                                    <div class="flex justify-between text-lg font-bold">
                                        <span>Total:</span>
                                        <span>₦<?php echo sprintf("%.2f",$_smarty_tpl->getValue('order')['total']);?>
</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Next Steps -->
            <div class="bg-white rounded-lg shadow-sm p-6 mb-8">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">What's Next?</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="text-center">
                        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-blue-100 mb-3">
                            <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Order Confirmation</h4>
                        <p class="text-sm text-gray-600">You'll receive an email confirmation shortly with your order details.</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-yellow-100 mb-3">
                            <svg class="h-6 w-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7v10l8 4"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Processing</h4>
                        <p class="text-sm text-gray-600">We're preparing your order for shipment. This usually takes 1-2 business days.</p>
                    </div>
                    
                    <div class="text-center">
                        <div class="mx-auto flex items-center justify-center h-12 w-12 rounded-full bg-green-100 mb-3">
                            <svg class="h-6 w-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V6a2 2 0 00-2-2H6a2 2 0 00-2 2v7m16 0v5a2 2 0 01-2 2H6a2 2 0 01-2-2v-5m16 0h-2.586a1 1 0 00-.707.293l-2.414 2.414a1 1 0 01-.707.293h-3.172a1 1 0 01-.707-.293l-2.414-2.414A1 1 0 006.586 13H4"></path>
                            </svg>
                        </div>
                        <h4 class="font-semibold text-gray-900 mb-2">Delivery</h4>
                        <p class="text-sm text-gray-600">Your order will be delivered to your specified address within 3-5 business days.</p>
                    </div>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="/" class="bg-black text-white px-8 py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors text-center">
                    Continue Shopping
                </a>
                <a href="/order/<?php echo $_smarty_tpl->getValue('order')['id'];?>
/pdf" class="bg-white text-gray-900 px-8 py-3 rounded-lg font-medium border border-gray-300 hover:bg-gray-50 transition-colors text-center">
                    Download Order PDF
                </a>
                <?php if ($_smarty_tpl->getValue('user')) {?>
                <a href="/account/orders" class="bg-white text-gray-900 px-8 py-3 rounded-lg font-medium border border-gray-300 hover:bg-gray-50 transition-colors text-center">
                    My Orders
                </a>
                <?php }?>
            </div>

            <!-- Support Information -->
            <div class="mt-12 text-center">
                <p class="text-gray-600 mb-2">Need help with your order?</p>
                <div class="flex justify-center space-x-6 text-sm">
                    <a href="/contact" class="text-blue-600 hover:text-blue-800 underline">Contact Support</a>
                    <a href="/faq" class="text-blue-600 hover:text-blue-800 underline">FAQ</a>
                    <a href="/returns" class="text-blue-600 hover:text-blue-800 underline">Returns Policy</a>
                </div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
