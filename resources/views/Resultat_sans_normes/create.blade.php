
@extends('layouts.tbmnav')

@section('content')


<link href="{{ asset('css/patient1.css') }}" rel="stylesheet">
<script src="{{ asset('js/recherche.js') }}" defer></script>

<div class="container">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div class="mail-box">
	<aside class="lg-side">
		<div class="inbox-head">
			<h3> Resultat Sans Norme </h3>
    </div>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <div class="table-responsive">
          <form class="" action="" method="post">
            @csrf

      <fieldset>
        <div class="form-group">
          <label class="col-md-4 control-label" for="city">Examen:</label>
          <div class="col-md-6">
            <select name="sections_id" class="custom-select custom-select-lg mb-3">
              <option selected></option>
              @foreach($examens as $echa)
              <option value="{{$echa->sections_id}}">{{$echa->type_prelevement}}</option>
              @endforeach
            </select>
            @if ($errors->has('echa'))
            <span class ="invalid-feedback" role="alert">
              <strong>{{$errors->first('echa')}} </strong>
          </span>
          @endif
          </div>
        </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="city">Code du Patient:</label>
        <input type="text" value="">

      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="city">Valeur:</label>
        <input type="text" value="">

      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="city">Details:</label>
        <input type="text" value="">

      </div>
      <input type="submit" name="" value="envoyer">
      </fieldset>
      </form>
            </div>

        </div>
	</div>
</div>
</form>
@endsection
