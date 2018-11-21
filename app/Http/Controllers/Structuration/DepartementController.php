<?php

namespace App\Http\Controllers\Structuration;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Modeles\Structuration\Departement;
class DepartementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //pour afficher tout afficher du modele
    public function index()
    {
        $departements=Departement::all();

        return view('Departements/index',compact('departements'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     //pour creer le formulaire qui permet d'inserer un nouveau domaine
    public function create()
    {
        //je retourne la vue pour afficher le formulaire de creation de departements
        return view('Departements/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
     //pour inserer les donnees de mon formulaire dans ma base de donnes
    public function store(Request $request)
    {
        //


        $dep = new Departement;
        $dep->nom_departement=$request->nom_departement;
        $dep->save();
        return redirect()->route('departements.index')->withMessage('Le departement "'.$dep->nom_departement.'" a bien été ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //Pour afficher un element du modele
    public function show($id)
    {
        //
        return view('Departements.show',['departement' => Departement::findOrFail($id)]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //Pour afficher le formulaire pour la modification de la base de donnees
    public function edit($id)
    {
        //

    /*   $departements = Departement::where::findOrFail($id);
        return view('Departements.edit',compact('departements'));*/
        $departements = Departement::where('id', $id)->firstOrFail();
        return view('Departements/edit', compact('departements'));

        //view('Departements.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //pour modifier un element de la base de donnees

      public function update($id, Request $request){
   $departements = Departement::where('id', $id)->firstOrFail(); /* trouve l'entrée en DB */
   $departements->update($request->intersect(['nom_departement'])); /*récupère les valeurs suivantes */
   return redirect()->back(); /* redirige vers la vue d'édition */
  }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     //pour supprimer un element
    public function destroy($id)
    {
        //
    }
}
