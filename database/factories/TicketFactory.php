<?php

namespace Database\Factories;

use App\Models\GuestOnList;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'passes' => rand(1, 5),
            // 'guest_on_list_id' => GuestOnList::get()->random()->id
        ];
    }
}
