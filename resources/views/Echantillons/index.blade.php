@extends('layouts.contenu_layout')
 @section('contenu')
 <table  border="1">
   <tr> LA LISTE DES ECHANTILLONS </tr>
   <tr> <th>IDENTIFIANT </th>
   <th>NOM ECHANTILLON</th>
   <th>TYPE PRELEVEMENT</th></tr>

@foreach ($echantillons as $labo)
<tr>
    <th> {{ $labo->id}}</th>
    <th> {{ $labo->nom_echantillon }}</th>
    <th> {{ $labo->type_prelevement }}</th>
  </tr>
@endforeach
</table>
@endsection
