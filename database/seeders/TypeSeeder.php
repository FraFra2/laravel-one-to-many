<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// model
use App\Models\Type;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create(['name' => 'Front-End']);
        Type::create(['name' => 'Back-End']);
        Type::create(['name' => 'Full-Stack']);
    }
}
