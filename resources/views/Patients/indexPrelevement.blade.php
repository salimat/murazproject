@extends('layouts.contenu_layout')
 @section('contenu')
 <script type="text/javascript">
 				$(document).ready(function() {
 				$('#class').DataTable();
 				} );
 				</script>
        <div class="container">
            <div class="row">


                <div class="col-md-12">

                <div class="table-responsive">

                      <table id="mytable" class="table table-bordred table-striped">

                           <thead>

                           <th><input type="checkbox" id="checkall" /></th>
                           <th>IDENTIFIANT </th>
                           <th>NOM </th>
                           <th>PRENOM </th>
                         <th>SEXE</th>
                           <th>CONTACT </th>
                           <th>ADRESSE</th>

        										<th>Ajouter Prelevement</th>
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

            <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='patients/{{$emp->id}}/edit'" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
            




            </tr>

          @endforeach





            </tbody>

        </table>

        {{$patients->links() }}

                    </div>

                </div>
        	</div>
        </div>
@endsection
