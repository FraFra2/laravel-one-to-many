<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Project;
use App\Models\Type;
class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $types = Type::all();

        Project::truncate();
        for ($i = 0; $i < 10; $i++) {
            $randomType = $types -> random();
            Project::create([
                'title' => 'Project name',
                'description' => 'Desc',
                'languages' => fake()->randomElement(['Html-Css', 'Html-Css-Js', 'Vue + Vite', 'Laravel', 'Python']),
                // 'category' => fake()->randomElement(['Front-End', 'Back-End', 'Fullstack', 'Mobile']),
                'project_status' => fake()->randomElement(['Initiation', 'Planning', 'Execution', 'Delay', 'Completion', 'Cancellation']),
                'start_date' => fake()->dateTimeThisMonth(),
                'end_date' => fake()->dateTimeThisMonth(),
                'type_id' => $randomType->id,
            ]);
        }
    }
}
