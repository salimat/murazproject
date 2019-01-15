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
			<h3> LES PATIENTS DU JOUR</h3>
			<form method="POST" action="{{ route('patients.index') }}" class="pull-right position">
				<div class="input-append">
					<input type="text" class="sr-input" placeholder="70 00 00 00" id="search_box" >
					<button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>


<form  action="{{ route('addPrelevement',$patients->id) }}" method="POST">
  @csrf
  <li><button class="btn btn-default pull-right" style="margin-top:20px;" >
    <i class="glyphicon glyphicon-plus"></i>
    <input type="submit" name="" value="Ajouter Le prelevement du Patient ">
  </button></li>
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

                   </thead>
    <tbody>

    <tr>
    <td><input type="checkbox" class="checkthis" name="identifiant{{$patients->id}}" value="{{$patients->id}}"/> </td>

    <!-- <td> {{ $patients->id}}</td> -->
    <td> {{ $patients->nom_per }}</td>
    <td> {{ $patients->prenom_per }}</td>
    <td> {{ $patients->sexe_per }}</td>
    <td> {{ $patients->contact_per }}</td>
    <td> {{ $patients->adresse_per }}</td>
    </tr>







    </tbody>

</table>


            </div>

        </div>
	</div>
</div>
</form>
    @endsection
