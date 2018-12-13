<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resources([
    'departements' => 'Structuration\DepartementController',
    'laboratoires' => 'Structuration\LaboratoireController',
    'sections'  => 'Structuration\SectionController',
    'fonctions' => 'Employe\FonctionController',
    'statutEmployes' => 'Employe\Statut_employeController',
    'employes' => 'Employe\EmployeController',
    'statutPatients' => 'Patients\Statut_patientController',
    'patients' => 'Patients\PatientController',
    'assurances' => 'Assurance\AssuranceController',
    'composantExamens' =>'Examens\Composant_examenController',
    'examens' => 'Examens\ExamenController',
    'materiels' => 'Examens\MaterielController',
    'normes' => 'Examens\NormeController',
    'resultatMultiColonnes' => 'Examens\Resultat_multi_colonneController',
    'resultatNormeCalcules' => 'Examens\Resultat_norme_calculeController',
    'resultatNormes' => 'Examens\Resultat_normeController',
    'resultatSansNormes' => 'Examens\Resultat_sans_normeController',
    'resultats' => 'Examens\ResultatController',
    'echantillons' => 'Examens\EchantillonController',
    'uniteMesures' => 'Examens\Unite_mesureController',
    'factures' => 'Facturation\FactureController',
    'etatReactifs' => 'Reactifs\Etat_reactifController',
    'reactifs' => 'Reactifs\ReactifController',
    'stockReactifs' => 'Reactifs\Stock_reactifController',
    'acceuiltbm' => 'AcceuiltbmController',
    'acceuilSecretariat' => 'AcceuilSecretariatController',
    'acceuilAdmin' => 'AcceuilAdminController',
    'acceuilBC' => 'AcceuilBCController',


]);

Route::get('/afficher_formulaire', 'Structuration\DepartementController@afficher_formulaire');
