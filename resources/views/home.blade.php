@extends('layouts.entete')
@section('content')

<link href="{{ asset('css/secretariat.css') }}" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<ul class="navbar color1">
    <!--<div class="logo">
  <img src="/css/image1/logo.jpg">
  </div>-->


	<li class="drpdown"><a href="{{ url('/patients/') }}"><i class="fa fa-user"></i><span>PATIENT</span></a>
		<ul class="drpcontent">
			<li><a href="{{ url('/patients/create') }}">Ajouter Patient</a></li>
			<li><a href="{{ url('/patients/') }}">Liste Des patients</a></li>
			<li><a href="{{ url('patients/rechercher') }}">Rechercher Patient</a></li>
		</ul>
	</li>


	<li class="drpdown"><a href="#"><i class="fa fa-medkit"></i><span>PRESTATION</span></a>
		<ul class="drpcontent" id="themeselect">
			<li><a href="{{ url('/examens/') }}">Liste des Examens</a></li>
			<li><a href="{{ url('/examens/') }}" >Ajouter Prestation</a></li>
			<li><a href="#">Liste Des Prestation Du Patient</a></li>
		</ul>
	</li>
  <li class="drpdown"><a href="#"><i class="fa fa-paypal"></i><span>CAISSE</span></a>
		<ul class="drpcontent" id="themeselect">
			<li><a href="#" >Facture Patient</a></li>
			<li><a href="#" >Supprimer Facture</a></li>
			<li><a href="#" >Liste Des Facture</a></li>
		</ul>
	</li>

	<li><a href="#"><i class="fa fa-print"></i><span>IMPRESSION</span></a></li>

</ul>

@endsection
