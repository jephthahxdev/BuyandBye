<?php
/* Smarty version 5.5.1, created on 2025-06-25 21:50:41
  from 'file:billing.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685c6121904dd9_44097961',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7656b19389d9f22262521c5a4a4c0830b7a85dff' => 
    array (
      0 => 'billing.tpl',
      1 => 1750884638,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/account-sidebar.tpl' => 1,
  ),
))) {
function content_685c6121904dd9_44097961 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_156474495685c61218fc7a8_73826499', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1740611948685c61218fcfa3_53898093', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_156474495685c61218fc7a8_73826499 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?>
Billing - Buyandbye<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1740611948685c61218fcfa3_53898093 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?>


    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

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

                        <h1 class="text-2xl md:text-3xl font-bold text-black mb-6 md:mb-8">Billing Details</h1>

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

                                        <?php $_smarty_tpl->renderSubTemplate("file:partials/account-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active_page'=>"billing"), (int) 0, $_smarty_current_dir);
?>
                </div>

                                <div class="flex-1">
                    <div class="bg-white rounded-lg border border-gray-200 mb-6 md:mb-8">
                                                <div class="p-4 md:p-6 border-b border-gray-200">
                            <h2 class="text-lg md:text-xl font-bold text-black">Billing data</h2>
                        </div>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-4 p-4 md:p-6 lg:divide-x lg:divide-gray-200">
                            <!-- Default Billing Address -->
                            <div class="lg:pr-4">
                                <h3 class="text-base md:text-lg font-semibold mb-3 md:mb-4">Default billing address</h3>
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('billing_addresses')) == 0) {?>
                                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between bg-gray-50 rounded-lg px-3 md:px-4 py-3 mb-4 gap-3">
                                        <span class="text-gray-700 text-sm md:text-base">There is no billing address yet</span>
                                        <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/account/billing/add"
                                            class="bg-gray-600 text-white px-3 md:px-4 py-2 rounded-lg font-medium hover:bg-gray-700 transition text-sm md:text-base text-center">Add
                                            Billing Address</a>
                                    </div>
                                <?php } else { ?>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('billing_addresses'), 'address');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('address')->value) {
$foreach0DoElse = false;
?>
                                        <div
                                            class="border rounded-lg p-3 md:p-4 mb-3 md:mb-4 <?php if ($_smarty_tpl->getValue('address')['is_default']) {?>border-gray-600 bg-gray-50<?php } else { ?>border-gray-200 bg-white<?php }?> flex items-start justify-between">
                                            <div class="flex-1 min-w-0">
                                                <div class="flex items-center mb-1">
                                                    <?php if ($_smarty_tpl->getValue('address')['is_default']) {?>
                                                        <svg class="w-4 h-4 md:w-5 md:h-5 text-gray-600 mr-2" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    <?php }?>
                                                    <span class="font-semibold text-gray-900 text-sm md:text-base truncate"><?php echo $_smarty_tpl->getValue('address')['name'];?>
</span>
                                                    <?php if ($_smarty_tpl->getValue('address')['company']) {?>
                                        <span
                                                            class="inline-block bg-gray-100 rounded-full px-2 py-1 ml-2 text-gray-700 text-xs"><?php echo $_smarty_tpl->getValue('address')['company'];?>
</span>
                                                    <?php }?>
                                    </div>
                                                <div class="text-xs md:text-sm text-gray-700">
                                                    <?php echo $_smarty_tpl->getValue('address')['address'];?>
<br>
                                                    <?php echo $_smarty_tpl->getValue('address')['zip'];?>
 <?php echo $_smarty_tpl->getValue('address')['city'];?>
 - <?php echo $_smarty_tpl->getValue('address')['country'];?>

                                    </div>
                                </div>
                                            <button class="ml-2 md:ml-4 text-gray-400 hover:text-red-600 flex-shrink-0" title="Delete">
                                                <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                                        </div>
                                    <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    <a href="#billing-form"
                                        class="text-gray-700 font-medium mt-2 inline-block hover:underline text-sm md:text-base">+ Add Billing
                                        Address</a>
                                <?php }?>
                            </div>

                            <!-- Default Payment Method -->
                                    <div class="lg:pl-4">
                                <h3 class="text-base md:text-lg font-semibold mb-3 md:mb-4">Default payment method</h3>
                                <?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('payment_methods')) == 0) {?>
                                    <div class="flex items-center justify-between bg-gray-50 rounded-lg px-3 md:px-4 py-3 mb-4">
                                        <span class="text-gray-700 text-sm md:text-base">There is no payment method yet</span>
                                    </div>
                                <?php } else { ?>
                                    <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('payment_methods'), 'method');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('method')->value) {
$foreach1DoElse = false;
?>
                                        <div
                                            class="border rounded-lg px-3 md:px-4 py-4 md:py-6 mb-3 md:mb-4 <?php if ($_smarty_tpl->getValue('method')['is_default']) {?>border-gray-600 bg-gray-50<?php } else { ?>border-gray-200 bg-white<?php }?> flex items-center justify-between">
                                            <div class="flex items-center min-w-0 flex-1">
                                                <?php if ($_smarty_tpl->getValue('method')['is_default']) {?>
                                                    <svg class="w-4 h-4 md:w-5 md:h-5 text-gray-600 mr-1 flex-shrink-0" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M5 13l4 4L19 7" />
                                            </svg>
                                                <?php }?>
                                                <span class="font-mono text-sm md:text-base tracking-widest truncate">**** **** ****
                                                    <?php echo $_smarty_tpl->getValue('method')['last4'];?>
</span>
                                                <span
                                                    class="ml-2 text-xs text-gray-700 font-medium uppercase flex-shrink-0"><?php echo $_smarty_tpl->getValue('method')['brand'];?>
</span>
                                </div>
                                            <button class="ml-2 md:ml-4 text-gray-400 hover:text-red-600 flex-shrink-0" title="Delete">
                                                <svg class="w-4 h-4 md:w-5 md:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
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
                                        <div id="billing-form" class="mb-6 md:mb-8 bg-white rounded-lg border border-gray-200 p-3 md:p-4 scroll-mt-24">
                        <div class="p-4 md:p-6 border-b border-gray-200">
                            <div class="flex items-center">
                                <h2 class="text-lg md:text-xl font-bold text-black">Add billing address</h2>
                                <div class="ml-2 w-5 h-5 md:w-6 md:h-6 bg-gray-200 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 md:w-4 md:h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="/account/billing/add" class="space-y-4 md:space-y-6 bg-white py-4 md:py-6 px-3 md:px-4">
                            <input type="hidden" name="_token" value="<?php echo $_smarty_tpl->getValue('csrf_token');?>
">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                <input type="text" name="name" required value="<?php echo (($tmp = $_smarty_tpl->getValue('user')['name'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                                    class="w-full border border-gray-300 rounded-lg px-3 md:px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" name="email" required value="<?php echo (($tmp = $_smarty_tpl->getValue('user')['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
"
                                    class="w-full border border-gray-300 rounded-lg px-3 md:px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Company (Optional)</label>
                                <input type="text" name="company"
                                    class="w-full border border-gray-300 rounded-lg px-3 md:px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                                <input type="text" name="address" required
                                    class="w-full border border-gray-300 rounded-lg px-3 md:px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-4">
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                                    <input type="text" name="city" required
                                        class="w-full border border-gray-300 rounded-lg px-3 md:px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">State</label>
                                    <input type="text" name="state" required
                                        class="w-full border border-gray-300 rounded-lg px-3 md:px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Zip</label>
                                    <input type="text" name="zip" required
                                        class="w-full border border-gray-300 rounded-lg px-3 md:px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                                <select name="country" required
                                    class="w-full border border-gray-300 rounded-lg px-3 md:px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                    <option value="United States" selected>United States</option>
                                    <option value="Canada">Canada</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Australia">Australia</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                <input type="text" name="phone" required
                                    class="w-full border border-gray-300 rounded-lg px-3 md:px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="is_default" id="is_default" class="mr-2">
                                <label for="is_default" class="text-sm text-gray-700">Set as default billing address</label>
                            </div>
                            <button type="submit"
                                class="w-full bg-black text-white py-2 md:py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                                Add Billing Address
                            </button>
                        </form>
                    </div>
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
