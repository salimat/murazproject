@extends('layouts.contenu_layout')
 @section('contenu')
 <table  border="1" >
   <tr> LA LISTE DES EXAMENS </tr>
   <tr> <th>IDENTIFIANT </th>
   <th>NOM </th>
   <th>MONTANT </th>
   <th>ABREVIATION</th>
   <th>MATERIEL UTILISE </th>
   <th>TYPE DE PRELEVEMENT</th>
   <th>SECTION </th>
 </tr>

@foreach ($examens as $emp)
<tr>
    <th> {{ $emp->id}}</th>
    <th> {{ $emp->nom_examen }}</th>
    <th> {{ $emp->montant_examen }}</th>
    <th> {{ $emp->abreviation}}</th>
    <th> {{ $emp->nom_mat }}</th>
    <th> {{ $emp->nom_prelevement }}</th>
    <th> {{ $emp->nom_section }}</th>
  </tr>
@endforeach
</table>
@endsection
