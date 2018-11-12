<?php

use Illuminate\Database\Seeder;

class Type_prelevementsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('type_prelevements')->insert([
          'nom_prelevement' => 'prelevement sanguin',

          ]);
          DB::table('type_prelevements')->insert([
            'nom_prelevement' => 'prelevement vaginal',

            ]);
            DB::table('type_prelevements')->insert([
              'nom_prelevement' => 'prelevement fecal',

              ]);
}
}
