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
                }
            })
            .catch(error => {
                console.error('Error updating cart count:', error);
            });
    }

    // Add to cart AJAX
    document.querySelectorAll('.add-to-cart').forEach(btn => {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            
            const product = this.dataset.product;
            const csrfToken = getCSRFToken();
            
            if (!csrfToken) {
                console.error('Cannot get CSRF token');
                return;
            }

            // Disable button during request
            this.disabled = true;
            const originalText = this.innerHTML;
            this.innerHTML = '<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>';

            fetch('/cart/add', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
                },
                body: JSON.stringify({ product })
            })
            .then(res => {
                if (!res.ok) {
                    return res.json().then(err => Promise.reject(err));
                }
                return res.json();
            })
            .then(data => {
                console.log('Product added to cart successfully');
                updateCartCount();
                
                // Re-enable button
                this.disabled = false;
                this.innerHTML = originalText;
            })
            .catch(error => {
                console.error('Error adding to cart:', error);
                
                // Re-enable button
                this.disabled = false;
                this.innerHTML = originalText;
                
                // Show user-friendly error message
                alert('Error adding product to cart. Please try again.');
            });
        });
    });

    // Initial cart count update
    updateCartCount();
});