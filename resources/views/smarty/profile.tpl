{* Profile Template *}
{extends file="layouts/app.tpl"}

{block name="title"}Profile - Buyandbye{/block}

{block name="content"}

    <div class="bg-gray-50 min-h-screen py-8 md:py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 lg:py-6">
            {* Breadcrumb *}
            <nav class="flex mb-6 overflow-x-auto" aria-label="Breadcrumb">
                <ol class="flex items-center space-x-4 min-w-max">
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
                        <span class="ml-4 text-black font-medium">Profile</span>
                    </li>
                </ol>
            </nav>

            {* Page Title *}
            <h1 class="text-2xl md:text-3xl font-bold text-black mb-6 md:mb-8">My profile</h1>

            <div class="flex flex-col lg:flex-row gap-6 lg:gap-8">
                {* Sidebar *}
                <div class="w-full lg:w-80 lg:h-[60%] bg-white flex-shrink-0 rounded-lg border border-gray-200">
                    {* Profile Card *}
                    <div class="p-4 md:p-6 mb-4 md:mb-6 border-b border-gray-200">
                        <div class="flex items-center">
                            <div
                                class="w-10 h-10 md:w-12 md:h-12 bg-gray-800 rounded-full flex items-center justify-center text-white font-semibold text-base md:text-lg mr-3 md:mr-4">
                                {$user.name|substr:0:2|upper}
                            </div>
                            <div class="flex-1 min-w-0">
                                <h3 class="font-semibold text-black text-sm md:text-base truncate">{$user.name}</h3>
                                <p class="text-gray-600 text-xs md:text-sm truncate">{$user.email}</p>
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

                    {* Navigation Menu *}
                    {include file="partials/account-sidebar.tpl" active_page="profile"}
                </div>

                {* Main Content *}
                <div class="flex-1">
                    {* User Profile Template *}
                    <form action="{$base_url}/account/profile/update" method="POST" enctype="multipart/form-data" class="max-w-4xl mx-auto p-4 md:p-6 bg-white rounded-lg border border-gray-200 mb-6 md:mb-8">
                        <input type="hidden" name="_token" value="{$csrf_token}">
                        
                        {* Header Section *}
                        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-6 md:mb-8 gap-4">
                            <div class="flex items-center space-x-3 md:space-x-4">
                                <div class="relative">
                                    {if $user.avatar}
                                        <img src="{$base_url}/storage/{$user.avatar}" alt="{$user.name}" class="w-16 h-16 md:w-20 md:h-20 rounded-full object-cover">
                                    {else}
                                        <div class="w-16 h-16 md:w-20 md:h-20 bg-black rounded-full flex items-center justify-center">
                                            <svg class="w-8 h-8 md:w-10 md:h-10 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                <path
                                                    d="M3 3h4v4H3V3zm6 0h4v4H9V3zm6 0h4v4h-4V3zM3 9h4v4H3V9zm6 0h4v4H9V9zm6 0h4v4h-4V9zM3 15h4v4H3v-4zm6 0h4v4H9v-4zm6 0h4v4h-4v-4z" />
                                            </svg>
                                        </div>
                                    {/if}
                                    <div
                                        class="absolute -bottom-1 -right-1 w-5 h-5 md:w-6 md:h-6 bg-gray-800 rounded-full flex items-center justify-center">
                                        <svg class="w-2.5 h-2.5 md:w-3 md:h-3 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </div>
                                </div>
                                <div class="min-w-0 flex-1">
                                    <h1 class="text-xl md:text-2xl font-semibold text-gray-900 truncate">{$user.name}</h1>
                                    <p class="text-gray-500 text-xs md:text-sm truncate">{$profile_url}</p>
                                </div>
                            </div>
                        </div>

                        {* Company Profile Section *}
                        <div class="mb-6 md:mb-8">
                            <h2 class="text-base md:text-lg font-semibold text-gray-900 mb-2">User profile</h2>
                            <p class="text-gray-600 text-xs md:text-sm mb-4 md:mb-6">Update your profile photo and details here.</p>

                            <div class="space-y-4 md:space-y-6">
                                {* Public Profile *}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2 md:mb-3">Public profile</label>
                                    <p class="text-xs md:text-sm text-gray-600 mb-3 md:mb-4">This will be displayed on your profile.</p>

                                    <div class="space-y-3 md:space-y-4">
                                        <input type="text" name="name" value="{$user.name|default:''}"
                                            class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500"
                                            placeholder="Your name">

                                        <div class="flex">
                                            <span
                                                class="inline-flex items-center px-2 md:px-3 py-2 border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-xs md:text-sm rounded-l-lg">
                                                {$base_url}/
                                            </span>
                                            <input type="text" value="{$profile_slug}" readonly
                                                class="flex-1 px-3 py-2 border border-gray-300 rounded-r-lg bg-gray-50 text-gray-500 text-xs md:text-sm"
                                                placeholder="profile-url">
                                        </div>
                                    </div>
                                </div>

                                {* User Photo *}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-2 md:mb-3">User photo</label>
                                    <p class="text-xs md:text-sm text-gray-600 mb-3 md:mb-4">Update your user photo and then choose where
                                        you want it to display.</p>

                                    <div class="flex flex-col sm:flex-row sm:items-center space-y-4 sm:space-y-0 sm:space-x-6">
                                        {if $user.avatar}
                                            <img src="{$base_url}/storage/{$user.avatar}" alt="{$user.name}" class="w-16 h-16 rounded-full object-cover flex-shrink-0 self-center sm:self-start">
                                        {else}
                                            <div
                                                class="w-16 h-16 bg-black rounded-full flex items-center justify-center flex-shrink-0 self-center sm:self-start">
                                                <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                                    <path
                                                        d="M3 3h4v4H3V3zm6 0h4v4H9V3zm6 0h4v4h-4V3zM3 9h4v4H3V9zm6 0h4v4H9V9zm6 0h4v4h-4V9zM3 15h4v4H3v-4zm6 0h4v4H9v-4zm6 0h4v4h-4v-4z" />
                                                </svg>
                                            </div>
                                        {/if}

                                        <div class="flex-1">
                                            <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 md:p-8 text-center">
                                                <div class="mb-2">
                                                    <svg class="mx-auto h-6 w-6 md:h-8 md:w-8 text-gray-400" fill="none"
                                                        stroke="currentColor" viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                    </svg>
                                                </div>
                                                <p class="text-xs md:text-sm text-gray-600">
                                                    <label for="avatar" class="text-gray-600 hover:text-gray-500 font-medium cursor-pointer">Click
                                                        to upload</label>
                                                    <span> or drag and drop</span>
                                                </p>
                                                <p class="text-xs text-gray-500 mt-1">SVG, PNG, JPG or GIF (max.
                                                    800x400px)</p>
                                                <input type="file" id="avatar" name="avatar" accept="image/*" class="hidden">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {* Social Profiles *}
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-3 md:mb-4">Social profiles</label>

                                    <div class="space-y-3 md:space-y-4">
                                        <div class="flex">
                                            <span
                                                class="inline-flex items-center px-2 md:px-3 py-2 border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-xs md:text-sm rounded-l-lg">
                                                twitter.com/
                                            </span>
                                            <input type="text" name="twitter_handle" value="{$user.twitter_handle|default:''}"
                                                class="flex-1 px-3 py-2 border border-gray-300 rounded-r-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500 text-xs md:text-sm"
                                                placeholder="username">
                                        </div>

                                        <div class="flex">
                                            <span
                                                class="inline-flex items-center px-2 md:px-3 py-2 border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-xs md:text-sm rounded-l-lg">
                                                facebook.com/
                                            </span>
                                            <input type="text" name="facebook_handle" value="{$user.facebook_handle|default:''}"
                                                class="flex-1 px-3 py-2 border border-gray-300 rounded-r-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500 text-xs md:text-sm"
                                                placeholder="username">
                                        </div>

                                        <div class="flex">
                                            <span
                                                class="inline-flex items-center px-2 md:px-3 py-2 border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-xs md:text-sm rounded-l-lg">
                                                linkedin.com/company/
                                            </span>
                                            <input type="text" name="linkedin_handle" value="{$user.linkedin_handle|default:''}"
                                                class="flex-1 px-3 py-2 border border-gray-300 rounded-r-lg focus:ring-2 focus:ring-gray-500 focus:border-gray-500 text-xs md:text-sm"
                                                placeholder="company-name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {* Action Buttons *}
                        <div class="flex flex-col sm:flex-row sm:justify-end space-y-3 sm:space-y-0 sm:space-x-3 pt-4 md:pt-6 border-t border-gray-200">
                            <a href="{$base_url}/account/profile" type="button"
                                class="px-4 py-2 text-gray-700 border border-gray-300 rounded-lg hover:bg-gray-50 text-center">
                                Cancel
                            </a>
                            <button type="submit" class="px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800">
                                Save changes
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="/js/profile.js"></script>
{/block}