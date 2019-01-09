@extends('layouts.secretariatnav')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<script src="{{ asset('js/prestation.js') }}" defer></script>
<link href="{{ asset('css/prestation.css') }}" rel="stylesheet">

<div class="container">
<br>
<button id="add" type="button" data-toggle="modal" onclick="location.href='/examens/'"><i class="glyphicon glyphicon-plus"></i>Ajouter Une Prestation</button>
<button id="remove">Supprimer une Prestation</button>
<button class="btn btn-default pull-right" type="button" style="margin-top:20px;" data-toggle="modal" data-target= "#item_add" onclick="location.href='/prestations/create'" >
	<i class="fa fa-paypal"></i> Facture Des Prestations de {{ $patients->nom_per.' '.$patients->prenom_per }}</button>
<br><br>
<div id="div1">

@foreach($examens as $emp)
<table id="table">

			<tr>
		    	<td>EXAMEN</td>

				<td><input class="form-control" type="text" id="qty" placeholder="examen" value="{{$emp->nom_examen}}"></td>
		    	<td>MONTANT</td>
						<td><input class="form-control" type="text" id="qty" placeholder="montant" value="{{$emp->montant_examen}}"></td>

		   	  <td>ABREVIATION</td><td><input class="form-control" type="text" id="qty" placeholder="montant" value="{{$emp->abreviation}}"></td>

		    </tr>
</table>
@endforeach
<table id="table">

			<tr>
		    	<td>TOTAL</td>

				<td><input class="form-control" type="text" id="qty"  value="{{$total}}"></td>

		    </tr>
</table>

</div>
</div>
@endsection
