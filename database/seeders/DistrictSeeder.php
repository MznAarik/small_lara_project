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
            ['name' => 'Kathmandu', 'state_id' => 3, 'country_id' => 1], // Bagmati Province
            ['name' => 'Pokhara', 'state_id' => 4, 'country_id' => 1], // Gandaki Province
            ['name' => 'Lalitpur', 'state_id' => 3, 'country_id' => 1], // Bagmati Province
            ['name' => 'Biratnagar', 'state_id' => 1, 'country_id' => 1], // Koshi Province
            ['name' => 'Chitwan', 'state_id' => 3, 'country_id' => 1], // Bagmati Province
            ['name' => 'Bhaktapur', 'state_id' => 3, 'country_id' => 1], // Bagmati Province
            ['name' => 'Janakpur', 'state_id' => 2, 'country_id' => 1], // Madhes Pradesh

            // India - States (Country ID = 3)
            ['name' => 'Mumbai', 'state_id' => 1, 'country_id' => 3], // Maharashtra
            ['name' => 'Delhi', 'state_id' => 2, 'country_id' => 3], // Delhi
            ['name' => 'Bengaluru', 'state_id' => 5, 'country_id' => 3], // Karnataka
            ['name' => 'Chennai', 'state_id' => 4, 'country_id' => 3], // Tamil Nadu
            ['name' => 'Kolkata', 'state_id' => 6, 'country_id' => 3], // West Bengal
            ['name' => 'Hyderabad', 'state_id' => 7, 'country_id' => 3], // Telangana
            ['name' => 'Ahmedabad', 'state_id' => 8, 'country_id' => 3], // Gujarat

            // China - Provinces (Country ID = 2)
            ['name' => 'Beijing', 'state_id' => 1, 'country_id' => 2], // Beijing
            ['name' => 'Shanghai', 'state_id' => 2, 'country_id' => 2], // Shanghai
            ['name' => 'Chengdu', 'state_id' => 4, 'country_id' => 2], // Sichuan Province
            ['name' => 'Guangzhou', 'state_id' => 3, 'country_id' => 2], // Guangdong Province
            ['name' => 'Xi\'an', 'state_id' => 5, 'country_id' => 2], // Shaanxi Province
            ['name' => 'Shenzhen', 'state_id' => 3, 'country_id' => 2], // Guangdong Province
            ['name' => 'Hangzhou', 'state_id' => 6, 'country_id' => 2], // Zhejiang Province

            // Vietnam - Provinces (Country ID = 4)
            ['name' => 'Hanoi', 'state_id' => 1, 'country_id' => 4], // Hanoi
            ['name' => 'Ho Chi Minh City', 'state_id' => 2, 'country_id' => 4], // Ho Chi Minh City
            ['name' => 'Da Nang', 'state_id' => 5, 'country_id' => 4], // Da Nang
            ['name' => 'Hai Phong', 'state_id' => 4, 'country_id' => 4], // Hai Phong
            ['name' => 'Can Tho', 'state_id' => 6, 'country_id' => 4], // Can Tho
            ['name' => 'Binh Duong', 'state_id' => 7, 'country_id' => 4], // Binh Duong
            ['name' => 'Dong Nai', 'state_id' => 8, 'country_id' => 4], // Dong Nai
        ];

        foreach ($districts as $district) {
            DB::table('districts')->insert($district);
        }
    }
}
