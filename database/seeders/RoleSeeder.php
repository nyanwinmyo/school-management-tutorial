<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\Role;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        Role::insert([
            ['id' => 1, 'name' => 'Admin', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'Teacher', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'Student', 'created_at' => $now, 'updated_at' => $now],
        ]);
    }
}
