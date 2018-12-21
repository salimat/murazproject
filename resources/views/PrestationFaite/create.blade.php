
@extends('layouts.secretariatnav')

@section('content')

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<script src="{{ asset('js/indexPatient.js') }}" defer></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="{{ asset('js/patient1.js') }}" defer></script>
<link href="{{ asset('css/patient1.css') }}" rel="stylesheet">

<div class="container">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="mail-box">
	<aside class="lg-side">
		<div class="inbox-head">
			<h3> LES PATIENTS</h3>
			<form method="POST" action="{{ route('prestations.index') }}" class="pull-right position">
				<div class="input-append">
					<input type="text" class="sr-input" placeholder="Nom Examen">
					<button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
    <button class="btn btn-default pull-right" type="button"style="margin-top:20px;" data-toggle="modal" data-target= "#item_add" onclick="location.href='patients/create'" ><i class="glyphicon glyphicon-plus"></i> Ajouter un patient</button>


<div class="container">
    <div class="row">


        <div class="col-md-12">

        <div class="table-responsive">


              <table id="mytable" class="table table-bordred table-striped">

                   <thead>

                   <th><input type="checkbox" id="checkall" /></th>
                   <th>IDENTIFIANT </th>
                   <th>NOM EXAMEN</th>
                   <th>ABBREVIATION </th>
                 	<th>PRIX</th>
                   </thead>
    <tbody>
@foreach ($examens as $exam)
    <tr>
    <td><input type="checkbox" class="checkthis" name=id[] value="$exam->id"/> </td>
    <td> {{ $exam->id}}</td>
    <td> {{ $exam->nom_examen }}</td>
    <td> {{ $exam->montant_examen }}</td>
    <td> {{ $exam->abreviation }}</td>
    </tr>

  @endforeach





    </tbody>

</table>

{{$examens->links() }}

            </div>

        </div>
	</div>
</div>
    @endsection
