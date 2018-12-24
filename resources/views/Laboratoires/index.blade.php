@extends('layouts.contenu_layout')
 @section('contenu')
 <script type="text/javascript">
 				$(document).ready(function() {
 				$('#class').DataTable();
 				} );
 				</script>
 <table  border="1" id="class">
   <thead>
   <tr> LA LISTE DES LABORATOIRES </tr>
   <tr> <th>IDENTIFIANT </th>
   <th>NOM </th></tr>
</thead>
<tbody>
@foreach ($laboratoires as $labo)
<tr>
    <th> {{ $labo->id}}</th>

    <th> {{ $labo->nom_labo }}</th>
  </tr>
@endforeach
</tbody>
</table>
@endsection
