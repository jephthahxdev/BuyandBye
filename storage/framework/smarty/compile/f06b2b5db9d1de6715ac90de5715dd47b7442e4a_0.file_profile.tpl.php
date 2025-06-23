<?php
/* Smarty version 5.5.1, created on 2025-06-20 23:39:08
  from 'file:profile.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6855f11ca1ae81_10237708',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f06b2b5db9d1de6715ac90de5715dd47b7442e4a' => 
    array (
      0 => 'profile.tpl',
      1 => 1750462745,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:partials/account-sidebar.tpl' => 1,
  ),
))) {
function content_6855f11ca1ae81_10237708 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12025929886855f11c9fd894_78845778', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_682746176855f11c9ffe72_21238115', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "layouts/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_12025929886855f11c9fd894_78845778 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty';
?>
Profile - Buyandbye<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_682746176855f11c9ffe72_21238115 extends \Smarty\Runtime\Block
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

                                        <?php $_smarty_tpl->renderSubTemplate("file:partials/account-sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('active_page'=>"profile"), (int) 0, $_smarty_current_dir);
?>
                </div>

                                <div class="flex-1">
                                        <div class="max-w-4xl mx-auto p-6 bg-white rounded-lg border border-gray-200 mb-8">
                                                <div class="flex items-center justify-between mb-8">
                            <div class="flex items-center space-x-4">
                                <div class="relative">
                                    <div class="w-20 h-20 bg-black rounded-full flex items-center justify-center">
                                        <svg class="w-10 h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                            <path
                                                d="M3 3h4v4H3V3zm6 0h4v4H9V3zm6 0h4v4h-4V3zM3 9h4v4H3V9zm6 0h4v4H9V9zm6 0h4v4h-4V9zM3 15h4v4H3v-4zm6 0h4v4H9v-4zm6 0h4v4h-4v-4z" />
                                        </svg>
                                    </div>
                                    <div
                                        class="absolute -bottom-1 -right-1 w-6 h-6 bg-gray-800 rounded-full flex items-center justify-center">
                                        <svg class="w-3 h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div>
                                    <h1 class="text-2xl font-semibold text-gray-900">Sisyphus Ventures</h1>
                                    <p class="text-gray-500 text-sm">untitledui.com/sisyphus</p>
                                </div>
                            </div>
                            <button class="px-4 py-2 text-gray-600 border border-gray-300 rounded-lg hover:bg-gray-50">
                                View profile
                            </button>
                        </div>

                                                <div class="mb-8">
                            <h2 class="text-lg font-semibold text-gray-900 mb-2">Company profile</h2>
                            <p class="text-gray-600 text-sm mb-6">Update your company photo and details here.</p>

                            <div class="space-y-6">
                                                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-3">Public profile</label>
                                    <p class="text-sm text-gray-600 mb-4">This will be displayed on your profile.</p>

                                    <div class="space-y-4">
                                        <input type="text" value="<?php echo (($tmp = $_smarty_tpl->getValue('company_name') ?? null)===null||$tmp==='' ? 'Sisyphus Ventures' ?? null : $tmp);?>
"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500"
                                            placeholder="Company name">

                                        <div class="flex">
                                            <span
                                                class="inline-flex items-center px-3 py-2 border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm rounded-l-lg">
                                                untitledui.com/
                                            </span>
                                            <input type="text" value="<?php echo (($tmp = $_smarty_tpl->getValue('company_slug') ?? null)===null||$tmp==='' ? 'sisyphus' ?? null : $tmp);?>
"
                                                class="flex-1 px-3 py-2 border border-gray-300 rounded-r-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500"
                                                placeholder="company-url">
                                        </div>
                                    </div>
                                </div>

                                                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-3">Company logo</label>
                                    <p class="text-sm text-gray-600 mb-4">Update your company logo and then choose where
                                        you want it to display.</p>

                                    <div class="flex items-center space-x-6">
                                        <div
                                            class="w-16 h-16 bg-black rounded-full flex items-center justify-center flex-shrink-0">
                                            <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M3 3h4v4H3V3zm6 0h4v4H9V3zm6 0h4v4h-4V3zM3 9h4v4H3V9zm6 0h4v4H9V9zm6 0h4v4h-4V9zM3 15h4v4H3v-4zm6 0h4v4H9v-4zm6 0h4v4h-4v-4z" />
                                            </svg>
                                        </div>

                                        <div class="flex-1">
                                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center">
                                                <div class="mb-2">
                                                    <svg class="mx-auto h-8 w-8 text-gray-400" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                    </svg>
                                                </div>
                                                <p class="text-sm text-gray-600">
                                                    <button class="text-gray-600 hover:text-gray-500 font-medium">Click
                                                        to upload</button>
                                                    <span> or drag and drop</span>
                                                </p>
                                                <p class="text-xs text-gray-500 mt-1">SVG, PNG, JPG or GIF (max.
                                                    800x400px)</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-3">Branding</label>
                                    <p class="text-sm text-gray-600 mb-4">Add your logo to reports and emails.</p>

                                    <div class="space-y-3">
                                        <label class="flex items-center">
                                            <input type="checkbox" name="branding_reports"
                                                <?php if ((($tmp = $_smarty_tpl->getValue('branding_reports') ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>checked<?php }?>
                                                class="rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                            <span class="ml-3 text-sm text-gray-700">Reports</span>
                                        </label>
                                        <p class="text-sm text-gray-500 ml-6">Include my logo in summary reports.</p>

                                        <label class="flex items-center">
                                            <input type="checkbox" name="branding_emails"
                                                <?php if ((($tmp = $_smarty_tpl->getValue('branding_emails') ?? null)===null||$tmp==='' ? true ?? null : $tmp)) {?>checked<?php }?>
                                                class="rounded border-gray-300 text-gray-600 focus:ring-gray-500">
                                            <span class="ml-3 text-sm text-gray-700">Emails</span>
                                        </label>
                                        <p class="text-sm text-gray-500 ml-6">Include my logo in customer emails.</p>
                                    </div>

                                    <button class="mt-3 text-sm text-gray-600 hover:text-gray-500">View
                                        examples</button>
                                </div>

                                                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-4">Social profiles</label>

                                    <div class="space-y-4">
                                        <div class="flex">
                                            <span
                                                class="inline-flex items-center px-3 py-2 border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm rounded-l-lg">
                                                twitter.com/
                                            </span>
                                            <input type="text" value="<?php echo (($tmp = $_smarty_tpl->getValue('twitter_handle') ?? null)===null||$tmp==='' ? 'sisyphusvc' ?? null : $tmp);?>
"
                                                class="flex-1 px-3 py-2 border border-gray-300 rounded-r-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500"
                                                placeholder="username">
                                        </div>

                                        <div class="flex">
                                            <span
                                                class="inline-flex items-center px-3 py-2 border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm rounded-l-lg">
                                                facebook.com/
                                            </span>
                                            <input type="text" value="<?php echo (($tmp = $_smarty_tpl->getValue('facebook_handle') ?? null)===null||$tmp==='' ? 'sisyphusvc' ?? null : $tmp);?>
"
                                                class="flex-1 px-3 py-2 border border-gray-300 rounded-r-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500"
                                                placeholder="username">
                                        </div>

                                        <div class="flex">
                                            <span
                                                class="inline-flex items-center px-3 py-2 border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm rounded-l-lg">
                                                linkedin.com/company/
                                            </span>
                                            <input type="text" value="<?php echo (($tmp = $_smarty_tpl->getValue('linkedin_handle') ?? null)===null||$tmp==='' ? 'sisyphusvc' ?? null : $tmp);?>
"
                                                class="flex-1 px-3 py-2 border border-gray-300 rounded-r-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500"
                                                placeholder="company-name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                                                <div class="flex justify-end space-x-3 pt-6 border-t border-gray-200">
                            <button type="button"
                                class="px-4 py-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50">
                                Cancel
                            </button>
                            <button type="submit" class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800">
                                Save changes
                            </button>
                        </div>
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
