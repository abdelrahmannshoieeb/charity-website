<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('regions')->insert([
            [
                'name' => 'Cairo Region',
                'region' => json_encode(['Cairo', 'Giza', 'Qalyubia']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Alexandria Region',
                'region' => json_encode(['Alexandria', 'Beheira', 'Matruh']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Upper Egypt Region',
                'region' => json_encode(['Asyut', 'Sohag', 'Minya']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Delta Region',
                'region' => json_encode(['Dakahlia', 'Sharqia', 'Gharbia']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Sinai Region',
                'region' => json_encode(['North Sinai', 'South Sinai', 'Suez']),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
