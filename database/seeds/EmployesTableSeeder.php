<?php

use Illuminate\Database\Seeder;

class EmployesTableSeeder extends Seeder
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

        DB::table('employes')->insert([
          'id_fonction'=>1,
            'nom_per' => $faker->firstName,
            'prenom_per' =>$faker->lastName,
            'date_naissance' => $faker->dateTimeThisCentury->format('Y-m-d'),
            'sexe_per' => 'feminin',
            'contact_per' => rand(1,9),
            'adresse_per' => $faker->address,
            'mail_per' => $faker->unique()->safeEmail,
            'date_emb' =>$faker->dateTimeThisCentury->format('Y-m-d'),
            'login_emp' =>$faker->username,
            'mot_de_passe' =>bcrypt('secret'),
          ]);
          DB::table('employes')->insert([
            'id_fonction'=>2,
              'nom_per' => $faker->firstName,
              'prenom_per' =>$faker->lastName,
              'date_naissance' => $faker->dateTimeThisCentury->format('Y-m-d'),
              'sexe_per' => 'masculin',
              'contact_per' => rand(1,9),
              'adresse_per' => $faker->address,
              'mail_per' => $faker->unique()->safeEmail,
              'date_emb' =>$faker->dateTimeThisCentury->format('Y-m-d'),
              'login_emp' =>$faker->username,
              'mot_de_passe' =>bcrypt('secret'),
            ]);
            DB::table('employes')->insert([
              'id_fonction'=>3,
                'nom_per' => $faker->firstName,
                'prenom_per' =>$faker->lastName,
                'date_naissance' => $faker->dateTimeThisCentury->format('Y-m-d'),
                'sexe_per' => 'feminin',
                'contact_per' => rand(1,9),
                'adresse_per' => $faker->address,
                'mail_per' => $faker->unique()->safeEmail,
                'date_emb' =>$faker->dateTimeThisCentury->format('Y-m-d'),
                'login_emp' =>$faker->username,
                'mot_de_passe' =>bcrypt('secret'),
              ]);
    }
}
