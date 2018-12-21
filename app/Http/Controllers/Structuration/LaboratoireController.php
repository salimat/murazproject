<?php

namespace App\Http\Controllers\Structuration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modeles\Structuration\Laboratoire;


class LaboratoireController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $laboratoires=Laboratoire::all();

        return view('Laboratoires/index',compact('laboratoires'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      //je retourne la vue pour afficher le formulaire de creation de departements
      //return view('Laboratoires/create');


      return view('Laboratoires/create');


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
        $labo = new Laboratoire;
        $labo->nom_labo=$request->nom_labo;
        $labo->save();
        return redirect()->route('laboratoires.index')->withMessage('Le Laboratoire "'.$labo->nom_labo.'" a bien été ajouté');

      //  $book = $this->bookRepository->save($request->all());



        //return redirect()->route('book.index')->withMessage
      //  ('Le livre "'.$book->titre.'" a bien été ajouté');
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
