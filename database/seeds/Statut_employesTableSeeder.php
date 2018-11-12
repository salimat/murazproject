<?php

use Illuminate\Database\Seeder;

class Statut_employesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('statut_employes')->insert([
            'nom_statut_emp' => 'permanent',
          ]);
          DB::table('statut_employes')->insert([
              'nom_statut_emp' => 'contractuel',
            ]);
            DB::table('statut_employes')->insert([
                'nom_statut_emp' => 'stagiaire',
              ]);
    }
}
