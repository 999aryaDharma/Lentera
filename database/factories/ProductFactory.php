<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = product::class;

    public function definition()
    {
        return [
            'name' => $this->faker->word(),
            'category_id' => category::inRandomOrder()->first()->id,  // Ambil ID kategori secara acak
            'size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
            'warna' => $this->faker->safeColorName(),
            'deskripsi' => $this->faker->sentence(10),
            'harga' => $this->faker->numberBetween(10000, 100000),
            'stok' => $this->faker->numberBetween(1, 100),
            'image' => 'image/bajupartai.jpg',
        ];
    }
}
