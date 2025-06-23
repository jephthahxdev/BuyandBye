// Product Details Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Initialize Notyf
    const notyf = new Notyf({
        duration: 4000,
        position: {
            x: 'center',
            y: 'bottom',
        },
        types: [
            {
                type: 'success',
                background: '#10b981',
                icon: false
            },
            {
                type: 'error',
                background: '#000',
                icon: false
            },
            {
                type: 'warning',
                background: '#f59e0b',
                icon: false
            }
        ]
    });

    // Image Gallery Navigation
    const mainImage = document.querySelector('.main-product-image img');
    const thumbnailImages = document.querySelectorAll('.thumbnail-image');
    const prevButton = document.querySelector('.prev-image-btn');
    const nextButton = document.querySelector('.next-image-btn');
    
    let currentImageIndex = 0;
    const totalImages = thumbnailImages.length;

    // Function to update main image
    function updateMainImage(index) {
        if (index < 0) index = totalImages - 1;
        if (index >= totalImages) index = 0;
        
        currentImageIndex = index;
        
        // Update main image
        const selectedThumbnail = thumbnailImages[index];
        const imageSrc = selectedThumbnail.querySelector('img').src;
        mainImage.src = imageSrc;
        
        // Update thumbnail active state
        thumbnailImages.forEach((thumb, i) => {
            thumb.classList.toggle('ring-2', i === index);
            thumb.classList.toggle('ring-[#bb7b4b]', i === index);
        });
    }

    // Thumbnail click handlers
    thumbnailImages.forEach((thumbnail, index) => {
        thumbnail.addEventListener('click', () => {
            updateMainImage(index);
        });
    });

    // Navigation button handlers
    if (prevButton) {
        prevButton.addEventListener('click', () => {
            updateMainImage(currentImageIndex - 1);
        });
    }

    if (nextButton) {
        nextButton.addEventListener('click', () => {
            updateMainImage(currentImageIndex + 1);
        });
    }

    // Tab functionality
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

    tabButtons.forEach(button => {
        button.addEventListener('click', function() {
            const targetTab = this.getAttribute('data-tab');

            // Remove active classes from all tabs
            tabButtons.forEach(btn => {
                btn.classList.remove('border-gray-900', 'text-gray-900');
                btn.classList.add('border-transparent', 'text-gray-500');
            });

            // Add active class to clicked tab
            this.classList.remove('border-transparent', 'text-gray-500');
            this.classList.add('border-gray-900', 'text-gray-900');

            // Hide all tab contents
            tabContents.forEach(content => {
                content.classList.add('hidden');
            });

            // Show target tab content
            document.getElementById(targetTab + '-tab').classList.remove('hidden');
        });
    });

    // Quantity controls
    window.decreaseQuantity = function() {
        const input = document.getElementById('quantity');
        const value = parseInt(input.value);
        if (value > 1) {
            input.value = value - 1;
        }
    };

    window.increaseQuantity = function() {
        const input = document.getElementById('quantity');
        const value = parseInt(input.value);
        input.value = value + 1;
    };

    // Star rating functionality
    const starButtons = document.querySelectorAll('.star-rating');
    let selectedRating = 0;

    starButtons.forEach(button => {
        button.addEventListener('click', function() {
            selectedRating = parseInt(this.getAttribute('data-rating'));
            updateStarDisplay();
        });

        button.addEventListener('mouseenter', function() {
            const hoverRating = parseInt(this.getAttribute('data-rating'));
            updateStarDisplay(hoverRating);
        });
    });

    if (starButtons.length > 0) {
        document.querySelector('.star-rating').parentElement.addEventListener('mouseleave', function() {
            updateStarDisplay();
        });
    }

    function updateStarDisplay(hoverRating = null) {
        const rating = hoverRating || selectedRating;
        starButtons.forEach((button, index) => {
            if (index < rating) {
                button.classList.remove('text-gray-300');
                button.classList.add('text-yellow-400');
            } else {
                button.classList.remove('text-yellow-400');
                button.classList.add('text-gray-300');
            }
        });
    }

    // Size selection
    const sizeButtons = document.querySelectorAll('.size-button');
    sizeButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove selected class from all size buttons
            sizeButtons.forEach(btn => {
                btn.classList.remove('bg-gray-900', 'text-white');
                btn.classList.add('bg-white', 'text-gray-900');
            });
            
            // Add selected class to clicked button
            this.classList.remove('bg-white', 'text-gray-900');
            this.classList.add('bg-gray-900', 'text-white');
        });
    });

    // Color selection
    const colorButtons = document.querySelectorAll('.color-button');
    colorButtons.forEach(button => {
        button.addEventListener('click', function() {
            // Remove selected class from all color buttons
            colorButtons.forEach(btn => {
                btn.classList.remove('border-gray-900');
                btn.classList.add('border-gray-300');
            });
            
            // Add selected class to clicked button
            this.classList.remove('border-gray-300');
            this.classList.add('border-gray-900');
        });
    });

    // Review Sorting Functionality
    const sortSelect = document.getElementById('sort-reviews');
    if (sortSelect) {
        sortSelect.addEventListener('change', function() {
            const sortBy = this.value;
            const reviewsContainer = document.getElementById('reviews-container');
            const reviews = Array.from(reviewsContainer.querySelectorAll('.review-item'));

            reviews.sort((a, b) => {
                switch (sortBy) {
                    case 'newest':
                        return new Date(b.dataset.date) - new Date(a.dataset.date);
                    case 'oldest':
                        return new Date(a.dataset.date) - new Date(b.dataset.date);
                    case 'highest':
                        return parseInt(b.dataset.rating) - parseInt(a.dataset.rating);
                    case 'lowest':
                        return parseInt(a.dataset.rating) - parseInt(b.dataset.rating);
                    case 'helpful':
                        return parseInt(b.dataset.helpful) - parseInt(a.dataset.helpful);
                    default:
                        return 0;
                }
            });

            // Re-append sorted reviews
            reviews.forEach(review => {
                reviewsContainer.appendChild(review);
            });
        });
    }

    // Review Form Submission
    const reviewForm = document.getElementById('review-form');
    if (reviewForm) {
        reviewForm.addEventListener('submit', function(e) {
            e.preventDefault();
            
            if (selectedRating === 0) {
                notyf.error('Please select a rating before submitting your review.');
                return;
            }

            const reviewText = document.getElementById('review-text').value.trim();
            if (!reviewText) {
                notyf.error('Please write a review before submitting.');
                return;
            }

            // Get CSRF token from meta tag
            const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
            if (!csrfToken) {
                notyf.error('Security token not found. Please refresh the page and try again.');
                return;
            }

            // Get product slug from form
            const productSlug = this.querySelector('input[name="product_slug"]').value;

            // Disable submit button
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            submitBtn.disabled = true;
            submitBtn.textContent = 'Submitting...';

            // Prepare review data
            const reviewData = {
                rating: selectedRating,
                comment: reviewText,
                product_slug: productSlug,
                _token: csrfToken
            };

            // Submit review
            fetch('/product/review', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': csrfToken
                },
                body: JSON.stringify(reviewData)
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Show success message
                    notyf.success('Review submitted successfully!');
                    
                    // Reset form
                    selectedRating = 0;
                    updateStarDisplay();
                    document.getElementById('review-text').value = '';
                    
                    setTimeout(() => {
                        submitBtn.textContent = originalText;
                        submitBtn.disabled = false;
                        
                        // Reload the page to show the new review
                        location.reload();
                    }, 2000);
                } else {
                    throw new Error(data.message || 'Failed to submit review');
                }
            })
            .catch(error => {
                console.error('Error submitting review:', error);
                notyf.error('Failed to submit review. Please try again.');
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            });
        });
    }

    // Like Review Functionality
    document.querySelectorAll('.like-review-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const reviewId = this.dataset.reviewId;
            const likeCount = this.querySelector('span:last-child');
            
            // Toggle like state
            if (this.classList.contains('liked')) {
                this.classList.remove('liked', 'text-blue-600');
                if (likeCount) {
                    const currentCount = parseInt(likeCount.textContent.match(/\d+/)[0]);
                    likeCount.textContent = `(${currentCount - 1})`;
                }
            } else {
                this.classList.add('liked', 'text-blue-600');
                if (likeCount) {
                    const currentCount = parseInt(likeCount.textContent.match(/\d+/)[0]);
                    likeCount.textContent = `(${currentCount + 1})`;
                } else {
                    this.innerHTML += ' <span>(1)</span>';
                }
            }

            // Send like to server
            fetch('/review/like', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
                },
                body: JSON.stringify({ review_id: reviewId })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    // Update like count if needed
                    if (likeCount) {
                        likeCount.textContent = `(${data.likes_count})`;
                    }
                } else {
                    notyf.error('Failed to update like. Please login & try again.');
                }
            })
            .catch(error => {
                console.error('Error liking review:', error);
                notyf.error('Failed to update like. Please login & try again.');
            });
        });
    });

    // Reply Review Functionality
    document.querySelectorAll('.reply-review-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const reviewId = this.dataset.reviewId;
            const replyForm = document.querySelector(`.reply-form[data-review-id="${reviewId}"]`);
            
            // Toggle reply form visibility
            replyForm.classList.toggle('hidden');
            
            if (!replyForm.classList.contains('hidden')) {
                replyForm.querySelector('textarea').focus();
            }
        });
    });

    // Cancel Reply
    document.querySelectorAll('.cancel-reply-btn').forEach(btn => {
        btn.addEventListener('click', function(e) {
            e.preventDefault();
            
            const replyForm = this.closest('.reply-form');
            replyForm.classList.add('hidden');
            replyForm.querySelector('textarea').value = '';
        });
    });

    // Submit Reply
    document.querySelectorAll('.reply-form form').forEach(form => {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            const replyText = this.querySelector('textarea').value.trim();
            if (!replyText) {
                notyf.error('Please write a reply before submitting.');
                return;
            }

            const reviewId = this.closest('.reply-form').dataset.reviewId;
            const submitBtn = this.querySelector('button[type="submit"]');
            const originalText = submitBtn.textContent;
            
            submitBtn.disabled = true;
            submitBtn.textContent = 'Submitting...';

            // Submit reply
            fetch('/review/reply', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest',
                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]')?.getAttribute('content')
                },
                body: JSON.stringify({ 
                    review_id: reviewId, 
                    reply: replyText 
                })
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    notyf.success('Reply submitted successfully!');
                    
                    // Hide form and show success
                    this.closest('.reply-form').classList.add('hidden');
                    this.querySelector('textarea').value = '';
                    
                    // Reload to show the new reply
                    location.reload();
                } else {
                    throw new Error(data.message || 'Failed to submit reply');
                }
            })
            .catch(error => {
                console.error('Error submitting reply:', error);
                notyf.error('Failed to submit reply. Please login & try again.');
                submitBtn.textContent = originalText;
                submitBtn.disabled = false;
            });
        });
    });

    // Pagination functionality
    const paginationLinks = document.querySelectorAll('.pagination a');
    paginationLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const href = this.getAttribute('href');
            if (!href || this.classList.contains('cursor-not-allowed')) {
                return;
            }

            // Show loading state
            const reviewsContainer = document.getElementById('reviews-container');
            if (reviewsContainer) {
                reviewsContainer.innerHTML = '<div class="text-center py-8"><div class="inline-block animate-spin rounded-full h-8 w-8 border-b-2 border-gray-900"></div><p class="mt-2 text-gray-600">Loading reviews...</p></div>';
            }

            // Navigate to the page
            window.location.href = href;
        });
    });
}); 