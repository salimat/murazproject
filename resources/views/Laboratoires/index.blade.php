@extends('layouts.contenu_layout')
 @section('contenu')
 <table  border="1">
   <tr> LA LISTE DES LABORATOIRES </tr>
   <tr> <th>IDENTIFIANT </th>
   <th>NOM </th></tr>

@foreach ($laboratoires as $labo)
<tr>
    <th> {{ $labo->id}}</th>

    <th> {{ $labo->nom_labo }}</th>
  </tr>
@endforeach
</table>
@endsection
