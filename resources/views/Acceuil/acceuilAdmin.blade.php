@extends('layouts.entete')
@section('content')

<link href="{{ asset('css/secretariat.css') }}" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<ul class="navbar color1">
    



    <li><a href="{{ url('login') }}"><i class="icon20 home"></i><span>ACCEUIL</span></a></li>
	<li class="drpdown"><a href="{{ url('/patients/') }}"><i class="icon20 login"></i><span>GESTION DES EMPLOYES</span></a>
		<ul class="drpcontent">
			<li><a href="{{ url('/patients/') }}">Information Du patients</a></li>
			<li><a href="#">Valider  Resultat</a></li>
		</ul>
	</li>


	<li class="drpdown"><a href="#"><i class="icon20 icon-medkit"></i><span>GESTION DES REACTIFS</span></a>
		<ul class="drpcontent" id="themeselect">
			<li><a href="#">Ajouter Reactif</a></li>
			<li><a href="#">Controller Etat Reactif</a></li>
		</ul>
	</li>
	<li><a href="#"><i class="icon20 icon-phone"></i><span>GESTION DES PRESTATION </span></a></li>
		<li><a href="#"><i class="icon20 icon-phone"></i><span>PARAMETRE</span></a></li>
  	<li><a href="#"><i class="icon20 icon-phone"></i><span>CONTACT</span></a></li>
    <li><a href="#"><i class="icon20 icon-plus"></i><span>AIDE</span></a></li>
</ul>

@endsection
