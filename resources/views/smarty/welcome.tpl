{extends file="layouts/app.tpl"}

{block name="content"}
    <section class="relative w-full h-screen flex items-center justify-center">
        <img src="{asset path='/images/hero-2.jpg'}" alt="Artisanal ceramic bowls and pottery"
            class="absolute inset-0 w-full h-full object-cover" />
        <!-- Glass container at bottom left -->
        <div class="glass-container absolute bottom-8 left-8 p-8 rounded-2xl max-w-md">
            <h1 class="text-4xl md:text-5xl font-light mb-4 tracking-wide text-[#bb7b4b]">PRODUCTS FOR THE SOUL</h1>
            <p class="text-lg md:text-xl font-light opacity-90 text-[#bb7b4b]">Breathing new life into cultural craft</p>
        </div>

        <!-- Vertical Shop Now button on the right -->
        <div class="absolute right-8 top-1/2 -translate-y-1/2">
            <a href="/shop"
                class="vertical-button inline-flex items-center text-gray-900 hover:text-[#bb7b4b] font-medium px-6 py-12 tracking-wider text-sm group gap-2">
                <span class="">SHOP NOW</span>
                <svg class="arrow-translate w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3">
                    </path>
                </svg>
            </a>
        </div>
    </section>

    <div class="bg-white">
        <!-- Favorites Section -->
        <section class="mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-4 divide-x divide-gray-200">
                <div class="flex flex-col justify-between py-8">
                    <div>
                        <h2 class="text-3xl font-light mb-2 tracking-wide">FAVORITES</h2>
                        <p class="text-gray-600">We have made a selection of our customers' favorite products</p>
                    </div>
                    <div>
                        <a href="/favorites"
                            class="text-sm text-gray-600 hover:text-gray-900 font-medium tracking-wide underline">SEE
                            ALL</a>
                    </div>
                </div>

                {foreach $products as $product}
                    <div class="product-card bg-white overflow-hidden relative group">
                        {if $product->new}
                            <div class="badge badge-new">NEW!</div>
                        {elseif $product->popular}
                            <div class="badge badge-popular">POPULAR</div>
                        {/if}
                        <div class="relative overflow-hidden">
                            <img src="{if $product->images->isNotEmpty()}{asset path=$product->images[0]->image_path}{else}https://images.unsplash.com/photo-1578662996442-48f60103fc96?ixlib=rb-4.0.3&auto=format&fit=crop&w=400&q=80{/if}"
                                alt="{$product->name}"
                                class="w-full h-110 object-cover group-hover:scale-105 transition-transform duration-500">
                        </div>
                        <div class="flex justify-between p-6">
                            <div>
                                <h3 class="font-medium mb-3 text-lg">{$product->name}</h3>
                                <p class="text-xl font-semibold text-gray-900 mb-4">${$product->price|string_format:"%.2f"}</p>
                            </div>
                            <button
                                class="add-to-cart w-10 h-10 bg-gray-900 text-white rounded-sm hover:bg-gray-800 transition flex items-center justify-center"
                                data-product-id="{$product.id}" data-product-name="{$product.name}">
                                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                {/foreach}
            </div>
        </section>

        <!-- Categories Section -->
        <section class="mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3">
                <!-- Vases -->
                <div class="category-card relative h-150 overflow-hidden cursor-pointer group">
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
                <div class="category-card relative h-150 overflow-hidden cursor-pointer group">
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
                <div class="category-card relative h-150 overflow-hidden cursor-pointer group">
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