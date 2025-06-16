{extends file="layouts/app.tpl"}

{block name="content"}
    <!-- Hero Section -->
    <section class="relative w-full h-[400px] md:h-[500px] flex items-center justify-center mb-12">
        <img src="https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1200&q=80" alt="Hero background" class="absolute inset-0 w-full h-full object-cover object-center opacity-80" />
        <div class="relative z-10 text-center text-white max-w-2xl mx-auto">
            <h1 class="text-4xl md:text-5xl font-bold mb-4 drop-shadow-lg">PRODUCTS FOR THE SOUL</h1>
            <p class="text-lg md:text-xl mb-8 drop-shadow">Breathing new life into cultural craft</p>
            <a href="/shop" class="inline-block bg-white text-gray-900 font-semibold px-8 py-3 rounded-full shadow hover:bg-gray-100 transition">Shop now</a>
        </div>
        <div class="absolute inset-0 bg-black opacity-30"></div>
    </section>

    <!-- Existing Content -->
    <div class="container mx-auto px-4">
        <h2 class="text-xl font-semibold mb-4">Favorites</h2>
        <p class="mb-6">We have made a selection of our customers' favorite products</p>
        <ul class="list-unstyled">
            {foreach $users as $user}
                <li class="p-2 bg-gray-100 mb-2 rounded">{$user}</li>
            {/foreach}
        </ul>
        <p class="mt-6 text-gray-500">Current time: {$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}</p>
    </div>
{/block}