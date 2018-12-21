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

			<td>
				<div class="col-md-6">
					<select name="id_labo" class="custom-select custom-select-lg mb-3">
						<option selected>section</option>
						@foreach($sections as $section)
						<option value="{{$sections->$sections_id}}">{{$section->nom_section}}</option>
						@endforeach
					</select>
					@if ($errors->has('section'))
					<span class ="invalid-feedback" role="alert">
						<strong>{{$errors->first('section')}} </strong>
				</span>
				@endif
				</div>	</td>
    	<td>Examen</td><td>
				<div class="col-md-6">
					<select name="id_labo" class="custom-select custom-select-lg mb-3">
						<option selected>Examen</option>
						@foreach($examens as $examen)
						<option value="{{$examens->$examens_id}}">{{$examen->nom_examen}}</option>
						@endforeach
					</select>
					@if ($errors->has('examen'))
					<span class ="invalid-feedback" role="alert">
						<strong>{{$errors->first('examen')}} </strong>
				</span>
				@endif
				</div>
			</td>
   	  <td>Prix</td><td><input class="form-control" type="text" id="qty" placeholder="quantite"></td>
    </tr>

</table>

</div>
</div>
@endsection
