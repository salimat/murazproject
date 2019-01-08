<?php

namespace App\Http\Controllers\Patients;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modeles\Structuration\Section;
use App\Modeles\Examens\Examen;
use App\Modeles\Examens\Prestation_faite;
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

        $examens=Examen::find(2);
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
      /*  $examens=Examen::find(2);
        $patients=Patient::all();
        return view('PrestationFaite.create')->with(['examens'=>$examens,
      'patients'=>$patients]);*/
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
      //  Prestation_faite::create ($request->all ());
        //return redirect(route('PrestationFaite.index'));
        return $request;
        $examens=Examen::find(2);
        $patients=Patient::all();
        return view('PrestationFaite.index')->with(['examens'=>$examens,
      'patients'=>$patients]);






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
