<?php

// Payment.php Model
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'user_id',
        'transaction_reference',
        'gateway_reference',
        'amount',
        'currency',
        'status',
        'gateway',
        'card_type',
        'last4',
        'authorization_code',
        'gateway_response',
        'is_default',
        'exp_month',
        'exp_year',
        'bin',
        'bank',
    ];

    protected $casts = [
        'gateway_response' => 'array',
        'amount' => 'decimal:2',
        'is_default' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
