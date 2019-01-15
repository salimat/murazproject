
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
			<h3> validation du prelevement du Patient {{$patients->nom_per. ' ' .$patients->prenom_per}} </h3>

		</div>

    <button class="btn btn-default pull-right" type="button" style="margin-top:20px;" data-toggle="modal" data-target= "#item_add" onclick="location.href='/prelevements/{prelevement}/edit'" >
      <i class="glyphicon glyphicon-check"></i> Valider</button>

<form class="" action="{{ route('addcodeBarre',$patients->id) }}" method="post">
	@csrf
	<input type="submit" name="" value="envoyer">


<div class="container">
    <div class="row">


        <div class="col-md-12">

        <div class="table-responsive">


          <form class="form-horizontal">
      <fieldset>

      <!-- Form Name -->
      <legend>Validation</legend>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="city">Type de Prelevement:</label>
        <div class="col-md-6">
          <select name="sections_id" class="custom-select custom-select-lg mb-3">
            <option selected>Choisir le type de Prelevement</option>
            @foreach($echantillons as $echa)
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
        <label class="col-md-4 control-label" for="city">Echantillon Prelevé:</label>
        <div class="col-md-6">
          <select name="sections_id" class="custom-select custom-select-lg mb-3">
            <option selected>Choisir le type d'echantillon</option>
            @foreach($echantillons as $echa)
            <option value="{{$echa->sections_id}}">{{$echa->nom_echantillon}}</option>
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
        <label class="col-md-4 control-label" for="city">Date de Prelevement/Reception:</label>
        <div class="col-md-6">
        <?php
          $timezone = "Europe/London";
          date_default_timezone_set($timezone);
          $today = date("Y-m-d");

        ?>
        <input type="date" value="<?php echo $today; ?>">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="city">Heure de Prelevement/Reception:</label>
        <div class="col-md-6">
        <?php
          $timezone = "Europe/London";
          date_default_timezone_set($timezone);
            $heure = date("H:i");;

        ?>
        <input type="time" value="<?php echo $heure; ?>">
        </div>
      </div>

      </fieldset>

      </form>



            </div>

        </div>
	</div>
</div>
</form>
@endsection
