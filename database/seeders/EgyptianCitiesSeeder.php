<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EgyptianCitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $cities = [
            'Cairo', 'Alexandria', 'Giza', 'Shubra El-Kheima', 'Port Said',
            'Suez', 'Mansoura', 'Tanta', 'Aswan', 'Asyut',
            'Fayoum', 'Damietta', 'Minya', 'Zagazig', 'Beni Suef',
            'Ismailia', 'Luxor', 'Mahalla el-Kubra', 'Qena', 'Cairo',
            'Sharkia', 'Kafr el-Sheikh', 'Dakahliya', 'North Sinai',
            'South Sinai', 'Red Sea', 'New Valley', 'Beheira', 'Sohag',
            'Matrouh', 'Gharbia', 'Menoufia', 'Qalyubia', 'Kaliub'
        ];

        // Insert cities into the 'cities' table
        foreach ($cities as $city) {
            DB::table('cities')->insert([
                'name' => $city,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
