<?php

use Illuminate\Database\Seeder;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('sections')->insert([
          'id_labo'=>1,
            'nom_section' => 'Section Hematologie',
          ]);
          DB::table('sections')->insert([
            'id_labo'=>1,
              'nom_section' => 'Section Biochimie',
            ]);
            DB::table('sections')->insert([
              'id_labo'=>1,
                'nom_section' => 'Section Serologie Immunologie',
              ]);
              DB::table('sections')->insert([
                'id_labo'=>1,
                  'nom_section' => 'Section Bacteriologie',
                ]);
                DB::table('sections')->insert([
                  'id_labo'=>1,
                    'nom_section' => 'Section Parasitologie',
                  ]);
                  DB::table('sections')->insert([
                    'id_labo'=>1,
                      'nom_section' => 'Section Virologie',
                    ]);
    }
}
