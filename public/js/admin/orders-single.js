// Admin Single Order Page JavaScript
document.addEventListener('DOMContentLoaded', function() {
    // Get order data from data attributes
    const orderId = document.querySelector('[data-order-id]')?.dataset.orderId;
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    
    if (!orderId || !csrfToken) {
        console.error('Missing order ID or CSRF token');
        return;
    }

    // Payment status handling
    const paymentStatusSelect = document.getElementById('payment-status-select');
    const paymentStatusIndicator = document.getElementById('payment-status-indicator');
    const paymentStatusText = document.getElementById('payment-status-text');
    
    // Order status handling
    const orderStatusSelect = document.getElementById('order-status-select');
    const orderStatusBadge = document.getElementById('order-status-badge');
    
    // Buttons
    const saveOrderBtn = document.getElementById('save-order-btn');
    const cancelOrderBtn = document.getElementById('cancel-order-btn');
    
    // Save button text elements
    const saveText = saveOrderBtn?.querySelector('.save-text');
    const savingText = saveOrderBtn?.querySelector('.saving-text');
    
    // Update payment status display
    function updatePaymentStatusDisplay(status) {
        const statusConfig = {
            'paid': { color: 'bg-green-500', text: 'text-green-700', label: 'Paid' },
            'pending': { color: 'bg-yellow-500', text: 'text-yellow-700', label: 'Pending' },
            'failed': { color: 'bg-red-500', text: 'text-red-700', label: 'Failed' },
            'refunded': { color: 'bg-blue-500', text: 'text-blue-700', label: 'Refunded' }
        };
        
        const config = statusConfig[status] || statusConfig['pending'];
        paymentStatusIndicator.className = 'w-2 h-2 ' + config.color + ' rounded-full mr-2';
        paymentStatusText.className = 'text-sm ' + config.text;
        paymentStatusText.textContent = config.label;
    }
    
    // Update order status display
    function updateOrderStatusDisplay(status) {
        const statusConfig = {
            'pending': { bg: 'bg-yellow-100', text: 'text-yellow-800', label: 'Pending' },
            'processing': { bg: 'bg-blue-100', text: 'text-blue-800', label: 'Processing' },
            'shipped': { bg: 'bg-purple-100', text: 'text-purple-800', label: 'Shipped' },
            'delivered': { bg: 'bg-green-100', text: 'text-green-800', label: 'Delivered' },
            'cancelled': { bg: 'bg-red-100', text: 'text-red-800', label: 'Cancelled' },
            'completed': { bg: 'bg-green-100', text: 'text-green-800', label: 'Completed' },
            'failed': { bg: 'bg-red-100', text: 'text-red-800', label: 'Failed' }
        };
        
        const config = statusConfig[status] || statusConfig['pending'];
        orderStatusBadge.className = 'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium ' + config.bg + ' ' + config.text;
        orderStatusBadge.textContent = config.label;
    }
    
    // Show loading state for save button
    function setSaveButtonLoading(loading) {
        if (saveOrderBtn) {
            saveOrderBtn.disabled = loading;
            if (loading) {
                saveText?.classList.add('hidden');
                savingText?.classList.remove('hidden');
            } else {
                saveText?.classList.remove('hidden');
                savingText?.classList.add('hidden');
            }
        }
    }
    
    // Show loading state for cancel button
    function setCancelButtonLoading(loading) {
        if (cancelOrderBtn) {
            cancelOrderBtn.disabled = loading;
            cancelOrderBtn.textContent = loading ? 'Cancelling...' : 'Cancel Order';
        }
    }
    
    // Show notification
    function showNotification(message, type = 'success') {
        // Create notification element
        const notification = document.createElement('div');
        notification.className = `fixed top-4 right-4 z-50 px-6 py-4 rounded-lg shadow-lg ${
            type === 'success' ? 'bg-green-500 text-white' : 'bg-red-500 text-white'
        }`;
        notification.textContent = message;
        
        // Add to page
        document.body.appendChild(notification);
        
        // Remove after 3 seconds
        setTimeout(() => {
            notification.remove();
        }, 3000);
    }
    
    // Initialize status displays
    if (paymentStatusSelect) {
        updatePaymentStatusDisplay(paymentStatusSelect.value);
    }
    if (orderStatusSelect) {
        updateOrderStatusDisplay(orderStatusSelect.value);
    }
    
    // Handle status changes
    if (paymentStatusSelect) {
        paymentStatusSelect.addEventListener('change', function() {
            updatePaymentStatusDisplay(this.value);
        });
    }
    
    if (orderStatusSelect) {
        orderStatusSelect.addEventListener('change', function() {
            updateOrderStatusDisplay(this.value);
        });
    }
    
    // Save order changes
    if (saveOrderBtn) {
        saveOrderBtn.addEventListener('click', async function() {
            const paymentStatus = paymentStatusSelect?.value || 'pending';
            const orderStatus = orderStatusSelect?.value || 'pending';
            
            setSaveButtonLoading(true);
            
            try {
                const response = await fetch('/admin/orders/' + orderId + '/status', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    },
                    body: JSON.stringify({
                        status: orderStatus,
                        payment_status: paymentStatus
                    })
                });
                
                const data = await response.json();
                
                if (data.success) {
                    showNotification('Order updated successfully!', 'success');
                    
                    // Update the status displays to reflect the saved state
                    updatePaymentStatusDisplay(data.payment_status);
                    updateOrderStatusDisplay(data.status);
                    
                    // Update select values to match the saved state
                    if (paymentStatusSelect) {
                        paymentStatusSelect.value = data.payment_status;
                    }
                    if (orderStatusSelect) {
                        orderStatusSelect.value = data.status;
                    }
                } else {
                    showNotification(data.message || 'Failed to update order. Please try again.', 'error');
                }
            } catch (error) {
                console.error('Error updating order:', error);
                showNotification('An error occurred while updating the order.', 'error');
            } finally {
                setSaveButtonLoading(false);
            }
        });
    }
    
    // Cancel order
    if (cancelOrderBtn) {
        cancelOrderBtn.addEventListener('click', async function() {
            // Confirm cancellation
            if (!confirm('Are you sure you want to cancel this order? This action cannot be undone.')) {
                return;
            }
            
            setCancelButtonLoading(true);
            
            try {
                const response = await fetch('/admin/orders/' + orderId + '/cancel', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken
                    }
                });
                
                const data = await response.json();
                
                if (data.success) {
                    showNotification('Order cancelled successfully!', 'success');
                    
                    // Update the status displays to reflect the cancelled state
                    updateOrderStatusDisplay(data.status);
                    updatePaymentStatusDisplay(data.payment_status);
                    
                    // Update select values to match the cancelled state
                    if (orderStatusSelect) {
                        orderStatusSelect.value = data.status;
                    }
                    if (paymentStatusSelect) {
                        paymentStatusSelect.value = data.payment_status;
                    }
                    
                    // Disable the cancel button since order is now cancelled
                    cancelOrderBtn.disabled = true;
                    cancelOrderBtn.textContent = 'Order Cancelled';
                    cancelOrderBtn.className = 'px-4 py-2 text-gray-500 bg-gray-100 border border-gray-300 rounded-lg cursor-not-allowed';
                } else {
                    showNotification(data.message || 'Failed to cancel order. Please try again.', 'error');
                }
            } catch (error) {
                console.error('Error cancelling order:', error);
                showNotification('An error occurred while cancelling the order.', 'error');
            } finally {
                setCancelButtonLoading(false);
            }
        });
    }
}); 