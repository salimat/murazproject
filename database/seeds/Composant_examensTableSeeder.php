<?php

use Illuminate\Database\Seeder;

class Composant_examensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('composant_examens')->insert([
          'nom_composant'=>'hepatite',
          'id_examen'=>5,
          'id_rn'=>1,
          'id_rmc'=>1,
          'id_rsn'=>1,
          'id_rnc'=>1,
          ]);
    }
}
