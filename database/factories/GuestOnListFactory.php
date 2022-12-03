<?php

namespace Database\Factories;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GuestOnList>
 */
class GuestOnListFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->firstName,
            'last_name' => fake()->lastName,
            'surname' => $this->faker->lastName,
            'second_surname' => $this->faker->lastName,
            'ticket_id' => Ticket::factory()->create()->id
        ];
    }
}
