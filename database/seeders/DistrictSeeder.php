<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            // Nepal - Provinces (Country ID = 1)
            ['name' => 'Kathmandu', 'country_id' => 1], // Bagmati Province
            ['name' => 'Pokhara', 'country_id' => 1], // Gandaki Province
            ['name' => 'Lalitpur', 'country_id' => 1], // Bagmati Province
            ['name' => 'Biratnagar', 'country_id' => 1], // Koshi Province
            ['name' => 'Chitwan', 'country_id' => 1], // Bagmati Province
            ['name' => 'Bhaktapur', 'country_id' => 1], // Bagmati Province
            ['name' => 'Janakpur', 'country_id' => 1], // Madhes Pradesh

            // India - States (Country ID = 3)
            ['name' => 'Mumbai', 'country_id' => 3], // Maharashtra
            ['name' => 'Delhi', 'country_id' => 3], // Delhi
            ['name' => 'Bengaluru', 'country_id' => 3], // Karnataka
            ['name' => 'Chennai', 'country_id' => 3], // Tamil Nadu
            ['name' => 'Kolkata', 'country_id' => 3], // West Bengal
            ['name' => 'Hyderabad', 'country_id' => 3], // Telangana
            ['name' => 'Ahmedabad', 'country_id' => 3], // Gujarat

            // China - Provinces (Country ID = 2)
            ['name' => 'Beijing', 'country_id' => 2], // Beijing
            ['name' => 'Shanghai', 'country_id' => 2], // Shanghai
            ['name' => 'Chengdu', 'country_id' => 2], // Sichuan Province
            ['name' => 'Guangzhou', 'country_id' => 2], // Guangdong Province
            ['name' => 'Xi\'an', 'country_id' => 2], // Shaanxi Province
            ['name' => 'Shenzhen', 'country_id' => 2], // Guangdong Province
            ['name' => 'Hangzhou', 'country_id' => 2], // Zhejiang Province

            // Vietnam - Provinces (Country ID = 4)
            ['name' => 'Hanoi', 'country_id' => 4], // Hanoi
            ['name' => 'Ho Chi Minh City', 'country_id' => 4], // Ho Chi Minh City
            ['name' => 'Da Nang', 'country_id' => 4], // Da Nang
            ['name' => 'Hai Phong', 'country_id' => 4], // Hai Phong
            ['name' => 'Can Tho', 'country_id' => 4], // Can Tho
            ['name' => 'Binh Duong', 'country_id' => 4], // Binh Duong
            ['name' => 'Dong Nai', 'country_id' => 4], // Dong Nai
        ];

        foreach ($districts as $district) {
            DB::table('districts')->insert($district);
        }
    }
}
