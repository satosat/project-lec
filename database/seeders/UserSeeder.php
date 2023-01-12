<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username' => 'dummy_user',
            'name' => 'Dummy User',
            'email' => 'dummyuser@gmail.com',
            'password' => bcrypt('dummyuser'),
            'is_admin' => false
        ]);
        User::create([
            'username' => 'dummy_admin',
            'name' => 'Dummy admin',
            'email' => 'dummyadmin@gmail.com',
            'password' => bcrypt('dummyadmin'),
            'is_admin' => true
        ]);
    }
}
