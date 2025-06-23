{extends file="layouts/app.tpl"}

{block name="content"}
    <section class="relative w-full h-[500px] flex items-center justify-center">
        <img src="{asset path='/images/page-header.jpg'}" alt="Artisanal ceramic bowls and pottery"
            class="absolute inset-0 w-full h-full object-cover" />
        <!-- Glass container at bottom left -->
        <div class="absolute bottom-8 left-8 p-8 rounded-2xl max-w-md">
            <h1 class="text-4xl md:text-7xl font-serif mb-4 tracking-wide text-gray-900">PAYMENT</h1>
            <p class="text-lg md:text-base font-light opacity-90 text-black">Proceed to payment to complete your order</p>
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
                            class="flex items-center justify-center w-8 h-8 bg-gray-200 text-gray-500 rounded-full text-sm font-medium">
                            2
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-500">Checkout</span>
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
                            class="flex items-center justify-center w-8 h-8 bg-black text-white rounded-full text-sm font-medium">
                            3
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-900">Payment</span>
                    </div>
                </div>
            </div>

            <div class="lg:grid lg:grid-cols-12 lg:gap-12">
                <!-- Card Details Section -->
                <div class="lg:col-span-8">
                    <div class="bg-white rounded-lg shadow-sm p-6">
                        <!-- Card Header -->
                        <div class="flex items-center justify-between mb-6">
                            <h1 class="text-2xl font-medium text-gray-900">Card Details</h1>
                            <button class="text-gray-500 hover:text-red-600 text-sm font-medium flex items-center gap-2"
                                onclick="window.location.href='/checkout'">
                                <i class="fa fa-arrow-left" aria-hidden="true"></i>
                                Go back
                            </button>
                        </div>

                        <form class="p-6 w-full space-y-6" method="post" action="/payment" id="payment-form">
                            <input type="hidden" name="_token" value="{$csrf_token}">
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email address</label>
                                <input type="email" name="email" required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    value="{$checkout_data.email|default:''}">
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Card number</label>
                                <div class="flex items-center space-x-2">
                                    <input type="text" id="card_number" name="card_number" required maxlength="19"
                                        placeholder="1234 1234 1234 1234"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <span class="flex space-x-1">
                                        <img src="https://img.icons8.com/color/24/000000/visa.png" alt="Visa" />
                                        <img src="https://img.icons8.com/color/24/000000/mastercard-logo.png"
                                            alt="Mastercard" />
                                        <img src="https://img.icons8.com/color/24/000000/discover.png" alt="Discover" />
                                    </span>
                                </div>
                            </div>
                            
                            <div class="flex space-x-4">
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Expiration month</label>
                                    <input type="text" id="expiry_month" name="expiry_month" required placeholder="MM"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Expiration year</label>
                                    <input type="text" id="expiry_year" name="expiry_year" required placeholder="YYYY"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                                <div class="flex-1">
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Security code</label>
                                    <input type="text" id="cvv" name="cvv" required maxlength="4" placeholder="CVV"
                                        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                </div>
                            </div>
                            
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Cardholder name</label>
                                <input type="text" name="cardholder" required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                            </div>

                            <button type="submit" id="pay-button"
                                class="w-full bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                                <span id="pay-button-text">Pay ₦{$cart_total|string_format:"%.2f"}</span>
                                <span id="pay-button-spinner" class="hidden">
                                    <svg class="animate-spin -ml-1 mr-3 h-5 w-5 text-white inline" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                    Processing...
                                </span>
                            </button>
                            
                            <div class="mt-4 text-center text-xs text-gray-400">
                                Powered by Jephthah I. &bull; <a href="#" class="hover:underline">Terms</a> &bull; <a href="#"
                                    class="hover:underline">Privacy</a>
                            </div>
                        </form>
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
                                                <span class="text-base font-semibold text-gray-900">₦{($item.price|default:0) * ($item.quantity|default:1)|string_format:"%.2f"}</span>
                                            </div>
                                        </div>
                                    </div>
                                    {/foreach}
                                {else}
                                    <p class="text-center text-gray-500">Your cart is empty.</p>
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
                                        <span class="font-semibold">₦{$cart_subtotal|string_format:"%.2f"}</span>
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
                                        <span class="font-semibold">₦{$tax|string_format:"%.2f"}</span>
                                    </div>
                                    <hr class="border-gray-300">
                                    <div class="flex justify-between items-center text-xl font-bold">
                                        <span>Total</span>
                                        <span>₦{$cart_total|string_format:"%.2f"}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://unpkg.com/imask"></script>
    <script src="/js/payment.js"></script>
{/block}