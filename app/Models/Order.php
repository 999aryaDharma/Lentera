<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'total_price', 'shipping_address', 'payment_method', 'status'];

    // Relasi dengan Order Detail
    public function detail()
    {
        return $this->hasMany(orderDetail::class, 'order_id');
    }

    // Relasi dengan User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    // Order.php
    public function products()
    {
        return $this->belongsToMany(product::class);
    }
}
