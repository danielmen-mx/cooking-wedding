<?php

namespace Database\Seeders;

use App\Models\GuestOnList;
use App\Models\Ticket;
use Carbon\Carbon;
use Faker\Generator;
use Illuminate\Container\Container;
use Illuminate\Database\Seeder;

class GuestOnListSeeder extends Seeder
{
    /**
     * The current Faker instance.
     *
     * @var \Faker\Generator
     */
    protected $faker;

    /**
     * Create a new seeder instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->faker = $this->withFaker();
    }

    /**
     * Get a new Faker instance.
     *
     * @return \Faker\Generator
     */
    protected function withFaker()
    {
        return Container::getInstance()->make(Generator::class);
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $totalList = 80;

        GuestOnList::create([
            'name' => 'Pablo',
            'last_name' => 'Daniel',
            'surname' => 'Méndez',
            'second_surname' => 'Castillo',
            'ticket_id' => Ticket::create([
                'passes' => 2
            ])->id
        ]);
    }
}
