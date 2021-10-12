<?php

use App\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PersonelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete(); 
        Admin::create([
            'nom'=>'ZOANGA',
            'prenom'=>'Rafiatou',
            'email'=>'rafia@admin.com',
            'password'=> Hash::make('1234'),
            'statut'=> 1,
            'roles'=> 1,
        ]);
    }
}
