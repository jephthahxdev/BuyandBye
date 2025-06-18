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

                        <!-- Billing information -->
                        <form method="post" action="/payment" class="space-y-6 bg-white py-6 px-4">
                            <input type="hidden" name="_token" value="{$csrf_token}">
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                <input type="text" name="name" required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <div>
                                <label class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                                <input type="email" name="email" required
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
                                <label class="block text-sm font-medium text-gray-700 mb-1">Phone</label>
                                <input type="text" name="phone" required
                                    class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-black focus:border-transparent">
                            </div>
                            <button type="submit"
                                class="w-full bg-black text-white py-3 rounded-lg font-medium hover:bg-gray-800 transition-colors">
                                Continue to payment
                            </button>
                        </form>

                        <!-- Already have an account? -->
                        <div class="mt-6 text-center">
                            <span class="text-gray-600">Already have an account?</span>
                            <a href="/login" class="ml-2 text-black font-medium hover:underline">Sign in instead</a>
                        </div>
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
                                <!-- PlayStation 5 Pro -->
                                <div class="flex items-start space-x-2 justify-between pb-6 border-b border-gray-200 relative">
                                    <button
                                        class="absolute top-0 right-0 w-6 h-6 bg-black rounded-full flex items-center justify-center hover:bg-gray-800 transition-colors">
                                        <i class="fas fa-times text-white text-xs"></i>
                                    </button>

                                    <div class="flex-shrink-0">
                                        <img src="https://images.unsplash.com/photo-1606813907291-d86efa9b94db?w=100&h=100&fit=crop&crop=center"
                                            alt="PlayStation 5 Pro" class="w-20 h-20 object-cover rounded-lg">
                                    </div>

                                    <div class="flex-1">
                                        <h3 class="font-semibold text-base text-gray-900">Sony PlayStation 5 Pro</h3>
                                        <p class="text-gray-600 text-sm mb-3">PlayStation consoles</p>

                                        <div class="flex items-center justify-between mt-3">
                                            <div class="flex items-center">
                                                <span class="text-gray-600 text-sm">Qty</span>
                                                <span class="underline px-2 py-1 text-sm">1</span>
                                            </div>
                                            <span class="text-base font-semibold text-gray-900">$499.99</span>
                                        </div>
                                    </div>
                                </div>

                                <!-- PlayStation Pulse 3D Wireless Headset -->
                                <div class="flex items-start space-x-2 pt-6 relative">
                                    <button
                                        class="absolute top-6 right-0 w-6 h-6 bg-black rounded-full flex items-center justify-center hover:bg-gray-800 transition-colors">
                                        <i class="fas fa-times text-white text-xs"></i>
                                    </button>

                                    <div class="flex-shrink-0">
                                        <img src="https://images.unsplash.com/photo-1583394838336-acd977736f90?w=100&h=100&fit=crop&crop=center"
                                            alt="PlayStation Pulse 3D Wireless Headset"
                                            class="w-20 h-20 object-cover rounded-lg">
                                    </div>

                                    <div class="flex-1">
                                        <h3 class="font-semibold text-base text-gray-900">Sony PlayStation Pulse 3D Wireless
                                            Headset</h3>
                                        <p class="text-gray-600 text-sm mb-3">Standard Edition</p>
                                        <div class="flex items-center justify-between mt-3">
                                            <div class="flex items-center">
                                                <span class="text-gray-600 text-sm">Qty</span>
                                                <span class="underline px-2 py-1 text-sm">1</span>
                                            </div>
                                            <span class="text-base font-semibold text-gray-900">$99.99</span>
                                        </div>
                                    </div>
                                </div>
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
                                        <span class="font-semibold">$599.98</span>
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
                                        <span class="font-semibold">$10.00</span>
                                    </div>
                                    <hr class="border-gray-300">
                                    <div class="flex justify-between items-center text-xl font-bold">
                                        <span>Total</span>
                                        <span>$609.98</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{/block}