<?php

use Illuminate\Database\Seeder;

class Resultat_norme_calculesTableSeeder extends Seeder
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
          DB::table('resultat_norme_calcules')->insert([
          'id_resultat'=>1,
          'detail'=>$faker->text,
          'valeur'=>3,
          'taux'=>50,
          'valeur_calcule'=>5,
          'valeur_absolu'=>2,

            ]);

    }
}
