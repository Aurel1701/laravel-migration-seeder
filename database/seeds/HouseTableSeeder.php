<?php

use Illuminate\Database\Seeder;
use App\house;
class HouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* $houses = config('db.houses'); */
        $houses = [
            [
                'address' => '5th avenue',
                'city' => 'New York City',
                'zip_code' => 'NYC-001',
                'country' => 'USA',
                'county' => 'New York',
                'square_meters' => 200,
                'rooms' => 5,
                'type' => 'Villa',
                'for_sale' => true,
                'to_let' => false,
                'is_available' => true,
                'price' => 400000
            ],      [
                'address' => 'central park boulevard',
                'city' => 'New York City',
                'zip_code' => 'NYC-005',
                'country' => 'USA',
                'county' => 'New York',
                'square_meters' => 300,
                'rooms' => 7,
                'type' => 'Palace',
                'for_sale' => true,
                'to_let' => false,
                'is_available' => true,
                'price' => 600000
            ],
            [
                'address' => 'Brookleen road',
                'city' => 'Brookleen',
                'zip_code' => 'BRK-007',
                'country' => 'USA',
                'county' => 'New York',
                'square_meters' => 100,
                'rooms' => 3,
                'type' => 'Apartment',
                'for_sale' => false,
                'to_let' => true,
                'is_available' => true,
                'price' => 1000
            ],
    
        ];

        foreach ($houses as $house) {
            $_house = new House(); 
            $_house->address = $house['address'];
            $_house->city = $house['city'];
            $_house->zip_code = $house['zip_code'];
            $_house->country = $house['country'];
            $_house->county = $house['county'];
            $_house->square_meters = $house['square_meters'];
            $_house->rooms = $house['rooms'];
            $_house->type = $house['type'];
            $_house->for_sale = $house['for_sale'];
            $_house->to_let = $house['to_let'];
            $_house->is_available = $house['is_available'];
            $_house->price = $house['price'];
            $_house->save(); 
        }
    }
}
