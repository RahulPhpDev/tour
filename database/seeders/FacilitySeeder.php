<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Facility;

class FacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $facility = [
            [
                'name' => 'Wi Fi',
                'icon' => 'wifi'
            ],
            [
                'name' => 'Charger',
                'icon' => 'battery-full'
            ],
           [ 'name' => 'Transport',
            'icon' => 'car']
        ];

        Facility::insert($facility);
    }
}
