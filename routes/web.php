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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resources([

    'laboratoires' => 'Structuration\LaboratoireController',
    'sections'  => 'Structuration\SectionController',
    'fonctions' => 'Employe\FonctionController',
    'statutEmployes' => 'Employe\Statut_employeController',
    'employes' => 'Employe\EmployeController',
    'prestations' => 'Patients\Prestation_faiteController',
    'patients' => 'Patients\PatientController',
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
    'etatReactifs' => 'Reactifs\Etat_reactifController',
    'reactifs' => 'Reactifs\ReactifController',
    'stockReactifs' => 'Reactifs\Stock_reactifController',
    'acceuiltbm' => 'AcceuiltbmController',
    'acceuilSecretariat' => 'AcceuilSecretariatController',
    'acceuilAdmin' => 'AcceuilAdminController',
    'acceuilBC' => 'AcceuilBCController',
    'prelevements' => 'Patients\PrelevementController',
    'codes'=>'Patients\CodeController',
    'infoExamen'=> 'Patients\Info_examenController',
]);
/*Route::get('/patients/rechercher', 'Patients\PatientController@indexRechercherPatient()');
Route::get('/patients/prelevement', 'Patients\PatientController@listePrelevement()');*/
Route::post('/patient/{idPatient}/addPrestation','Patients\Prestation_faiteController@addPrestation')->name('addPrestation');
Route::post('/patient/{idPatient}/addFacture','Patients\Prestation_faiteController@addFacture')->name('addFacture');
Route::get('/patient/indexPatientJour','Patients\PatientController@indexPatientJour')->name('indexPatientJour');
Route::post('/patient/{idPatient}/addPrelevement','Patients\PrelevementController@addPrelevement')->name('addPrelevement');
Route::post('/patient/{idPatient}/addcodeBarre','Patients\CodeController@addcodeBarre')->name('addcodeBarre');
//Route::post('/patient/addcodeBarre','Patients\CodeController@addPatient')->name('addcodeBarre');

/*Route::get('/acceuilAdmin', 'AccueilAdminController@create');
Route::get('/acceuilSecretariat', 'AccueilSecretariatController@create');
Route::get('/acceuilTBM', 'AccueiltbmController@create');
Route::get('/acceuilBC', 'AccueilBCController@create');*/
