<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class orderDetail extends Model
{
    protected $fillable = ['order_id', 'product_id', 'qty', 'subtotal'];

    public function product()
    {
        return $this->belongsTo(product::class);
    }

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
