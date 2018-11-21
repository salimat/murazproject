<?php

namespace App\Http\Controllers\Patients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modeles\Patients\Patient;
use App\Modeles\Patients\Statut_patient;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //permet d'appeller la vue lier a cet Index
        $patients=Patient::all();

        return view('Patients.index',compact('patients'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //return view('Patients.create');
        $statuts=Statut_patient::all();
        return view('Patients.create')->with(['statuts'=>$statuts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //pour inserer dans la base de donnees
        $patients = new Patient;
        $patients->nom_per=$request->nom_per;
        $patients->prenom_per=$request->prenom_per;
        $patients->date_naissance=$request->date_naissance;
        $patients->sexe_per=$request->sexe_per;
        $patients->contact_per=$request->contact_per;
        $patients->adresse_per=$request->adresse_per;
        $patients->email_per=$request->email_per;
        $patients->code_postal_pat=$request->code_postal_pat;
        $patients->age_pat=$request->age_pat;
        $patients->profession_pat=$request->profession_pat;
        $patients->save();
        echo 'Le patient '.$patients->nom_per. ' a ete ajoute avec succes';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
