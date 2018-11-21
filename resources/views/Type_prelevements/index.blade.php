@extends('layouts.contenu_layout')
 @section('contenu')
 <table  border="1">
   <tr> LA LISTE DES TYPES DE PRELEVEMENT </tr>
   <tr> <th>IDENTIFIANT </th>
   <th>NOM </th></tr>

@foreach ($types as $fonction)
<tr>
    <th> {{ $fonction->id }}</th>

    <th> {{ $fonction->nom_prelevement }}</th>
  </tr>
@endforeach
</table>
@endsection
