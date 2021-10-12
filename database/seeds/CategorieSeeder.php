<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => '1', 'nom' => 'Actualite'],
            ['id' => '2', 'nom' => 'Astuce'],
            ['id' => '3', 'nom' => 'Recrutement'],
        ]);
    }
}
