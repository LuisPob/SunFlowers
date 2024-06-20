<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Event;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $events = [
            
            [
                'event' => 'Días de entrega',
                'start_date' => '2024-06-08 10:00',
                'end_date' => '2024-06-08 15:00',
            ],
            [
                'event' => 'Días de entrega',
                'start_date' => '2024-06-15 08:00',
                'end_date' => '2024-06-15 15:00',
            ],
            [
                'event' => 'Días de entrega',
                'start_date' => '2024-06-22 09:00',
                'end_date' => '2024-06-22 15:00',
            ],
        ];

    foreach ($events as $event) {
        Event::create($event);
    }
    }
}
