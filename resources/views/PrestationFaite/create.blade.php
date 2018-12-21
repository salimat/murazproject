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
<button id="add">Ajouter Une Prestation</button>
<button id="remove">Supprimer une Prestation</button>
<br><br>
<div id="div1">
<table id="table">
	<tr>
    	<td>Section</td>

		<td><input class="form-control" type="text" id="qty" placeholder="section"></td>
    	<td>Examen</td>
				<td><input class="form-control" type="text" id="qty" placeholder="examen"></td>

   	  <td>Prix</td><td><input class="form-control" type="text" id="qty" placeholder="quantite"></td>
    </tr>

</table>

</div>
</div>
@endsection
