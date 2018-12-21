<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'KENEYALAB') }}</title>

<link href="{{ asset('css/BC.css') }}" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
</head>
<body>
<ul class="navbar color1">
    <!--<div class="logo">
  <img src="/css/image1/logo.jpg">
  </div>-->
  <span><img src="/css/image1/logo.jpg"></span>

    <li><a href="{{ url('login') }}"><i class="icon20 home"></i><span>ACCEUIL</span></a></li>
	<li class="drpdown"><a href="{{ url('/patients/') }}"><i class="icon20 login"></i><span>RESULTAT</span></a>
		<ul class="drpcontent">
			<li><a href="{{ url('/patients/') }}">Information Du patients</a></li>
			<li><a href="#">Valider  Resultat</a></li>
		</ul>
	</li>


	<li class="drpdown"><a href="#"><i class="icon20 icon-medkit"></i><span>REACTIF</span></a>
		<ul class="drpcontent" id="themeselect">
			<li><a href="#">Ajouter Reactif</a></li>
			<li><a href="#">Controller Etat Reactif</a></li>
		</ul>
	</li>

  	<li><a href="#"><i class="icon20 icon-phone"></i><span>CONTACT</span></a></li>
    <li><a href="#"><i class="icon20 icon-plus"></i><span>AIDE</span></a></li>
</ul>

</body>
</html>
