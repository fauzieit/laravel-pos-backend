<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(10)->create();

        User::create([
            'name' => 'Fauzie Admin',
            'email' => 'fauzie@fic11.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
        ]);


    }
}
