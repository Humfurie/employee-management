<?php

namespace Database\Seeders;

use Database\Factories\RoleFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        RoleFactory::new([
            'name' => config('domain.role.super_admin'),
        ])->create();
    }
}
