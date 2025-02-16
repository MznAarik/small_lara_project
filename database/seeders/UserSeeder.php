<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::where('email', 'seederuser2@gmail.com')->first();
        if (!$user) {
            $user = new User();
        }
        $user->fname = "Seeder";
        $user->lname = "User";
        $user->email = "seederuser2@gmail.com";
        $user->phoneno = "1234567980";
        $user->password = Hash::make("seederuser");
        $user->save();
    }
}
