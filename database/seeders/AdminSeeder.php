<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'adminseeder@gmail.com')->first();
        if (!$user) {
            $user = new User();
        }
        $user->fname = "AdminSeeder1";
        $user->lname = "admin";
        $user->email = "adminseeder@gmail.com";
        $user->password = Hash::make("adminseeder");
        $user->phoneno = "1234567980";

        $user->save();
    }
}
