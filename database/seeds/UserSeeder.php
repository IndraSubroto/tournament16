<?php

use App\Promotor;
use App\User;
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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin'),
            'role_id' => '1'
        ]);
        $promotor = User::create([
            'name' => 'Promotor',
            'email' => 'promotor@gmail.com',
            'password' => bcrypt('promotor'),
            'role_id' => '2'
        ]);
        User::create([
            'name' => 'Member',
            'email' => 'member@gmail.com',
            'password' => bcrypt('member'),
            'role_id' => '3'
        ]);
        Promotor::create([
            'user_id' => $promotor->id,
            'company' => 'Promotor',
            'phone' => '081218466350',
            'wa' =>  '081218466350',
            'instagram' => '@indra',
            'facebook' => 'www.facebook.com'
        ]);

        //2
        $promotor2 = User::create([
            'name' => 'Promotor2',
            'email' => 'promotor2@gmail.com',
            'password' => bcrypt('promotor2'),
            'role_id' => '2'
        ]);
        User::create([
            'name' => 'Member2',
            'email' => 'member2@gmail.com',
            'password' => bcrypt('member'),
            'role_id' => '3'
        ]);
        Promotor::create([
            'user_id' => $promotor2->id,
            'company' => 'Promotor2',
            'phone' => '081218466350',
            'wa' =>  '081218466350',
            'instagram' => '@indra2',
            'facebook' => 'www.facebook.com'
        ]);
    }
}
