{extends file="layouts/app.tpl"}

{block name="content"}
    <section class="relative w-full h-[500px] flex items-center justify-center">
        <img src="{asset path='/images/page-header.jpg'}" alt="Artisanal ceramic bowls and pottery"
            class="absolute inset-0 w-full h-full object-cover" />
        <!-- Glass container at bottom left -->
        <div class="absolute bottom-8 left-8 p-8 rounded-2xl max-w-md">
            <h1 class="text-4xl md:text-7xl font-serif mb-4 tracking-wide text-gray-900">CART</h1>
            <p class="text-lg md:text-base font-light opacity-90 text-black">Complete your skincare shopping experience</p>
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
                            class="flex items-center justify-center w-8 h-8 bg-black text-white rounded-full text-sm font-medium">
                            1
                        </div>
                        <span class="ml-3 text-sm font-medium text-gray-900">Cart</span>
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
                            <h1 class="text-2xl font-medium text-gray-900">Cart ({$cart_count|default:2} products)</h1>
                            <button class="text-red-500 hover:text-red-600 text-sm font-medium flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                                Clear cart
                            </button>
                        </div>

                        <!-- Cart Table Header -->
                        <div
                            class="hidden md:grid md:grid-cols-12 gap-4 py-3 border-b border-gray-200 text-sm font-medium text-gray-500">
                            <div class="col-span-6">Product</div>
                            <div class="col-span-2 text-center">Count</div>
                            <div class="col-span-3 text-right">Price</div>
                            <div class="col-span-1"></div>
                        </div>

                        <!-- Cart Items -->
                        <div class="divide-y divide-gray-200">
                            <!-- Item 1 -->
                            <div class="py-6">
                                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
                                    <!-- Product Info -->
                                    <div class="md:col-span-6 flex items-center space-x-4">
                                        <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
                                            <div
                                                class="w-12 h-12 bg-white rounded-lg shadow-sm flex items-center justify-center">
                                                <div class="w-8 h-8 bg-gray-200 rounded"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="font-medium text-gray-900">Apple AirPods Pro</h3>
                                            <p class="text-sm text-gray-500">White</p>
                                        </div>
                                    </div>

                                    <!-- Quantity Controls -->
                                    <div class="md:col-span-2 flex items-center justify-center">
                                        <div class="flex items-center border border-gray-300 rounded-lg">
                                            <button class="p-2 hover:bg-gray-50 text-gray-400">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M20 12H4" />
                                                </svg>
                                            </button>
                                            <span class="px-4 py-2 text-sm font-medium">1</span>
                                            <button class="p-2 hover:bg-gray-50 text-gray-400">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 4v16m8-8H4" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Price -->
                                    <div class="md:col-span-3 text-right">
                                        <span class="text-lg font-semibold text-gray-900">$249.99</span>
                                    </div>

                                    <!-- Remove Button -->
                                    <div class="md:col-span-1 text-right">
                                        <button class="text-red-500 hover:text-red-600">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 2 -->
                            <div class="py-6">
                                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
                                    <!-- Product Info -->
                                    <div class="md:col-span-6 flex items-center space-x-4">
                                        <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
                                            <div
                                                class="w-12 h-12 bg-white rounded-lg shadow-sm flex items-center justify-center">
                                                <div class="w-8 h-8 bg-gray-200 rounded"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="font-medium text-gray-900">Apple AirPods Max</h3>
                                            <p class="text-sm text-gray-500">Silver</p>
                                        </div>
                                    </div>

                                    <!-- Quantity Controls -->
                                    <div class="md:col-span-2 flex items-center justify-center">
                                        <div class="flex items-center border border-gray-300 rounded-lg">
                                            <button class="p-2 hover:bg-gray-50 text-gray-400">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M20 12H4" />
                                                </svg>
                                            </button>
                                            <span class="px-4 py-2 text-sm font-medium">1</span>
                                            <button class="p-2 hover:bg-gray-50 text-gray-400">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 4v16m8-8H4" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Price -->
                                    <div class="md:col-span-3 text-right">
                                        <span class="text-lg font-semibold text-gray-900">$549.99</span>
                                    </div>

                                    <!-- Remove Button -->
                                    <div class="md:col-span-1 text-right">
                                        <button class="text-red-500 hover:text-red-600">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <!-- Item 3 -->
                            <div class="py-6">
                                <div class="grid grid-cols-1 md:grid-cols-12 gap-4 items-center">
                                    <!-- Product Info -->
                                    <div class="md:col-span-6 flex items-center space-x-4">
                                        <div class="w-16 h-16 bg-gray-100 rounded-lg flex items-center justify-center">
                                            <div
                                                class="w-12 h-12 bg-white rounded-lg shadow-sm flex items-center justify-center">
                                                <div class="w-8 h-8 bg-gray-200 rounded-full"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <h3 class="font-medium text-gray-900">Apple HomePod mini</h3>
                                            <p class="text-sm text-gray-500">Silver</p>
                                        </div>
                                    </div>

                                    <!-- Quantity Controls -->
                                    <div class="md:col-span-2 flex items-center justify-center">
                                        <div class="flex items-center border border-gray-300 rounded-lg">
                                            <button class="p-2 hover:bg-gray-50 text-gray-400">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M20 12H4" />
                                                </svg>
                                            </button>
                                            <span class="px-4 py-2 text-sm font-medium">1</span>
                                            <button class="p-2 hover:bg-gray-50 text-gray-400">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M12 4v16m8-8H4" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- Price -->
                                    <div class="md:col-span-3 text-right">
                                        <span class="text-lg font-semibold text-gray-900">$99.99</span>
                                    </div>

                                    <!-- Remove Button -->
                                    <div class="md:col-span-1 text-right">
                                        <button class="text-red-500 hover:text-red-600">
                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M6 18L18 6M6 6l12 12" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Promotional Banner -->
                        <div class="mt-8 bg-gray-900 rounded-lg p-6 text-white">
                            <div class="flex items-center justify-between">
                                <div>
                                    <h3 class="text-lg font-medium mb-1">Check the newest Apple products</h3>
                                    <p class="text-gray-300 text-sm">Official Apple reseller</p>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="w-16 h-16 bg-white/10 rounded-lg flex items-center justify-center">
                                        <div class="w-12 h-12 bg-white/20 rounded-lg"></div>
                                    </div>
                                    <button
                                        class="bg-white text-gray-900 px-6 py-2 rounded-lg font-medium hover:bg-gray-100 transition-colors">
                                        Shop now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Order Summary Section -->
                <div class="lg:col-span-4 mt-8 lg:mt-0">
                    <div class="bg-white rounded-lg shadow-sm">
                        <!-- Promo Code Section -->
                        <div class="p-6 border-b border-gray-200">
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Promo code</h3>
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
                        <div class="p-6">
                            <div class="space-y-4">
                                <div class="flex justify-between text-gray-600">
                                    <span>Subtotal</span>
                                    <span>$899.97</span>
                                </div>
                                <div class="flex justify-between text-gray-600">
                                    <span>Discount</span>
                                    <span>-$0.00</span>
                                </div>
                                <div class="border-t border-gray-200 pt-4">
                                    <div class="flex justify-between text-lg font-semibold text-gray-900">
                                        <span>Total</span>
                                        <span>$899.97</span>
                                    </div>
                                </div>
                            </div>

                            <button
                                class="w-full mt-6 bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors"
                                onclick="window.location.href='/checkout'">
                                Continue to checkout
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}