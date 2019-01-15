@extends('layouts.secretariatnav')

@section('content')

<link href="{{ asset('css/patient1.css') }}" rel="stylesheet">
<script src="{{ asset('js/indexPatient.js') }}" defer></script>

<div class="container">
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
</style>


<?php
  $timezone = "Europe/London";
  date_default_timezone_set($timezone);
  $today = date("Y-m-d");


$annees = substr($today,2,2);

$mois = substr($today,5,2);
$jour = substr($today,8,2);
?>
<div class="mail-box">
	<aside class="lg-side">
		<div class="inbox-head">
			<h3> PRELEVEMENT DE {{$patients->nom_per.' '.$patients->prenom_per}} VALIDE</h3>
		      <button class="btn btn-default pull-right" type="button" style="margin-top:20px;" data-toggle="modal" data-target= "#item_add" onclick="location.href='/addcodeBarre/create'" >
        <i class="glyphicon glyphicon-check"></i>
        <form action="{{route('codes.store')}}" method="post">
          @csrf
        </div>
                <input type="text" id="code_patient" name="code_patient" value="<?php echo 'CM'.$annees.$mois.$jour.'0000'.$patients->id; ?>">
          </div>
            <div>

                <input type="hidden" id="date_code" name="date_code" value="<?php echo $today;?>">
            </div>
            <div>

                <input type="hidden" id="patients_id" name="patients_id" value="<?php echo $patients->id;?>">
            </div>
            <input type="submit" name="" value="imprimer">

        </form>
      </button>
		</div>
  </div>








    @endsection
