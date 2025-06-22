<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Details - {{ $order->order_number ?? 'ORD-' . $order->id }}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            color: #333;
            font-size: 12px;
            line-height: 1.4;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            border-bottom: 2px solid #10b981;
            padding-bottom: 20px;
        }
        .header h1 {
            color: #10b981;
            margin: 0 0 10px 0;
            font-size: 24px;
        }
        .header p {
            margin: 0;
            color: #666;
            font-size: 16px;
        }
        .order-card {
            border: 1px solid #ddd;
            margin-bottom: 20px;
        }
        .order-header {
            background-color: #f0fdf4;
            padding: 15px;
            border-bottom: 1px solid #10b981;
        }
        .order-header h2 {
            margin: 0;
            color: #065f46;
            font-size: 18px;
        }
        .order-content {
            padding: 20px;
        }
        .order-grid {
            width: 100%;
            margin-bottom: 20px;
        }
        .order-section {
            width: 48%;
            float: left;
            margin-right: 2%;
        }
        .order-section:last-child {
            margin-right: 0;
        }
        .section-title {
            font-size: 14px;
            font-weight: bold;
            color: #666;
            text-transform: uppercase;
            margin-bottom: 10px;
            letter-spacing: 0.5px;
        }
        .detail-row {
            margin-bottom: 24px;
            clear: both;
        }
        .detail-label {
            float: left;
            width: 40%;
            color: #666;
            font-size: 12px;
        }
        .detail-value {
            float: left;
            width: 60%;
            font-weight: bold;
            font-size: 12px;
        }
        .clearfix::after {
            content: "";
            display: table;
            clear: both;
        }
        .items-section {
            border-top: 1px solid #eee;
            padding-top: 20px;
            margin-top: 20px;
            clear: both;
        }
        .items-title {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .item {
            border: 1px solid #eee;
            padding: 15px;
            margin-bottom: 10px;
            clear: both;
        }
        .item-details {
            float: left;
            width: 70%;
        }
        .item-price {
            float: right;
            width: 30%;
            text-align: right;
        }
        .item-name {
            font-weight: bold;
            margin-bottom: 5px;
            font-size: 14px;
        }
        .item-meta {
            color: #666;
            font-size: 12px;
            margin-bottom: 3px;
        }
        .item-total {
            font-weight: bold;
            font-size: 14px;
        }
        .summary-section {
            border-top: 1px solid #eee;
            padding-top: 20px;
            margin-top: 20px;
            clear: both;
        }
        .summary-row {
            margin-bottom: 8px;
            clear: both;
        }
        .summary-label {
            float: left;
            width: 70%;
            text-align: right;
            color: #666;
            font-size: 12px;
        }
        .summary-value {
            float: right;
            width: 30%;
            text-align: right;
            font-weight: bold;
            font-size: 12px;
        }
        .total-row {
            border-top: 1px solid #ddd;
            padding-top: 8px;
            margin-top: 8px;
        }
        .total-row .summary-label,
        .total-row .summary-value {
            font-size: 16px;
            font-weight: bold;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            color: #666;
            font-size: 12px;
            border-top: 1px solid #eee;
            padding-top: 20px;
            clear: both;
        }
        .next-steps {
            margin-top: 30px;
            border: 1px solid #ddd;
            padding: 20px;
            clear: both;
        }
        .next-steps h3 {
            margin: 0 0 15px 0;
            font-size: 16px;
        }
        .steps-grid {
            width: 100%;
        }
        .step {
            width: 32%;
            float: left;
            text-align: center;
            margin-right: 2%;
        }
        .step:last-child {
            margin-right: 0;
        }
        .step h4 {
            margin: 0 0 8px 0;
            font-size: 14px;
        }
        .step p {
            margin: 0;
            font-size: 11px;
            color: #666;
            line-height: 1.4;
        }
        .page-break {
            page-break-before: always;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Payment Successful!</h1>
        <p>Thank you for your purchase. Your order has been confirmed.</p>
    </div>

    <div class="order-card">
        <div class="order-header">
            <h2>Order Confirmation</h2>
        </div>
        
        <div class="order-content">
            <div class="order-grid clearfix">
                <div class="order-section">
                    <div class="section-title">Order Details</div>
                    <div class="detail-row clearfix">
                        <div class="detail-value">{{ $order->order_number ?? 'ORD-' . $order->id }}</div>
                    </div>
                    <div class="detail-row clearfix">
                        <div class="detail-value">{{ $payment->transaction_reference }}</div>
                    </div>
                    <div class="detail-row clearfix">
                        <div class="detail-value">{{ $payment->card_type ?? 'Card' }} ending in {{ $payment->last4 }}</div>
                    </div>
                    <div class="detail-row clearfix">
                        <div class="detail-value">{{ $order->created_at->format('F d, Y \a\t g:i A') }}</div>
                    </div>
                </div>
                
                <div class="order-section">
                    <div class="section-title">Shipping Address</div>
                    <div class="detail-value">
                        <div style="margin-bottom: 5px; font-weight: bold;">{{ $order->shipping_name }}</div>
                        <div style="margin-bottom: 3px;">{{ $order->shipping_address }}</div>
                        <div style="margin-bottom: 3px;">{{ $order->shipping_city }}, {{ $order->shipping_state }} {{ $order->shipping_zip }}</div>
                        <div style="margin-bottom: 3px;">{{ $order->shipping_country }}</div>
                        @if($order->shipping_phone)
                            <div style="margin-top: 8px; color: #666;">Phone: {{ $order->shipping_phone }}</div>
                        @endif
                    </div>
                </div>
            </div>

            <div class="items-section">
                <div class="items-title">Items Ordered</div>
                @foreach($order->items as $item)
                <div class="item clearfix">
                    <div class="item-details">
                        <div class="item-name">{{ $item->name }}</div>
                        @if($item->size)
                            <div class="item-meta">Size: {{ $item->size }}</div>
                        @endif
                        <div class="item-meta">Quantity: {{ $item->quantity }}</div>
                    </div>
                    <div class="item-price">
                        <div class="item-total">₦{{ number_format($item->price * $item->quantity, 2) }}</div>
                    </div>
                </div>
                @endforeach
            </div>

            <div class="summary-section">
                <div class="summary-row clearfix">
                    <div class="summary-label">Subtotal:</div>
                    <div class="summary-value">₦{{ number_format($order->subtotal, 2) }}</div>
                </div>
                <div class="summary-row clearfix">
                    <div class="summary-label">Tax:</div>
                    <div class="summary-value">₦{{ number_format($order->tax, 2) }}</div>
                </div>
                <div class="summary-row clearfix">
                    <div class="summary-label">Shipping:</div>
                    <div class="summary-value" style="color: #10b981;">Free</div>
                </div>
                <div class="summary-row total-row clearfix">
                    <div class="summary-label">Total:</div>
                    <div class="summary-value">₦{{ number_format($order->total, 2) }}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="next-steps">
        <h3>What's Next?</h3>
        <div class="steps-grid clearfix">
            <div class="step">
                <h4>Order Confirmation</h4>
                <p>You'll receive an email confirmation shortly with your order details.</p>
            </div>
            <div class="step">
                <h4>Processing</h4>
                <p>We're preparing your order for shipment. This usually takes 1-2 business days.</p>
            </div>
            <div class="step">
                <h4>Delivery</h4>
                <p>Your order will be delivered to your specified address within 3-5 business days.</p>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>Need help with your order? Contact our support team.</p>
        <p>Thank you for choosing our store!</p>
    </div>
</body>
</html>