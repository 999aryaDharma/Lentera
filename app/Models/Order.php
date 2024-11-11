<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'total_price',
        'discount',
        'final_price',
        'shipping_address',
        'payment_status',
    ];

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Akses final_price otomatis berdasarkan diskon
    public function getFinalPriceAttribute()
    {
        return $this->total_price - $this->discount;
    }
}
