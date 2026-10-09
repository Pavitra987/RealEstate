<?php

namespace Database\Factories;

use App\Models\Agents;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Agents>
 */
class AgentFactory extends Factory
{
    protected $model = Agents::class;

    public function definition(): array
    {
     return [
            'name' => fake()->sentence(3),
            'company_name' => fake()->sentence(2),
           'phone' => fake()->phoneNumber(),
           'image' => fake()->randomElement([
    'agent1.webp',
    'agent2.webp',
    'agent3.jpg',
   ])

];
    }
}
