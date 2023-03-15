<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Position;
use Illuminate\Database\Seeder;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Employee::factory(10)->create();
        $positions = Position::factory(3)->create();

        Employee::all()->each(function ($employee) use ($positions){
            $employee->position()->attach($positions->random(1, $positions->count())->pluck('id')->toArray());
        });

    }
}
