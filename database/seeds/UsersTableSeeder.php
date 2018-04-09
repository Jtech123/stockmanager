<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'jurriaanroelen@hotmail.com',
            'password' => bcrypt('qwerty'),
            'isAdmin' => true
        ]);
    }
}
