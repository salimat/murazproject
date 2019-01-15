
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>KENEYALAB</title>
   <link rel="dns-prefetch" href="https://fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">
  <!-- <script src="{{ asset('js/app.js') }}" defer></script>-->
   <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
   <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

   <link href="{{ asset('css/entete.css') }}" rel="stylesheet">
   <link href="{{ asset('css/secretariat.css') }}" rel="stylesheet">
   <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
   <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
   <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
		<header role="header">
			<!--Menu de  naaivgatin-->
			<nav class="menu" role="navigation">
				<div class="inner">

					<!--Logo header-->
					<div class="m-left">
						<img src="/css/image1/imageslogo.jpg" class="logo"/>
					</div>
					<!--Fin Logo header-->

					<!--Menu responsible-->
					<div class="m-right">
						<a href="index.html" class="m-link" title="Accueil"><i class="fa fa-home" aria-hidden="true"></i>Acceuil</a>
						<a href="produits.html" class="m-link" title="Prestations et Produits"><i class="fa fa-suitcase" aria-hidden="true"></i>Aide</a>
						<a href="forum.html" class="m-link" title="Forum"><i class="fa fa-wpforms" aria-hidden="true"></i>Forum</a>
						<a href="contacts.html" class="m-link" title=Contacts><i class="fa fa-envelope"></i>Contacts</a>
            <a href="#"><i class="fa fa-user"></i><span>{{ Auth::user()->name }}</span></a>
            <!-- <ul class="drpcontent" id="themeselect"> -->
              <!-- <li> -->
                <a id="deconnexionbtn" class="" href="{{ route('logout') }}" style="float:right"
                 onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">{{ __('Se deconnecter') }}</a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
            <!-- </li> -->
            <!-- </ul> -->



					</div>
					<!--Fin Menu responsible-->
				</div>
			</nav>
		</header>

<!--A la ligne !-->
<br>
<br>
<br>
<br>
<!-- Fin de la ligne !-->
<div> @yield('content')<div>
  <footer>
        <p>© 2018<a style="color:#0a93a6; text-decoration:none;" href="#"> KENEYALAB</a>, All rights reserved 2018-2019.</p>
  </footer>
