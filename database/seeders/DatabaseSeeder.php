<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         \App\Models\User::factory()->create([
//             'name' => 'Humphrey',
//             'email' => 'Humfurie@gmail.com',
//             'password' => 'Humfurie'
//         ]);
        $this->call(EmployeeSeeder::class);
    }
}
