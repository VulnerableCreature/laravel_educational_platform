<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Course;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Role::query()->create([
            'title' => 'Администратор'
        ]);
        Role::query()->create([
            'title' => 'Преподаватель'
        ]);
        Role::query()->create([
            'title' => 'Студент'
        ]);
        User::factory(10)->create();
        Course::factory(10)->create();
    }
}
