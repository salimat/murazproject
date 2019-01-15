@extends('layouts.secretariatnav')
@section('content')

<link href="{{ asset('css/examen.css') }}" rel="stylesheet">
<script src="{{ asset('js/recherche.js') }}" defer></script>

<div class="container">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="mail-box">
	<aside class="lg-side">
		<div class="inbox-head">
			<h3> LES EXAMENS</h3>
			<form method="POST" action="{{ route('examens.index') }}" class="pull-right position">
				<div class="input-append">
			<!--	<input type="text" id="myInput" class="sr-input" placeholder="nom examen" id="search_box">-->
				<input type="text" class="sr-input" placeholder="nom examen" id="search" >
				<button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
		<li>
		<button class="btn btn-default pull-right" type="submit"  style="margin-top:20px;" data-toggle="modal" data-target= "#item_add" >
       <i class="glyphicon glyphicon-plus"></i>Ajouter Les prestations du Patient {{$patients->nom_per. ' ' .$patients->prenom_per}}"</button>
		</li>

<form  action="{{ route('addPrestation',$patients->id) }}" method="POST">

		@csrf


		<!--	<i class="glyphicon glyphicon-plus"></i><input type="submit" name="" value="Ajouter Les prestations du Patient {{$patients->nom_per. ' ' .$patients->prenom_per}}">-->


<div class="container">
    <div class="row">


        <div class="col-md-12">

        <div class="table-responsive">


              <table id="myexamen" class="table table-bordred table-striped">

                   <thead>


                     <!-- <th>IDENTIFIANT</th> -->
                     <th>NOM</th>
                     <th>MONTANT</th>
                     <th>ABREVIATION</th>



                   </thead>
    					 		 <tbody>
										 			@foreach($examens as $emp)
    										<tr>
    										 <td>
													<input type="checkbox" class="checkthis" name="identifiant{{$emp->id}}" value="{{$emp->id}}">
												 </td>
									        <!-- <td> {{ $emp->id}}</td> -->
									        <td> {{ $emp->nom_examen }}</td>
									        <td> {{ $emp->montant_examen }}</td>
									        <td> {{ $emp->abreviation}}</td>
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
