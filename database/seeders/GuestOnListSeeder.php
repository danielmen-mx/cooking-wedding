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
            'surname' => 'Mendez',
            'second_surname' => 'Castillo',
            'ticket_id' => Ticket::create([
                'passes' => 2
            ])->id
        ]);

        $guestData = [
            [
                'name' => 'Jose',
                'last_name' => 'Norberto',
                'surname' => 'Mendez',
                'second_surname' => 'Diaz',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Eduardo',
                'last_name' => '',
                'surname' => 'Mendez',
                'second_surname' => 'Castillo',
                'ticket_id' => Ticket::create([
                    'passes' => 1
                ])->id
            ],
            [
                'name' => 'Abigail',
                'last_name' => '',
                'surname' => 'Morales',
                'second_surname' => 'Penagos',
                'ticket_id' => Ticket::create([
                    'passes' => 4
                ])->id
            ],
            [
                'name' => 'Erika',
                'last_name' => '',
                'surname' => 'Mendez',
                'second_surname' => 'Castillo',
                'ticket_id' => Ticket::create([
                    'passes' => 4
                ])->id
            ],
            [
                'name' => 'Javier',
                'last_name' => '',
                'surname' => 'Mendez',
                'second_surname' => 'Diaz',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Luis',
                'last_name' => 'Alberto',
                'surname' => 'Mendez',
                'second_surname' => 'Vazquez',
                'ticket_id' => Ticket::create([
                    'passes' => 4
                ])->id
            ],
            [
                'name' => 'Jose',
                'last_name' => 'Roberto',
                'surname' => 'Mendez',
                'second_surname' => 'Diaz',
                'ticket_id' => Ticket::create([
                    'passes' => 4
                ])->id
            ],
            [
                'name' => 'Roberto',
                'last_name' => '',
                'surname' => 'Teutli',
                'second_surname' => 'Mandujano',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Ervin',
                'last_name' => '',
                'surname' => 'Mendez',
                'second_surname' => 'Diaz',
                'ticket_id' => Ticket::create([
                    'passes' => 3
                ])->id
            ],
            [
                'name' => 'Fernando',
                'last_name' => '',
                'surname' => 'Mendez',
                'second_surname' => 'Diaz',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Magda',
                'last_name' => '',
                'surname' => 'Castillo',
                'second_surname' => 'Cruz',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            // [
            //     'name' => 'Manuel',
            //     'last_name' => '',
            //     'surname' => 'Salinas',
            //     'second_surname' => '',
            //     'ticket_id' => Ticket::create([
            //         'passes' => 1
            //     ])->id
            // ],
            [
                'name' => 'Panny',
                'last_name' => '',
                'surname' => 'Salinas',
                'second_surname' => 'Castillo',
                'ticket_id' => Ticket::create([
                    'passes' => 3
                ])->id
            ],
            [
                'name' => 'Luis', // ask his full name with ingrid
                'last_name' => '',
                'surname' => 'Ventura',
                'second_surname' => '',
                'ticket_id' => Ticket::create([
                    'passes' => 3
                ])->id
            ],
            [
                'name' => 'Ingrid',
                'last_name' => '',
                'surname' => 'Salinas',
                'second_surname' => 'Castillo',
                'ticket_id' => Ticket::create([
                    'passes' => 3
                ])->id
            ],
            [
                'name' => 'Ubiel', // ask his full name with betsi
                'last_name' => '',
                'surname' => '',
                'second_surname' => '',
                'ticket_id' => Ticket::create([
                    'passes' => 1
                ])->id
            ],
            [
                'name' => 'Betsi',
                'last_name' => '',
                'surname' => 'Salinas',
                'second_surname' => 'Castillo',
                'ticket_id' => Ticket::create([
                    'passes' => 4
                ])->id
            ],
            [
                'name' => 'Raquel',
                'last_name' => '',
                'surname' => 'Castillo',
                'second_surname' => 'Cruz',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Tristan',
                'last_name' => '',
                'surname' => 'Sanchez',
                'second_surname' => 'Orozco',
                'ticket_id' => Ticket::create([
                    'passes' => 1
                ])->id
            ],
            [
                'name' => 'Horacio',
                'last_name' => 'Fernando',
                'surname' => 'Solis',
                'second_surname' => 'Lopez',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Horacio',
                'last_name' => 'Fernando',
                'surname' => 'Solis',
                'second_surname' => 'Hernandez',
                'ticket_id' => Ticket::create([
                    'passes' => 1
                ])->id
            ],
            [
                'name' => 'Maritza',
                'last_name' => 'Fernanda',
                'surname' => 'Solis',
                'second_surname' => 'Hernandez',
                'ticket_id' => Ticket::create([
                    'passes' => 1
                ])->id
            ],
            [
                'name' => 'Lenica',
                'last_name' => '',
                'surname' => 'Gomez',
                'second_surname' => 'Hernandez',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Tomas',
                'last_name' => '',
                'surname' => 'Hernandez',
                'second_surname' => 'De la Cruz',
                'ticket_id' => Ticket::create([
                    'passes' => 4
                ])->id
            ],
            [
                'name' => 'Maria',
                'last_name' => 'Lourdes',
                'surname' => 'Gomez',
                'second_surname' => 'Hernandez',
                'ticket_id' => Ticket::create([
                    'passes' => 4
                ])->id
            ],
            [
                'name' => 'Maria',
                'last_name' => 'Cruz',
                'surname' => 'Lopez',
                'second_surname' => 'Torres',
                'ticket_id' => Ticket::create([
                    'passes' => 1
                ])->id
            ],
            [
                'name' => 'Susana',
                'last_name' => '',
                'surname' => 'Solis',
                'second_surname' => '',
                'ticket_id' => Ticket::create([
                    'passes' => 1
                ])->id
            ],
            [
                'name' => 'Daniel',
                'last_name' => '',
                'surname' => 'Nafate',
                'second_surname' => 'Ruiz',
                'ticket_id' => Ticket::create([
                    'passes' => 3
                ])->id
            ],
            [
                'name' => 'Romelio',
                'last_name' => '',
                'surname' => 'Hernandez',
                'second_surname' => 'Nafate',
                'ticket_id' => Ticket::create([
                    'passes' => 4
                ])->id
            ],
            [
                'name' => 'Daniel',
                'last_name' => '',
                'surname' => 'Hernandez',
                'second_surname' => 'Nafate',
                'ticket_id' => Ticket::create([
                    'passes' => 5
                ])->id
            ],
            [
                'name' => 'Edy',
                'last_name' => '',
                'surname' => 'Hernandez',
                'second_surname' => 'Nafate',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Edy',
                'last_name' => '',
                'surname' => 'Hernandez',
                'second_surname' => 'Jimenez',
                'ticket_id' => Ticket::create([
                    'passes' => 1
                ])->id
            ],
            [
                'name' => 'Eribeth',
                'last_name' => '',
                'surname' => 'Hernandez',
                'second_surname' => 'Jimenez',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Evelyn',
                'last_name' => 'del Rocio',
                'surname' => 'Morales',
                'second_surname' => 'Mundo',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Mauricio',
                'last_name' => '',
                'surname' => 'Hernandez',
                'second_surname' => 'Jimenez',
                'ticket_id' => Ticket::create([
                    'passes' => 4
                ])->id
            ],
            [
                'name' => 'Adalberto',
                'last_name' => '',
                'surname' => 'Moreno',
                'second_surname' => 'Clemente',
                'ticket_id' => Ticket::create([
                    'passes' => 4
                ])->id
            ],
            [
                'name' => 'Gladiola',
                'last_name' => 'Diney',
                'surname' => 'Hernandez',
                'second_surname' => 'Nafate',
                'ticket_id' => Ticket::create([
                    'passes' => 4
                ])->id
            ],
            [
                'name' => 'Marco',
                'last_name' => 'Tulio',
                'surname' => 'Moreno',
                'second_surname' => 'Hernandez',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Jorge',
                'last_name' => '',
                'surname' => 'Hernandez',
                'second_surname' => 'Nafate',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Dorly',
                'last_name' => '',
                'surname' => 'Hernandez',
                'second_surname' => 'Nafate',
                'ticket_id' => Ticket::create([
                    'passes' => 1
                ])->id
            ],
            [
                'name' => 'Valeria',
                'last_name' => 'Patricia',
                'surname' => 'De los Santos',
                'second_surname' => 'Trejo',
                'ticket_id' => Ticket::create([
                    'passes' => 1
                ])->id
            ],
            [
                'name' => 'Alfredo',
                'last_name' => '',
                'surname' => 'Zenteno',
                'second_surname' => '',
                'ticket_id' => Ticket::create([
                    'passes' => 1
                ])->id
            ],
            [
                'name' => 'Ivoone',
                'last_name' => 'Geraldine',
                'surname' => 'Bernal',
                'second_surname' => 'Puerto',
                'ticket_id' => Ticket::create([
                    'passes' => 1
                ])->id
            ],
            [
                'name' => 'Roberto',
                'last_name' => '',
                'surname' => 'Coutiño',
                'second_surname' => 'Gomez',
                'ticket_id' => Ticket::create([
                    'passes' => 1
                ])->id
            ],
            [
                'name' => 'Willy',
                'last_name' => '',
                'surname' => 'Ruiz',
                'second_surname' => '',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Jesus',
                'last_name' => 'Francisco',
                'surname' => 'Cortes',
                'second_surname' => 'Rodriguez',
                'ticket_id' => Ticket::create([
                    'passes' => 2
                ])->id
            ],
            [
                'name' => 'Amayrani',
                'last_name' => '',
                'surname' => 'Farrera',
                'second_surname' => 'Espinosa',
                'ticket_id' => Ticket::create([
                    'passes' => 3
                ])->id
            ]
        ];

        foreach ($guestData as $guest) {
            GuestOnList::create($guest);
        }
    }
}
