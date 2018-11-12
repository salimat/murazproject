<?php

use Illuminate\Database\Seeder;

class DepartementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('departements')->insert([
            'nom_departement' => 'departement des sciences biomedicales',
          ]);
          DB::table('departements')->insert([
              'nom_departement' => 'departement des recherche clinique',
            ]);
            DB::table('departements')->insert([
                'nom_departement' => 'departement de sante publique',
              ]);

    }
}
