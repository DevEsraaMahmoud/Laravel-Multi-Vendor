<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Admin::create([
            'name' => 'Esraa Mahmoud',
            'email' => 'esraa.dev@gmail.com',
            'username' => 'esraa.dev@gmail.com',
            'password' => Hash::make('password'),
            'phone_number' => '970591234567',
        ]);
    }
}
