<?php
/* Smarty version 5.5.1, created on 2025-06-20 14:50:12
  from 'file:partials/account-sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_68557524eaf220_13532178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '779e1a53896cd43384462ba7604b087dddb40e7e' => 
    array (
      0 => 'partials/account-sidebar.tpl',
      1 => 1750430995,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_68557524eaf220_13532178 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/partials';
?><nav>
    <ul class="py-2">
        <li>
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/account"
                class="flex items-center px-4 py-3 <?php if ($_smarty_tpl->getValue('active_page') == 'overview') {?>bg-gray-50 text-black font-medium<?php } else { ?>text-gray-700 hover:bg-gray-50<?php }?>">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                </svg>
                Overview
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/account/orders" class="flex items-center px-4 py-3 <?php if ($_smarty_tpl->getValue('active_page') == 'orders') {?>bg-gray-50 text-black font-medium<?php } else { ?>text-gray-700 hover:bg-gray-50<?php }?>">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 2L3 7v11a2 2 0 002 2h10a2 2 0 002-2V7l-7-5zM8 15a1 1 0 112 0 1 1 0 01-2 0z"
                        clip-rule="evenodd" />
                </svg>
                My orders
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/account/addresses" class="flex items-center px-4 py-3 <?php if ($_smarty_tpl->getValue('active_page') == 'addresses') {?>bg-gray-50 text-black font-medium<?php } else { ?>text-gray-700 hover:bg-gray-50<?php }?>">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd" />
                </svg>
                Delivery addresses
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/account/recently-viewed"
                class="flex items-center px-4 py-3 <?php if ($_smarty_tpl->getValue('active_page') == 'profile') {?>bg-gray-50 text-black font-medium<?php } else { ?>text-gray-700 hover:bg-gray-50<?php }?>">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd"
                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                        clip-rule="evenodd" />
                </svg>
                Profile
            </a>
        </li>
                <li class="border-t border-gray-200 mt-2">
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/account/settings" class="flex items-center px-4 py-3 <?php if ($_smarty_tpl->getValue('active_page') == 'settings') {?>bg-gray-50 text-black font-medium<?php } else { ?>text-gray-700 hover:bg-gray-50<?php }?>">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd" />
                </svg>
                Settings
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/logout" class="flex items-center px-4 py-3 text-red-600 hover:bg-red-50">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                        clip-rule="evenodd" />
                </svg>
                Log out
            </a>
        </li>
    </ul>
</nav><?php }
}
