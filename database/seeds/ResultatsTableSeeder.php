<?php

use Illuminate\Database\Seeder;

class ResultatsTableSeeder extends Seeder
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
        DB::table('resultats')->insert([
        'id_examen'=> 5,
          'id_patient'=> 1,
          'matricule_emp'=>1,
          'date_resultat'=>$faker->date,
          'heure_resultat'=>$faker->time,
          'observation'=>$faker->text,
          'conclusion'=>$faker->text,
          ]);

          DB::table('resultats')->insert([
          'id_examen'=> 5,
            'id_patient'=> 3,
            'matricule_emp'=>2,
            'date_resultat'=>$faker->date,
            'heure_resultat'=>$faker->time,
            'observation'=>$faker->text,
            'conclusion'=>$faker->text,
            ]);
            DB::table('resultats')->insert([
            'id_examen'=> 6,
              'id_patient'=> 2,
              'matricule_emp'=>3,
              'date_resultat'=>$faker->date,
              'heure_resultat'=>$faker->time,
              'observation'=>$faker->text,
              'conclusion'=>$faker->text,
              ]);
    }
}
