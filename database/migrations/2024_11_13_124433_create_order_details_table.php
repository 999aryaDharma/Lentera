<?php

use App\Models\category;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('detail_order', function (Blueprint $table) {
            $table->id('id_detail');                  
            $table->foreignId('id_order');
            $table->constrained('orders');
            $table->onDelete('cascade');
            $table->foreignId('id_produk');
            $table->constrained('products');
            $table->onDelete('cascade');
            $table->integer('kuantitas');             
            $table->decimal('harga', 10, 2);          
            $table->timestamps();                     
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_details');
    }
};
