<?php

use Illuminate\Database\Seeder;

class Statut_patientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('statut_patients')->insert([
          'nom_statut_patient'=>'Enfant',

          ]);
          DB::table('statut_patients')->insert([
            'nom_statut_patient'=>'adulte',

            ]);
            DB::table('statut_patients')->insert([
              'nom_statut_patient'=>'femme enceinte',

              ]);
              DB::table('statut_patients')->insert([
                'nom_statut_patient'=>'personne age',

                ]);
    }
}
