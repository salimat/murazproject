<?php

namespace App\Http\Controllers\Examens;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modeles\Structuration\Section;
use App\Modeles\Examens\Materiel;
use App\Modeles\Examens\Echantillon;
use App\Modeles\Examens\Examen;
use App\Modeles\Patients\Patient;


class ExamenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $examens=Examen::all();
        //$patients=Patient::list('id');
        $patients = Patient::orderBy('id', 'desc')->first();
        return view('Examens.index1',compact('examens'))->with(['patients' =>$patients ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $sections=Section::all();
        $materiels=Materiel::all();
        $echantillons=Echantillon::all();
        return view('Examens.create')->with(['sections' =>$sections,
                                              'materiels' =>$materiels,
                                              'echantillons' =>$echantillons  ]);
      //  return view('Examens.create')
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //nom_examen','montant_examen','abreviation
        /*$examens = new Examen;
        $examens->nom_examen=$request->nom_examen;
        $examens->montant_examen=$request->montant_examen;
        $examens->abreviation=$request->abreviation;
        $examens->sections_id=$request->sections_id;

        $examens->save();
        echo 'L\' examen  '.$examens->nom_examen. ' a ete ajoute avec succes';*/
        Examen::create ($request->all ());
        return redirect(route('examens.index'));
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
