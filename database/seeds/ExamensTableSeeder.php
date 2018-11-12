<?php

use Illuminate\Database\Seeder;

class ExamensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('examens')->insert([
          'id_section' => 3,
          'id_mat' => 2,
          'id_type_prelevement' => 1,
            'nom_examen' => 'Antigene HBs',
            'montant_examen' => 5000,
            'abreviation' => 'ag Hbs',
          ]);
          DB::table('examens')->insert([
            'id_section' => 3,
            'id_mat' => 1,
            'id_type_prelevement' => 1,
              'nom_examen' => 'Anticorps de lhepatite C ',
              'montant_examen' => 5000,
              'abreviation' => 'ac VHC',
            ]);

    }
}
