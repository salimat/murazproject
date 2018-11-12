<?php

use Illuminate\Database\Seeder;

class NormesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('normes')->insert([
            'id_unite' => 1,
            'id_composant' =>1,
            'valeur_max' => 10,
            'valeur_min' => 5,
            'valeur_normal' => ' ',
            'sexe' => 'feminin ',
            'tranche_age' => ' ',
          ]);
    }
}
