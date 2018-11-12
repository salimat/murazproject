<?php

use Illuminate\Database\Seeder;

class AssurancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
        DB::table('assurances')->insert([
          'nom_assurance'=>'SUNU',
        'adresse_assurance'=>'Bobo-dioulasso',
          'tel_assurance'=>60080740,
          'email_assurance'=> $faker->unique()->safeEmail,
        'code_post_assurance'=>'BP-120',
          'abreviation'=>' SN',

          ]);
          DB::table('assurances')->insert([
            'nom_assurance'=>'Centre Muraz',
          'adresse_assurance'=>'Bobo-dioulasso',
            'tel_assurance'=>66542164,
            'email_assurance'=> $faker->unique()->safeEmail,
          'code_post_assurance'=>'BP-110',
            'abreviation'=>'CM',

            ]);
    }
}
