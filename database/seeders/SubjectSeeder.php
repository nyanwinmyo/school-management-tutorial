<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Subject;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SubjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $now = Carbon::now();
        Subject::insert([
            ['id' => 1, 'name' => 'English', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'Mathematics', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'Science', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'name' => 'Physics', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'name' => 'Chemistry', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
