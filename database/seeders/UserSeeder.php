<?php

namespace Database\Seeders;

use Database\Factories\UserFactory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = UserFactory::new([
            'name' => 'Humphrey',
            'email' => 'Humfurie@gmail.com',
            'password' => 'Humfurie',
        ])->create();

        $user->assignRole(config('domain.role.super_admin'));
    }
}
