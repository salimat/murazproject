@extends('layouts.contenu_layout')
 @section('contenu')

  @if($patients ->count()> 0)
                 <table  border="1" >
                   <tr> LA LISTE DES PATIENTS </tr>
                   <tr> <th>IDENTIFIANT </th>
                   <th>NOM </th>
                   <th>PRENOM </th>
                   <th>SEXE</th>
                   <th>CONTACT </th>
                   <th>ADRESSE</th>
                   <th>EMAIL </th>
                 </tr>

                @foreach ($patients as $emp)
                <tr>
                    <th> {{ $emp->id}}</th>
                    <th> {{ $emp->nom_per }}</th>
                    <th> {{ $emp->prenom_per }}</th>
                    <th> {{ $emp->sexe_per }}</th>
                    <th> {{ $emp->contact_per }}</th>
                    <th> {{ $emp->adresse_per }}</th>
                    <th> {{ $emp->email_per }}</th>
                  </tr>
                  <br>

          @endforeach
          </table>
      @else
          <p>Aucun Patient n'a ete Enregistrer</p>
      @endif

      <a href="{{route('patients.update', '[patient => $patients]')}}">Modifier un Patient</a>


@endsection
