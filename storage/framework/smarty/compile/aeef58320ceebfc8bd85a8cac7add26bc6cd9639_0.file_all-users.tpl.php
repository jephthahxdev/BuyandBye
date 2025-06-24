<?php
/* Smarty version 5.5.1, created on 2025-06-25 00:55:29
  from 'file:admin/all-users.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685b3af10053d0_20021020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aeef58320ceebfc8bd85a8cac7add26bc6cd9639' => 
    array (
      0 => 'admin/all-users.tpl',
      1 => 1750809326,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/admin-sidebar.tpl' => 1,
  ),
))) {
function content_685b3af10053d0_20021020 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/admin';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_683827981685b3af0f3e4d2_00730356', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1747955264685b3af0f3eb83_17347883', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_683827981685b3af0f3e4d2_00730356 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/admin';
?>
Users - Buyandbye<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1747955264685b3af0f3eb83_17347883 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/admin';
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
                        <span class="ml-4 text-gray-500">Admin Dashboard</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-4 text-black font-medium">Users</span>
                    </li>
                </ol>
            </nav>

                        <h1 class="text-3xl font-bold text-black mb-8">All Users</h1>

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

                                        <?php $_smarty_tpl->renderSubTemplate("file:partials/admin-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active_page'=>"users"), (int) 0, $_smarty_current_dir);
?>
                </div>

                                <div class="flex-1">
                                        <div class="bg-white rounded-lg border border-gray-200">
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex items-center">
                                <h2 class="text-xl font-bold text-black">Registered Users</h2>
                                <div class="ml-2 w-6 h-6 bg-gray-200 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                                                <?php if ($_smarty_tpl->getValue('users') && is_array($_smarty_tpl->getValue('users')) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('users')) > 0) {?>
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                User</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Joined</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Status</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Orders</th>
                                            <th
                                                class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Total Spent</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('users'), 'userData');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('userData')->value) {
$foreach0DoElse = false;
?>
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="w-8 h-8 bg-gray-300 rounded-full flex items-center justify-center mr-3">
                                                            <span
                                                                class="text-xs font-medium text-gray-600"><?php echo mb_strtoupper((string) substr((string) $_smarty_tpl->getValue('userData')['name'], (int) 0, (int) 2) ?? '', 'UTF-8');?>
</span>
                                                        </div>
                                                        <div>
                                                            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/admin/users/<?php echo $_smarty_tpl->getValue('userData')['id'];?>
"
                                                                class="text-sm font-medium text-gray-900 hover:text-blue-800">
                                                                <?php echo $_smarty_tpl->getValue('userData')['name'];?>

                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="text-sm text-gray-600"><?php echo $_smarty_tpl->getValue('userData')['email'];?>
</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="text-sm text-gray-600">
                                                        <?php if ((true && (true && null !== ($_smarty_tpl->getValue('userData')['created_at'] ?? null))) && $_smarty_tpl->getValue('userData')['created_at']) {?>
                                                            <?php echo $_smarty_tpl->getSmarty()->getModifierCallback('date_format')($_smarty_tpl->getValue('userData')['created_at'],"%b %d, %Y");?>

                                                        <?php } else { ?>
                                                            N/A
                                                        <?php }?>
                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <?php if ($_smarty_tpl->getValue('userData')['status'] == 'verified') {?>
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Verified
                                                        </span>
                                                    <?php } else { ?>
                                                        <span
                                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                            <svg class="w-3 h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Unverified
                                                        </span>
                                                    <?php }?>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="text-sm font-semibold text-gray-900">
                                                        <?php echo $_smarty_tpl->getValue('userData')['orders_count'];?>

                                                    </span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="text-sm font-semibold text-gray-900">
                                                        ₦<?php echo $_smarty_tpl->getSmarty()->getModifierCallback('number_format')($_smarty_tpl->getValue('userData')['total_spent'],2);?>

                                                    </span>
                                                </td>
                                            </tr>
                                        <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
                                    </tbody>
                                </table>
                            </div>
                            <?php if ((true && ($_smarty_tpl->hasVariable('pagination') && null !== ($_smarty_tpl->getValue('pagination') ?? null))) && $_smarty_tpl->getValue('pagination')['last_page'] > 1) {?>
                                <div class="flex justify-center py-8">
                                    <nav class="inline-flex rounded-md shadow-sm -space-x-px" aria-label="Pagination">
                                        <?php if ($_smarty_tpl->getValue('pagination')['prev_page_url']) {?>
                                            <a href="<?php echo $_smarty_tpl->getValue('pagination')['prev_page_url'];?>
"
                                                class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                                        <?php } else { ?>
                                            <span
                                                class="relative inline-flex items-center px-4 py-2 rounded-l-md border border-gray-300 bg-gray-100 text-sm font-medium text-gray-400 cursor-not-allowed">Previous</span>
                                        <?php }?>
                                        <?php
$__section_page_0_loop = (is_array(@$_loop=$_smarty_tpl->getValue('pagination')['last_page']+1) ? count($_loop) : max(0, (int) $_loop));
$__section_page_0_start = min(1, $__section_page_0_loop);
$__section_page_0_total = min(($__section_page_0_loop - $__section_page_0_start), $__section_page_0_loop);
$_smarty_tpl->tpl_vars['__smarty_section_page'] = new \Smarty\Variable(array());
if ($__section_page_0_total !== 0) {
for ($__section_page_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index'] = $__section_page_0_start; $__section_page_0_iteration <= $__section_page_0_total; $__section_page_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_page']->value['index']++){
?>
                                            <?php $_smarty_tpl->assign('pageNum', ($_smarty_tpl->getValue('__smarty_section_page')['index'] ?? null), false, NULL);?>
                                            <?php if ($_smarty_tpl->getValue('pageNum') == $_smarty_tpl->getValue('pagination')['current_page']) {?>
                                                <span
                                                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-black text-white text-sm font-medium"><?php echo $_smarty_tpl->getValue('pageNum');?>
</span>
                                            <?php } else { ?>
                                                <a href="?page=<?php echo $_smarty_tpl->getValue('pageNum');?>
"
                                                    class="relative inline-flex items-center px-4 py-2 border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50"><?php echo $_smarty_tpl->getValue('pageNum');?>
</a>
                                            <?php }?>
                                        <?php
}
}
?>
                                        <?php if ($_smarty_tpl->getValue('pagination')['next_page_url']) {?>
                                            <a href="<?php echo $_smarty_tpl->getValue('pagination')['next_page_url'];?>
"
                                                class="relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 bg-white text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                                        <?php } else { ?>
                                            <span
                                                class="relative inline-flex items-center px-4 py-2 rounded-r-md border border-gray-300 bg-gray-100 text-sm font-medium text-gray-400 cursor-not-allowed">Next</span>
                                        <?php }?>
                                    </nav>
                                </div>
                            <?php }?>
                        <?php } else { ?>
                            <div class="p-12 text-center">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                                </svg>
                                <h3 class="text-lg font-semibold text-gray-900 mb-2">No users found</h3>
                                <p class="text-gray-600 mb-4">There are no registered users in the system.</p>
                            </div>
                        <?php }?>
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
