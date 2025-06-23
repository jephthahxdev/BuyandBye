<?php
/* Smarty version 5.5.1, created on 2025-06-22 16:48:36
  from 'file:checkout.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685825d4d4a9b9_14833086',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e77fc47b3ea1eb5aa2f27b043d998276a320fada' => 
    array (
      0 => 'checkout.tpl',
      1 => 1750607314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685825d4d4a9b9_14833086 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2081597467685825d4d3e4f2_13731608', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/app.tpl", $_smarty_current_dir);
}
/* {block "content"} */
class Block_2081597467685825d4d3e4f2_13731608 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?>

    <section class="relative w-full h-[500px] flex items-center justify-center">
        <img src="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('asset')->handle(array('path'=>'/images/page-header.jpg'), $_smarty_tpl);?>
" alt="Artisanal ceramic bowls and pottery"
            class="absolute inset-0 w-full h-full object-cover" />
        <!-- Glass container at bottom left -->
        <div class="absolute bottom-8 left-8 p-8 rounded-2xl max-w-md">
            <h1 class="text-4xl md:text-7xl font-serif mb-4 tracking-wide text-gray-900">CHECKOUT</h1>
            <p class="text-lg md:text-base font-light opacity-90 text-black">Please fill in the details below to complete
                your order</p>
        </div>
    </section>

    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Progress Steps -->
            <div class="mb-12">
                <div class="flex items-center justify-center space-x-8">
                    <!-- Cart Step -->
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center w-8 h-8 bg-gray-200 text-gray-500 rounded-full text-sm font-medium">
                            1
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-500">Cart</span>
                    </div>

                    <!-- Arrow -->
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>

                    <!-- Checkout Step -->
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center w-8 h-8 bg-black text-white rounded-full text-sm font-medium">
                            2
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-900">Checkout</span>
                    </div>

                    <!-- Arrow -->
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>

                    <!-- Payment Step -->
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center w-8 h-8 bg-gray-200 text-gray-500 rounded-full text-sm font-medium">
                            3
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-500">Payment</span>
                    </div>
                </div>
            </div>

            <div class="lg:grid lg:grid-cols-12 lg:gap-12">
                <!-- Cart Items Section -->
                <div class="lg:col-span-8">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <!-- Cart Header -->
                        <div class="flex items-center justify-between mb-6">
                            <h1 class="text-2xl font-medium text-gray-900">Billing information</h1>
                            <button class="text-gray-500 hover:text-red-600 text-sm font-medium flex items-center gap-2"
                                onclick="window.location.href='/cart'">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Go back
                            </button>
                        </div>

                        <form id="checkout-form" action="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('url')->handle(array('path'=>'checkout'), $_smarty_tpl);?>
" method="POST">
                            <input type="hidden" name="_token" value="<?php echo $_smarty_tpl->getValue('csrf_token');?>
">
                            <input type="hidden" name="billing_address_id" id="billing_address_id" value="">

                            <?php if ($_smarty_tpl->getValue('is_logged_in') && !( !$_smarty_tpl->hasVariable('billing_addresses') || empty($_smarty_tpl->getValue('billing_addresses')))) {?>
                                <!-- Address Selection -->
                                <div class="mb-6">
                                    <h2 class="text-lg font-medium text-gray-900 mb-4">Choose a billing address</h2>
                                    <div class="space-y-3">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('billing_addresses'), 'address');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('address')->value) {
$foreach0DoElse = false;
?>
                                            <div class="border rounded-lg p-4 <?php if ($_smarty_tpl->getValue('address')['is_default']) {?>border-gray-600 bg-gray-50<?php } else { ?>border-gray-200 bg-white<?php }?>">
                                                <div class="flex items-start">
                                                    <input type="radio" name="selected_address" value="<?php echo $_smarty_tpl->getValue('address')['id'];?>
" 
                                                        <?php if ($_smarty_tpl->getValue('address')['is_default']) {?>checked<?php }?>
                                                        class="mt-1 mr-3" onchange="selectAddress(<?php echo $_smarty_tpl->getValue('address')['id'];?>
)">
                                                    <div class="flex-1">
                                                        <div class="flex items-center mb-1">
                                                            <?php if ($_smarty_tpl->getValue('address')['is_default']) {?>
                                                                <span class="inline-block bg-gray-600 text-white text-xs px-2 py-1 rounded mr-2">Default</span>
                                                            <?php }?>
                                                            <span class="font-semibold text-gray-900"><?php echo $_smarty_tpl->getValue('address')['name'];?>
</span>
                                                            <?php if ($_smarty_tpl->getValue('address')['company']) {?>
                                                                <span class="inline-block bg-gray-100 rounded-full px-2 py-1 ml-2 text-gray-700 text-xs"><?php echo $_smarty_tpl->getValue('address')['company'];?>
</span>
                                                            <?php }?>
                                                        </div>
                                                        <div class="text-sm text-gray-700">
                                                            <?php echo $_smarty_tpl->getValue('address')['address'];?>
<br>
                                                            <?php echo $_smarty_tpl->getValue('address')['city'];?>
, <?php echo $_smarty_tpl->getValue('address')['state'];?>
 <?php echo $_smarty_tpl->getValue('address')['zip'];?>
<br>
                                                            <?php echo $_smarty_tpl->getValue('address')['country'];?>
<br>
                                                            Phone: <?php echo $_smarty_tpl->getValue('address')['phone'];?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </div>

                                    <button type="button" onclick="showNewAddressForm()" class="mt-4 text-sm font-medium text-gray-600 hover:text-blue-500">
                                        + Use a different address
                                    </button>
                                </div>
                            <?php }?>

                            <!-- Billing Details Form -->
                            <div id="new-address-form" class="<?php if ($_smarty_tpl->getValue('is_logged_in') && !( !$_smarty_tpl->hasVariable('billing_addresses') || empty($_smarty_tpl->getValue('billing_addresses')))) {?>hidden<?php }?> mt-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                        <input type="text" name="name" required value="<?php echo (($tmp = $_smarty_tpl->getValue('user')['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                        <input type="email" name="email" required value="<?php echo (($tmp = $_smarty_tpl->getValue('user')['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Company (Optional)</label>
                                        <input type="text" name="company"
                                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                                        <input type="text" name="address" required
                                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                                        <input type="text" name="city" required
                                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">State</label>
                                        <input type="text" name="state" required
                                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div class="md:col-span-2">
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Zip</label>
                                        <input type="text" name="zip" required
                                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                                        <select name="country" required
                                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                            <option value="Nigeria" selected>Nigeria</option>
                                            <option value="United States">United States</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="France">France</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Canada">Canada</option>
                                        </select>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                        <input type="text" id="phone_number" name="phone_number"
                                            class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent" required>
                                    </div>
                                </div>
                                <button type="submit"
                                    class="mt-8 w-full bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                                    Continue to payment
                                </button>
                            </div>
                        </form>

                        <button id="continue-to-payment-btn"
                            class="mt-8 w-full bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors hidden"
                            onclick="continueToPayment(); return false;">
                            Continue to payment
                        </button>

                        <?php if (!$_smarty_tpl->getValue('is_logged_in')) {?>
                            <!-- Already have an account? -->
                            <div class="mt-6 text-center">
                                <span class="text-gray-600">Already have an account?</span>
                                <a href="/login" class="ml-2 text-black font-medium hover:underline">Sign in instead</a>
                            </div>
                        <?php }?>
                    </div>
                </div>

                <!-- Order Summary Section -->
                <div class="lg:col-span-4 mt-8 lg:mt-0">
                    <div class="bg-white rounded-lg shadow-sm">
                        <!-- Order summary Section -->
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-gray-900">Order summary</h3>
                                <button class="text-gray-500 text-sm flex items-center gap-2 underline"
                                    onclick="window.location.href='/cart'">
                                    Edit
                                </button>
                            </div>
                        </div>

                        <!-- Order Summary -->
                        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
                            <!-- Cart Items -->
                            <div class="p-6">
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('cart')) > 0) {?>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('cart'), 'item', true, 'product_id');
$_smarty_tpl->getVariable('item')->iteration = 0;
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('product_id')->value => $_smarty_tpl->getVariable('item')->value) {
$foreach1DoElse = false;
$_smarty_tpl->getVariable('item')->iteration++;
$_smarty_tpl->getVariable('item')->last = $_smarty_tpl->getVariable('item')->iteration === $_smarty_tpl->getVariable('item')->total;
$foreach1Backup = clone $_smarty_tpl->getVariable('item');
?>
                                        <div class="flex items-start space-x-2 justify-between pb-6 <?php if (!$_smarty_tpl->getVariable('item')->last) {?>border-b border-gray-200<?php }?> relative">
                                            <div class="flex-shrink-0">
                                                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('item')['image'] ?? null))) && $_smarty_tpl->getValue('item')['image']) {?>
                                                    <img src="<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('asset')->handle(array('path'=>$_smarty_tpl->getValue('item')['image']), $_smarty_tpl);?>
" alt="<?php echo (($tmp = $_smarty_tpl->getValue('item')['name'] ?? null)===null||$tmp==='' ? 'Product' ?? null : $tmp);?>
" class="w-20 h-20 object-cover rounded-lg">
                                                <?php } else { ?>
                                                    <div class="w-20 h-20 bg-gray-100 rounded-lg flex items-center justify-center">
                                                        <div class="w-12 h-12 bg-gray-200 rounded"></div>
                                                    </div>
                                                <?php }?>
                                            </div>

                                            <div class="flex-1">
                                                <h3 class="font-semibold text-base text-gray-900"><?php echo (($tmp = $_smarty_tpl->getValue('item')['name'] ?? null)===null||$tmp==='' ? 'Product' ?? null : $tmp);?>
</h3>
                                                <?php if ((true && (true && null !== ($_smarty_tpl->getValue('item')['size'] ?? null))) && $_smarty_tpl->getValue('item')['size']) {?>
                                                    <p class="text-gray-600 text-sm mb-3"><?php echo $_smarty_tpl->getValue('item')['size'];?>
</p>
                                                <?php }?>

                                                <div class="flex items-center justify-between mt-3">
                                                    <div class="flex items-center">
                                                        <span class="text-gray-600 text-sm">Qty</span>
                                                        <span class="underline px-2 py-1 text-sm"><?php echo (($tmp = $_smarty_tpl->getValue('item')['quantity'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp);?>
</span>
                                                    </div>
                                                    <span class="text-base font-semibold text-gray-900">₦<?php echo ((($tmp = $_smarty_tpl->getValue('item')['price'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp))*sprintf("%.2f",((($tmp = $_smarty_tpl->getValue('item')['quantity'] ?? null)===null||$tmp==='' ? 1 ?? null : $tmp)));?>
</span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php
$_smarty_tpl->setVariable('item', $foreach1Backup);
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                <?php } else { ?>
                                    <div class="text-center py-8">
                                        <p class="text-gray-500">No items in cart</p>
                                    </div>
                                <?php }?>
                            </div>

                            <!-- Discount Code Section -->
                            <div class="px-6 py-4">
                                <h4 class="font-medium text-gray-900 pb-2">Discount code</h4>
                                <div class="flex space-x-2">
                                    <input type="text" placeholder="Type here..."
                                        class="flex-1 px-2 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    <button
                                        class="bg-black text-white px-6 py-2 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                                        Apply
                                    </button>
                                </div>
                            </div>

                            <!-- Order Summary -->
                            <div class="px-6 py-6 bg-gray-50 border-t border-gray-200">
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Subtotal</span>
                                        <span class="font-semibold">₦<?php echo sprintf("%.2f",(($tmp = $_smarty_tpl->getValue('cart_subtotal') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp));?>
</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Shipping</span>
                                        <span class="font-semibold text-green-600">Free</span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center space-x-1">
                                            <span class="text-gray-600">Tax</span>
                                            <i class="fas fa-info-circle text-gray-400 text-xs"></i>
                                        </div>
                                        <span class="font-semibold">₦<?php echo sprintf("%.2f",(((($tmp = $_smarty_tpl->getValue('cart_subtotal') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp))*0.075));?>
</span>
                                    </div>
                                    <hr class="border-gray-300">
                                    <div class="flex justify-between items-center text-xl font-bold">
                                        <span>Total</span>
                                        <span>₦<?php echo sprintf("%.2f",(((($tmp = $_smarty_tpl->getValue('cart_subtotal') ?? null)===null||$tmp==='' ? 0 ?? null : $tmp))*1.075));?>
</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php echo '<script'; ?>
 src="/js/checkout.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
