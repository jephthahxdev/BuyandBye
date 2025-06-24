<?php
/* Smarty version 5.5.1, created on 2025-06-25 00:54:22
  from 'file:partials/admin-sidebar.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685b3aaeeec7c0_97187791',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '856af06c1fba2dc58331d611c62a62109589fe09' => 
    array (
      0 => 'partials/admin-sidebar.tpl',
      1 => 1750808733,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685b3aaeeec7c0_97187791 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/partials';
?><nav>
    <ul class="py-2">
        <li>
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/admin/dashboard"
                class="flex items-center px-4 py-3 <?php if ($_smarty_tpl->getValue('active_page') == 'overview' || $_smarty_tpl->getValue('active_page') == 'dashboard') {?>bg-gray-50 text-black font-medium<?php } else { ?>text-gray-700 hover:bg-gray-50<?php }?>">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                </svg>
                Overview
            </a>
        </li>
        <li>
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/admin/orders" class="flex items-center px-4 py-3 <?php if ($_smarty_tpl->getValue('active_page') == 'orders') {?>bg-gray-50 text-black font-medium<?php } else { ?>text-gray-700 hover:bg-gray-50<?php }?>">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 2L3 7v11a2 2 0 002 2h10a2 2 0 002-2V7l-7-5zM8 15a1 1 0 112 0 1 1 0 01-2 0z"
                        clip-rule="evenodd" />
                </svg>
                Orders
            </a>
        </li>
                <li>
            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/admin/users" class="flex items-center px-4 py-3 <?php if ($_smarty_tpl->getValue('active_page') == 'users') {?>bg-gray-50 text-black font-medium<?php } else { ?>text-gray-700 hover:bg-gray-50<?php }?>">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd" />
                </svg>
                All users
            </a>
        </li>
                        <li>
            <form id="logout-form" action="<?php echo $_smarty_tpl->getValue('base_url');?>
/admin/logout" method="POST" style="display:none;">
                <input type="hidden" name="_token" value="<?php echo $_smarty_tpl->getValue('csrf_token');?>
">
            </form>
            <a href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="flex items-center px-4 py-3 text-red-600 hover:bg-red-50">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                    clip-rule="evenodd" />
            </svg>Logout</a>
        </li>
    </ul>
</nav><?php }
}
