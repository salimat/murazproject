<?php

namespace App\Http\Controllers\Reactifs;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modeles\Reactif\Etat_reactif;

class Etat_reactifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $etatReactifs=Etat_reactif::all();

        return view('etatReactifs.index',compact('etatReactifs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Etat_reactifs.create');
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
        Etat_reactifReactif::create ($request->all ());
        return redirect(route('Etat_reactifs.index'));
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
        $etatReactifs= Etat_reactif::findOrFail($id);
        return view('Etat_reactifs.show',compact('etatReactifs'));
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
        $etatReactifs= Etat_reactif::findOrFail($id);
        return view('Etat_reactifs.edit',compact('etatReactifs'));
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
        $etatReactifs= Etat_reactif::findOrFail($id);
        $etatReactifs->update($request->all ());
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
        Etat_reactif::destroy($id);
    }
}
