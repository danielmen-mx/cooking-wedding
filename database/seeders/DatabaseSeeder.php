<?php

namespace Database\Seeders;

use App\Models\GuestOnList;
use App\Models\Ticket;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {        
        \App\Models\User::factory()->create([
            'name' => 'Daniel Mendez',
            'email' => 'dmendez@example.com',
            'password' => bcrypt('secret')
        ]);

        // \App\Models\Guest::factory(50)->create();
        $this->call(GuestOnListSeeder::class);
        GuestOnList::factory()->count(80)->create();
    }
}