<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Role;

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
        $role_secretaire= Role::where('name', 'Secretaire Medical')->first();
        $role_caissier  = Role::where('name', 'Caissier')->first();
        $role_tbm = Role::where('name', 'Technicien Biomedical')->first();
        $role_biologiste  = Role::where('name', 'Biologiste Clinique')->first();
        $role_admin = Role::where('name', 'Administrateur')->first();


        $secretaire = new User();
    $secretaire->name = 'Ouandaogo';
    $secretaire->prenom_per = 'Salimatou';
    $secretaire->date_naissance = '1996-05-20';
    $secretaire->sexe_per = 'feminin';
    $secretaire->contact_per = '65656565';
    $secretaire->adresse_per = 'bobo';
    $secretaire->date_emb = '2018-05-05';
    $secretaire->email = 'salimatou@gmail.com';
    $secretaire->password = bcrypt('salimatou1234');
    $secretaire->save();
    $secretaire->roles()->attach($role_secretaire);


        $secretaire = new User();
        $secretaire->name = 'Traore';
        $secretaire->prenom_per = 'Benedicte';
        $secretaire->date_naissance = '1996-05-20';
        $secretaire->sexe_per = 'feminin';
        $secretaire->contact_per = '65656565';
        $secretaire->adresse_per = 'bobo';
        $secretaire->date_emb = '2018-05-05';
        $secretaire->email = 'benedicte@gmail.com';
        $secretaire->password = bcrypt('benedicte1234');
        $secretaire->save();
        $secretaire->roles()->attach($role_caissier);


        $secretaire = new User();
        $secretaire->name = 'Sankara';
        $secretaire->prenom_per = 'mamadou';
        $secretaire->date_naissance = '1996-05-20';
        $secretaire->sexe_per = 'masculin';
        $secretaire->contact_per = '65656565';
        $secretaire->adresse_per = 'bobo';
        $secretaire->date_emb = '2018-05-05';
        $secretaire->email = 'mamadou@gmail.com';
        $secretaire->password = bcrypt('mamadou1234');
        $secretaire->save();
        $secretaire->roles()->attach($role_tbm);

        $secretaire = new User();
        $secretaire->name = 'Diallo';
        $secretaire->prenom_per = 'madina';
        $secretaire->date_naissance = '1996-05-20';
        $secretaire->sexe_per = 'feminin';
        $secretaire->contact_per = '65656565';
        $secretaire->adresse_per = 'bobo';
        $secretaire->date_emb = '2018-05-05';
        $secretaire->email = 'madina@gmail.com';
        $secretaire->password = bcrypt('madina1234');
        $secretaire->save();
        $secretaire->roles()->attach($role_biologiste);

        $secretaire = new User();
        $secretaire->name = 'Admin';
        $secretaire->prenom_per = 'admin';
        $secretaire->date_naissance = '1996-05-20';
        $secretaire->sexe_per = 'masculin';
        $secretaire->contact_per = '65656565';
        $secretaire->adresse_per = 'bobo';
        $secretaire->date_emb = '2018-05-05';
        $secretaire->email = 'admin@gmail.com';
        $secretaire->password = bcrypt('admin1234');
        $secretaire->save();
        $secretaire->roles()->attach(  $role_admin);













    }
}
