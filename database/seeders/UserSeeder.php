<?php

namespace Database\Seeders;

use Carbon\Carbon;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();
        User::insert([
            ['id' => 1, 'name' => 'Admin Mg Mg', 'email' => 'admin@gmail.com', 'password' => Hash::make('12345678'), 'role_id' => 1, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'Teacher Aye Aye', 'email' => 'teacher@gmail.com', 'password' => Hash::make('12345678'), 'role_id' => 2, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'Teacher Mya Mya', 'email' => 'myamya@gmail.com', 'password' => Hash::make('12345678'), 'role_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 4, 'name' => 'Teacher Ma Ma', 'email' => 'mama@gmail.com', 'password' => Hash::make('12345678'), 'role_id' => 3, 'created_at' => $now, 'updated_at' => $now],
            ['id' => 5, 'name' => 'Teacher Hla Hla', 'email' => 'hlahla@gmail.com', 'password' => Hash::make('12345678'), 'role_id' => 3, 'created_at' => $now, 'updated_at' => $now],

        ]);
    }
}
