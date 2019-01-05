<?php

namespace App\Http\Controllers\Patients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modeles\Patients\Prelevement;
use App\Modeles\Patients\Patient;
use App\Modeles\Examens\Examen;
use App\Modeles\Examens\Echantillon;
use App\Modeles\Patients\Prestation_faite;

class PrelevementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $patients=Patient::paginate(5);
        $examens=Examen::paginate(5);
        $echantillons=Echantillon::paginate(5);


        return view('Prelevements.index',compact(['patients',
                                                    'examens',
                                                  'echantillons']));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $echantillons=Echantillon::all();
        $examens=Examen::all();
        $patients=Patient::all();
        return view('Prelevements.create')->with(['examens'=>$examens,
      'patients'=>$patients,
      'echantillons'=>$echantillons]);
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
