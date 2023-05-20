<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Ispit;
use App\Models\Predmet;
use App\Models\Student;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Student::truncate();
        Predmet::truncate();
        Ispit::truncate();

        Student::factory()
            ->count(10)
            ->create();

        Predmet::factory()
            ->count(10)
            ->create();

        Ispit::factory()
            ->count(10)
            ->create();
    }
}