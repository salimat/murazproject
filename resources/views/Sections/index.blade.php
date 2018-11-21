@extends('layouts.contenu_layout')
 @section('contenu')
 <table  border="1">
   <tr> LA LISTE DES SECTIONS </tr>
   <tr> <th>IDENTIFIANT </th>
   <th>NOM </th></tr>

@foreach ($sections as $sec)
<tr>
    <th> {{ $sec->id }}</th>

    <th> {{ $sec->nom_section }}</th>
  </tr>
@endforeach
</table>
@endsection
