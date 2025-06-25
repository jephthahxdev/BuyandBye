{* Settings Template *}
{extends file="layouts/app.tpl"}

{block name="title"}Settings - Buyandbye{/block}

{block name="content"}

    <div class="bg-gray-50 min-h-screen py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            {* Breadcrumb *}
            <nav class="flex mb-6" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-4">
                    <li>
                        <a href="{$base_url}" class="text-gray-500 hover:text-gray-700 flex items-center">
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
                        <span class="ml-4 text-black font-medium">Settings</span>
                    </li>
                </ol>
            </nav>

            {* Page Title *}
            <h1 class="text-3xl font-bold text-black mb-8">Profile settings</h1>

            <div class="flex gap-8">
                {* Sidebar *}
                <div class="w-80 h-[60%] bg-white flex-shrink-0 rounded-lg border border-gray-200">
                    {* Profile Card *}
                    <div class="p-6 mb-6 border-b border-gray-200">
                        <div class="flex items-center">
                            <div
                                class="w-12 h-12 bg-gray-800 rounded-full flex items-center justify-center text-white font-semibold text-lg mr-4">
                                {$user.name|substr:0:2|upper}
                            </div>
                            <div>
                                <h3 class="font-semibold text-black">{$user.name}</h3>
                                <p class="text-gray-600 text-sm">{$user.email}</p>
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

                    {* Navigation Menu *}
                    {include file="partials/account-sidebar.tpl" active_page="settings"}
                </div>

                {* Main Content *}
                <div class="flex-1">
                    {* Settings Template *}
                    <div class="w-full space-y-8 bg-white p-8 rounded-lg border border-gray-200">
                        {* Lock Icon *}
                        <div class="text-center">
                            <div class="mx-auto h-16 w-16 flex items-center justify-center rounded-full bg-gray-100">
                                <i class="fa-solid fa-lock text-gray-600 text-2xl"></i>
                            </div>
                        </div>

                        {* Title *}
                        <div class="text-center">
                            <h2 class="text-3xl font-bold text-gray-900">Change Password</h2>
                        </div>

                        {* Description *}
                        <div class="text-center space-y-2">
                            <p class="text-gray-600">To change your password, please fill in the fields below.</p>
                            <p class="text-gray-600">Your password must contain at least 8 characters, it must also include
                                at least one upper case letter, one lower case letter, one number and one special character.
                            </p>
                        </div>

                        {* Password Change Form *}
                        <form class="mt-8 space-y-6" action="{$base_url}/account/settings/password" method="POST">
                            <input type="hidden" name="_token" value="{$csrf_token}">

                            <div class="space-y-6">
                                {* Current Password *}
                                <div>
                                    <label for="current_password" class="block text-sm font-medium text-gray-700 mb-2">
                                        Current Password
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fa-solid fa-lock text-gray-400 text-lg"></i>
                                        </div>
                                        <input id="current_password" name="current_password" type="password" required
                                            class="block w-full pl-10 pr-12 py-3 border border-gray-300 rounded-lg bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent"
                                            placeholder="Current Password">
                                        <button type="button"
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center toggle-password"
                                            data-target="current_password">
                                            <i class="fa-solid fa-eye-slash text-gray-400 text-md"></i>
                                        </button>
                                    </div>
                                </div>

                                {* New Password *}
                                <div>
                                    <label for="new_password" class="block text-sm font-medium text-gray-700 mb-2">
                                        New Password
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fa-solid fa-lock text-gray-400 text-lg"></i>
                                        </div>
                                        <input id="new_password" name="new_password" type="password" required
                                            class="block w-full pl-10 pr-12 py-3 border border-gray-300 rounded-lg bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent"
                                            placeholder="New Password">
                                        <button type="button"
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center toggle-password"
                                            data-target="new_password">
                                            <i class="fa-solid fa-eye-slash text-gray-400 text-md"></i>
                                        </button>
                                    </div>
                                </div>

                                {* Confirm Password *}
                                <div>
                                    <label for="new_password_confirmation"
                                        class="block text-sm font-medium text-gray-700 mb-2">
                                        Confirm Password
                                    </label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <i class="fa-solid fa-lock text-gray-400 text-lg"></i>
                                        </div>
                                        <input id="new_password_confirmation" name="new_password_confirmation"
                                            type="password" required
                                            class="block w-full pl-10 pr-12 py-3 border border-gray-300 rounded-lg bg-white text-gray-900 placeholder-gray-500 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:border-transparent"
                                            placeholder="Confirm Password">
                                        <button type="button"
                                            class="absolute inset-y-0 right-0 pr-3 flex items-center toggle-password"
                                            data-target="new_password_confirmation">
                                            <i class="fa-solid fa-eye-slash text-gray-400 text-md"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            {* Success/Error Messages *}
                            {if isset($success_message)}
                                <div class="rounded-md bg-green-50 border border-green-200 p-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-green-800">{$success_message}</p>
                                        </div>
                                    </div>
                                </div>
                            {/if}

                            {if isset($error_message)}
                                <div class="rounded-md bg-red-50 border border-red-200 p-4">
                                    <div class="flex">
                                        <div class="flex-shrink-0">
                                            <svg class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <div class="ml-3">
                                            <p class="text-sm font-medium text-red-800">{$error_message}</p>
                                        </div>
                                    </div>
                                </div>
                            {/if}

                            {* Submit Button *}
                            <div>
                                <button type="submit"
                                    class="group relative w-full flex justify-center py-3 px-4 border border-transparent text-sm font-medium rounded-lg text-white bg-black hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500 transition duration-150 ease-in-out">
                                    Change Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/settings.js"></script>
{/block}