<?php

use Illuminate\Database\Seeder;
use App\User;


class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'administrator@info.com',
            'username'=>'administrator@info.com',
            'password'=>'admin123',
            'remember_token'=>''
        ]);
    }
}
