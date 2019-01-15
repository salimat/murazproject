
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
			<h3> Information sur les Examens du Patient {{$patients->nom_per. ' ' .$patients->prenom_per}} </h3>

		</div>

<form class="" action="{{ route('infoExamen.store') }}" method="post">
	@csrf
<div class="container">
    <div class="row">


        <div class="col-md-12">

        <div class="table-responsive">


          <form class="form-horizontal">
      <fieldset>

      <!-- Form Name -->


      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label" for="city">Date :</label>
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
        <label class="col-md-4 control-label" for="prescipteur">Prescripteur:</label>
        <div class="col-md-6">

          <input type="text" name="prescripteur" value="" id="prescipteur">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="hopital">Hopital:</label>
        <div class="col-md-6">

          <input type="text" name="hopital" value="" id="hopital">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="motif">Motif:</label>
        <div class="col-md-6">

          <input type="text" name="motif" value="" id="motif">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="categorie_patient">Categorie Patient:</label>
        <div class="col-md-6">

          <input type="text" name="categorie_patient" value="" id="categorie_patient">
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label" for="etat_patient">Etat Patient:</label>
        <div class="col-md-6">

          <input type="text" name="etat_patient" value="" id="etat_patient">
        </div>
      </div>

      <input type="submit" name="" value="Enregistrer">
    
      </fieldset>

      </form>



            </div>

        </div>
	</div>
</div>
</form>
@endsection
