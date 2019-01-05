
@extends('layouts.secretariatnav')

@section('content')


<link href="{{ asset('css/patient1.css') }}" rel="stylesheet">
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
				<!--	<input type="text" id="myInput" class="sr-input" placeholder="nom examen">-->
					<input id="myInput" type="text" placeholder="Nom examen" class="sr-input">
					<button  class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
				</div>
			</form>
		</div>
    <button class="btn btn-default pull-right" type="button" style="margin-top:20px;" data-toggle="modal" data-target= "#item_add" onclick="location.href='/prestations/create'" >
      <i class="glyphicon glyphicon-plus"></i> Ajouter Les prestations du Patient</button>


<div class="container">
    <div class="row">


        <div class="col-md-12">

        <div class="table-responsive">
<script type="text/javascript">
$(document).ready(function() {
$('#jour').DataTable();
} );
</script>

              <table id="jour" class="table table-bordred table-striped">

                   <thead>

                   <th><input type="checkbox" id="checkall" /></th>

                      <th>IDENTIFIANT </th>
                     <th>NOM </th>
                     <th>MONTANT </th>
                     <th>ABREVIATION</th>



                   </thead>
    <tbody>
@foreach ($examens as $emp)
    <tr>
    <td><input id="identifiant" type="checkbox" class="checkthis" name="identifiant[]" value="$emp->id"/> </td>

        <th> {{ $emp->id}}</th>
        <th> {{ $emp->nom_examen }}</th>
        <th> {{ $emp->montant_examen }}</th>
        <th> {{ $emp->abreviation}}</th>

    </tr>

  @endforeach





    </tbody>

</table>



            </div>

        </div>
	</div>
</div>
<span>{{ $examens->links() }}</span>
    @endsection
