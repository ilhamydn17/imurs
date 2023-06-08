<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'username' => 'adminrsau',
            'password' => Hash::make('adminmunir123'),
            'role' => 'admin',
            'unit_id' => 1,
        ]);

        // User::create([
        //     'username' => 'user',
        //     'password' => Hash::make('user12345'),
        //     'unit_id' => 2,
        // ]);
    }
}
