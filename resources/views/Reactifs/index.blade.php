@extends('layouts.contenu_layout')
 @section('contenu')

  @if($reactifs ->count()> 0)
                 <table  border="1" >
                   <tr> LA LISTE DES reactifs </tr>
                   <tr> <th>IDENTIFIANT </th>
                   <th>NOM </th>
                   <th>VALEUR MAXIMALE </th>
                   <th>VALEUR MINIMAL</th>
                 </tr>

                @foreach ($reactifs as $emp)
                <tr>
                    <th> {{ $emp->id}}</th>
                    <th> {{ $emp->nom_reactif }}</th>
                    <th> {{ $emp->valeur_max }}</th>
                    <th> {{ $emp->valeur_min }}</th>
                  </tr>
                  <br>

          @endforeach
          </table>
      @else
          <p>Aucun Patient n'a ete Enregistrer</p>
      @endif
@endsection
