<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;



class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=array([
            'name' => 'rey balondoy', 
            'email' => 'reyantigs@gmail.com',
            'password' => Hash::make('12345678'),
            'status' => 'active'
        ],
        [
            'name' => 'Mr.Panfilox Islam', 
            'email' => 'ririy@gmail.com',
            'password' => Hash::make('12345678'),
            'status' => 'active'
        ]);
        foreach ($users as $key => $user):
            User::create($user);        
        endforeach;
    }
}
