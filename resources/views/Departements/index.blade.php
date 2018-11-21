

@extends('layouts.contenu_layout')
 @section('contenu')
 <table  border="1">
   <tr> LA LISTE DES DEPARTEMENTS </tr>
   <tr> <th>IDENTIFIANT </th>
   <th>NOM </th></tr>

@foreach ($departements as $dep)
<tr>
    <th> {{ $dep->id }}</th>

    <th> {{ $dep->nom_departement }}</th>
  </tr>
@endforeach
</table>
@endsection
