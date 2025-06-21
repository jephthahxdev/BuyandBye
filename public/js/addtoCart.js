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
});