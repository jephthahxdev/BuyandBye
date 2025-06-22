// Checkout Page JavaScript

// Global functions for inline HTML calls
function selectAddress(addressId) {
    // Store selected address ID for form submission
    const selectedAddressInput = document.createElement('input');
    selectedAddressInput.type = 'hidden';
    selectedAddressInput.name = 'selected_address_id';
    selectedAddressInput.value = addressId;
    
    // Remove any existing selected address input
    const existingInput = document.querySelector('input[name="selected_address_id"]');
    if (existingInput) {
        existingInput.remove();
    }
    
    // Add the new input to the form
    const form = document.querySelector('form');
    if (form) {
        form.appendChild(selectedAddressInput);
    }
}

function showNewAddressForm() {
    // Hide the address selection section
    const addressSelection = document.querySelector('.mb-6');
    if (addressSelection) {
        addressSelection.style.display = 'none';
    }
    
    // Show the billing form
    const billingForm = document.getElementById('billing-form');
    if (billingForm) {
        billingForm.classList.remove('hidden');
    }
}

function continueToPayment() {
    // Get the selected address
    const selectedAddress = document.querySelector('input[name="selected_address"]:checked');
    
    if (!selectedAddress) {
        alert('Please select a billing address to continue.');
        return;
    }
    
    // Create a form to submit the selected address
    const form = document.createElement('form');
    form.method = 'POST';
    form.action = '/checkout/process';
    
    // Add CSRF token
    const csrfToken = document.querySelector('input[name="_token"]').value;
    const csrfInput = document.createElement('input');
    csrfInput.type = 'hidden';
    csrfInput.name = '_token';
    csrfInput.value = csrfToken;
    form.appendChild(csrfInput);
    
    // Add selected address ID
    const addressInput = document.createElement('input');
    addressInput.type = 'hidden';
    addressInput.name = 'selected_address_id';
    addressInput.value = selectedAddress.value;
    form.appendChild(addressInput);
    
    // Submit the form
    document.body.appendChild(form);
    form.submit();
}

document.addEventListener('DOMContentLoaded', function() {
    // Initialize form with selected address if any
    const selectedAddress = document.querySelector('input[name="selected_address"]:checked');
    if (selectedAddress) {
        selectAddress(selectedAddress.value);
    }
});