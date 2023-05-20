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

        $i1 = Ispit::create([
            'predmet_id' => 2,
            'student_id' => 2,
            'Rezultat' => 'polozio',
        ]);

        $i2 = Ispit::create([
            'predmet_id' => 1,
            'student_id' => 7,
            'Rezultat' => 'polozio',
        ]);

        $i3 = Ispit::create([
            'predmet_id' => 2,
            'student_id' => 1,
            'Rezultat' => 'polozio',
        ]);

        $i4 = Ispit::create([
            'predmet_id' => 2,
            'student_id' => 5,
            'Rezultat' => 'pao',
        ]);

        $i5 = Ispit::create([
            'predmet_id' => 8,
            'student_id' => 1,
            'Rezultat' => 'polozio',
        ]);
    }
}