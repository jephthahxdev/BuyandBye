{extends file="layouts/app.tpl"}

{block name="content"}
    {* Product Page Template *}
    <div class="container mx-auto px-4 py-6 mt-24">
        {* Breadcrumb *}
        <nav class="text-sm text-gray-500 mb-6">
            <ol class="flex items-center space-x-2">
                <li><a href="#" class="hover:text-gray-700">Browse Products</a></li>
                <li class="text-gray-400">></li>
                <li><a href="#" class="hover:text-gray-700">{$product.category}</a></li>
                <li class="text-gray-400">></li>
                <li class="text-gray-900">{$product.name}</li>
            </ol>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
            {* Product Images *}
            <div class="space-y-4">
                {* Main Image *}
                <div class="relative bg-gray-100 rounded-lg overflow-hidden aspect-square main-product-image">
                    <button
                        class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:shadow-lg transition-shadow z-10 prev-image-btn">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <img src="{$product.featured_image}" alt="{$product.name}" class="w-full h-full object-cover">
                    <button
                        class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white rounded-full p-2 shadow-md hover:shadow-lg transition-shadow z-10 next-image-btn">
                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                {* Thumbnail Images *}
                <div class="grid grid-cols-4 gap-2">
                    {foreach from=$product.images item=image name=thumbnails}
                        <div
                            class="bg-gray-100 rounded-lg overflow-hidden aspect-square cursor-pointer hover:opacity-80 transition-opacity thumbnail-image {if $smarty.foreach.thumbnails.first}ring-2 ring-[#bb7b4b]{/if}">
                            <img src="{$image.thumb}" alt="{$product.name}" class="w-full h-full object-cover">
                        </div>
                    {/foreach}
                </div>
            </div>

            {* Product Info *}
            <div class="space-y-6">
                {* Product Title and Rating *}
                <div>
                    <h1 class="text-3xl font-semibold text-gray-900 mb-2">{$product.name}</h1>
                    <div class="flex items-center space-x-2 mb-4">
                        <span class="text-sm text-gray-600">{$product.category}</span>
                    </div>
                </div>

                {* Price *}
                <div class="text-3xl font-bold text-gray-900">
                    ₦{$product.price}
                    {if $product.short_description}
                        <p class="text-base font-normal text-gray-700 mt-4">{$product.short_description}</p>
                    {/if}
                </div>

                {* Size Options *}
                {* Available Size *}
                <div>
                    <h3 class="text-sm font-medium text-gray-900 mb-3">Available Size(s)</h3>
                    <div class="flex space-x-2">
                        {foreach from=$product.sizes item=size}
                            <button
                                class="w-20 h-10 border border-gray-300 rounded text-sm font-medium hover:border-gray-900 focus:outline-none focus:border-gray-900 size-button {if $size.selected}bg-gray-900 text-white{else}bg-white text-gray-900{/if}">
                                {$size.name}
                            </button>
                        {/foreach}
                    </div>
                </div>

                {* Stock Status *}
                <div class="text-sm text-gray-600">
                    {if $product.stock > 0}
                        {if $product.stock <= 5}
                            Only {$product.stock} left - <span class="font-medium">make it yours!</span>
                        {else}
                            <span class="font-medium">In stock</span> - {$product.stock} available
                        {/if}
                    {else}
                        <span class="text-red-600 font-medium">Out of stock</span>
                    {/if}
                </div>

                {* Quantity and Add to Cart *}
                <div class="flex items-center space-x-4">
                    <div class="flex items-center border border-gray-300 rounded">
                        <button class="p-3 hover:bg-gray-100" onclick="decreaseQuantity()">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4" />
                            </svg>
                        </button>
                        <input type="number" id="quantity" value="1" min="1"
                            class="w-16 py-2 text-center border-0 focus:outline-none">
                        <button class="p-3 hover:bg-gray-100" onclick="increaseQuantity()">
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                            </svg>
                        </button>
                    </div>
                    <button
                        class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-800 transition-colors add-to-cart-btn add-to-cart"
                        data-product-id="{$product.id}" data-product-name="{$product.name}">
                        Add to cart
                    </button>
                </div>
            </div>
        </div>

        {* Product Tabs *}
        <div class="mt-12">
            {* Tab Navigation *}
            <div class="border-b border-gray-200">
                <nav class="-mb-px flex space-x-8">
                    <button
                        class="tab-button py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200 border-gray-900 text-gray-900"
                        data-tab="details">
                        The Details
                    </button>
                    <button
                        class="tab-button py-4 px-1 border-b-2 font-medium text-sm focus:outline-none transition-colors duration-200 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300"
                        data-tab="reviews">
                        Ratings & Reviews
                        <span
                            class="ml-2 bg-gray-100 text-gray-600 py-1 px-2 rounded-full text-xs">{$product.review_count}</span>
                    </button>
                </nav>
            </div>

            {* Tab Content *}
            <div class="mt-8">
                {* The Details Tab *}
                <div id="details-tab" class="tab-content">
                    <div class="prose max-w-none">
                        <p class="text-gray-700 leading-relaxed">
                            {$product.description}
                        </p>

                        {if $product.features}
                            <h3 class="text-lg font-medium text-gray-900 mt-6 mb-3">Features</h3>
                            <ul class="space-y-2">
                                {foreach from=$product.features item=feature}
                                    <li class="text-gray-700">• {$feature}</li>
                                {/foreach}
                            </ul>
                        {/if}

                        {if $product.care_instructions}
                            <h3 class="text-lg font-medium text-gray-900 mt-6 mb-3">Care Instructions</h3>
                            <p class="text-gray-700">{$product.care_instructions}</p>
                        {/if}

                        {if $product.specifications}
                            <h3 class="text-lg font-medium text-gray-900 mt-6 mb-3">Specifications</h3>
                            <div class="border border-gray-200 rounded-lg overflow-hidden">
                                {foreach from=$product.specifications key=spec_name item=spec_value name=specs}
                                    <div class="flex {if not $smarty.foreach.specs.last}border-b border-gray-200{/if}">
                                        <div class="w-1/3 bg-gray-50 px-4 py-3 font-medium text-sm text-gray-900">
                                            {$spec_name}
                                        </div>
                                        <div class="w-2/3 px-4 py-3 text-sm text-gray-700">
                                            {$spec_value}
                                        </div>
                                    </div>
                                {/foreach}
                            </div>
                        {/if}
                    </div>
                </div>

                {* Ratings & Reviews Tab *}
                <div id="reviews-tab" class="tab-content hidden">
                    {* Review Summary *}
                    <div class="bg-gray-50 rounded-lg p-6 mb-8">
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                            <div class="text-center">
                                <div class="text-4xl font-bold text-gray-900">{$product.average_rating}</div>
                                <div class="flex justify-center items-center mt-2">
                                    {for $i=1 to 5}
                                        {if $i <= $product.rating_full}
                                            <svg class="w-5 h-5 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                            </svg>
                                        {elseif $i == $product.rating_full + 1 && $product.rating_half}
                                            <svg class="w-5 h-5 text-yellow-400" viewBox="0 0 20 20">
                                                <defs>
                                                    <linearGradient id="half-review">
                                                        <stop offset="50%" stop-color="#FBBF24" />
                                                        <stop offset="50%" stop-color="#E5E7EB" />
                                                    </linearGradient>
                                                </defs>
                                                <path fill="url(#half-review)"
                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                            </svg>
                                        {else}
                                            <svg class="w-5 h-5 text-gray-300 fill-current" viewBox="0 0 20 20">
                                                <path
                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                            </svg>
                                        {/if}
                                    {/for}
                                </div>
                                <div class="text-sm text-gray-600 mt-1">Based on {$product.review_count} reviews</div>
                            </div>

                            <div class="col-span-2">
                                <div class="space-y-2">
                                    {foreach from=$product.rating_breakdown item=breakdown}
                                        <div class="flex items-center space-x-3">
                                            <span class="text-sm text-gray-600 w-8">{$breakdown.stars}★</span>
                                            <div class="flex-1 bg-gray-200 rounded-full h-2">
                                                <div class="bg-yellow-400 h-2 rounded-full"
                                                    style="width: {$breakdown.percentage}%"></div>
                                            </div>
                                            <span class="text-sm text-gray-600 w-12">{$breakdown.count}</span>
                                        </div>
                                    {/foreach}
                                </div>
                            </div>
                        </div>
                    </div>

                    {* Sort Controls *}
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-lg font-medium text-gray-900">Customer Reviews</h3>
                        <div class="flex items-center space-x-4">
                            <label for="sort-reviews" class="text-sm text-gray-600">Sort by:</label>
                            <select id="sort-reviews"
                                class="border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-gray-900">
                                <option value="newest">Newest</option>
                                <option value="oldest">Oldest</option>
                                <option value="highest">Highest Rated</option>
                                <option value="lowest">Lowest Rated</option>
                                <option value="helpful">Most Helpful</option>
                            </select>
                        </div>
                    </div>

                    {* Individual Reviews *}
                    <div id="reviews-container" class="space-y-6">
                        {foreach from=$product.reviews item=review}
                            <div class="border-b border-gray-200 pb-6 review-item" data-rating="{$review.rating}"
                                data-date="{$review.date}" data-helpful="{$review.helpful_count}">
                                <div class="flex items-start space-x-4">
                                    <div class="flex-shrink-0">
                                        <div class="w-10 h-10 bg-gray-300 rounded-full flex items-center justify-center">
                                            <span
                                                class="text-sm font-medium text-gray-700">{$review.author|substr:0:1|upper}</span>
                                        </div>
                                    </div>
                                    <div class="flex-1">
                                        <div class="flex items-center justify-between">
                                            <div>
                                                <h4 class="text-sm font-medium text-gray-900">{$review.author}</h4>
                                                <div class="flex items-center mt-1">
                                                    {for $i=1 to 5}
                                                        {if $i <= $review.rating}
                                                            <svg class="w-4 h-4 text-yellow-400 fill-current" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                                            </svg>
                                                        {else}
                                                            <svg class="w-4 h-4 text-gray-300 fill-current" viewBox="0 0 20 20">
                                                                <path
                                                                    d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                                            </svg>
                                                        {/if}
                                                    {/for}
                                                </div>
                                            </div>
                                            <span class="text-sm text-gray-500">{$review.date}</span>
                                        </div>
                                        <p class="mt-3 text-gray-700 text-sm leading-relaxed">{$review.comment}</p>

                                        {* Review Actions *}
                                        <div class="flex items-center mt-4 space-x-4">
                                            <button
                                                class="flex items-center space-x-1 text-xs text-gray-500 hover:text-gray-700 like-review-btn"
                                                data-review-id="{$review.id}">
                                                <i class="fa-solid fa-thumbs-up"></i>
                                                <span>Like</span>
                                                {if $review.likes > 0}<span>({$review.likes})</span>{/if}
                                            </button>
                                            <button
                                                class="flex items-center space-x-1 text-xs text-gray-500 hover:text-gray-700 reply-review-btn"
                                                data-review-id="{$review.id}">
                                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                        d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                                </svg>
                                                <span>Reply</span>
                                            </button>
                                            <span class="text-xs text-gray-400">•</span>
                                            <span class="text-xs text-gray-500">{$review.helpful_count} people found this
                                                helpful</span>
                                        </div>

                                        {* Reply Form (Hidden by default) *}
                                        <div class="reply-form hidden mt-4 ml-6" data-review-id="{$review.id}">
                                            <form class="space-y-3">
                                                <textarea
                                                    class="w-full border border-gray-300 rounded px-3 py-2 text-sm focus:outline-none focus:border-gray-900"
                                                    rows="2" placeholder="Write your reply..."></textarea>
                                                <div class="flex space-x-2">
                                                    <button type="submit"
                                                        class="px-3 py-1 bg-gray-900 text-white text-sm rounded hover:bg-gray-800">
                                                        Submit Reply
                                                    </button>
                                                    <button type="button"
                                                        class="px-3 py-1 text-gray-600 text-sm hover:text-gray-800 cancel-reply-btn">
                                                        Cancel
                                                    </button>
                                                </div>
                                            </form>
                                        </div>

                                        {* Show Replies if any *}
                                        {if $review.replies}
                                            <div class="mt-4 space-y-3">
                                                {foreach from=$review.replies item=reply}
                                                    <div class="bg-gray-50 rounded p-3 ml-6">
                                                        <div class="flex items-center justify-between mb-2">
                                                            <span class="text-sm font-medium text-gray-900">{$reply.author}</span>
                                                            <span class="text-xs text-gray-500">{$reply.date}</span>
                                                        </div>
                                                        <p class="text-sm text-gray-700">{$reply.comment}</p>
                                                    </div>
                                                {/foreach}
                                            </div>
                                        {/if}
                                    </div>
                                </div>
                            </div>
                        {/foreach}
                    </div>

                    {* Pagination of 5 per page *}
                    {if $product.review_pagination.total_pages > 1}
                        <div class="pagination flex items-center justify-center mt-8 space-x-2">
                            <a href="?page={$product.review_pagination.previous_page}"
                                class="px-3 py-2 text-sm rounded transition-colors {if $product.review_pagination.has_previous}text-gray-700 hover:bg-gray-100{else}text-gray-400 cursor-not-allowed{/if}"
                                {if not $product.review_pagination.has_previous}onclick="return false;" {/if}>
                                Previous
                            </a>

                            {foreach from=$product.review_pagination.pages item=page}
                                <a href="?page={$page.number}"
                                    class="px-3 py-2 text-sm rounded transition-colors {if $page.current}bg-gray-900 text-white{else}text-gray-700 hover:bg-gray-100{/if}">
                                    {$page.number}
                                </a>
                            {/foreach}

                            <a href="?page={$product.review_pagination.next_page}"
                                class="px-3 py-2 text-sm rounded transition-colors {if $product.review_pagination.has_next}text-gray-700 hover:bg-gray-100{else}text-gray-400 cursor-not-allowed{/if}"
                                {if not $product.review_pagination.has_next}onclick="return false;" {/if}>
                                Next
                            </a>
                        </div>
                    {/if}

                    {* Write a Review Section *}
                    <div class="mt-12 border-t border-gray-200 pt-8">
                        {if $is_logged_in}
                            <h3 class="text-lg font-medium text-gray-900 mb-4">Write a Review</h3>
                            <form id="review-form" class="space-y-4">
                                <input type="hidden" name="product_slug" value="{$product.slug}">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                                    <div>
                                        <label for="reviewer-name"
                                            class="block text-sm font-medium text-gray-700 mb-1">Name</label>
                                        <input type="text" id="reviewer-name" value="{$user.name}" readonly
                                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-gray-900 bg-gray-50">
                                    </div>
                                    <div>
                                        <label for="reviewer-email"
                                            class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                                        <input type="email" id="reviewer-email" value="{$user.email}" readonly
                                            class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-gray-900 bg-gray-50">
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-sm font-medium text-gray-700 mb-1">Rating</label>
                                    <div class="flex space-x-1">
                                        {for $i=1 to 5}
                                            <button type="button"
                                                class="star-rating w-6 h-6 text-gray-300 hover:text-yellow-400 focus:outline-none"
                                                data-rating="{$i}">
                                                <svg class="w-full h-full fill-current" viewBox="0 0 20 20">
                                                    <path
                                                        d="M10 15l-5.878 3.09 1.123-6.545L.489 6.91l6.572-.955L10 0l2.939 5.955 6.572.955-4.756 4.635 1.123 6.545z" />
                                                </svg>
                                            </button>
                                        {/for}
                                    </div>
                                </div>
                                <div>
                                    <label for="review-text" class="block text-sm font-medium text-gray-700 mb-1">Review</label>
                                    <textarea id="review-text" rows="4"
                                        class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:border-gray-900"
                                        placeholder="Share your thoughts about this product..."></textarea>
                                </div>
                                <button type="submit"
                                    class="bg-gray-900 text-white px-6 py-2 rounded hover:bg-gray-800 transition-colors">
                                    Submit Review
                                </button>
                            </form>
                        {else}
                            <div class="text-center py-8">
                                <svg class="w-12 h-12 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                </svg>
                                <h3 class="text-lg font-medium text-gray-900 mb-2">Sign in to leave a review</h3>
                                <p class="text-gray-600 mb-4">You need to be signed in to share your thoughts about this
                                    product.</p>
                                <a href="/login"
                                    class="inline-flex items-center px-4 py-2 bg-gray-900 text-white rounded-lg hover:bg-gray-800">
                                    Sign In
                                </a>
                            </div>
                        {/if}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="/js/product-details.js"></script>
{/block}