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
        $admin  = User::create([
            'name'      => 'Samuel Septa',
            'email'     => 'samuel@gmail.com',
            'password'  => bcrypt('12345678')
        ]);

        $admin->assignRole('admin');

        $user  = User::create([
            'name'      => 'Septa Samuel',
            'email'     => 'septa@gmail.com',
            'password'  => bcrypt('12345678')
        ]);

        $user->assignRole('user');

        $user  = User::create([
            'name'      => 'Samuel Septa Munthe',
            'email'     => 'munthe@gmail.com',
            'password'  => bcrypt('12345678')
        ]);

        $user->assignRole('user');
    }
}
