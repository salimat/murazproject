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
			<h3> LA FACTURE DU PATIENT {{ $patients->nom_per.' '.$patients->prenom_per }} </h3>

		</div>
  <li>  <button class="btn btn-default pull-right" type="button"style="margin-top:20px;" data-toggle="modal" data-target= "#item_add" onclick="location.href='patients/create'" ><i class="glyphicon glyphicon-plus"></i> Ajouter un patient</button></li>

	<form  action="{{ route('addPrestation',$patients->id) }}" method="POST">

			@csrf
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
                    <th>Edit</th>
										<th>Delete</th>
										<th>Ajouter Prestation</th>
                   </thead>
    <tbody>







    </tr>

  @endforeach





    </tbody>

</table>


            </div>

        </div>
	</div>
</div>
</form>
    @endsection
