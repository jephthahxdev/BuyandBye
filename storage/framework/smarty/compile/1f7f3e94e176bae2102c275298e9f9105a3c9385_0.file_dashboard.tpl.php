<?php
/* Smarty version 5.5.1, created on 2025-06-23 16:40:22
  from 'file:dashboard.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685975661956b3_66919890',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1f7f3e94e176bae2102c275298e9f9105a3c9385' => 
    array (
      0 => 'dashboard.tpl',
      1 => 1750693218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/account-sidebar.tpl' => 1,
  ),
))) {
function content_685975661956b3_66919890 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_128442973168597566180f13_46635250', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_182627464868597566181809_19522203', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_128442973168597566180f13_46635250 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?>
Accounts - Buyandbye<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_182627464868597566181809_19522203 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?>


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
                        <span class="ml-4 text-black font-medium">Overview</span>
                    </li>
                </ol>
            </nav>

                        <h1 class="text-3xl font-bold text-black mb-8">My account</h1>

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

                                        <?php $_smarty_tpl->renderSubTemplate("file:partials/account-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active_page'=>"overview"), (int) 0, $_smarty_current_dir);
?>
                </div>

                                <div class="flex-1">
                                        <div class="grid grid-cols-4 gap-6 mb-8 bg-white rounded-lg border border-gray-200 p-4">
                        <div class="flex items-center">
                            <div class="p-3 bg-gray-100 rounded-lg">
                                <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-600">Total Orders</p>
                                <p class="text-2xl font-bold text-black"><?php echo $_smarty_tpl->getValue('stats')['total_orders'];?>
</p>
                            </div>
                        </div>


                        <div class="flex items-center">
                            <div class="p-3 bg-gray-100 rounded-lg">
                                <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-600">Orders processing</p>
                                <p class="text-2xl font-bold text-black"><?php echo $_smarty_tpl->getValue('stats')['orders_processing'];?>
</p>
                            </div>
                        </div>


                        <div class="flex items-center">
                            <div class="p-3 bg-gray-100 rounded-lg">
                                <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-600">Completed Orders</p>
                                <p class="text-2xl font-bold text-black"><?php echo $_smarty_tpl->getValue('stats')['orders_completed'];?>
</p>
                            </div>
                        </div>

                        <div class="flex items-center">
                            <div class="p-3 bg-gray-100 rounded-lg">
                                <svg class="w-6 h-6 text-gray-600" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                        clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="ml-4">
                                <p class="text-sm text-gray-600">Cancelled Orders</p>
                                <p class="text-2xl font-bold text-black"><?php echo $_smarty_tpl->getValue('stats')['orders_cancelled'];?>
</p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white rounded-lg border border-gray-200">
                        
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-black">Account data</h2>
                        </div>
                        <div class="grid grid-cols-2 gap-8 ">
                            <div class="p-6">
                                <div class="flex items-start mb-6">
                                    <div class="w-16 h-16 bg-gray-200 rounded-lg overflow-hidden mr-4">
                                        <?php if ($_smarty_tpl->getValue('account')['avatar']) {?>
                                            <img src="<?php echo $_smarty_tpl->getValue('account')['avatar'];?>
" alt="<?php echo $_smarty_tpl->getValue('account')['name'];?>
"
                                                class="w-full h-full object-cover">
                                        <?php } else { ?>
                                            <div class="w-full h-full bg-gray-300 flex items-center justify-center">
                                                <svg class="w-8 h-8 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                                    <path fill-rule="evenodd"
                                                        d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </div>
                                        <?php }?>
                                    </div>
                                    <div class="flex-1">
                                        <span
                                            class="inline-block bg-gray-100 text-gray-800 text-xs px-2 py-1 rounded-full mb-2">Essentials</span>
                                        <h3 class="text-lg font-semibold text-black"><?php echo $_smarty_tpl->getValue('account')['name'];?>
</h3>
                                    </div>
                                </div>
                                <div class="space-y-4">
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Email
                                            Address</label>
                                        <p class="text-gray-600"><?php echo $_smarty_tpl->getValue('account')['email'];?>
</p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Delivery
                                            Address</label>
                                        <p class="text-gray-600"><?php echo $_smarty_tpl->getValue('account')['address'];?>
</p>
                                    </div>
                                    <div>
                                        <label class="block text-sm font-medium text-gray-700 mb-1">Phone Number</label>
                                        <p class="text-gray-600"><?php echo $_smarty_tpl->getValue('account')['phone'];?>
</p>
                                    </div>
                                </div>
                            </div>
                                                        <div class="p-6">
                                <div class="flex items-center mb-4">
                                    <div class="w-8 h-8 bg-gray-600 rounded flex items-center justify-center mr-3">
                                        <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h3 class="text-lg font-semibold text-black">Buyandbye.</h3>
                                        <span class="bg-gray-800 text-white text-xs px-2 py-1 rounded">PRO</span>
                                    </div>
                                </div>
                                <div class="mb-6">
                                    <p class="text-2xl font-bold text-black">Smile, be happy, be healthy.</p>
                                </div>
                                <div class="mb-6">
                                    <h4 class="font-semibold text-black mb-3">PRO skin benefits</h4>
                                    <ul class="space-y-2">
                                        <li class="flex items-center text-sm text-gray-600">
                                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Free shipping all over the country
                                        </li>
                                        <li class="flex items-center text-sm text-gray-600">
                                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Testing the product for 5 days
                                        </li>
                                        <li class="flex items-center text-sm text-gray-600">
                                            <svg class="w-4 h-4 text-green-500 mr-2" fill="currentColor"
                                                viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            Exclusive offers
                                        </li>
                                    </ul>
                                </div>
                                <button
                                    class="w-full bg-black text-white py-2 px-4 rounded-lg hover:bg-gray-800 flex items-center justify-center">
                                    <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Subscribe to PRO
                                </button>
                            </div>
                        </div>
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

                                                <?php if ($_smarty_tpl->getValue('active_orders') && is_array($_smarty_tpl->getValue('active_orders')) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('active_orders')) > 0) {?>
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Order Number</th>
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
                                                Items</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('active_orders'), 'order');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('order')->value) {
$foreach0DoElse = false;
?>
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="text-sm font-medium text-gray-600 hover:text-blue-800">
                                                        #<?php echo (($tmp = $_smarty_tpl->getValue('order')['order_number'] ?? null)===null||$tmp==='' ? 'N/A' ?? null : $tmp);?>

                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="text-sm text-gray-600">
                                                        <?php if ((true && (true && null !== ($_smarty_tpl->getValue('order')['created_at'] ?? null))) && $_smarty_tpl->getValue('order')['created_at']) {?>
                                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('order')['created_at'],"%b %d, %Y");?>

                                                        <?php } else { ?>
                                                            N/A
                                                        <?php }?>
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="text-sm font-semibold text-gray-900">
                                                        ₦<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')((($tmp = $_smarty_tpl->getValue('order')['total'] ?? null)===null||$tmp==='' ? 0 ?? null : $tmp),2);?>

                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <?php $_smarty_tpl->assign('status', (($tmp = $_smarty_tpl->getValue('order')['status'] ?? null)===null||$tmp==='' ? 'unknown' ?? null : $tmp), false, NULL);?>
                                                    <?php if ($_smarty_tpl->getValue('status') == 'pending') {?>
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Pending
                                                        </span>
                                                    <?php } elseif ($_smarty_tpl->getValue('status') == 'processing') {?>
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Processing
                                                        </span>
                                                    <?php } elseif ($_smarty_tpl->getValue('status') == 'shipped') {?>
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                                                <path
                                                                    d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707L16 7.586A1 1 0 0015.414 7H14z" />
                                                            </svg>
                                                            Shipped
                                                        </span>
                                                    <?php } elseif ($_smarty_tpl->getValue('status') == 'delivered') {?>
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Delivered
                                                        </span>
                                                    <?php } elseif ($_smarty_tpl->getValue('status') == 'cancelled') {?>
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Cancelled
                                                        </span>
                                                    <?php } else { ?>
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('capitalize')($_smarty_tpl->getValue('status'));?>

                                                        </span>
                                                    <?php }?>
                                                </td>
                                                <td class="px-6 py-4">
                                                    <div class="max-w-xs">
                                                        <?php if ((true && (true && null !== ($_smarty_tpl->getValue('order')['items'] ?? null))) && is_array($_smarty_tpl->getValue('order')['items']) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('order')['items']) > 0) {?>
                                                            <?php $_smarty_tpl->assign('itemCount', $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('order')['items']), false, NULL);?>
                                                            <?php if ($_smarty_tpl->getValue('itemCount') == 1) {?>
                                                                <span class="text-sm text-gray-900">
                                                                    <?php echo (($tmp = $_smarty_tpl->getValue('order')['items'][0]['name'] ?? null)===null||$tmp==='' ? 'Unknown Item' ?? null : $tmp);?>

                                                                    <?php if ($_smarty_tpl->getValue('order')['items'][0]['quantity'] > 1) {?>
                                                                        <span class="text-gray-500">(×<?php echo $_smarty_tpl->getValue('order')['items'][0]['quantity'];?>
)</span>
                                                                    <?php }?>
                                                                </span>
                                                            <?php } elseif ($_smarty_tpl->getValue('itemCount') == 2) {?>
                                                                <span class="text-sm text-gray-900">
                                                                    <?php echo (($tmp = $_smarty_tpl->getValue('order')['items'][0]['name'] ?? null)===null||$tmp==='' ? 'Unknown Item' ?? null : $tmp);?>

                                                                    <?php if ($_smarty_tpl->getValue('order')['items'][0]['quantity'] > 1) {?>
                                                                        <span class="text-gray-500">(×<?php echo $_smarty_tpl->getValue('order')['items'][0]['quantity'];?>
)</span>
                                                                    <?php }?>
                                                                    <br>
                                                                    <?php echo (($tmp = $_smarty_tpl->getValue('order')['items'][1]['name'] ?? null)===null||$tmp==='' ? 'Unknown Item' ?? null : $tmp);?>

                                                                    <?php if ($_smarty_tpl->getValue('order')['items'][1]['quantity'] > 1) {?>
                                                                        <span class="text-gray-500">(×<?php echo $_smarty_tpl->getValue('order')['items'][1]['quantity'];?>
)</span>
                                                                    <?php }?>
                                                                </span>
                                                            <?php } else { ?>
                                                                <span class="text-sm text-gray-900">
                                                                    <?php echo (($tmp = $_smarty_tpl->getValue('order')['items'][0]['name'] ?? null)===null||$tmp==='' ? 'Unknown Item' ?? null : $tmp);?>

                                                                    <?php if ($_smarty_tpl->getValue('order')['items'][0]['quantity'] > 1) {?>
                                                                        <span class="text-gray-500">(×<?php echo $_smarty_tpl->getValue('order')['items'][0]['quantity'];?>
)</span>
                                                                    <?php }?>
                                                                    <br>
                                                                    <span class="text-gray-500">+<?php echo $_smarty_tpl->getValue('itemCount')-1;?>
 more items</span>
                                                                </span>
                                                            <?php }?>
                                                        <?php } else { ?>
                                                            <span class="text-sm text-gray-400">No items</span>
                                                        <?php }?>
                                                    </div>
                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <?php if ($_smarty_tpl->getValue('has_more_active_orders')) {?>
                                <div class="flex justify-start px-6 py-8">
                                    <a href="/account/orders" class="inline-block bg-black text-white px-6 py-2 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                                        View more orders
                                    </a>
                                </div>
                            <?php }?>
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
