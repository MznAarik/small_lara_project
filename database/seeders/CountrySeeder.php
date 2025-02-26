<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $countries = [
            ['name' => 'Nepal'],
            ['name' => 'China'],
            ['name' => 'India'],
            ['name' => 'Veitnam'],
        ];

        foreach ($countries as $country) {
            DB::table('countries')->insert($country);
        }
    }
}
