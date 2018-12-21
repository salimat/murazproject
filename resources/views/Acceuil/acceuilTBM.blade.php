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


  
	<li class="drpdown"><a href="{{ url('/patients/') }}"><i class="icon20 login"></i><span>PRELEVEMENT</span></a>
		<ul class="drpcontent">
			<li><a href="{{ url('/patients/') }}">Information Du patients</a></li>
			<li><a href="#">Valider  Prelevement</a></li>
		</ul>
	</li>

  <li class="drpdown"><a href="#"><i class="icon20 icon-medkit"></i><span>EXAMEN</span></a>
    <ul class="drpcontent">
      <li><a href="#">Info des Examens</a></li>
    </ul>
  </li>

	<li class="drpdown"><a href="#"><i class="icon20 icon-medkit"></i><span>PRESTATION</span></a>
		<ul class="drpcontent" id="themeselect">
			<li><a href="#">Liste Des Prestation Du Patient</a></li>
		</ul>
	</li>
  <li class="drpdown"><a href="#"><i class="icon20 icon-money "></i><span>RESULTAT</span></a>
		<ul class="drpcontent" id="themeselect">
			<li><a href="#" >Entrez Resultat du Patient</a>  </li>
			<li><a href="#" >Consulter Resultat du Patient</a></li>
			<li><a href="#" >Imprimer Les Resultats</a></li>
		</ul>
	</li>

</ul>
@endsection
