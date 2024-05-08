<?php

namespace Database\Seeders;

use App\Models\User;
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
        $user = User::create([
            'name' => 'Samdev',
            'phone' => '7071210987',
            'password' => bcrypt('7071210987'),
            'role' => 'admin',
        ]);

        $user = User::create([
            'name' => 'Alx',
            'phone' => '7711199606',
            'password' => bcrypt('7711199606'),
            'role' => 'admin',
        ]);

        $user = User::create([
            'name' => 'Aleksandr Stavrov',
            'phone' => '901194006',
            'password' => bcrypt('901194006'),
            'role' => 'admin',
        ]);
    }
}
