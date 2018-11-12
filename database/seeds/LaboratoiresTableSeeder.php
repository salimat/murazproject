<?php

use Illuminate\Database\Seeder;

class LaboratoiresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('laboratoires')->insert([
          'id_departement'=>1,
            'nom_labo' => 'Laboratoire de biologie clinique',
          ]);
          DB::table('laboratoires')->insert([
            'id_departement'=>1,
              'nom_labo' => 'Laboratoire de recherche',
            ]);

    }
}
