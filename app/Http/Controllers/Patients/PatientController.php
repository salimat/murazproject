<?php

namespace App\Http\Controllers\Patients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modeles\Patients\Patient;
use App\Modeles\Examens\Examen;

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
        $patients=Patient::paginate(20);
        //$patients=Patient::all();

        return view('Patients.index',compact('patients'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('Patients.create');

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
        $this->validate($request, [
        'contact_per'=>'required|min:8']);
          $examens=Examen::all();
        Patient::create ($request->all ());
        return redirect(route('infoExamen.create'))->with(['examens'=>$examens
      ]);

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
        $patients= Patient::findOrFail($id);
return $patients->examens;
        return view('Patients.show',compact('patients'));

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
        $patients= Patient::findOrFail($id);
        return view('Patients.edit',compact('patients'));
        echo " Le Patient a ete modifier avec succes";
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

        $this->validate($request, [
        'contact_per'=>'required|min:8']);
        $patients= Patient::findOrFail($id);
        $patients->update($request->all ());
      //  return redirect(route(home));
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
        Patient::destroy($id);
    }

    public function listePrelevement()
    {
      $patients=Patient::paginate(10);

      return view('Patients.indexPrelevement',compact('patients'));
    }
    public function indexPatientJour(Request $request)
    {
      $list = array();
      for($i=0; $i<=count(Patient::all()); $i++){
      //var_dump($identifiant=$request->input('identifiant'.$i));
      if($request->input('identifiant'.$i))
      {
          array_push($list ,$i);
          //$examens=Examen::find([$i]);
      }
      }
      //$patients=Patient::find($list);
      $patients = Patient::orderBy('id', 'desc')->first();
    //$patients = Patient::orderBy('id', 'desc')->take(5)->get();

  //  $patients=Patient::all();
      return view('Prelevements.index')->with(['patients'=>$patients]);
    }
}
