@extends('layouts.contenu_layout')
 @section('contenu')
 <table  border="1">
   <tr> LA LISTE DES STATUTS </tr>
   <tr> <th>IDENTIFIANT </th>
   <th>NOM </th></tr>

@foreach ($statuts as $stat)
<tr>
    <th> {{ $stat->id }}</th>

    <th> {{ $stat->nom_statut_patient }}</th>
  </tr>
@endforeach
</table>
@endsection
