@extends('layouts.secretariatnav')

@section('content')

<link href="{{ asset('css/patient1.css') }}" rel="stylesheet">
<script src="{{ asset('js/indexPatient.js') }}" defer></script>

<div class="container">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="mail-box">
	<aside class="lg-side">
		<div class="inbox-head">
			<h3> LES PATIENTS</h3>
			<form method="POST" action="{{ route('patients.index') }}" class="pull-right position">
				<div class="input-append">
					<input type="text" class="sr-input" placeholder="70 00 00 00" id="search_box" >
					<button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
  <li>  <button class="btn btn-default pull-right" type="button"style="margin-top:20px;" data-toggle="modal" data-target= "#item_add" onclick="location.href='patients/create'" ><i class="glyphicon glyphicon-plus"></i> Ajouter un patient</button></li>


<div class="container">
    <div class="row">


        <div class="col-md-12">

        <div class="table-responsive">

              <table id="mytable" class="table table-bordred table-striped">

                   <thead>

                   <th><input type="checkbox" id="checkall" /></th>
                   <!-- <th>IDENTIFIANT </th> -->
                   <th>NOM </th>
                   <th>PRENOM </th>
                 <th>SEXE</th>
                   <th>CONTACT </th>
                   <th>ADRESSE</th>
                    <th>Edit</th>
										<th>Delete</th>
										<th>Ajouter Prestation</th>
                   </thead>
    <tbody>
@foreach ($patients as $emp)
    <tr>
    <td><input type="checkbox" class="checkthis" name=id[] value="$emp->id"/> </td>
    <!-- <td> {{ $emp->id}}</td> -->
    <td> {{ $emp->nom_per }}</td>
    <td> {{ $emp->prenom_per }}</td>
    <td> {{ $emp->sexe_per }}</td>
    <td> {{ $emp->contact_per }}</td>
    <td> {{ $emp->adresse_per }}</td>

    <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='patients/{{$emp->id}}/edit'" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
    <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" onclick="location.href='patients/{{$emp->id}}'" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
		<td><p data-placement="top" data-toggle="tooltip" title="Prestation"><button class="btn btn-primary btn-xs" data-title="Ajouter Prestation" data-toggle="modal" data-target="#prestation" onclick="location.href='/infoExamen/create'" ><span class="glyphicon glyphicon-briefcase"></span></button></p></td>




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
