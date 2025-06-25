document.addEventListener('DOMContentLoaded', function () {
    // Get CSRF token
    function getCSRFToken() {
        const tokenMeta = document.querySelector('meta[name="csrf-token"]');
        if (!tokenMeta) {
            console.error('CSRF token meta tag not found');
            return null;
        }
        return tokenMeta.getAttribute('content');
    }

    // Update cart count badge
    function updateCartCount() {
        fetch('/cart/count')
            .then(res => {
                if (!res.ok) {
                    throw new Error(`HTTP error! status: ${res.status}`);
                }
                return res.json();
            })
            .then(data => {
                const badge = document.getElementById('cart-count');
                const mobileBadge = document.getElementById('mobile-cart-count');
                if (badge) {
                    if (data.count > 0) {
                        badge.textContent = data.count;
                        badge.style.display = '';
                    } else {
                        badge.style.display = 'none';
                    }
                } else {
                    console.error('Cart count badge not found');
                }
                if (mobileBadge) {
                    if (data.count > 0) {
                        mobileBadge.textContent = data.count;
                        mobileBadge.style.display = '';
                    } else {
                        mobileBadge.style.display = 'none';
                    }
                } else {
                    console.error('Mobile cart count badge not found');
                }
            })
            .catch(error => {
                console.error('Error updating cart count:', error);
            });
    }

    // Add to cart AJAX - only for buttons that haven't been processed yet
    document.querySelectorAll('.add-to-cart:not([data-cart-initialized])').forEach(btn => {
        // Mark this button as initialized to prevent double binding
        btn.setAttribute('data-cart-initialized', 'true');
        
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation(); // Prevent event bubbling
            
            // Get product data from data attributes
            const productId = this.dataset.productId;
            const productName = this.dataset.productName;
            const quantity = document.getElementById('quantity') ? document.getElementById('quantity').value : 1;
            const selectedSize = document.querySelector('.size-button.bg-gray-900')?.textContent.trim();
            const csrfToken = getCSRFToken();
            
            if (!csrfToken) {
                console.error('Cannot get CSRF token');
                return;
            }

            if (!productId || !productName) {
                console.error('Missing product data');
                return;
            }

            // Disable button during request
            this.disabled = true;
            const originalText = this.innerHTML;
            this.innerHTML = '<i class="fa-solid fa-spinner fa-spin"></i>';

            // Prepare data matching the controller's validation rules
            const cartData = {
                product_id: parseInt(productId),
                product_name: productName,
                quantity: parseInt(quantity),
                size: selectedSize || null
            };

            fetch('/cart/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(cartData)
            })
            .then(res => {
                if (!res.ok) {
                    return res.json().then(err => Promise.reject(err));
                }
                return res.json();
            })
            .then(data => {
                updateCartCount();
                
                // Check if button contains an icon or text to determine success message format
                const hasIcon = this.querySelector('i') !== null;
                
                // Show success message
                if (hasIcon) {
                    this.innerHTML = '<i class="fa-solid fa-circle-check"></i>';
                } else {
                    this.innerHTML = 'Added to Cart!';
                }
                this.classList.remove('bg-gray-900', 'hover:bg-gray-800');
                this.classList.add('bg-gray-600');
                
                setTimeout(() => {
                    this.innerHTML = originalText;
                    this.classList.remove('bg-gray-600');
                    this.classList.add('bg-gray-900', 'hover:bg-gray-800');
                this.disabled = false;
                }, 2000);
            })
            .catch(error => {
                console.error('Error adding to cart:', error);
                
                // Show error message
                this.innerHTML = '<i class="fa-solid fa-exclamation-triangle"></i> Error!';
                this.classList.remove('bg-gray-900', 'hover:bg-gray-800');
                this.classList.add('bg-red-600');
                
                setTimeout(() => {
                this.innerHTML = originalText;
                    this.classList.remove('bg-red-600');
                    this.classList.add('bg-gray-900', 'hover:bg-gray-800');
                    this.disabled = false;
                }, 2000);
            });
        });
    });

    // Initial cart count update
    updateCartCount();

    // Cart page functionality
    if (window.location.pathname === '/cart') {
        // Update quantity
        document.querySelectorAll('.increase-quantity, .decrease-quantity').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const productId = this.dataset.productId;
                const isIncrease = this.classList.contains('increase-quantity');
                
                updateCartItemQuantity(productId, isIncrease ? 1 : -1);
            });
        });

        // Remove item
        document.querySelectorAll('.remove-item').forEach(btn => {
            btn.addEventListener('click', function(e) {
                e.preventDefault();
                const productId = this.dataset.productId;
                removeCartItem(productId);
            });
        });

        // Clear cart
        const clearCartBtn = document.querySelector('.clear-cart-btn');
        if (clearCartBtn) {
            clearCartBtn.addEventListener('click', function(e) {
                e.preventDefault();
                clearCart();
            });
        }
    }

    // Function to update cart item quantity
    function updateCartItemQuantity(productId, change) {
        const csrfToken = getCSRFToken();
        if (!csrfToken) return;

        fetch('/cart/update-quantity', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({
                product_id: parseInt(productId),
                change: change
            })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                updateCartDisplay(data.cart);
                updateCartCount();
            }
        })
        .catch(error => {
            console.error('Error updating quantity:', error);
        });
    }

    // Function to remove cart item
    function removeCartItem(productId) {
        const csrfToken = getCSRFToken();
        if (!csrfToken) return;

        fetch('/cart/remove-item', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({
                product_id: parseInt(productId)
            })
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                updateCartDisplay(data.cart);
                updateCartCount();
            }
        })
        .catch(error => {
            console.error('Error removing item:', error);
        });
    }

    // Function to clear cart
    function clearCart() {
        const csrfToken = getCSRFToken();
        if (!csrfToken) return;

        fetch('/cart/clear', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'Accept': 'application/json',
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': csrfToken
            }
        })
        .then(res => res.json())
        .then(data => {
            if (data.success) {
                location.reload();
            }
        })
        .catch(error => {
            console.error('Error clearing cart:', error);
        });
    }

    // Function to update cart display
    function updateCartDisplay(cart) {
        if (Object.keys(cart).length === 0) {
            location.reload(); // Reload to show empty cart
            return;
        }

        // Update cart count in header
        const cartCountElement = document.querySelector('h1');
        if (cartCountElement) {
            const itemCount = Object.keys(cart).length;
            cartCountElement.textContent = `Cart (${itemCount} products)`;
        }

        // Update totals
        let subtotal = 0;
        Object.values(cart).forEach(item => {
            subtotal += item.price * item.quantity;
        });

        const subtotalElement = document.querySelector('.cart-subtotal');
        const totalElement = document.querySelector('.cart-total');
        
        if (subtotalElement) subtotalElement.textContent = `$${subtotal.toFixed(2)}`;
        if (totalElement) totalElement.textContent = `$${subtotal.toFixed(2)}`;

        // Update individual item quantities and prices
        Object.entries(cart).forEach(([productId, item]) => {
            const itemElement = document.querySelector(`[data-product-id="${productId}"]`);
            if (itemElement) {
                const quantityElement = itemElement.querySelector('.item-quantity');
                const priceElement = itemElement.querySelector('.item-price');
                
                if (quantityElement) quantityElement.textContent = item.quantity;
                if (priceElement) priceElement.textContent = `$${(item.price * item.quantity).toFixed(2)}`;
            }
        });
    }
});