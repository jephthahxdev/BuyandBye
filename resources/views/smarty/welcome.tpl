{extends file="layouts/app.tpl"}

{block name="content"}
    <section class="relative w-full h-screen flex items-center justify-center">
        <img src="{asset path='/images/hero-2.jpg'}" alt="Artisanal ceramic bowls and pottery"
            class="absolute inset-0 w-full h-full object-cover" />
        <div class="absolute inset-0"></div>
        <div class="relative z-10 text-center text-black max-w-4xl mx-auto px-4">
            <h1 class="text-6xl md:text-7xl font-light mb-6 tracking-wide">PRODUCTS FOR THE SOUL</h1>
            <p class="text-xl md:text-2xl mb-12 font-light opacity-90">Breathing new life into cultural craft</p>
            <a href="/shop"
                class="inline-block bg-white text-gray-900 font-medium px-12 py-4 rounded-full hover:bg-gray-100 transition duration-300 tracking-wide">Shop
                now</a>
        </div>
    </section>

    <div class="bg-white">
        <!-- Favorites Section -->
        <section class="mx-auto px-6 py-20">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="flex flex-col justify-between py-8">
                    <div>
                        <h2 class="text-3xl font-light mb-2 tracking-wide">FAVORITES</h2>
                        <p class="text-gray-600">We have made a selection of our customers' favorite products</p>
                    </div>
                    <div>
                        <a href="/favorites" class="text-sm text-gray-600 hover:text-gray-900 font-medium tracking-wide">SEE
                            ALL</a>
                    </div>
                </div>
                <!-- Product 1 -->
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-sm relative group">
                    <div class="badge badge-new">NEW!</div>
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            alt="Ceramic jug"
                            class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="font-medium mb-3 text-lg">Ceramic jug</h3>
                        <p class="text-xl font-semibold text-gray-900 mb-4">$87</p>
                        <button
                            class="w-10 h-10 bg-gray-900 text-white rounded-sm hover:bg-gray-800 transition flex items-center justify-center">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 7H16V6C16 4.897 15.103 4 14 4H10C8.897 4 8 4.897 8 6V7H5C4.447 7 4 7.447 4 8S4.447 9 5 9H6V19C6 20.103 6.897 21 8 21H16C17.103 21 18 20.103 18 19V9H19C19.553 9 20 8.553 20 8S19.553 7 19 7ZM10 6H14V7H10V6Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-sm relative group">
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            alt="Aromatic diffuser"
                            class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="font-medium mb-3 text-lg">Aromatic diffuser</h3>
                        <p class="text-xl font-semibold text-gray-900 mb-4">$65</p>
                        <button
                            class="w-10 h-10 bg-gray-900 text-white rounded-sm hover:bg-gray-800 transition flex items-center justify-center">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 7H16V6C16 4.897 15.103 4 14 4H10C8.897 4 8 4.897 8 6V7H5C4.447 7 4 7.447 4 8S4.447 9 5 9H6V19C6 20.103 6.897 21 8 21H16C17.103 21 18 20.103 18 19V9H19C19.553 9 20 8.553 20 8S19.553 7 19 7ZM10 6H14V7H10V6Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="product-card bg-white rounded-lg overflow-hidden shadow-sm relative group">
                    <div class="badge badge-popular">POPULAR</div>
                    <div class="relative overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1544787219-7f47ccb76574?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80"
                            alt="Handmade mug"
                            class="w-full h-80 object-cover group-hover:scale-105 transition-transform duration-500">
                    </div>
                    <div class="p-6">
                        <h3 class="font-medium mb-3 text-lg">Handmade mug</h3>
                        <p class="text-xl font-semibold text-gray-900 mb-4">$40</p>
                        <button
                            class="w-10 h-10 bg-gray-900 text-white rounded-sm hover:bg-gray-800 transition flex items-center justify-center">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19 7H16V6C16 4.897 15.103 4 14 4H10C8.897 4 8 4.897 8 6V7H5C4.447 7 4 7.447 4 8S4.447 9 5 9H6V19C6 20.103 6.897 21 8 21H16C17.103 21 18 20.103 18 19V9H19C19.553 9 20 8.553 20 8S19.553 7 19 7ZM10 6H14V7H10V6Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </section>

        <!-- Categories Section -->
        <section class="container mx-auto px-6 pb-20">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Vases -->
                <div class="category-card relative h-96 rounded-lg overflow-hidden cursor-pointer group">
                    <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Vases collection"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="category-overlay absolute inset-0 group-hover:bg-black/50 transition-colors duration-300">
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h3 class="text-white text-4xl font-light tracking-widest">VASES</h3>
                    </div>
                    <div
                        class="absolute bottom-6 right-6 w-12 h-12 bg-white/20 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

                <!-- Candles -->
                <div class="category-card relative h-96 rounded-lg overflow-hidden cursor-pointer group">
                    <img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Candles collection"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="category-overlay absolute inset-0 group-hover:bg-black/50 transition-colors duration-300">
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h3 class="text-white text-4xl font-light tracking-widest">CANDLES</h3>
                    </div>
                    <div
                        class="absolute bottom-6 right-6 w-12 h-12 bg-white/20 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>

                <!-- Ceramics -->
                <div class="category-card relative h-96 rounded-lg overflow-hidden cursor-pointer group">
                    <img src="https://images.unsplash.com/photo-1578749556568-bc2c40e68b61?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80"
                        alt="Ceramics collection"
                        class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                    <div class="category-overlay absolute inset-0 group-hover:bg-black/50 transition-colors duration-300">
                    </div>
                    <div class="absolute inset-0 flex items-center justify-center">
                        <h3 class="text-white text-4xl font-light tracking-widest">CERAMICS</h3>
                    </div>
                    <div
                        class="absolute bottom-6 right-6 w-12 h-12 bg-white/20 rounded-full flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M5 12H19M19 12L12 5M19 12L12 19" stroke="white" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>
                </div>
            </div>
        </section>
    </div>
{/block}