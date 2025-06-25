<?php
/* Smarty version 5.5.1, created on 2025-06-25 23:54:01
  from 'file:admin/orders-single.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685c7e096bf3d8_18009865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd4d4dec7c44a098afe07129ec040b5774f19606' => 
    array (
      0 => 'admin/orders-single.tpl',
      1 => 1750891796,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/admin-sidebar.tpl' => 1,
  ),
))) {
function content_685c7e096bf3d8_18009865 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_814076495685c7e096aac12_66545498', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1725660510685c7e096abe99_49244030', "head");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1260519082685c7e096ac3c5_71052183', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_814076495685c7e096aac12_66545498 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/admin';
?>
Order #<?php echo (($tmp = $_smarty_tpl->getValue('order')['number'] ?? null)===null||$tmp==='' ? '1234' ?? null : $tmp);?>
 - Buyandbye<?php
}
}
/* {/block "title"} */
/* {block "head"} */
class Block_1725660510685c7e096abe99_49244030 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/admin';
?>

    <meta name="csrf-token" content="<?php echo $_smarty_tpl->getValue('csrf_token');?>
">
<?php
}
}
/* {/block "head"} */
/* {block "content"} */
class Block_1260519082685c7e096ac3c5_71052183 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/admin';
?>


    <div class="bg-gray-50 min-h-screen py-8 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-6">
                        <nav class="flex mb-6 overflow-x-auto" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-4 min-w-max">
                    <li>
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
" class="text-gray-500 hover:text-gray-700 flex items-center">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                            </svg>
                            Home
                        </a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/admin/dashboard" class="ml-4 text-gray-500 hover:text-gray-700">Admin
                            Dashboard</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/admin/orders" class="ml-4 text-gray-500 hover:text-gray-700">Orders</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-4 text-black font-medium">Order #<?php echo (($tmp = $_smarty_tpl->getValue('order')['number'] ?? null)===null||$tmp==='' ? '1234' ?? null : $tmp);?>
</span>
                    </li>
                </ol>
            </nav>

            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8" data-order-id="<?php echo $_smarty_tpl->getValue('order')['id'];?>
">
                                <div class="w-full lg:w-80 lg:h-[60%] bg-white flex-shrink-0 rounded-lg border border-gray-200">
                                        <div class="p-4 md:p-6 mb-4 md:mb-6 border-b border-gray-200">
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 md:w-12 md:h-12 bg-gray-800 rounded-full flex items-center justify-center text-white font-semibold text-base md:text-lg mr-3 md:mr-4">
                                <?php echo mb_strtoupper((string) substr((string) $_smarty_tpl->getValue('user')['name'], (int) 0, (int) 2) ?? '', 'UTF-8');?>

                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="font-semibold text-black text-sm md:text-base truncate"><?php echo $_smarty_tpl->getValue('user')['name'];?>
</h3>
                                <p class="text-gray-600 text-xs md:text-sm truncate"><?php echo $_smarty_tpl->getValue('user')['email'];?>
</p>
                            </div>
                            <button class="ml-2 md:ml-auto">
                                <svg class="w-4 h-4 md:w-5 md:h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                                        <?php $_smarty_tpl->renderSubTemplate("file:partials/admin-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active_page'=>"orders"), (int) 0, $_smarty_current_dir);
?>
                </div>

                                <div class="flex-1">
                    <div class="bg-white rounded-lg p-4 md:p-6 border border-gray-200">
                                                <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 md:mb-8 gap-4">
                            <h1 class="text-2xl md:text-3xl font-bold text-gray-900">Order #<?php echo (($tmp = $_smarty_tpl->getValue('order')['number'] ?? null)===null||$tmp==='' ? '1234' ?? null : $tmp);?>
</h1>
                            <div class="flex items-center space-x-2 md:space-x-3">
                                <button class="p-2 text-gray-400 hover:text-gray-600 border border-gray-300 rounded-lg">
                                    <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                </button>
                                <button id="cancel-order-btn"
                                    class="px-3 md:px-4 py-2 text-xs md:text-sm text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                                    Cancel Order
                                </button>
                                <button id="save-order-btn"
                                    class="px-3 md:px-4 py-2 text-xs md:text-sm text-white bg-black rounded-lg hover:bg-gray-800 disabled:opacity-50 disabled:cursor-not-allowed">
                                    <span class="save-text">Save Changes</span>
                                    <span class="saving-text hidden">Saving...</span>
                                </button>
                            </div>
                        </div>
                                                <div class="grid grid-cols-1 lg:grid-cols-5 gap-6 md:gap-8">
                                                        <div class="lg:col-span-2 space-y-4 md:space-y-6">
                                                                <div class="bg-white rounded-lg border border-gray-200 p-4 md:p-6">
                                    <label class="block text-sm font-medium text-gray-700 mb-3">Payment status</label>
                                    <div class="relative">
                                        <select id="payment-status-select"
                                            class="w-full p-3 border border-gray-300 rounded-lg bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm md:text-base">
                                            <option value="paid" <?php if ($_smarty_tpl->getValue('order')['payment_status'] == 'paid') {?>selected<?php }?>>Paid
                                            </option>
                                            <option value="pending" <?php if ($_smarty_tpl->getValue('order')['payment_status'] == 'pending') {?>selected<?php }?>>
                                                Pending</option>
                                            <option value="failed" <?php if ($_smarty_tpl->getValue('order')['payment_status'] == 'failed') {?>selected<?php }?>>
                                                Failed</option>
                                            <option value="refunded" <?php if ($_smarty_tpl->getValue('order')['payment_status'] == 'refunded') {?>selected<?php }?>>
                                                Refunded</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                            <svg class="w-4 h-4 md:w-5 md:h-5 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-3">
                                        <span id="payment-status-indicator"
                                            class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                        <span id="payment-status-text" class="text-xs md:text-sm text-green-700">Paid</span>
                                    </div>
                                </div>
                                                                <div class="bg-white rounded-lg border border-gray-200 p-4 md:p-6">
                                    <label class="block text-sm font-medium text-gray-700 mb-3">Order status</label>
                                    <div class="relative">
                                        <select id="order-status-select"
                                            class="w-full p-3 border border-gray-300 rounded-lg bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500 text-sm md:text-base">
                                            <option value="pending" <?php if ($_smarty_tpl->getValue('order')['order_status'] == 'pending') {?>selected<?php }?>>
                                                Pending</option>
                                            <option value="processing"
                                                <?php if ($_smarty_tpl->getValue('order')['order_status'] == 'processing') {?>selected<?php }?>>Processing</option>
                                            <option value="shipped" <?php if ($_smarty_tpl->getValue('order')['order_status'] == 'shipped') {?>selected<?php }?>>
                                                Shipped</option>
                                            <option value="delivered" <?php if ($_smarty_tpl->getValue('order')['order_status'] == 'delivered') {?>selected<?php }?>>
                                                Delivered</option>
                                            <option value="cancelled" <?php if ($_smarty_tpl->getValue('order')['order_status'] == 'cancelled') {?>selected<?php }?>>
                                                Cancelled</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                            <svg class="w-4 h-4 md:w-5 md:h-5 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <span id="order-status-badge"
                                            class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Processing
                                        </span>
                                    </div>
                                </div>
                            </div>
                                                        <div class="lg:col-span-3 space-y-4 md:space-y-6">
                                                                <div class="bg-white rounded-lg border border-gray-200 p-4 md:p-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                                                                                <div>
                                            <label class="block text-xs md:text-sm font-medium text-gray-500 mb-1">Date of sale</label>
                                            <p class="text-sm md:text-base text-gray-900"><?php echo (($tmp = $_smarty_tpl->getValue('order')['date_of_sale'] ?? null)===null||$tmp==='' ? '09/30/2022' ?? null : $tmp);?>
</p>
                                        </div>
                                        <div>
                                            <label class="block text-xs md:text-sm font-medium text-gray-500 mb-1">Account
                                                number</label>
                                            <p class="text-sm md:text-base text-gray-900"><?php echo (($tmp = $_smarty_tpl->getValue('order')['account_number'] ?? null)===null||$tmp==='' ? '12345678912' ?? null : $tmp);?>
</p>
                                        </div>
                                                                                <div>
                                            <label class="block text-xs md:text-sm font-medium text-gray-500 mb-1">Customer
                                                address</label>
                                            <p class="text-sm md:text-base text-gray-900">
                                                <?php echo (($tmp = $_smarty_tpl->getValue('order')['customer_address'] ?? null)===null||$tmp==='' ? '123 Main St, Burlington, ON' ?? null : $tmp);?>
</p>
                                        </div>
                                        <div>
                                            <label class="block text-xs md:text-sm font-medium text-gray-500 mb-1">City</label>
                                            <p class="text-sm md:text-base text-gray-900"><?php echo (($tmp = $_smarty_tpl->getValue('order')['city'] ?? null)===null||$tmp==='' ? 'Toronto' ?? null : $tmp);?>
</p>
                                        </div>
                                                                                <div>
                                            <label class="block text-xs md:text-sm font-medium text-gray-500 mb-1">Province</label>
                                            <p class="text-sm md:text-base text-gray-900"><?php echo (($tmp = $_smarty_tpl->getValue('order')['province'] ?? null)===null||$tmp==='' ? 'Ontario' ?? null : $tmp);?>
</p>
                                        </div>
                                        <div>
                                            <label class="block text-xs md:text-sm font-medium text-gray-500 mb-1">Postal code</label>
                                            <p class="text-sm md:text-base text-gray-900"><?php echo (($tmp = $_smarty_tpl->getValue('order')['postal_code'] ?? null)===null||$tmp==='' ? '123456' ?? null : $tmp);?>
</p>
                                        </div>
                                                                                <div>
                                            <label class="block text-xs md:text-sm font-medium text-gray-500 mb-1">Customer full
                                                name</label>
                                            <p class="text-sm md:text-base text-gray-900"><?php echo (($tmp = $_smarty_tpl->getValue('order')['customer_name'] ?? null)===null||$tmp==='' ? 'John Smith' ?? null : $tmp);?>
</p>
                                        </div>
                                        <div>
                                            <label class="block text-xs md:text-sm font-medium text-gray-500 mb-1">Customer phone
                                                number</label>
                                            <p class="text-sm md:text-base text-gray-900"><?php echo (($tmp = $_smarty_tpl->getValue('order')['customer_phone'] ?? null)===null||$tmp==='' ? '+1 111 111 1234' ?? null : $tmp);?>
</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                <div class="mt-6 md:mt-8 bg-white rounded-lg border border-gray-200 p-4 md:p-6">
                            <div class="flex flex-col sm:flex-row sm:justify-between sm:items-center mb-4 md:mb-6 gap-2">
                                <h3 class="text-base md:text-lg font-medium text-gray-900">Items</h3>
                                <div class="flex space-x-4 md:space-x-8">
                                    <span class="text-xs md:text-sm font-medium text-gray-500">Quantity</span>
                                    <span class="text-xs md:text-sm font-medium text-gray-500">Total</span>
                                </div>
                            </div>
                                                        <div class="space-y-3 md:space-y-4">
                                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('order')['items'], 'item');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('item')->value) {
$foreach0DoElse = false;
?>
                                    <div
                                        class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 md:py-4 border-b border-gray-100 last:border-b-0 gap-3">
                                        <div class="flex items-center space-x-3 md:space-x-4">
                                            <div class="w-12 h-12 md:w-16 md:h-16 bg-gray-100 rounded-lg overflow-hidden flex-shrink-0">
                                                <img src="<?php echo (($tmp = $_smarty_tpl->getValue('item')['image'] ?? null)===null||$tmp==='' ? '/images/placeholder.jpg' ?? null : $tmp);?>
" alt="<?php echo $_smarty_tpl->getValue('item')['name'];?>
"
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div class="min-w-0 flex-1">
                                                <h4 class="font-medium text-gray-900 text-sm md:text-base truncate"><?php echo $_smarty_tpl->getValue('item')['name'];?>
</h4>
                                                <p class="text-xs md:text-sm text-gray-500">₦<?php echo sprintf("%.2f",$_smarty_tpl->getValue('item')['price']);?>
</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between sm:justify-end space-x-4 md:space-x-8">
                                            <span class="text-sm md:text-base text-gray-900">x<?php echo $_smarty_tpl->getValue('item')['quantity'];?>
</span>
                                            <span
                                                class="font-medium text-sm md:text-base text-gray-900 min-w-[60px] md:min-w-[80px] text-right">₦<?php echo sprintf("%.2f",$_smarty_tpl->getValue('item')['total']);?>
</span>
                                        </div>
                                    </div>
                                <?php
}
if ($foreach0DoElse) {
?>
                                                                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 md:py-4 border-b border-gray-100 gap-3">
                                        <div class="flex items-center space-x-3 md:space-x-4">
                                            <div class="w-12 h-12 md:w-16 md:h-16 bg-gray-300 rounded-lg flex-shrink-0"></div>
                                            <div class="min-w-0 flex-1">
                                                <h4 class="font-medium text-gray-900 text-sm md:text-base">YESA HOODIE</h4>
                                                <p class="text-xs md:text-sm text-gray-500">₦17,12</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between sm:justify-end space-x-4 md:space-x-8">
                                            <span class="text-sm md:text-base text-gray-900">x1</span>
                                            <span class="font-medium text-sm md:text-base text-gray-900 min-w-[60px] md:min-w-[80px] text-right">₦17,12</span>
                                        </div>
                                    </div>
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between py-3 md:py-4 gap-3">
                                        <div class="flex items-center space-x-3 md:space-x-4">
                                            <div class="w-12 h-12 md:w-16 md:h-16 bg-gray-800 rounded-lg flex-shrink-0"></div>
                                            <div class="min-w-0 flex-1">
                                                <h4 class="font-medium text-gray-900 text-sm md:text-base">YESA HOODIE BLACK</h4>
                                                <p class="text-xs md:text-sm text-gray-500">₦17,12</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center justify-between sm:justify-end space-x-4 md:space-x-8">
                                            <span class="text-sm md:text-base text-gray-900">x3</span>
                                            <span class="font-medium text-sm md:text-base text-gray-900 min-w-[60px] md:min-w-[80px] text-right">₦51,36</span>
                                        </div>
                                    </div>
                                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                            </div>
                                                        <div class="mt-4 md:mt-6 pt-4 md:pt-6 border-t border-gray-200">
                                <div class="space-y-2 md:space-y-3">
                                    <div class="flex justify-between text-xs md:text-sm">
                                        <span class="text-gray-600">Price</span>
                                        <span class="text-gray-900">₦<?php echo (($tmp = $_smarty_tpl->getValue('order')['subtotal'] ?? null)===null||$tmp==='' ? '68,48' ?? null : $tmp);?>
</span>
                                    </div>
                                    <div class="flex justify-between text-xs md:text-sm">
                                        <span class="text-gray-600">Shipping</span>
                                        <span class="text-gray-900"><?php echo (($tmp = $_smarty_tpl->getValue('order')['shipping'] ?? null)===null||$tmp==='' ? 'Free' ?? null : $tmp);?>
</span>
                                    </div>
                                    <div class="flex justify-between text-xs md:text-sm">
                                        <span class="text-gray-600">VAT (7.5%)</span>
                                        <span class="text-gray-900">₦<?php echo (($tmp = $_smarty_tpl->getValue('order')['vat'] ?? null)===null||$tmp==='' ? '2,42' ?? null : $tmp);?>
</span>
                                    </div>
                                    <div class="flex justify-between text-base md:text-lg font-semibold pt-2 md:pt-3 border-t border-gray-200">
                                        <span class="text-gray-900">Total</span>
                                        <span class="text-gray-900">₦<?php echo (($tmp = $_smarty_tpl->getValue('order')['total'] ?? null)===null||$tmp==='' ? '70,09' ?? null : $tmp);?>
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
 src="/js/admin/orders-single.js"><?php echo '</script'; ?>
>
<?php
}
}
/* {/block "content"} */
}
