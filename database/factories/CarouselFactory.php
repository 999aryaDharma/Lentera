<?php

namespace Database\Factories;

use App\Models\Carousel;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Carousel>
 */
class CarouselFactory extends Factory
{
    protected $model = Carousel::class;

    public function definition()
    {
        return [
            'title' => $this->faker->word(),
            'image' => 'image/carousel/designecologist-5mj5jLhYWpY-unsplash.jpg',
        ];
    }
}
