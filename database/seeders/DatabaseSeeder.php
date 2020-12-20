<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\EventType;
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
        // \App\Models\User::factory(10)->create();
        $cities = ["Adis Ababa", "Bahirdar", "Adama"];
        foreach($cities as $city){
           City::create([
               "name" => $city
           ]);
        }
        $eventTypes = ["Sport", "Technology"];
        foreach($eventTypes as $eventtype){
            EventType::create([
                "name" => $eventtype
            ]);
        }
    }
}
