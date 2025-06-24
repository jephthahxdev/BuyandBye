{* Orders Overview Template *}
{extends file="layouts/app.tpl"}

{block name="title"}Order #{$order.number|default:'1234'} - Buyandbye{/block}

{block name="head"}
    <meta name="csrf-token" content="{$csrf_token}">
{/block}

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
                        <a href="{$base_url}/admin/dashboard" class="ml-4 text-gray-500 hover:text-gray-700">Admin
                            Dashboard</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <a href="{$base_url}/admin/orders" class="ml-4 text-gray-500 hover:text-gray-700">Orders</a>
                    </li>
                    <li class="flex items-center">
                        <svg class="w-4 h-4 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <span class="ml-4 text-black font-medium">Order #{$order.number|default:'1234'}</span>
                    </li>
                </ol>
            </nav>

            <div class="flex gap-8" data-order-id="{$order.id}">
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
                    {include file="partials/admin-sidebar.tpl" active_page="orders"}
                </div>

                {* Main Content *}
                <div class="flex-1">
                    <div class="bg-white rounded-lg p-6 border border-gray-200">
                        {* Header with Order Number and Actions *}
                        <div class="flex items-center justify-between mb-8">
                            <h1 class="text-3xl font-bold text-gray-900">Order #{$order.number|default:'1234'}</h1>
                            <div class="flex items-center space-x-3">
                                <button class="p-2 text-gray-400 hover:text-gray-600 border border-gray-300 rounded-lg">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
                                        </path>
                                    </svg>
                                </button>
                                <button id="cancel-order-btn"
                                    class="px-4 py-2 text-gray-700 bg-white border border-gray-300 rounded-lg hover:bg-gray-50 disabled:opacity-50 disabled:cursor-not-allowed">
                                    Cancel Order
                                </button>
                                <button id="save-order-btn"
                                    class="px-4 py-2 text-white bg-black rounded-lg hover:bg-gray-800 disabled:opacity-50 disabled:cursor-not-allowed">
                                    <span class="save-text">Save Changes</span>
                                    <span class="saving-text hidden">Saving...</span>
                                </button>
                            </div>
                        </div>
                        {* Main Content Grid *}
                        <div class="grid grid-cols-1 lg:grid-cols-5 gap-8">
                            {* Left Column - Status and Order Info *}
                            <div class="lg:col-span-2 space-y-6">
                                {* Payment Status *}
                                <div class="bg-white rounded-lg border border-gray-200 p-6">
                                    <label class="block text-sm font-medium text-gray-700 mb-3">Payment status</label>
                                    <div class="relative">
                                        <select id="payment-status-select"
                                            class="w-full p-3 border border-gray-300 rounded-lg bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                            <option value="paid" {if $order.payment_status == 'paid'}selected{/if}>Paid
                                            </option>
                                            <option value="pending" {if $order.payment_status == 'pending'}selected{/if}>
                                                Pending</option>
                                            <option value="failed" {if $order.payment_status == 'failed'}selected{/if}>
                                                Failed</option>
                                            <option value="refunded" {if $order.payment_status == 'refunded'}selected{/if}>
                                                Refunded</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="flex items-center mt-3">
                                        <span id="payment-status-indicator"
                                            class="w-2 h-2 bg-green-500 rounded-full mr-2"></span>
                                        <span id="payment-status-text" class="text-sm text-green-700">Paid</span>
                                    </div>
                                </div>
                                {* Fulfillment Status *}
                                <div class="bg-white rounded-lg border border-gray-200 p-6">
                                    <label class="block text-sm font-medium text-gray-700 mb-3">Order status</label>
                                    <div class="relative">
                                        <select id="order-status-select"
                                            class="w-full p-3 border border-gray-300 rounded-lg bg-white appearance-none focus:outline-none focus:ring-2 focus:ring-blue-500">
                                            <option value="pending" {if $order.order_status == 'pending'}selected{/if}>
                                                Pending</option>
                                            <option value="processing"
                                                {if $order.order_status == 'processing'}selected{/if}>Processing</option>
                                            <option value="shipped" {if $order.order_status == 'shipped'}selected{/if}>
                                                Shipped</option>
                                            <option value="delivered" {if $order.order_status == 'delivered'}selected{/if}>
                                                Delivered</option>
                                            <option value="cancelled" {if $order.order_status == 'cancelled'}selected{/if}>
                                                Cancelled</option>
                                        </select>
                                        <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                                            <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor"
                                                viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 9l-7 7-7-7"></path>
                                            </svg>
                                        </div>
                                    </div>
                                    <div class="mt-3">
                                        <span id="order-status-badge"
                                            class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">
                                            Processing
                                        </span>
                                    </div>
                                </div>
                            </div>
                            {* Right Column - Order Details *}
                            <div class="lg:col-span-3 space-y-6">
                                {* Order Information Grid *}
                                <div class="bg-white rounded-lg border border-gray-200 p-6">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        {* First Row *}
                                        <div>
                                            <label class="block text-sm font-medium text-gray-500 mb-1">Date of sale</label>
                                            <p class="text-gray-900">{$order.date_of_sale|default:'09/30/2022'}</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-500 mb-1">Account
                                                number</label>
                                            <p class="text-gray-900">{$order.account_number|default:'12345678912'}</p>
                                        </div>
                                        {* Second Row *}
                                        <div>
                                            <label class="block text-sm font-medium text-gray-500 mb-1">Customer
                                                address</label>
                                            <p class="text-gray-900">
                                                {$order.customer_address|default:'123 Main St, Burlington, ON'}</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-500 mb-1">City</label>
                                            <p class="text-gray-900">{$order.city|default:'Toronto'}</p>
                                        </div>
                                        {* Third Row *}
                                        <div>
                                            <label class="block text-sm font-medium text-gray-500 mb-1">Province</label>
                                            <p class="text-gray-900">{$order.province|default:'Ontario'}</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-500 mb-1">Postal code</label>
                                            <p class="text-gray-900">{$order.postal_code|default:'123456'}</p>
                                        </div>
                                        {* Fourth Row *}
                                        <div>
                                            <label class="block text-sm font-medium text-gray-500 mb-1">Customer full
                                                name</label>
                                            <p class="text-gray-900">{$order.customer_name|default:'John Smith'}</p>
                                        </div>
                                        <div>
                                            <label class="block text-sm font-medium text-gray-500 mb-1">Customer phone
                                                number</label>
                                            <p class="text-gray-900">{$order.customer_phone|default:'+1 111 111 1234'}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {* Items Section *}
                        <div class="mt-8 bg-white rounded-lg border border-gray-200 p-6">
                            <div class="flex justify-between items-center mb-6">
                                <h3 class="text-lg font-medium text-gray-900">Items</h3>
                                <div class="flex space-x-8">
                                    <span class="text-sm font-medium text-gray-500">Quantity</span>
                                    <span class="text-sm font-medium text-gray-500">Total</span>
                                </div>
                            </div>
                            {* Items List *}
                            <div class="space-y-4">
                                {foreach from=$order.items item=item}
                                    <div
                                        class="flex items-center justify-between py-4 border-b border-gray-100 last:border-b-0">
                                        <div class="flex items-center space-x-4">
                                            <div class="w-16 h-16 bg-gray-100 rounded-lg overflow-hidden">
                                                <img src="{$item.image|default:'/images/placeholder.jpg'}" alt="{$item.name}"
                                                    class="w-full h-full object-cover">
                                            </div>
                                            <div>
                                                <h4 class="font-medium text-gray-900">{$item.name}</h4>
                                                <p class="text-sm text-gray-500">₦{$item.price|string_format:"%.2f"}</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-8">
                                            <span class="text-gray-900">x{$item.quantity}</span>
                                            <span
                                                class="font-medium text-gray-900 min-w-[80px] text-right">₦{$item.total|string_format:"%.2f"}</span>
                                        </div>
                                    </div>
                                {foreachelse}
                                    {* Default items if no data *}
                                    <div class="flex items-center justify-between py-4 border-b border-gray-100">
                                        <div class="flex items-center space-x-4">
                                            <div class="w-16 h-16 bg-gray-300 rounded-lg"></div>
                                            <div>
                                                <h4 class="font-medium text-gray-900">YESA HOODIE</h4>
                                                <p class="text-sm text-gray-500">₦17,12</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-8">
                                            <span class="text-gray-900">x1</span>
                                            <span class="font-medium text-gray-900 min-w-[80px] text-right">₦17,12</span>
                                        </div>
                                    </div>
                                    <div class="flex items-center justify-between py-4">
                                        <div class="flex items-center space-x-4">
                                            <div class="w-16 h-16 bg-gray-800 rounded-lg"></div>
                                            <div>
                                                <h4 class="font-medium text-gray-900">YESA HOODIE BLACK</h4>
                                                <p class="text-sm text-gray-500">₦17,12</p>
                                            </div>
                                        </div>
                                        <div class="flex items-center space-x-8">
                                            <span class="text-gray-900">x3</span>
                                            <span class="font-medium text-gray-900 min-w-[80px] text-right">₦51,36</span>
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                            {* Order Summary *}
                            <div class="mt-6 pt-6 border-t border-gray-200">
                                <div class="space-y-3">
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-600">Price</span>
                                        <span class="text-gray-900">₦{$order.subtotal|default:'68,48'}</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-600">Shipping</span>
                                        <span class="text-gray-900">{$order.shipping|default:'Free'}</span>
                                    </div>
                                    <div class="flex justify-between text-sm">
                                        <span class="text-gray-600">VAT (7.5%)</span>
                                        <span class="text-gray-900">₦{$order.vat|default:'2,42'}</span>
                                    </div>
                                    <div class="flex justify-between text-lg font-semibold pt-3 border-t border-gray-200">
                                        <span class="text-gray-900">Total</span>
                                        <span class="text-gray-900">₦{$order.total|default:'70,09'}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="/js/admin/orders-single.js"></script>
{/block}