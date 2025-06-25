{* Orders Overview Template *}
{extends file="layouts/app.tpl"}

{block name="title"}Orders - Buyandbye{/block}

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
                        <span class="ml-4 text-black font-medium">Orders</span>
                    </li>
                </ol>
            </nav>

            {* Page Title *}
            <h1 class="text-2xl md:text-3xl font-bold text-black mb-6 md:mb-8">My orders</h1>

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
                    {include file="partials/admin-sidebar.tpl" active_page="orders"}
                </div>

                {* Main Content *}
                <div class="flex-1">
                    {* Active Orders *}
                    <div class="bg-white rounded-lg border border-gray-200">
                        <div class="p-4 md:p-6 border-b border-gray-200">
                            <div class="flex items-center">
                                <h2 class="text-lg md:text-xl font-bold text-black">Active orders</h2>
                                <div class="ml-2 w-5 h-5 md:w-6 md:h-6 bg-gray-200 rounded-full flex items-center justify-center">
                                    <svg class="w-3 h-3 md:w-4 md:h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>

                        {* Active Orders Table Section - Improved Version *}
                        {if $active_orders && is_array($active_orders) && count($active_orders) > 0}
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th
                                                class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Order Number</th>
                                            <th
                                                class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Date</th>
                                            <th
                                                class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Price</th>
                                            <th
                                                class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Status</th>
                                            <th
                                                class="px-3 md:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                Items</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        {foreach $active_orders as $order}
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    <a href="{$base_url}/admin/orders/{$order.id}" class="text-xs md:text-sm font-medium text-gray-600 hover:text-blue-800">
                                                        #{$order.order_number|default:'N/A'}
                                                    </a>
                                                </td>
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    <span class="text-xs md:text-sm text-gray-600">
                                                        {if isset($order.created_at) && $order.created_at}
                                                            {$order.created_at|date_format:"%b %d, %Y"}
                                                        {else}
                                                            N/A
                                                        {/if}
                                                    </span>
                                                </td>
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    <span class="text-xs md:text-sm font-semibold text-gray-900">
                                                        ₦{$order.total|default:0|number_format:2}
                                                    </span>
                                                </td>
                                                <td class="px-3 md:px-6 py-4 whitespace-nowrap">
                                                    {assign var="status" value=$order.status|default:'unknown'}
                                                    {if $status == 'pending'}
                                                        <span
                                                            class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">
                                                            <svg class="w-2.5 h-2.5 md:w-3 md:h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Pending
                                                        </span>
                                                    {elseif $status == 'processing'}
                                                        <span
                                                            class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">
                                                            <svg class="w-2.5 h-2.5 md:w-3 md:h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Processing
                                                        </span>
                                                    {elseif $status == 'shipped'}
                                                        <span
                                                            class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">
                                                            <svg class="w-2.5 h-2.5 md:w-3 md:h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M8 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM15 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0z" />
                                                                <path
                                                                    d="M3 4a1 1 0 00-1 1v10a1 1 0 001 1h1.05a2.5 2.5 0 014.9 0H10a1 1 0 001-1V5a1 1 0 00-1-1H3zM14 7a1 1 0 00-1 1v6.05A2.5 2.5 0 0115.95 16H17a1 1 0 001-1v-5a1 1 0 00-.293-.707L16 7.586A1 1 0 0015.414 7H14z" />
                                                            </svg>
                                                            Shipped
                                                        </span>
                                                    {elseif $status == 'delivered'}
                                                        <span
                                                            class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                                            <svg class="w-2.5 h-2.5 md:w-3 md:h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Delivered
                                                        </span>
                                                    {elseif $status == 'cancelled'}
                                                        <span
                                                            class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">
                                                            <svg class="w-2.5 h-2.5 md:w-3 md:h-3 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                                <path fill-rule="evenodd"
                                                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                    clip-rule="evenodd" />
                                                            </svg>
                                                            Cancelled
                                                        </span>
                                                    {else}
                                                        <span
                                                            class="inline-flex items-center px-2 py-0.5 md:px-2.5 md:py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">
                                                            {$status|capitalize}
                                                        </span>
                                                    {/if}
                                                </td>
                                                <td class="px-3 md:px-6 py-4">
                                                    <div class="max-w-xs">
                                                        {if isset($order.items) && is_array($order.items) && count($order.items) > 0}
                                                            {assign var="itemCount" value=count($order.items)}
                                                            {if $itemCount == 1}
                                                                <span class="text-xs md:text-sm text-gray-900">
                                                                    {$order.items[0].name|default:'Unknown Item'}
                                                                    {if $order.items[0].quantity > 1}
                                                                        <span class="text-gray-500">(×{$order.items[0].quantity})</span>
                                                                    {/if}
                                                                </span>
                                                            {elseif $itemCount == 2}
                                                                <span class="text-xs md:text-sm text-gray-900">
                                                                    {$order.items[0].name|default:'Unknown Item'}
                                                                    {if $order.items[0].quantity > 1}
                                                                        <span class="text-gray-500">(×{$order.items[0].quantity})</span>
                                                                    {/if}
                                                                    <br>
                                                                    {$order.items[1].name|default:'Unknown Item'}
                                                                    {if $order.items[1].quantity > 1}
                                                                        <span class="text-gray-500">(×{$order.items[1].quantity})</span>
                                                                    {/if}
                                                                </span>
                                                            {else}
                                                                <span class="text-xs md:text-sm text-gray-900">
                                                                    {$order.items[0].name|default:'Unknown Item'}
                                                                    {if $order.items[0].quantity > 1}
                                                                        <span class="text-gray-500">(×{$order.items[0].quantity})</span>
                                                                    {/if}
                                                                    <br>
                                                                    <span class="text-gray-500">+{$itemCount-1} more items</span>
                                                                </span>
                                                            {/if}
                                                        {else}
                                                            <span class="text-xs md:text-sm text-gray-400">No items</span>
                                                        {/if}
                                                    </div>
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
                                            <a href="{$pagination.prev_page_url}" class="relative inline-flex items-center px-2 md:px-4 py-2 rounded-l-md border border-gray-300 bg-white text-xs md:text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                                        {else}
                                            <span class="relative inline-flex items-center px-2 md:px-4 py-2 rounded-l-md border border-gray-300 bg-gray-100 text-xs md:text-sm font-medium text-gray-400 cursor-not-allowed">Previous</span>
                                        {/if}
                                        {section name=page start=1 loop=$pagination.last_page+1}
                                            {assign var=pageNum value=$smarty.section.page.index}
                                            {if $pageNum == $pagination.current_page}
                                                <span class="relative inline-flex items-center px-2 md:px-4 py-2 border border-gray-300 bg-black text-white text-xs md:text-sm font-medium">{$pageNum}</span>
                                            {else}
                                                <a href="?page={$pageNum}" class="relative inline-flex items-center px-2 md:px-4 py-2 border border-gray-300 bg-white text-xs md:text-sm font-medium text-gray-700 hover:bg-gray-50">{$pageNum}</a>
                                            {/if}
                                        {/section}
                                        {if $pagination.next_page_url}
                                            <a href="{$pagination.next_page_url}" class="relative inline-flex items-center px-2 md:px-4 py-2 rounded-r-md border border-gray-300 bg-white text-xs md:text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                                        {else}
                                            <span class="relative inline-flex items-center px-2 md:px-4 py-2 rounded-r-md border border-gray-300 bg-gray-100 text-xs md:text-sm font-medium text-gray-400 cursor-not-allowed">Next</span>
                                        {/if}
                                    </nav>
                                </div>
                            {/if}
                        {else}
                            <div class="p-8 md:p-12 text-center">
                                <svg class="w-10 h-10 md:w-12 md:h-12 text-gray-400 mx-auto mb-3 md:mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                                </svg>
                                <h3 class="text-base md:text-lg font-semibold text-gray-900 mb-2">No active orders</h3>
                            <p class="text-sm md:text-base text-gray-600 mb-3 md:mb-4">You don't have any active orders at the moment.</p>
                        <a href="{$base_url}/shop"
                            class="inline-flex items-center px-3 md:px-4 py-2 bg-black text-white rounded-lg hover:bg-gray-800 text-sm md:text-base">
                            <svg class="w-3 h-3 md:w-4 md:h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                <path
                                    d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                            </svg>
                            Start shopping
                        </a>
                    </div>
                    {/if}
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