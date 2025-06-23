document.addEventListener('DOMContentLoaded', function () {
    // Card input masking
    const cardNumber = document.getElementById('card_number');
    const expiryMonth = document.getElementById('expiry_month');
    const expiryYear = document.getElementById('expiry_year');
    const cvv = document.getElementById('cvv');

    if (cardNumber) {
        new IMask(cardNumber, {
            mask: '0000 0000 0000 0000'
        });
    }

    if (expiryMonth) {
        new IMask(expiryMonth, {
            mask: '00',
            autofix: true,
            blocks: {
                '00': {
                    mask: IMask.MaskedRange,
                    from: 1,
                    to: 12
                }
            }
        });
    }

    if (expiryYear) {
        new IMask(expiryYear, {
            mask: '0000'
        });
    }

    if (cvv) {
        new IMask(cvv, {
            mask: '000[0]'
        });
    }

    // Form submission handling
    const paymentForm = document.getElementById('payment-form');
    const payButton = document.getElementById('pay-button');
    const payButtonText = document.getElementById('pay-button-text');
    const payButtonSpinner = document.getElementById('pay-button-spinner');

    let orderId; // <-- To store the order ID

    if (paymentForm) {
        orderId = paymentForm.dataset.orderId; // <-- Read orderId from data attribute

        paymentForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Basic form validation
            const requiredFields = ['email', 'card_number', 'cvv', 'expiry_month', 'expiry_year', 'cardholder'];
            const missingFields = [];

            requiredFields.forEach(fieldName => {
                const field = document.querySelector(`[name="${fieldName}"]`);
                if (!field || !field.value.trim()) {
                    missingFields.push(fieldName.replace('_', ' '));
                }
            });

            if (missingFields.length > 0) {
                alert('Please fill in all required fields: ' + missingFields.join(', '));
                return;
            }

            // Disable button and show loading state
            payButton.disabled = true;
            payButtonText.classList.add('hidden');
            payButtonSpinner.classList.remove('hidden');

            // Get CSRF token
            const csrfToken = document.querySelector('meta[name="csrf-token"]');
            if (!csrfToken) {
                console.error('CSRF token not found');
                alert('CSRF token not found. Please refresh the page.');
                resetPayButton();
                return;
            }

            // Replace simulation with actual form submission via fetch
            const formData = new FormData(paymentForm);

            // We already have the orderId, append it for the backend if it exists
            if (orderId) {
                formData.append('orderId', orderId);
            }

            console.log('Submitting payment form...');
            console.log('Form data:', Object.fromEntries(formData));

            fetch('/payment', {
                method: 'POST',
                body: formData, // Send as FormData directly, not URLSearchParams
                headers: {
                    'X-CSRF-TOKEN': csrfToken.content,
                    'Accept': 'application/json',
                    'X-Requested-With': 'XMLHttpRequest' // This helps Laravel identify AJAX requests
                }
            })
                .then(response => {
                    console.log('Response status:', response.status);
                    console.log('Response headers:', response.headers);

                    // Handle different response types
                    const contentType = response.headers.get('content-type');
                    if (contentType && contentType.includes('application/json')) {
                        return response.json().then(data => {
                            if (!response.ok) {
                                throw new Error(data.message || `HTTP ${response.status}: ${response.statusText}`);
                            }
                            return data;
                        });
                    } else {
                        // If not JSON, get text and try to parse or show error
                        return response.text().then(text => {
                            console.error('Non-JSON response:', text);
                            if (!response.ok) {
                                throw new Error(`HTTP ${response.status}: ${response.statusText}. Server returned: ${text.substring(0, 200)}...`);
                            }
                            // Try to parse as JSON anyway
                            try {
                                return JSON.parse(text);
                            } catch (e) {
                                throw new Error('Server returned invalid JSON response');
                            }
                        });
                    }
                })
                .then(data => {
                    console.log('Success response:', data);

                    // Store orderId if provided
                    if (data.orderId) {
                        orderId = data.orderId;
                        console.log('Order ID stored:', orderId);
                    }

                    if (data.redirectUrl) {
                        console.log('Redirecting to:', data.redirectUrl);
                        window.location.href = data.redirectUrl;
                    } else if (data.success) {
                        console.log('Payment successful');
                        if (data.redirectUrl) {
                            window.location.href = data.redirectUrl;
                        } else {
                            alert('Payment successful!');
                            resetPayButton();
                        }
                    } else {
                        // Handle other cases or errors
                        throw new Error(data.message || 'An unknown error occurred.');
                    }
                })
                .catch(error => {
                    console.error('Payment Error:', error);
                    console.error('Error stack:', error.stack);

                    // Show user-friendly error message
                    let errorMessage = 'Payment failed. Please try again.';
                    if (error.message) {
                        errorMessage = error.message;
                    }

                    alert(errorMessage);
                    resetPayButton();
                });
        });
    }

    // Function to reset pay button state
    function resetPayButton() {
        if (payButton && payButtonText && payButtonSpinner) {
            payButton.disabled = false;
            payButtonText.classList.remove('hidden');
            payButtonSpinner.classList.add('hidden');
        }
    }
});