{extends file="layouts/app.tpl"}

{block name="content"}
    <section class="relative w-full h-[500px] flex items-center justify-center">
        <img src="{asset path='/images/page-header.jpg'}" alt="Artisanal ceramic bowls and pottery"
            class="absolute inset-0 w-full h-full object-cover" />
        <!-- Glass container at bottom left -->
        <div class="absolute bottom-8 left-8 p-8 rounded-2xl max-w-md">
            <h1 class="text-4xl md:text-7xl font-serif mb-4 tracking-wide text-gray-900">CHECKOUT</h1>
            <p class="text-lg md:text-base font-light opacity-90 text-black">Please fill in the details below to complete
                your order</p>
        </div>
    </section>

    <div class="min-h-screen bg-gray-50 py-8">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <!-- Progress Steps -->
            <div class="mb-12">
                <div class="flex items-center justify-center space-x-8">
                    <!-- Cart Step -->
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center w-8 h-8 bg-gray-200 text-gray-500 rounded-full text-sm font-medium">
                            1
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-500">Cart</span>
                    </div>

                    <!-- Arrow -->
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>

                    <!-- Checkout Step -->
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center w-8 h-8 bg-black text-white rounded-full text-sm font-medium">
                            2
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-900">Checkout</span>
                    </div>

                    <!-- Arrow -->
                    <svg class="w-5 h-5 text-gray-300" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                            clip-rule="evenodd" />
                    </svg>

                    <!-- Payment Step -->
                    <div class="flex items-center">
                        <div
                            class="flex items-center justify-center w-8 h-8 bg-gray-200 text-gray-500 rounded-full text-sm font-medium">
                            3
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-500">Payment</span>
                    </div>
                </div>
            </div>

            <div class="lg:grid lg:grid-cols-12 lg:gap-12">
                <!-- Cart Items Section -->
                <div class="lg:col-span-8">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <!-- Cart Header -->
                        <div class="flex items-center justify-between mb-6">
                            <h1 class="text-2xl font-medium text-gray-900">Billing information</h1>
                            <button class="text-gray-500 hover:text-red-600 text-sm font-medium flex items-center gap-2"
                                onclick="window.location.href='/cart'">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Go back
                            </button>
                        </div>

                        {if $is_logged_in && $billing_addresses|@count > 0}
                            <!-- Existing Billing Addresses for Logged-in Users -->
                            <div class="mb-6">
                                <h2 class="text-lg font-medium text-gray-900 mb-4">Choose a billing address</h2>
                                <div class="space-y-3">
                                    {foreach from=$billing_addresses item=address}
                                        <div class="border rounded-lg p-4 {if $address.is_default}border-gray-600 bg-gray-50{else}border-gray-200 bg-white{/if}">
                                            <div class="flex items-start">
                                                <input type="radio" name="selected_address" value="{$address.id}" 
                                                    {if $address.is_default}checked{/if}
                                                    class="mt-1 mr-3" onchange="selectAddress({$address.id})">
                                                <div class="flex-1">
                                                    <div class="flex items-center mb-1">
                                                        {if $address.is_default}
                                                            <span class="inline-block bg-gray-600 text-white text-xs px-2 py-1 rounded mr-2">Default</span>
                                                        {/if}
                                                        <span class="font-semibold text-gray-900">{$address.name}</span>
                                                        {if $address.company}
                                                            <span class="inline-block bg-gray-100 rounded-full px-2 py-1 ml-2 text-gray-700 text-xs">{$address.company}</span>
                                                        {/if}
                                                    </div>
                                                    <div class="text-sm text-gray-700">
                                                        {$address.address}<br>
                                                        {$address.city}, {$address.state} {$address.zip}<br>
                                                        {$address.country}<br>
                                                        Phone: {$address.phone}
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    {/foreach}
                                </div>
                                
                                <div class="mt-4">
                                    <button type="button" onclick="showNewAddressForm()" 
                                        class="text-gray-700 font-medium hover:underline">
                                        + Use a different address
                                    </button>
                                </div>
                                <button type="submit"
                                    class="mt-8 w-full bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors"
                                    onclick="continueToPayment(); return false;">
                                    Continue to payment
                                </button>
                            </div>
                        {/if}

                        <!-- Billing Form -->
                        <div id="billing-form" class="{if $is_logged_in && $billing_addresses|@count > 0}hidden{/if}">
                            <form method="post" action="/checkout/process" class="space-y-6 bg-white py-6 px-4">
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
                                        <option value="Nigeria" selected>Nigeria</option>
                                        <option value="United States">United States</option>
                                        <option value="United Kingdom">United Kingdom</option>
                                        <option value="France">France</option>
                                        <option value="Germany">Germany</option>
                                        <option value="Canada">Canada</option>
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                    <input type="text" name="phone" required
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                                </div>
                                <button type="submit"
                                    class="w-full bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                                    Continue to payment
                                </button>
                            </form>
                        </div>

                        {if !$is_logged_in}
                            <!-- Already have an account? -->
                            <div class="mt-6 text-center">
                                <span class="text-gray-600">Already have an account?</span>
                                <a href="/login" class="ml-2 text-black font-medium hover:underline">Sign in instead</a>
                            </div>
                        {/if}
                    </div>
                </div>

                <!-- Order Summary Section -->
                <div class="lg:col-span-4 mt-8 lg:mt-0">
                    <div class="bg-white rounded-lg shadow-sm">
                        <!-- Order summary Section -->
                        <div class="p-6 border-b border-gray-200">
                            <div class="flex justify-between items-center">
                                <h3 class="text-lg font-medium text-gray-900">Order summary</h3>
                                <button class="text-gray-500 text-sm flex items-center gap-2 underline"
                                    onclick="window.location.href='/cart'">
                                    Edit
                                </button>
                            </div>
                        </div>

                        <!-- Order Summary -->
                        <div class="max-w-2xl mx-auto bg-white rounded-lg shadow-lg overflow-hidden">
                            <!-- Cart Items -->
                            <div class="p-6">
                                {if $cart|@count > 0}
                                    {foreach from=$cart item=item key=product_id}
                                        <div class="flex items-start space-x-2 justify-between pb-6 {if !$item@last}border-b border-gray-200{/if} relative">
                                            <div class="flex-shrink-0">
                                                {if isset($item.image) && $item.image}
                                                    <img src="{asset path=$item.image}" alt="{$item.name|default:'Product'}" class="w-20 h-20 object-cover rounded-lg">
                                                {else}
                                                    <div class="w-20 h-20 bg-gray-100 rounded-lg flex items-center justify-center">
                                                        <div class="w-12 h-12 bg-gray-200 rounded"></div>
                                                    </div>
                                                {/if}
                                            </div>

                                            <div class="flex-1">
                                                <h3 class="font-semibold text-base text-gray-900">{$item.name|default:'Product'}</h3>
                                                {if isset($item.size) && $item.size}
                                                    <p class="text-gray-600 text-sm mb-3">{$item.size}</p>
                                                {/if}

                                                <div class="flex items-center justify-between mt-3">
                                                    <div class="flex items-center">
                                                        <span class="text-gray-600 text-sm">Qty</span>
                                                        <span class="underline px-2 py-1 text-sm">{$item.quantity|default:1}</span>
                                                    </div>
                                                    <span class="text-base font-semibold text-gray-900">${($item.price|default:0) * ($item.quantity|default:1)|string_format:"%.2f"}</span>
                                                </div>
                                            </div>
                                        </div>
                                    {/foreach}
                                {else}
                                    <div class="text-center py-8">
                                        <p class="text-gray-500">No items in cart</p>
                                    </div>
                                {/if}
                            </div>

                            <!-- Discount Code Section -->
                            <div class="px-6 py-4">
                                <h4 class="font-medium text-gray-900 pb-2">Discount code</h4>
                                <div class="flex space-x-2">
                                    <input type="text" placeholder="Type here..."
                                        class="flex-1 px-2 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-black focus:border-transparent">
                                    <button
                                        class="bg-black text-white px-6 py-2 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                                        Apply
                                    </button>
                                </div>
                            </div>

                            <!-- Order Summary -->
                            <div class="px-6 py-6 bg-gray-50 border-t border-gray-200">
                                <div class="space-y-3">
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Subtotal</span>
                                        <span class="font-semibold">₦{$cart_subtotal|default:0|string_format:"%.2f"}</span>
                                    </div>
                                    <div class="flex justify-between">
                                        <span class="text-gray-600">Shipping</span>
                                        <span class="font-semibold text-green-600">Free</span>
                                    </div>
                                    <div class="flex justify-between items-center">
                                        <div class="flex items-center space-x-1">
                                            <span class="text-gray-600">Tax</span>
                                            <i class="fas fa-info-circle text-gray-400 text-xs"></i>
                                        </div>
                                        <span class="font-semibold">₦{(($cart_subtotal|default:0) * 0.075)|string_format:"%.2f"}</span>
                                    </div>
                                    <hr class="border-gray-300">
                                    <div class="flex justify-between items-center text-xl font-bold">
                                        <span>Total</span>
                                        <span>₦{(($cart_subtotal|default:0) * 1.075)|string_format:"%.2f"}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/checkout.js"></script>
{/block}