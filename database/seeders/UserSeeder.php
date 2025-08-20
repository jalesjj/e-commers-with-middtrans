<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        // Create admin
        User::create([
            'name' => 'jales',
            'email' => 'jales@gmail.com',
            'password' => Hash::make('password'),
            'address' => 'made lamongan',
            'phone' => '08140227323',
            'role' => 'admin',
        ]);
    }
}
