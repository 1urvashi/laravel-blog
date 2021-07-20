<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

        User::create([
            'name'     => 'Urvash',
            'email'    => 'urvashi@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

      
        User::create([
            'name'     => 'Author',
            'email'    => 'author@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);
    }
}
