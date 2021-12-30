<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(): void
    {
        DB::table('cars')->insert([
            [
                'brand' => 'Volvo',
                'model' => 'XC90',
                'price' => '4000000',
                'created_at' => date('d.m.Y H:i'),
                'updated_at' => date('d.m.Y H:i'),
            ],
        ]);
    }
}
