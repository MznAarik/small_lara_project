<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Nepal's states (Country ID = 1)
        $nep_states = [
            ['name' => 'Koshi Province', 'country_id' => 1, 'state_id' => 1],
            ['name' => 'Madhes Pradesh', 'country_id' => 1, 'state_id' => 2],
            ['name' => 'Bagmati Province', 'country_id' => 1, 'state_id' => 3],
            ['name' => 'Gandaki Province', 'country_id' => 1, 'state_id' => 4],
            ['name' => 'Lumbini Province', 'country_id' => 1, 'state_id' => 5],
        ];

        foreach ($nep_states as $nep_state) {
            DB::table('states')->insert($nep_state);
        }

        // China's states (Country ID = 2)
        $chn_states = [
            ['name' => 'Beijing', 'country_id' => 2, 'state_id' => 1],
            ['name' => 'Shanghai', 'country_id' => 2, 'state_id' => 2],
            ['name' => 'Guangdong', 'country_id' => 2, 'state_id' => 3],
            ['name' => 'Sichuan', 'country_id' => 2, 'state_id' => 4],
            ['name' => 'Zhejiang', 'country_id' => 2, 'state_id' => 5],
        ];

        foreach ($chn_states as $chn_state) {
            DB::table('states')->insert($chn_state);
        }

        // India's states (Country ID = 3)
        $ind_states = [
            ['name' => 'Maharashtra', 'country_id' => 3, 'state_id' => 1],
            ['name' => 'Delhi', 'country_id' => 3, 'state_id' => 2],
            ['name' => 'Uttar Pradesh', 'country_id' => 3, 'state_id' => 3],
            ['name' => 'Tamil Nadu', 'country_id' => 3, 'state_id' => 4],
            ['name' => 'Karnataka', 'country_id' => 3, 'state_id' => 5],
        ];

        foreach ($ind_states as $ind_state) {
            DB::table('states')->insert($ind_state);
        }

        // Vietnam's states (Country ID = 4)
        $vnm_states = [
            ['name' => 'Hanoi', 'country_id' => 4, 'state_id' => 1],
            ['name' => 'Ho Chi Minh City', 'country_id' => 4, 'state_id' => 2],
            ['name' => 'Binh Duong', 'country_id' => 4, 'state_id' => 3],
            ['name' => 'Hai Phong', 'country_id' => 4, 'state_id' => 4],
            ['name' => 'Da Nang', 'country_id' => 4, 'state_id' => 5],
        ];

        foreach ($vnm_states as $vnm_state) {
            DB::table('states')->insert($vnm_state);
        }
    }
}
