<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


use App\Models\Project;
class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::truncate();
        for ($i = 0; $i < 10; $i++) {

            Project::create([
                'title' => 'Project name',
                'description' => 'Desc',
                'languages' => fake()->randomElement(['Html-Css', 'Html-Css-Js', 'Vue + Vite', 'Laravel', 'Python']),
                'category' => fake()->randomElement(['Front-End', 'Back-End', 'Fullstack', 'Mobile']),
                'project_status' => fake()->randomElement(['Initiation', 'Planning', 'Execution', 'Delay', 'Completion', 'Cancellation']),
                'start_date' => fake()->dateTimeThisMonth(),
                'end_date' => fake()->dateTimeThisMonth(),
            ]);
        }
    }
}
