// Checkout Page JavaScript
    
// Global functions for inline HTML calls
    function selectAddress(addressId) {
    document.getElementById('billing_address_id').value = addressId;
    document.getElementById('new-address-form').style.display = 'none';
    document.getElementById('continue-to-payment-btn').style.display = 'block';
        
    // Highlight the selected address
    document.querySelectorAll('.address-card').forEach(card => {
        card.classList.remove('ring-2', 'ring-black');
    });
    document.getElementById('address-card-' + addressId).classList.add('ring-2', 'ring-black');
    }

    function showNewAddressForm() {
    // Unselect any selected address
    document.getElementById('billing_address_id').value = '';
    document.querySelectorAll('input[name="selected_address"]').forEach(radio => {
        radio.checked = false;
    });
    document.querySelectorAll('.address-card').forEach(card => {
        card.classList.remove('ring-2', 'ring-black');
    });

    // Show the new address form and hide the continue button
    document.getElementById('new-address-form').style.display = 'block';
    document.getElementById('continue-to-payment-btn').style.display = 'none';
        }
        
function continueToPayment() {
    const form = document.getElementById('checkout-form');
    form.submit();
}

document.addEventListener('DOMContentLoaded', function() {
    // Initialize form with selected address if any
        const selectedAddress = document.querySelector('input[name="selected_address"]:checked');
        if (selectedAddress) {
            selectAddress(selectedAddress.value);
        }
    });

// Make functions globally available
window.selectAddress = selectAddress;
window.showNewAddressForm = showNewAddressForm;
window.continueToPayment = continueToPayment;