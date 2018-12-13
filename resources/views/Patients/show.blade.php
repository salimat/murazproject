@extends('layouts.contenu_layout')
 @section('contenu')
 <table  border="1" >
   <tr> LES INFORMATIONS DU PATIENT SONT </tr>
   <tr> <th>IDENTIFIANT </th>
   <th>NOM </th>
   <th>PRENOM </th>
   <th>SEXE</th>
   <th>CONTACT </th>
   <th>ADRESSE</th>
   <th>EMAIL </th>
 </tr>


<tr>
    <th> {{ $patients->id}}</th>
    <th> {{ $patients->nom_per }}</th>
    <th> {{ $patients->prenom_per }}</th>
    <th> {{ $patients->sexe_per }}</th>
    <th> {{ $patients->contact_per }}</th>
    <th> {{ $patients->adresse_per }}</th>
    <th> {{ $patients->email_per }}</th>
  </tr>

</table>
<div>
<p><a href="{{ url('/') }}">Retour a la page d'acceuil</a></p>
</div>


@endsection
