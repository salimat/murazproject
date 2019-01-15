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
			<h3> PRELEVEMENT VALIDE{{$patients->nom_per}}</h3>
		      <button class="btn btn-default pull-right" type="button" style="margin-top:20px;" data-toggle="modal" data-target= "#item_add" onclick="location.href='/addcodeBarre/create'" >
        <i class="glyphicon glyphicon-check"></i> Imprimer Code Barre</button>
		</div>
  </div>



    @endsection
