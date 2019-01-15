<?php

namespace App\Http\Controllers\Patients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modeles\Structuration\Section;
use App\Modeles\Examens\Examen;
use App\Modeles\Patients\Prestation_faite;
use App\Modeles\Patients\Patient;

class Prestation_faiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //


        $prestations=Prestation_faite::all();

        return view('PrestationFaite.index',compact('prestations'));
    }

    /**
     * Show the form for creating a new resource.


     *
     * @return \Illuminate\Http\Response
     */


  public function create(Request $request)
    {
        /*  if ($this->validate($request, [
                 'identifiants' => 'required|array',
               ])) {

                $identifiant = $request->input('identifiant');
                dd ($identifiant);
                $data = array(
             'identifiants' => $request->identifiant
           );
               dd ($data);*/





      //  $identifiant = $request->get('identifiant');
        $examens = Examen::find(2);
        $patient = Patient::orderBy('id', 'desc')->first();
        return view('PrestationFaite.create')->with(['examens'=>$examens,
        'patients'=>$patients]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        Prestation_faite::create ($request->all ());
        return redirect(route('PrestationFaite.index'));
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
        $examens = Examen::find([1,3,5]);
        $total=Examen::find([1,3,5])->sum('montant_examen');
        $patients = Patient::orderBy('id', 'desc')->first();
        return view('PrestationFaite.edit')->with(['patients'=>$patients,
      'examens'=>$examens,
    'total'=>$total]);
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

    public function addPrestation(Request $request,$idPatient)
    {
      $list = array();
      for($i=0; $i<=count(Examen::all()); $i++){
      //var_dump($identifiant=$request->input('identifiant'.$i));
      if($identifiant=$request->input('identifiant'.$i))
      {
          array_push($list ,$i);
          //$examens=Examen::find([$i]);
      }
      }
    $examens=Examen::find($list);
    $total=Examen::find($list)->sum('montant_examen');

    $patients = Patient::orderBy('id', 'desc')->first();
    return view('PrestationFaite.index',compact('prestations'))->with(['examens'=>$examens,
    'patients'=>$patients,
    'total'=>$total]);
    }
    public function addFacture(Request $request)
    {
      $list = array();
      for($i=0; $i<=count(Examen::all()); $i++){
      //var_dump($identifiant=$request->input('identifiant'.$i));
      if($request->input($i))
      {
          array_push($list ,$i);
          //$examens=Examen::find([$i]);
      }
      }
      $examens=Examen::find($list);
      $total=Examen::find($list)->sum('montant_examen');

      $patients = Patient::orderBy('id', 'desc')->first();
      return view('PrestationFaite.edit',compact('prestations'))->with(['examens'=>$examens,
      'patients'=>$patients,
      'total'=>$total]);

    }
    public function addInfoExamen()
    {
      $patients = Patient::orderBy('id', 'desc')->first();
      return view('PrestationFaite.infoExamen')->with(['patients'=>$patients]);
    }

}
