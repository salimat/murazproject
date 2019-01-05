@extends('layouts.secretariatnav')
 @section('content')
<!-- <table  border="1" >
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
    <th> {{ $patients->email_per }}</th>-->
  </tr>

</table>

<div class="card-header"><h1>Voulez Vous Supprimer Le Patient {{ $patients->nom_per }}   {{ $patients->prenom_per }}</h1></div>

<div class="card-body">
    <form method="POST" action="{{ route('patients.destroy',$patients) }}"
    class="inline-block" onsubmit="return confirm('Etes Vous Sur?')">
    {{csrf_field() }}
   {{method_field('DELETE')}}
  <input type="submit" value="Supprimer" >

 </form>
 <td><p data-placement="top" data-toggle="tooltip" title="Annuler"><button class="btn btn-primary btn-xs" data-title="Annuler" data-toggle="modal" data-target="#edit" onclick="location.href='/patients'" >Annuler</button></p></td>


 </div>
<div>
<p><a href="{{ url('/patients') }}">Annuler</a></p>
</div>


@endsection
