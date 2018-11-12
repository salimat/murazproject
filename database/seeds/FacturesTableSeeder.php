<?php

use Illuminate\Database\Seeder;

class FacturesTableSeeder extends Seeder
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
          DB::table('factures')->insert([
            'id_examen'=>5,
          'id_patient'=>1,
          'matricule_emp'=>1,
          'date_facture'=>$faker->dateTimeThisCentury->format('Y-m-d'),
          'net_payer'=>2000,
          ]);
          DB::table('factures')->insert([
            'id_examen'=>5,
          'id_patient'=>2,
          'matricule_emp'=>2,
          'date_facture'=>$faker->dateTimeThisCentury->format('Y-m-d'),
          'net_payer'=>5000,
          ]);
          DB::table('factures')->insert([
            'id_examen'=>6,
          'id_patient'=>3,
          'matricule_emp'=>3,
          'date_facture'=>$faker->dateTimeThisCentury->format('Y-m-d'),
          'net_payer'=>1000,
          ]);
    }
}
