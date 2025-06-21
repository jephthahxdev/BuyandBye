<?php
/* Smarty version 5.5.1, created on 2025-06-20 22:35:30
  from 'file:billing.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6855e232a84719_82916128',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7656b19389d9f22262521c5a4a4c0830b7a85dff' => 
    array (
      0 => 'billing.tpl',
      1 => 1750458927,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/account-sidebar.tpl' => 1,
  ),
))) {
function content_6855e232a84719_82916128 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12793890466855e232a71373_40208941', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_21158718256855e232a72680_51610487', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_12793890466855e232a71373_40208941 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?>
Billing - Buyandbye<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_21158718256855e232a72680_51610487 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?>


    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

    <div class="bg-gray-50 min-h-screen py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
                        <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-4">
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
                        <span class="ml-4 text-gray-500">My account</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-4 text-black font-medium">Billing</span>
                    </li>
                </ol>
            </nav>

                        <h1 class="text-3xl font-bold text-black mb-8">Billing Details</h1>

            <div class="flex gap-8">
                                <div class="w-80 h-[60%] bg-white flex-shrink-0 rounded-lg border border-gray-200">
                                        <div class="p-6 mb-6 border-b border-gray-200">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center text-white font-semibold text-lg mr-4">
                                <?php echo mb_strtoupper((string) substr((string) $_smarty_tpl->getValue('user')['name'], (int) 0, (int) 2) ?? '', 'UTF-8');?>

                            </div>
                            <div>
                                <h3 class="font-semibold text-black"><?php echo $_smarty_tpl->getValue('user')['name'];?>
</h3>
                                <p class="text-gray-600 text-sm"><?php echo $_smarty_tpl->getValue('user')['email'];?>
</p>
                            </div>
                            <button class="ml-auto">
                                <svg class="w-5 h-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd" />
                                </svg>
                            </button>
                        </div>
                    </div>

                                        <?php $_smarty_tpl->renderSubTemplate("file:partials/account-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active_page'=>"billing"), (int) 0, $_smarty_current_dir);
?>
                </div>

                                <div class="flex-1">
                    <div class="bg-white rounded-lg border border-gray-200 mb-8">
                                                <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-black">Billing data</h2>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6 divide-x divide-gray-200">
                            <!-- Default Billing Address -->
                            <div class="pr-4">
                                <h3 class="text-lg font-semibold mb-4">Default billing address</h3>
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('billing_addresses')) == 0) {?>
                                    <div class="flex items-center justify-between bg-gray-50 rounded-lg px-4 py-3 mb-4">
                                        <span class="text-gray-700">There is no billing address yet</span>
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/account/billing/add" class="bg-gray-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-gray-700 transition">Add Billing Address</a>
                                    </div>
                                <?php } else { ?>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('billing_addresses'), 'address');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('address')->value) {
$foreach0DoElse = false;
?>
                                        <div class="border rounded-lg p-4 mb-4 <?php if ($_smarty_tpl->getValue('address')['is_default']) {?>border-gray-600 bg-gray-50<?php } else { ?>border-gray-200 bg-white<?php }?> flex items-start justify-between">
                                            <div>
                                                <div class="flex items-center mb-1">
                                                    <?php if ($_smarty_tpl->getValue('address')['is_default']) {?>
                                                        <svg class="w-5 h-5 text-gray-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                        </svg>
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
                                                    <?php echo $_smarty_tpl->getValue('address')['zip'];?>
 <?php echo $_smarty_tpl->getValue('address')['city'];?>
 - <?php echo $_smarty_tpl->getValue('address')['country'];?>

                                                </div>
                                            </div>
                                            <button class="ml-4 text-gray-400 hover:text-red-600" title="Delete">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                </svg>
                                            </button>
                                        </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    <a href="#billing-form" class="text-gray-700 font-medium mt-2 inline-block hover:underline">+ Add Billing Address</a>
                                <?php }?>
                            </div>

                            <!-- Default Payment Method -->
                            <div>
                                <h3 class="text-lg font-semibold mb-4">Default payment method</h3>
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('payment_methods')) == 0) {?>
                                    <div class="flex items-center justify-between bg-gray-50 rounded-lg px-4 py-3 mb-4">
                                        <span class="text-gray-700">There is no payment method yet</span>
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/account/payment/add" class="bg-gray-600 text-white px-4 py-2 rounded-lg font-medium shadow hover:bg-gray-700 transition">Add Payment Method</a>
                                    </div>
                                <?php } else { ?>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'method');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('method')->value) {
$foreach1DoElse = false;
?>
                                        <div class="border rounded-lg px-4 py-6 mb-4 <?php if ($_smarty_tpl->getValue('method')['is_default']) {?>border-gray-600 bg-gray-50<?php } else { ?>border-gray-200 bg-white<?php }?> flex items-center justify-between">
                                            <div class="flex items-center">
                                                <?php if ($_smarty_tpl->getValue('method')['is_default']) {?>
                                                    <svg class="w-5 h-5 text-gray-600 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                                    </svg>
                                                <?php }?>
                                                <span class="font-mono text-base tracking-widest">**** **** **** <?php echo $_smarty_tpl->getValue('method')['last4'];?>
</span>
                                                <span class="ml-2 text-xs text-gray-700 font-medium uppercase"><?php echo $_smarty_tpl->getValue('method')['brand'];?>
</span>
                                            </div>
                                            <button class="ml-4 text-gray-400 hover:text-red-600" title="Delete">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                                </svg>
                                            </button>
                                        </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                <?php }?>
                            </div>
                        </div>
                    </div>
                                        <div id="billing-form" class="mb-8 bg-white rounded-lg border border-gray-200 p-4 scroll-mt-24">
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex items-center">
                                <h2 class="text-xl font-bold text-black">Add billing address</h2>
                                <div class="ml-2 w-6 h-6 bg-gray-200 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="/account/billing" class="space-y-6 bg-white py-6 px-4">
                            <input type="hidden" name="_token" value="<?php echo $_smarty_tpl->getValue('csrf_token');?>
">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                <input type="text" name="name" required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" name="email" required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                                <input type="text" name="address" required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div class="flex space-x-4">
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                                    <input type="text" name="city" required
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">State</label>
                                    <input type="text" name="state" required
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Zip</label>
                                    <input type="text" name="zip" required
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                <input type="text" name="phone" required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <button type="submit"
                                class="w-full bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                                Submit
                            </button>
                        </form>
                    </div>

                                        <div class="mt-8 bg-white rounded-lg border border-gray-200">
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex items-center">
                                <h2 class="text-xl font-bold text-black">Active orders</h2>
                                <div class="ml-2 w-6 h-6 bg-gray-200 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        <?php if ($_smarty_tpl->getValue('active_orders')) {?>
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Order ID</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Date</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Price</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Status</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('active_orders'), 'order');
$foreach2DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('order')->value) {
$foreach2DoElse = false;
?>
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="text-sm font-medium text-black"><?php echo $_smarty_tpl->getValue('order')['id'];?>
</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="text-sm text-gray-600"><?php echo $_smarty_tpl->getValue('order')['date'];?>
</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="text-sm font-semibold text-black"><?php echo $_smarty_tpl->getValue('order')['price'];?>
</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <?php if ($_smarty_tpl->getValue('order')['status'] == 'in_transit') {?>
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            In transit
                                                        </span>
                                                    <?php } elseif ($_smarty_tpl->getValue('order')['status'] == 'preorder') {?>
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Preorder
                                                        </span>
                                                    <?php } elseif ($_smarty_tpl->getValue('order')['status'] == 'completed') {?>
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Completed
                                                        </span>
                                                    <?php }?>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="relative">
                                                        <button class="text-gray-400 hover:text-gray-600"
                                                            onclick="toggleDropdown('dropdown-<?php echo $_smarty_tpl->getValue('order')['id'];?>
')">
                                                            <span class="sr-only">Actions</span>
                                                            <span class="text-sm font-medium">Actions</span>
                                                            <svg class="w-4 h-4 inline ml-1" fill="currentColor"
                                                                viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                        </button>
                                                        <div id="dropdown-<?php echo $_smarty_tpl->getValue('order')['id'];?>
"
                                                            class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-lg z-10 border border-gray-200">
                                                            <div class="py-1">
                                                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/orders/<?php echo $_smarty_tpl->getValue('order')['id'];?>
"
                                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">View
                                                                    details</a>
                                                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/orders/<?php echo $_smarty_tpl->getValue('order')['id'];?>
/track"
                                                                    class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Track
                                                                    order</a>
                                                                <?php if ($_smarty_tpl->getValue('order')['status'] != 'completed') {?>
                                                                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/orders/<?php echo $_smarty_tpl->getValue('order')['id'];?>
/cancel"
                                                                        class="block px-4 py-2 text-sm text-red-600 hover:bg-red-50">Cancel
                                                                        order</a>
                                                                <?php }?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        <?php } else { ?>
                            <div class="p-12 text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">No active orders</h3>
                            <p class="text-gray-600 mb-4">You don't have any active orders at the moment.</p>
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/shop"
                            class="inline-flex items-center px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800">
                            <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                            Start shopping
                        </a>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>

<?php echo '<script'; ?>
>
    function toggleDropdown(id) {
        const dropdown = document.getElementById(id);
        const allDropdowns = document.querySelectorAll('[id^="dropdown-"]');

        // Close all other dropdowns
        allDropdowns.forEach(dd => {
            if (dd.id !== id) {
                dd.classList.add('hidden');
            }
        });

        // Toggle current dropdown
        dropdown.classList.toggle('hidden');
    }

    // Close dropdowns when clicking outside
    document.addEventListener('click', function(event) {
        if (!event.target.closest('[onclick*="toggleDropdown"]')) {
            const allDropdowns = document.querySelectorAll('[id^="dropdown-"]');
            allDropdowns.forEach(dd => {
                dd.classList.add('hidden');
                });
            }
        });
    <?php echo '</script'; ?>
>

<?php
}
}
/* {/block "content"} */
}
