{* login.tpl *}
{extends file="layouts/app.tpl"}

{block name="title"}Admin Login - Buyandbye{/block}

{block name="content"}
    <div class="min-h-screen flex justify-center">
        <div class="flex w-full bg-white overflow-hidden min-h-[600px]">
            <!-- Login Form Section -->
            <div class="flex-1 p-12 lg:p-16 flex flex-col justify-center bg-gradient-to-br from-gray-25 to-stone-50">
                <!-- Login Form -->
                <div class="max-w-xl w-full">
                    <h2 class="text-3xl lg:text-4xl font-bold text-gray-900 mb-2">Admin Login</h2>
                    <p class="text-gray-600 text-base mb-10 leading-relaxed">
                        Manage your store and products
                    </p>

                    <form action="{$base_url}/login" method="post" class="space-y-6">
                        <input type="hidden" name="_token" value="{$csrf_token}">
                        {if $error_message}
                            <div class="bg-red-50 border-l-4 border-red-400 p-4 rounded-lg">
                                <p class="text-red-700 text-sm">{$error_message}</p>
                            </div>
                        {/if}

                        <!-- Email Field -->
                        <div class="space-y-2">
                            <label for="email" class="block text-sm font-semibold text-gray-900">
                                Email
                            </label>
                            <input type="email" id="email" name="email"
                                class="w-full px-5 py-4 border-2 border-gray-200 rounded-xl text-base bg-white focus:outline-none focus:border-black focus:ring-4 focus:ring-gray-100 transition-all duration-300"
                                placeholder="johncanny@gmail.com" value="{$form_data.email|default:''}" required>
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
                        <!-- Login Button -->
                        <button type="submit"
                            class="w-full bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                            Login
                        </button>
                    </form>
                    <p class="text-gray-600 mt-4 text-base mb-10 leading-relaxed">
                        Username: admin@buyandbye.com
                        <br>
                        Password: admin1234
                    </p>
                </div>
            </div>

            <!-- Hero Section -->
            <div class="hidden lg:flex flex-1 relative bg-cover bg-center"
                style="background-image: url({asset path='/images/auth-img.jpg'});">
                <!-- Decorative elements -->
                <div class="absolute top-10 right-10 w-20 h-20 bg-white/10 rounded-full"></div>
                <div class="absolute bottom-10 left-10 w-16 h-16 bg-white/10 rounded-full"></div>
            </div>
        </div>
    </div>
{/block}