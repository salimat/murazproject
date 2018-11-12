<?php

use Illuminate\Database\Seeder;

class Resultat_sans_normesTableSeeder extends Seeder
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
          DB::table('resultat_sans_normes')->insert([
          'id_resultat'=>1,
          'detail'=>$faker->text,
          'valeur'=>10,
        ]);
    }
}
