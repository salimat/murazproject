@extends('layouts.contenu_layout')

@section('contenu')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="{{ asset('js/indexPatient.js') }}" defer></script>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="{{ asset('js/patient1.js') }}" defer></script>






<!------ Include the above in your HEAD tag ---------->


			<h3> LES PATIENTS</h3>





      <script type="text/javascript">
             $(document).ready(function() {
             $('#nuit').DataTable();
             } );
             </script>


              <table id="nuit" class="table table-bordred table-striped">

                   <thead>

                   <th><input type="checkbox" id="checkall" /></th>
                   <th>IDENTIFIANT </th>
                   <th>NOM </th>
                   <th>PRENOM </th>
                 <th>SEXE</th>
                   <th>CONTACT </th>
                   <th>ADRESSE</th>

                   </thead>
    <tbody>
@foreach ($patients as $emp)
    <tr>
    <td><input type="checkbox" class="checkthis" name=id[] value="$emp->id"/> </td>
    <td> {{ $emp->id}}</td>
    <td> {{ $emp->nom_per }}</td>
    <td> {{ $emp->prenom_per }}</td>
    <td> {{ $emp->sexe_per }}</td>
    <td> {{ $emp->contact_per }}</td>
    <td> {{ $emp->adresse_per }}</td>






    </tr>

  @endforeach





    </tbody>

</table>

{{$patients->links() }}


    @endsection
