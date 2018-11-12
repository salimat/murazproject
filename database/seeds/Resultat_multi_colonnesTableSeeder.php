<?php

use Illuminate\Database\Seeder;

class Resultat_multi_colonnesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
          DB::table('resultat_multi_colonnes')->insert([
          'id_resultat'=>1,
          'detail'=>$faker->text,
          'valeur'=>2,
              'item1'=>3,
              'item2'=>4,
              'item3'=>5,

            ]);

    }
}
