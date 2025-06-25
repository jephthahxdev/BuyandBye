<?php
/* Smarty version 5.5.1, created on 2025-06-25 23:58:35
  from 'file:admin/user-single.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685c7f1b850475_79993363',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '127b40685e4e1614ff3be52ecea09cfedc54fff5' => 
    array (
      0 => 'admin/user-single.tpl',
      1 => 1750892298,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/admin-sidebar.tpl' => 1,
  ),
))) {
function content_685c7f1b850475_79993363 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_672790282685c7f1b842e82_45359175', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_470448213685c7f1b843636_69301739', "content");
?>
 <?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_672790282685c7f1b842e82_45359175 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/admin';
?>
User Details - Buyandbye<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_470448213685c7f1b843636_69301739 extends \Smarty\Runtime\Block
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
                        <span class="ml-4 text-gray-500">Admin Dashboard</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/admin/users" class="ml-4 text-gray-500 hover:text-gray-700">Users</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-4 text-black font-medium truncate"><?php echo $_smarty_tpl->getValue('user_data')['name'];?>
</span>
                    </li>
                </ol>
            </nav>

            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
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

                                        <?php $_smarty_tpl->renderSubTemplate("file:partials/admin-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active_page'=>"users"), (int) 0, $_smarty_current_dir);
?>
                </div>

                                <div class="flex-1 space-y-4 md:space-y-6">
                                        <div class="bg-white rounded-lg border border-gray-200">
                        <div class="p-4 md:p-6 border-b border-gray-200">
                            <h2 class="text-lg md:text-xl font-bold text-black">User Profile</h2>
                        </div>
                        <div class="p-4 md:p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                                <div>
                                    <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-3 md:mb-4">Basic Information</h3>
                                    <div class="space-y-2 md:space-y-3">
                                        <div>
                                            <label class="text-xs md:text-sm font-medium text-gray-500">Name</label>
                                            <p class="text-xs md:text-sm text-gray-900 truncate"><?php echo $_smarty_tpl->getValue('user_data')['name'];?>
</p>
                                        </div>
                                        <div>
                                            <label class="text-xs md:text-sm font-medium text-gray-500">Email</label>
                                            <p class="text-xs md:text-sm text-gray-900 truncate"><?php echo $_smarty_tpl->getValue('user_data')['email'];?>
</p>
                                        </div>
                                        <div>
                                            <label class="text-xs md:text-sm font-medium text-gray-500">Joined</label>
                                            <p class="text-xs md:text-sm text-gray-900"><?php echo $_smarty_tpl->getValue('user_data')['created_at'];?>
</p>
                                        </div>
                                        <div>
                                            <label class="text-xs md:text-sm font-medium text-gray-500">Email Verification</label>
                                            <p class="text-xs md:text-sm text-gray-900"><?php echo $_smarty_tpl->getValue('user_data')['email_verified_at'];?>
</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-3 md:mb-4">Account Statistics</h3>
                                    <div class="space-y-2 md:space-y-3">
                                        <div>
                                            <label class="text-xs md:text-sm font-medium text-gray-500">Total Orders</label>
                                            <p class="text-xs md:text-sm font-semibold text-gray-900"><?php echo $_smarty_tpl->getValue('user_data')['orders_count'];?>
</p>
                                        </div>
                                        <div>
                                            <label class="text-xs md:text-sm font-medium text-gray-500">Total Spent</label>
                                            <p class="text-xs md:text-sm font-semibold text-gray-900">₦<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('user_data')['total_spent'],2);?>
</p>
                                        </div>
                                        <div>
                                            <label class="text-xs md:text-sm font-medium text-gray-500">Billing Addresses</label>
                                            <p class="text-xs md:text-sm font-semibold text-gray-900"><?php echo $_smarty_tpl->getValue('user_data')['billing_addresses_count'];?>
</p>
                                        </div>
                                        <div>
                                            <label class="text-xs md:text-sm font-medium text-gray-500">Payment Methods</label>
                                            <p class="text-xs md:text-sm font-semibold text-gray-900"><?php echo $_smarty_tpl->getValue('user_data')['payment_methods_count'];?>
</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                                        <?php if ($_smarty_tpl->getValue('user_data')['twitter_handle'] || $_smarty_tpl->getValue('user_data')['facebook_handle'] || $_smarty_tpl->getValue('user_data')['linkedin_handle']) {?>
                        <div class="bg-white rounded-lg border border-gray-200">
                            <div class="p-4 md:p-6 border-b border-gray-200">
                                <h2 class="text-lg md:text-xl font-bold text-black">Social Media</h2>
                            </div>
                            <div class="p-4 md:p-6">
                                <div class="flex flex-wrap gap-3 md:gap-4">
                                    <?php if ($_smarty_tpl->getValue('user_data')['twitter_handle']) {?>
                                        <a href="https://twitter.com/<?php echo $_smarty_tpl->getValue('user_data')['twitter_handle'];?>
" target="_blank" class="flex items-center text-blue-500 hover:text-blue-700 text-sm md:text-base">
                                            <svg class="w-4 h-4 md:w-5 md:h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                            </svg>
                                            <span class="truncate">@<?php echo $_smarty_tpl->getValue('user_data')['twitter_handle'];?>
</span>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('user_data')['facebook_handle']) {?>
                                        <a href="https://facebook.com/<?php echo $_smarty_tpl->getValue('user_data')['facebook_handle'];?>
" target="_blank" class="flex items-center text-blue-600 hover:text-blue-800 text-sm md:text-base">
                                            <svg class="w-4 h-4 md:w-5 md:h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                            </svg>
                                            <span class="truncate"><?php echo $_smarty_tpl->getValue('user_data')['facebook_handle'];?>
</span>
                                        </a>
                                    <?php }?>
                                    <?php if ($_smarty_tpl->getValue('user_data')['linkedin_handle']) {?>
                                        <a href="https://linkedin.com/in/<?php echo $_smarty_tpl->getValue('user_data')['linkedin_handle'];?>
" target="_blank" class="flex items-center text-blue-700 hover:text-blue-900 text-sm md:text-base">
                                            <svg class="w-4 h-4 md:w-5 md:h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                            </svg>
                                            <span class="truncate"><?php echo $_smarty_tpl->getValue('user_data')['linkedin_handle'];?>
</span>
                                        </a>
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    <?php }?>

                                        <?php if ($_smarty_tpl->getValue('user_data')['orders'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('user_data')['orders']) > 0) {?>
                        <div class="bg-white rounded-lg border border-gray-200">
                            <div class="p-4 md:p-6 border-b border-gray-200">
                                <h2 class="text-lg md:text-xl font-bold text-black">Recent Orders</h2>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order</th>
                                            <th class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                            <th class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                            <th class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user_data')['orders'], 'order');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('order')->value) {
$foreach0DoElse = false;
?>
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/admin/orders/<?php echo $_smarty_tpl->getValue('order')['id'];?>
" class="text-xs md:text-sm font-medium text-gray-900 hover:text-blue-800">
                                                        #<?php echo $_smarty_tpl->getValue('order')['order_number'];?>

                                                    </a>
                                                </td>
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    <span class="text-xs md:text-sm text-gray-600"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('order')['created_at'],"%b %d, %Y");?>
</span>
                                                </td>
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    <span class="text-xs md:text-sm font-semibold text-gray-900">₦<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('order')['total'],2);?>
</span>
                                                </td>
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    <?php if ($_smarty_tpl->getValue('order')['status'] == 'pending') {?>
                                                        <span class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Pending</span>
                                                    <?php } elseif ($_smarty_tpl->getValue('order')['status'] == 'processing') {?>
                                                        <span class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Processing</span>
                                                    <?php } elseif ($_smarty_tpl->getValue('order')['status'] == 'shipped') {?>
                                                        <span class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">Shipped</span>
                                                    <?php } elseif ($_smarty_tpl->getValue('order')['status'] == 'delivered') {?>
                                                        <span class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Delivered</span>
                                                    <?php } elseif ($_smarty_tpl->getValue('order')['status'] == 'cancelled') {?>
                                                        <span class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Cancelled</span>
                                                    <?php } else { ?>
                                                        <span class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800"><?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('order')['status']);?>
</span>
                                                    <?php }?>
                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    <?php }?>

                                        <?php if ($_smarty_tpl->getValue('user_data')['billing_addresses'] && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('user_data')['billing_addresses']) > 0) {?>
                        <div class="bg-white rounded-lg border border-gray-200">
                            <div class="p-4 md:p-6 border-b border-gray-200">
                                <h2 class="text-lg md:text-xl font-bold text-black">Billing Addresses</h2>
                            </div>
                            <div class="p-4 md:p-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 md:gap-6">
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('user_data')['billing_addresses'], 'address');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('address')->value) {
$foreach1DoElse = false;
?>
                                        <div class="border border-gray-200 rounded-lg p-3 md:p-4 <?php if ($_smarty_tpl->getValue('address')['is_default']) {?>bg-blue-50 border-blue-200<?php }?>">
                                            <?php if ($_smarty_tpl->getValue('address')['is_default']) {?>
                                                <div class="flex items-center mb-2">
                                                    <span class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Default</span>
                                                </div>
                                            <?php }?>
                                            <div class="space-y-1">
                                                <p class="text-xs md:text-sm text-gray-900"><?php echo $_smarty_tpl->getValue('address')['address_line_1'];?>
</p>
                                                <?php if ($_smarty_tpl->getValue('address')['address_line_2']) {?>
                                                    <p class="text-xs md:text-sm text-gray-900"><?php echo $_smarty_tpl->getValue('address')['address_line_2'];?>
</p>
                                                <?php }?>
                                                <p class="text-xs md:text-sm text-gray-900"><?php echo $_smarty_tpl->getValue('address')['city'];?>
, <?php echo $_smarty_tpl->getValue('address')['state'];?>
 <?php echo $_smarty_tpl->getValue('address')['postal_code'];?>
</p>
                                                <p class="text-xs md:text-sm text-gray-900"><?php echo $_smarty_tpl->getValue('address')['country'];?>
</p>
                                            </div>
                                        </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>

<?php
}
}
/* {/block "content"} */
}
