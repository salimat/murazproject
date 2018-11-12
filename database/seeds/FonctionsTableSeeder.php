<?php

use Illuminate\Database\Seeder;

class FonctionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('fonctions')->insert([
            'nom_fonction' => 'Technicien BioMedical',
          ]);
          DB::table('fonctions')->insert([
              'nom_fonction' => 'Biologiste clinique',
            ]);
            DB::table('fonctions')->insert([
                'nom_fonction' => 'Secretaire Medical',
              ]);
}
}
