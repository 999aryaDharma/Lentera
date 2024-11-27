<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CheckoutSingle extends Model
{
    protected $table = 'checkout_single';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
