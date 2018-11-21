@extends('layouts.contenu_layout')
 @section('contenu')
 <table  border="1">
   <tr> LA LISTE DES EMPLOYES </tr>
   <tr> <th>IDENTIFIANT </th>
   <th>NOM </th>
   <th>PRENOM </th>
   <th>SEXE</th>
   <th>CONTACT </th>
   <th>ADRESSE</th>
   <th>EMAIL </th>
   <th>DATE D'EMBAUCHE </th>
 </tr>

@foreach ($employes as $emp)
<tr>
    <th> {{ $emp->id}}</th>
    <th> {{ $emp->name }}</th>
    <th> {{ $emp->prenom_per }}</th>
    <th> {{ $emp->sexe_per }}</th>
    <th> {{ $emp->contact_per }}</th>
    <th> {{ $emp->adresse_per }}</th>
    <th> {{ $emp->email }}</th>
    <th> {{ $emp->date_emb }}</th>
  </tr>
@endforeach
</table>
@endsection
