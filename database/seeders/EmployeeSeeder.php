<?php

namespace Database\Seeders;

use Database\Factories\EmployeeFactory;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        EmployeeFactory::new()->count(20)->create();

    }
}
