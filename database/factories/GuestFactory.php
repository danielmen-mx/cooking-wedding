<?php

namespace Database\Factories;

use App\Models\GuestOnList;
use App\Models\Ticket;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Guest>
 */
class GuestFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'assistance' => rand(true, false),
            // 'guest_on_list_id' => GuestOnList::get()->random()->id
        ];
    }
}
