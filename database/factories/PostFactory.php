<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(6, true);

        return [
            'title' => $title,
            'slug' =>$this->faker->unique()->slug(),
            'user_id' => User::inRandomOrder()->value('id') ?? User::factory()->create()->id,
            'tenant_id' => $this->faker->randomElement(['empresa1', 'empresa2', 'empresa3']),
            'content' => $this->faker->paragraphs(4, true),
        ];
    }
}
