<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Company>
 */
class CompanyFactory extends Factory
{
        protected $model = Company::class;
    public function definition(): array
    {
        return [
            'company_name'=>fake()->sentence(2),
            'location' => fake()->address(),
            'company_phone'=>fake()->phoneNumber(),
             'image' => fake()->randomElement([
    'clogo1.webp',
    'vclogo2.jpg',
    'clogo3.jpg',
     'clogo4.jpg'

             ])
        ];
    }
}
