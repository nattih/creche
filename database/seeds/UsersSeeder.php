<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete(); 
        User::create([
            'nom'=>'parent',
            'prenom'=>'cool',
            'email'=>'parent@cool.com',
            'password'=> Hash::make('1234'),
            'statut'=> 1,
            'roles'=> 1,
        ]);

        User::create([
            'nom'=>'nonou',
            'prenom'=>'cool',
            'email'=>'nounou@cool.com',
            'password'=> Hash::make('1234'),
            'statut'=> 1,
            'roles'=> 2,
        ]);

        User::create([
            'nom'=>'structure',
            'prenom'=>'cool',
            'email'=>'structure@cool.com',
            'password'=> Hash::make('1234'),
            'statut'=> 1,
            'roles'=> 3,
        ]);
    }
}
