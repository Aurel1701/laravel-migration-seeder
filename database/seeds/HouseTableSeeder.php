<?php

use Illuminate\Database\Seeder;

class HouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $houses = [
            [
              'address' => '',
              'city' => '',
              'zip_code' => '',
              'country' => '',
              'county' => '',
              'square_meters' => '',
              'rooms' => '',
              'type' => '',
              'for_sale' => '',
              'to_let' => '',
              'is_available' => '',
              'price' => ''
            ], 
            # Fill the data, then copy paste to add more entries.
        ];
    }
}
