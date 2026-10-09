<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Property>
 */
class PropertyFactory extends Factory
{
    protected $model = Property::class;

    public function definition(): array
    {
         return [
            'title' => fake()->sentence(3),
            'location' => fake()->city(),
            'price' => fake()->numberBetween(5000000, 20000000),
            'type' => fake()->randomElement([
                'Villa',
                'Apartment',
                'House',
            ]),
           'image' => fake()->randomElement([
    'villa1.jpg',
    'villa2.jpg',
    'villa3.jpg',
    'villa4.jpg',
     'villa5.jpg',

]),
            'is_featured' => fake()->boolean(),
        ];
    }
}
