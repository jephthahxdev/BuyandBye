{* Single User Template *}
{extends file="layouts/app.tpl"}

{block name="title"}User Details - Buyandbye{/block}

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
                        <span class="ml-4 text-gray-500">Admin Dashboard</span>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <a href="{$base_url}/admin/users" class="ml-4 text-gray-500 hover:text-gray-700">Users</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-4 text-black font-medium">{$user_data.name}</span>
                    </li>
                </ol>
            </nav>

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
                    {include file="partials/admin-sidebar.tpl" active_page="users"}
                </div>

                {* Main Content *}
                <div class="flex-1 space-y-6">
                    {* User Profile Section *}
                    <div class="bg-white rounded-lg border border-gray-200">
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-black">User Profile</h2>
                        </div>
                        <div class="p-6">
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Basic Information</h3>
                                    <div class="space-y-3">
                                        <div>
                                            <label class="text-sm font-medium text-gray-500">Name</label>
                                            <p class="text-sm text-gray-900">{$user_data.name}</p>
                                        </div>
                                        <div>
                                            <label class="text-sm font-medium text-gray-500">Email</label>
                                            <p class="text-sm text-gray-900">{$user_data.email}</p>
                                        </div>
                                        <div>
                                            <label class="text-sm font-medium text-gray-500">Joined</label>
                                            <p class="text-sm text-gray-900">{$user_data.created_at}</p>
                                        </div>
                                        <div>
                                            <label class="text-sm font-medium text-gray-500">Email Verification</label>
                                            <p class="text-sm text-gray-900">{$user_data.email_verified_at}</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <h3 class="text-lg font-semibold text-gray-900 mb-4">Account Statistics</h3>
                                    <div class="space-y-3">
                                        <div>
                                            <label class="text-sm font-medium text-gray-500">Total Orders</label>
                                            <p class="text-sm font-semibold text-gray-900">{$user_data.orders_count}</p>
                                        </div>
                                        <div>
                                            <label class="text-sm font-medium text-gray-500">Total Spent</label>
                                            <p class="text-sm font-semibold text-gray-900">₦{$user_data.total_spent|number_format:2}</p>
                                        </div>
                                        <div>
                                            <label class="text-sm font-medium text-gray-500">Billing Addresses</label>
                                            <p class="text-sm font-semibold text-gray-900">{$user_data.billing_addresses_count}</p>
                                        </div>
                                        <div>
                                            <label class="text-sm font-medium text-gray-500">Payment Methods</label>
                                            <p class="text-sm font-semibold text-gray-900">{$user_data.payment_methods_count}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {* Social Media Links *}
                    {if $user_data.twitter_handle || $user_data.facebook_handle || $user_data.linkedin_handle}
                        <div class="bg-white rounded-lg border border-gray-200">
                            <div class="p-6 border-b border-gray-200">
                                <h2 class="text-xl font-bold text-black">Social Media</h2>
                            </div>
                            <div class="p-6">
                                <div class="flex space-x-4">
                                    {if $user_data.twitter_handle}
                                        <a href="https://twitter.com/{$user_data.twitter_handle}" target="_blank" class="flex items-center text-blue-500 hover:text-blue-700">
                                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M23.953 4.57a10 10 0 01-2.825.775 4.958 4.958 0 002.163-2.723c-.951.555-2.005.959-3.127 1.184a4.92 4.92 0 00-8.384 4.482C7.69 8.095 4.067 6.13 1.64 3.162a4.822 4.822 0 00-.666 2.475c0 1.71.87 3.213 2.188 4.096a4.904 4.904 0 01-2.228-.616v.06a4.923 4.923 0 003.946 4.827 4.996 4.996 0 01-2.212.085 4.936 4.936 0 004.604 3.417 9.867 9.867 0 01-6.102 2.105c-.39 0-.779-.023-1.17-.067a13.995 13.995 0 007.557 2.209c9.053 0 13.998-7.496 13.998-13.985 0-.21 0-.42-.015-.63A9.935 9.935 0 0024 4.59z"/>
                                            </svg>
                                            @{$user_data.twitter_handle}
                                        </a>
                                    {/if}
                                    {if $user_data.facebook_handle}
                                        <a href="https://facebook.com/{$user_data.facebook_handle}" target="_blank" class="flex items-center text-blue-600 hover:text-blue-800">
                                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
                                            </svg>
                                            {$user_data.facebook_handle}
                                        </a>
                                    {/if}
                                    {if $user_data.linkedin_handle}
                                        <a href="https://linkedin.com/in/{$user_data.linkedin_handle}" target="_blank" class="flex items-center text-blue-700 hover:text-blue-900">
                                            <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                                            </svg>
                                            {$user_data.linkedin_handle}
                                        </a>
                                    {/if}
                                </div>
                            </div>
                        </div>
                    {/if}

                    {* User Orders Section *}
                    {if $user_data.orders && count($user_data.orders) > 0}
                        <div class="bg-white rounded-lg border border-gray-200">
                            <div class="p-6 border-b border-gray-200">
                                <h2 class="text-xl font-bold text-black">Recent Orders</h2>
                            </div>
                            <div class="overflow-x-auto">
                                <table class="w-full">
                                    <thead class="bg-gray-50">
                                        <tr>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Order</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Amount</th>
                                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="bg-white divide-y divide-gray-200">
                                        {foreach $user_data.orders as $order}
                                            <tr class="hover:bg-gray-50">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <a href="{$base_url}/admin/orders/{$order.id}" class="text-sm font-medium text-gray-900 hover:text-blue-800">
                                                        #{$order.order_number}
                                                    </a>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="text-sm text-gray-600">{$order.created_at|date_format:"%b %d, %Y"}</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <span class="text-sm font-semibold text-gray-900">₦{$order.total|number_format:2}</span>
                                                </td>
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    {if $order.status == 'pending'}
                                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800">Pending</span>
                                                    {elseif $order.status == 'processing'}
                                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Processing</span>
                                                    {elseif $order.status == 'shipped'}
                                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-purple-100 text-purple-800">Shipped</span>
                                                    {elseif $order.status == 'delivered'}
                                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Delivered</span>
                                                    {elseif $order.status == 'cancelled'}
                                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-red-100 text-red-800">Cancelled</span>
                                                    {else}
                                                        <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800">{$order.status|capitalize}</span>
                                                    {/if}
                                                </td>
                                            </tr>
                                        {/foreach}
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    {/if}

                    {* Billing Addresses Section *}
                    {if $user_data.billing_addresses && count($user_data.billing_addresses) > 0}
                        <div class="bg-white rounded-lg border border-gray-200">
                            <div class="p-6 border-b border-gray-200">
                                <h2 class="text-xl font-bold text-black">Billing Addresses</h2>
                            </div>
                            <div class="p-6">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                    {foreach $user_data.billing_addresses as $address}
                                        <div class="border border-gray-200 rounded-lg p-4 {if $address.is_default}bg-blue-50 border-blue-200{/if}">
                                            {if $address.is_default}
                                                <div class="flex items-center mb-2">
                                                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-blue-100 text-blue-800">Default</span>
                                                </div>
                                            {/if}
                                            <div class="space-y-1">
                                                <p class="text-sm text-gray-900">{$address.address_line_1}</p>
                                                {if $address.address_line_2}
                                                    <p class="text-sm text-gray-900">{$address.address_line_2}</p>
                                                {/if}
                                                <p class="text-sm text-gray-900">{$address.city}, {$address.state} {$address.postal_code}</p>
                                                <p class="text-sm text-gray-900">{$address.country}</p>
                                            </div>
                                        </div>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    {/if}
                </div>
            </div>
        </div>
    </div>

{/block} 