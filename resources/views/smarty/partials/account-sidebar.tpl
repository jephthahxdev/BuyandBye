{* Navigation Menu *}
<nav>
    <ul class="py-2">
        <li>
            <a href="{$base_url}/account"
                class="flex items-center px-4 py-3 {if $active_page == 'overview'}bg-gray-50 text-black font-medium{else}text-gray-700 hover:bg-gray-50{/if}">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path
                        d="M3 4a1 1 0 011-1h12a1 1 0 011 1v2a1 1 0 01-1 1H4a1 1 0 01-1-1V4zM3 10a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H4a1 1 0 01-1-1v-6zM14 9a1 1 0 00-1 1v6a1 1 0 001 1h2a1 1 0 001-1v-6a1 1 0 00-1-1h-2z" />
                </svg>
                Overview
            </a>
        </li>
        <li>
            <a href="{$base_url}/account/orders" class="flex items-center px-4 py-3 {if $active_page == 'orders'}bg-gray-50 text-black font-medium{else}text-gray-700 hover:bg-gray-50{/if}">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M10 2L3 7v11a2 2 0 002 2h10a2 2 0 002-2V7l-7-5zM8 15a1 1 0 112 0 1 1 0 01-2 0z"
                        clip-rule="evenodd" />
                </svg>
                My orders
            </a>
        </li>
        <li>
            <a href="{$base_url}/account/billing" class="flex items-center px-4 py-3 {if $active_page == 'billing'}bg-gray-50 text-black font-medium{else}text-gray-700 hover:bg-gray-50{/if}">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd" />
                </svg>
                Delivery addresses
            </a>
        </li>
        <li>
            <a href="{$base_url}/account/profile"
                class="flex items-center px-4 py-3 {if $active_page == 'profile'}bg-gray-50 text-black font-medium{else}text-gray-700 hover:bg-gray-50{/if}">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                    <path fill-rule="evenodd"
                        d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                        clip-rule="evenodd" />
                </svg>
                Profile
            </a>
        </li>
        {* <li>
        <a href="{$base_url}/account/reviews"
            class="flex items-center px-4 py-3 {if $active_page == 'reviews'}bg-gray-50 text-black font-medium{else}text-gray-700 hover:bg-gray-50{/if}">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
            </svg>
            Reviews
        </a>
    </li>
    <li>
        <a href="{$base_url}/account/favorites"
            class="flex items-center px-4 py-3 {if $active_page == 'favorites'}bg-gray-50 text-black font-medium{else}text-gray-700 hover:bg-gray-50{/if}">
            <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                <path fill-rule="evenodd"
                    d="M3.172 5.172a4 4 0 015.656 0L10 6.343l1.172-1.171a4 4 0 115.656 5.656L10 17.657l-6.828-6.829a4 4 0 010-5.656z"
                    clip-rule="evenodd" />
            </svg>
            Favorite items
        </a>
    </li> *}
        <li class="border-t border-gray-200 mt-2">
            <a href="{$base_url}/account/settings" class="flex items-center px-4 py-3 {if $active_page == 'settings'}bg-gray-50 text-black font-medium{else}text-gray-700 hover:bg-gray-50{/if}">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z"
                        clip-rule="evenodd" />
                </svg>
                Settings
            </a>
        </li>
        <li>
            <a href="{$base_url}/logout" class="flex items-center px-4 py-3 text-red-600 hover:bg-red-50">
                <svg class="w-5 h-5 mr-3" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd"
                        d="M3 3a1 1 0 00-1 1v12a1 1 0 102 0V4a1 1 0 00-1-1zm10.293 9.293a1 1 0 001.414 1.414l3-3a1 1 0 000-1.414l-3-3a1 1 0 10-1.414 1.414L14.586 9H7a1 1 0 100 2h7.586l-1.293 1.293z"
                        clip-rule="evenodd" />
                </svg>
                Log out
            </a>
        </li>
    </ul>
</nav>