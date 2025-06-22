{* Account Overview Template *}
{extends file="layouts/app.tpl"}

{block name="title"}Billing - Buyandbye{/block}

{block name="content"}

    <style>
        html {
            scroll-behavior: smooth;
        }
    </style>

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
                        <span class="ml-4 text-black font-medium">Billing</span>
                    </li>
                </ol>
            </nav>

            {* Page Title *}
            <h1 class="text-3xl font-bold text-black mb-8">Billing Details</h1>

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
                    {include file="partials/account-sidebar.tpl" active_page="billing"}
                </div>

                {* Main Content *}
                <div class="flex-1">
                    <div class="bg-white rounded-lg border border-gray-200 mb-8">
                        {* Billing Data *}
                        <div class="p-6 border-b border-gray-200">
                            <h2 class="text-xl font-bold text-black">Billing data</h2>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 p-6 divide-x divide-gray-200">
                            <!-- Default Billing Address -->
                            <div class="pr-4">
                                <h3 class="text-lg font-semibold mb-4">Default billing address</h3>
                                {if $billing_addresses|@count == 0}
                                    <div class="flex items-center justify-between bg-gray-50 rounded-lg px-4 py-3 mb-4">
                                        <span class="text-gray-700">There is no billing address yet</span>
                                        <a href="{$base_url}/account/billing/add"
                                            class="bg-gray-600 text-white px-4 py-2 rounded-lg font-medium hover:bg-gray-700 transition">Add
                                            Billing Address</a>
                                    </div>
                                {else}
                                    {foreach $billing_addresses as $address}
                                        <div
                                            class="border rounded-lg p-4 mb-4 {if $address.is_default}border-gray-600 bg-gray-50{else}border-gray-200 bg-white{/if} flex items-start justify-between">
                                            <div>
                                                <div class="flex items-center mb-1">
                                                    {if $address.is_default}
                                                        <svg class="w-5 h-5 text-gray-600 mr-2" fill="none" stroke="currentColor"
                                                            viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                                d="M5 13l4 4L19 7" />
                                                        </svg>
                                                    {/if}
                                                    <span class="font-semibold text-gray-900">{$address.name}</span>
                                                    {if $address.company}
                                                        <span
                                                            class="inline-block bg-gray-100 rounded-full px-2 py-1 ml-2 text-gray-700 text-xs">{$address.company}</span>
                                                    {/if}
                                                </div>
                                                <div class="text-sm text-gray-700">
                                                    {$address.address}<br>
                                                    {$address.zip} {$address.city} - {$address.country}
                                                </div>
                                            </div>
                                            <button class="ml-4 text-gray-400 hover:text-red-600" title="Delete">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    {/foreach}
                                    <a href="#billing-form"
                                        class="text-gray-700 font-medium mt-2 inline-block hover:underline">+ Add Billing
                                        Address</a>
                                {/if}
                            </div>

                            <!-- Default Payment Method -->
                            <div>
                                <h3 class="text-lg font-semibold mb-4">Default payment method</h3>
                                {if $payment_methods|@count == 0}
                                    <div class="flex items-center justify-between bg-gray-50 rounded-lg px-4 py-3 mb-4">
                                        <span class="text-gray-700">There is no payment method yet</span>
                                        <a href="{$base_url}/account/payment/add"
                                            class="bg-gray-600 text-white px-4 py-2 rounded-lg font-medium shadow hover:bg-gray-700 transition">Add
                                            Payment Method</a>
                                    </div>
                                {else}
                                    {foreach $payment_methods as $method}
                                        <div
                                            class="border rounded-lg px-4 py-6 mb-4 {if $method.is_default}border-gray-600 bg-gray-50{else}border-gray-200 bg-white{/if} flex items-center justify-between">
                                            <div class="flex items-center">
                                                {if $method.is_default}
                                                    <svg class="w-5 h-5 text-gray-600 mr-1" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                            d="M5 13l4 4L19 7" />
                                                    </svg>
                                                {/if}
                                                <span class="font-mono text-base tracking-widest">**** **** ****
                                                    {$method.last4}</span>
                                                <span
                                                    class="ml-2 text-xs text-gray-700 font-medium uppercase">{$method.brand}</span>
                                            </div>
                                            <button class="ml-4 text-gray-400 hover:text-red-600" title="Delete">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M6 18L18 6M6 6l12 12" />
                                                </svg>
                                            </button>
                                        </div>
                                    {/foreach}
                                {/if}
                            </div>
                        </div>
                    </div>
                    {* Billing form *}
                    <div id="billing-form" class="mb-8 bg-white rounded-lg border border-gray-200 p-4 scroll-mt-24">
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex items-center">
                                <h2 class="text-xl font-bold text-black">Add billing address</h2>
                                <div class="ml-2 w-6 h-6 bg-gray-200 rounded-full flex items-center justify-center">
                                    <svg class="w-4 h-4 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <form method="post" action="/account/billing/add" class="space-y-6 bg-white py-6 px-4">
                            <input type="hidden" name="_token" value="{$csrf_token}">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                <input type="text" name="name" required value="{$user.name|default:''}"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" name="email" required value="{$user.email|default:''}"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Company (Optional)</label>
                                <input type="text" name="company"
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Address</label>
                                <input type="text" name="address" required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div class="flex space-x-4">
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">City</label>
                                    <input type="text" name="city" required
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">State</label>
                                    <input type="text" name="state" required
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Zip</label>
                                    <input type="text" name="zip" required
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                </div>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                                <select name="country" required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                    <option value="United States" selected>United States</option>
                                    <option value="Canada">Canada</option>
                                    <option value="United Kingdom">United Kingdom</option>
                                    <option value="France">France</option>
                                    <option value="Germany">Germany</option>
                                    <option value="Australia">Australia</option>
                                </select>
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                <input type="text" name="phone" required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" name="is_default" id="is_default" class="mr-2">
                                <label for="is_default" class="text-sm text-gray-700">Set as default billing address</label>
                            </div>
                            <button type="submit"
                                class="w-full bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                                Add Billing Address
                            </button>
                        </form>
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