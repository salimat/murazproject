@extends('layouts.contenu_layout')
 @section('contenu')
 <table  border="1">
   <tr> LA LISTE DES STATUTS </tr>
   <tr> <th>IDENTIFIANT </th>
   <th>NOM </th></tr>

@foreach ($statut as $sta)
<tr>
    <th> {{ $sta->id }}</th>

    <th> {{ $sta->nom_statut_emp }}</th>
  </tr>
@endforeach
</table>
@endsection
