<header class="absolute bg-transparent top-0 left-0 right-0 z-50">
    <nav class="container mx-auto px-6">
        <div class="flex justify-between items-center h-16">
            <!-- Left navigation -->
            <div class="flex space-x-8">
                <a href="/collection" class="text-black hover:text-[#bb7b4b] transition font-light">Collection</a>
                <a href="/shop" class="text-black hover:text-[#bb7b4b] transition font-light">Shop</a>
                <a href="/about" class="text-black hover:text-[#bb7b4b] transition font-light">About</a>
            </div>
            <!-- Center logo/title -->
            <a href="/"
                class="text-2xl font-serif tracking-tight text-black absolute left-1/2 transform -translate-x-1/2">buyandbye.</a>
            <!-- Right navigation -->
            <div class="flex space-x-8 items-center">
                <a href="/wishlist" class="text-black hover:text-[#bb7b4b] transition font-light">Wishlist</a>
                {if $is_logged_in}
                    <a href="{$base_url}/account" class="text-black hover:text-[#bb7b4b] transition font-light">Account</a>
                {else}
                    <a href="{$base_url}/login" class="text-black hover:text-[#bb7b4b] transition font-light">Login</a>
                {/if}
                <a href="/cart" class="text-black hover:text-[#bb7b4b] transition font-light">Cart<span id="cart-count"
                        class="ml-2 inline-block min-w-[1.5em] px-2 py-0.5 text-xs leading-tight font-semibold text-white bg-[#bb7b4b] rounded-full text-center"
                        style="display:none;">0</span></a>
            </div>
        </div>
    </nav>
</header>