<?php

use Illuminate\Database\Seeder;

class MaterielsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('materiels')->insert([
            'type_mat' => 'Tube ',
            'nom_mat' => 'Lithium Heparine',
            'couleur_bouchon' => 'vert',
          ]);
          DB::table('materiels')->insert([
              'type_mat' => 'Tube BD vacuitaner',
              'nom_mat' => 'Sec CAT',
              'couleur_bouchon' => 'rouge',
            ]);
            DB::table('materiels')->insert([
                'type_mat' => 'Aiguille de securite ',
                'nom_mat' => 'Aiguille BD eclipse',
                'couleur_bouchon' => ' ',
              ]);
    }
}
