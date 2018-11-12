<?php

use Illuminate\Database\Seeder;

class Unite_mesuresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('unite_mesures')->insert([
            'unite' => 'gramme par litre',
            'abreviation' => 'g/l',
          ]);
    }
}
