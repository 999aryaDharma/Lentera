<?php

namespace App\Models;

use App\Models\category;
use App\Models\orderDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;
    //
    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function category()
    {
        return $this->belongsTo(category::class, 'category_id');
    }

    // Product.php
    public function orderDetails()
    {
        return $this->hasMany(orderDetail::class, 'product_id');
    }
}
