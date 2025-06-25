<?php
/* Smarty version 5.5.1, created on 2025-06-25 15:28:51
  from 'file:auth/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_685c07a30fc484_22941614',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '32c96665f9cd0ff4697aa41d4360984d02cd4579' => 
    array (
      0 => 'auth/login.tpl',
      1 => 1750861728,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_685c07a30fc484_22941614 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/auth';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_853685968685c07a30f7019_40182336', "title");
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1705584809685c07a30f8613_72290939', "content");
$_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../layouts/app.tpl", $_smarty_current_dir);
}
/* {block "title"} */
class Block_853685968685c07a30f7019_40182336 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/auth';
?>
Login - Buyandbye<?php
}
}
/* {/block "title"} */
/* {block "content"} */
class Block_1705584809685c07a30f8613_72290939 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = '/Users/user/dev/projects/Buyandbye/resources/views/smarty/auth';
?>

    <div class="min-h-screen flex justify-center">
        <div class="flex w-full bg-white overflow-hidden min-h-[600px]">
            <!-- Login Form Section -->
            <div class="flex-1 p-12 lg:p-16 flex flex-col justify-center bg-gradient-to-br from-gray-25 to-stone-50">
                <!-- Login Form -->
                <div class="max-w-xl w-full">
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">Login</h2>
                    <p class="text-gray-600 text-base mb-10 leading-relaxed">
                        Choose from 10,000+ products across 400+ categories
                    </p>

                    <form action="<?php echo $_smarty_tpl->getValue('base_url');?>
/login" method="post" class="space-y-6">
                        <input type="hidden" name="_token" value="<?php echo $_smarty_tpl->getValue('csrf_token');?>
">
                        <?php if ($_smarty_tpl->getValue('error_message')) {?>
                            <div class="bg-red-50 border-l-4 border-red-400 p-4 rounded-lg">
                                <p class="text-red-700 text-sm"><?php echo $_smarty_tpl->getValue('error_message');?>
</p>
                            </div>
                        <?php }?>

                        <!-- Email Field -->
                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-semibold text-gray-900">
                                Email
                            </label>
                            <input type="email" id="email" name="email"
                                class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl text-base bg-white focus:outline-none focus:border-black focus:ring-4 focus:ring-gray-100 transition-all duration-300"
                                placeholder="johncanny@gmail.com" value="<?php echo (($tmp = $_smarty_tpl->getValue('form_data')['email'] ?? null)===null||$tmp==='' ? '' ?? null : $tmp);?>
" required>
                        </div>

                        <!-- Password Field -->
                        <div class="space-y-2">
                            <label for="password" class="block text-sm font-semibold text-gray-900">
                                Password
                            </label>
                            <div class="relative">
                                <input type="password" id="password" name="password"
                                    class="w-full px-5 py-4 pr-12 border-2 border-gray-200 rounded-xl text-base bg-white focus:outline-none focus:border-black focus:ring-4 focus:ring-gray-100 transition-all duration-300"
                                    placeholder="••••••••" required>
                                <button type="button"
                                    class="toggle-password-button absolute right-4 top-1/2 transform -translate-y-1/2 text-gray-500 hover:text-gray-700 focus:outline-none">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Form Options -->
                        <div class="flex items-center justify-between">
                            <label class="flex items-center cursor-pointer">
                                <input type="checkbox" name="remember_me" value="1"
                                    class="w-4 h-4 text-black bg-gray-100 border-gray-300 rounded focus:ring-gray-500 focus:ring-2"
                                    <?php if ($_smarty_tpl->getValue('form_data')['remember_me']) {?>checked<?php }?>>
                                <span class="ml-2 text-sm text-gray-600">Remember Me</span>
                            </label>
                            <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/forgot-password"
                                class="text-sm font-medium text-black hover:text-gray-800 hover:underline">
                                Forgot password?
                            </a>
                        </div>

                        <!-- Login Button -->
                        <button type="submit"
                            class="w-full bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                            Login
                        </button>

                        <!-- Register Link -->
                        <div class="text-center pt-4">
                            <p class="text-gray-600 text-sm">
                                Don't have an account?
                                <a href="<?php echo $_smarty_tpl->getValue('base_url');?>
/register"
                                    class="font-semibold text-black hover:text-gray-800 hover:underline">
                                    Register here
                                </a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Hero Section -->
            <div
                class="hidden lg:flex md:flex flex-1 relative bg-cover bg-center" style="background-image: url(<?php echo $_smarty_tpl->getSmarty()->getFunctionHandler('asset')->handle(array('path'=>'/images/auth-img.jpg'), $_smarty_tpl);?>
);">
                <!-- Decorative elements -->
                <div class="absolute top-10 right-10 w-20 h-20 bg-white/10 rounded-full"></div>
                <div class="absolute bottom-10 left-10 w-16 h-16 bg-white/10 rounded-full"></div>
            </div>
        </div>
    </div>
<?php
}
}
/* {/block "content"} */
}
