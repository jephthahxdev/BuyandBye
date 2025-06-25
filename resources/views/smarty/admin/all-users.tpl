{* All Users Template *}
{extends file="layouts/app.tpl"}

{block name="title"}Users - Buyandbye{/block}

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

            {* Page Title *}
            <h1 class="text-2xl md:text-3xl font-bold text-black mb-6 md:mb-8">All Users</h1>

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
                    {include file="partials/admin-sidebar.tpl" active_page="users"}
                </div>

                {* Main Content *}
                <div class="flex-1">
                    {* Users Table *}
                    <div class="bg-white rounded-lg border border-gray-200">
                        <div class="p-4 md:p-6 border-b border-gray-200">
                            <div class="flex items-center">
                                <h2 class="text-lg md:text-xl font-bold text-black">Registered Users</h2>
                                <div class="ml-2 w-5 h-5 md:w-6 md:h-6 bg-gray-200 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 md:w-4 md:h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        {* Users Table Section *}
                        {if $users && is_array($users) && count($users) > 0}
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th
                                                class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                User</th>
                                            <th
                                                class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Email</th>
                                            <th
                                                class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Joined</th>
                                            <th
                                                class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Status</th>
                                            <th
                                                class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Orders</th>
                                            <th
                                                class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Total Spent</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        {foreach $users as $userData}
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    <div class="flex items-center">
                                                        <div
                                                            class="w-6 h-6 md:w-8 md:h-8 bg-gray-300 rounded-full flex items-center justify-center mr-2 md:mr-3">
                                                            <span
                                                                class="text-xs font-medium text-gray-600">{$userData.name|substr:0:2|upper}</span>
                                                        </div>
                                                        <div class="min-w-0 flex-1">
                                                            <a href="{$base_url}/admin/users/{$userData.id}"
                                                                class="text-xs md:text-sm font-medium text-gray-900 hover:text-blue-800 truncate block">
                                                                {$userData.name}
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    <span class="text-xs md:text-sm text-gray-600 truncate block max-w-[120px] md:max-w-none">{$userData.email}</span>
                                                </td>
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    <span class="text-xs md:text-sm text-gray-600">
                                                        {if isset($userData.created_at) && $userData.created_at}
                                                            {$userData.created_at|date_format:"%b %d, %Y"}
                                                        {else}
                                                            N/A
                                                        {/if}
                                                    </span>
                                                </td>
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    {if $userData.status == 'verified'}
                                                        <span
                                                            class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                            <svg class="w-2.5 h-2.5 md:w-3 md:h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Verified
                                                        </span>
                                                    {else}
                                                        <span
                                                            class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                            <svg class="w-2.5 h-2.5 md:w-3 md:h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Unverified
                                                        </span>
                                                    {/if}
                                                </td>
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    <span class="text-xs md:text-sm font-semibold text-gray-900">
                                                        {$userData.orders_count}
                                                    </span>
                                                </td>
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    <span class="text-xs md:text-sm font-semibold text-gray-900">
                                                        ₦{$userData.total_spent|number_format:2}
                                                    </span>
                                                </td>
                                            </tr>
                                        {/foreach}
                                    </tbody>
                                </table>
                            </div>
                            {if isset($pagination) && $pagination.last_page > 1}
                                <div class="flex justify-center py-6 md:py-8 px-4">
                                    <nav class="inline-flex rounded-md -space-x-px" aria-label="Pagination">
                                        {if $pagination.prev_page_url}
                                            <a href="{$pagination.prev_page_url}"
                                                class="relative inline-flex items-center px-2 md:px-4 py-2 rounded-l-md border border-gray-300 bg-white text-xs md:text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                                        {else}
                                            <span
                                                class="relative inline-flex items-center px-2 md:px-4 py-2 rounded-l-md border border-gray-300 bg-gray-100 text-xs md:text-sm font-medium text-gray-400 cursor-not-allowed">Previous</span>
                                        {/if}
                                        {section name=page start=1 loop=$pagination.last_page+1}
                                            {assign var=pageNum value=$smarty.section.page.index}
                                            {if $pageNum == $pagination.current_page}
                                                <span
                                                    class="relative inline-flex items-center px-2 md:px-4 py-2 border border-gray-300 bg-black text-white text-xs md:text-sm font-medium">{$pageNum}</span>
                                            {else}
                                                <a href="?page={$pageNum}"
                                                    class="relative inline-flex items-center px-2 md:px-4 py-2 border border-gray-300 bg-white text-xs md:text-sm font-medium text-gray-700 hover:bg-gray-50">{$pageNum}</a>
                                            {/if}
                                        {/section}
                                        {if $pagination.next_page_url}
                                            <a href="{$pagination.next_page_url}"
                                                class="relative inline-flex items-center px-2 md:px-4 py-2 rounded-r-md border border-gray-300 bg-white text-xs md:text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                                        {else}
                                            <span
                                                class="relative inline-flex items-center px-2 md:px-4 py-2 rounded-r-md border border-gray-300 bg-gray-100 text-xs md:text-sm font-medium text-gray-400 cursor-not-allowed">Next</span>
                                        {/if}
                                    </nav>
                                </div>
                            {/if}
                        {else}
                            <div class="p-8 md:p-12 text-center">
                                <svg class="w-10 h-10 md:w-12 md:h-12 text-gray-400 mx-auto mb-3 md:mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197m13.5-9a2.5 2.5 0 11-5 0 2.5 2.5 0 015 0z" />
                                </svg>
                                <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-2">No users found</h3>
                                <p class="text-sm md:text-base text-gray-600 mb-4">There are no registered users in the system.</p>
                            </div>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <script>
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
    </script>

{/block}