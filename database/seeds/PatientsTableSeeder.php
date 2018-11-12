<?php

use Illuminate\Database\Seeder;

class PatientsTableSeeder extends Seeder
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

        DB::table('patients')->insert([
          'id_statut_patient'=>1,
          'matricule_emp'=>1,
            'nom_per' => $faker->firstName,
            'prenom_per' =>$faker->lastName,
            'date_naissance' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'sexe_per' => 'feminin',
            'contact_per' => $faker->phoneNumber,
            'adresse_per' => $faker->address,
            'email_per' => $faker->unique()->safeEmail,
            'code_postal_pat' =>'BP 130',
            'age_pat' =>rand(20,40),
            'profession_pat'=>'commercant',
          ]);
          DB::table('patients')->insert([
            'id_statut_patient'=>2,
            'matricule_emp'=>2,
              'nom_per' => $faker->firstName,
              'prenom_per' =>$faker->lastName,
              'date_naissance' => $faker->dateTimeThisCentury->format('Y-m-d'),
              'sexe_per' => 'masculin',
              'contact_per' => rand(1,9),
              'adresse_per' => $faker->address,
              'email_per' => $faker->unique()->safeEmail,
              'code_postal_pat' =>'BP 130',
              'age_pat' =>rand(20,40),
              'profession_pat'=>'Gendarme',
            ]);
            DB::table('patients')->insert([
              'id_statut_patient'=>3,
              'matricule_emp'=>3,
                'nom_per' => $faker->firstName,
                'prenom_per' =>$faker->lastName,
                'date_naissance' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'sexe_per' => 'feminin',
                'contact_per' => rand(1,9),
                'adresse_per' => $faker->address,
                'email_per' => $faker->unique()->safeEmail,
                 'code_postal_pat' =>'BP 130',
                  'age_pat' =>rand(20,40),
                  'profession_pat'=>' ',
              ]);
    }
}
