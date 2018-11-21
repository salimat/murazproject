@extends('layouts.contenu_layout')
 @section('contenu')
 <table  border="1" >
   <tr> LA LISTE DES MATERIELS </tr>
   <tr> <th>IDENTIFIANT </th>
   <th>TYPE </th>
   <th>NOM </th>
   <th>COULEUR DU BOUCHON</th>

 </tr>

@foreach ($materiels as $emp)
<tr>
    <th> {{ $emp->id}}</th>
    <th> {{ $emp->type_mat}}</th>
    <th> {{ $emp->nom_mat }}</th>
    <th> {{ $emp->couleur_bouchon}}</th>
  </tr>
@endforeach
</table>
@endsection
