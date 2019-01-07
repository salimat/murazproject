<!DOCTYPE html>
<html >
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->

   <link href="{{ asset('css/patient1.css') }}" rel="stylesheet">
   <script src="{{ asset('js/indexPatient.js') }}" defer></script>

   <div class="container">
   <link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css'>
   <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<link href="{{ asset('css/secretariat.css') }}" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/conteneur.css">
<link rel="stylesheet" type="text/css" href="css/header.css">
<link href="{{ asset('css/entete.css') }}" rel="stylesheet">

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

                <a id="navbarDropdown" class="fa fa-user" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        {{ __('Se deconnecter') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>

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


<div>
<ul class="navbar color1">
    <!--<div class="logo">
  <img src="/css/image1/logo.jpg">
  </div>-->


	<li class="drpdown"><a href="{{ url('/patients/') }}"><i class="fa fa-user"></i><span>PATIENT</span></a>
		<ul class="drpcontent">
			<li><a href="{{ url('/patients/create') }}">Ajouter Patient</a></li>
			<li><a href="{{ url('/patients/') }}">Liste Des patients</a></li>
			<li><a href="#">Rechercher Patient</a></li>
		</ul>
	</li>
	<li class="drpdown"><a href="#"><i class="fa fa-medkit"></i><span>PRESTATION</span></a>
		<ul class="drpcontent" id="themeselect">
      <li><a href="{{ url('/examens/') }}">Liste des Examens</a></li>
			<li><a href="{{ url('/prestations/create') }}" >Ajouter Prestation</a></li>
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
</div>
<main>

  <div class="mail-box">
  	<aside class="lg-side">
  		<div class="inbox-head">
  			<h3> LES PATIENTS</h3>
  			<form method="POST" action="{{ route('patients.index') }}" class="pull-right position">
  				<div class="input-append">
  					<input type="text" class="sr-input" placeholder="70 00 00 00" id="search_box" >
  					<button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
  				</div>
  			</form>
  		</div>
    <li>  <button class="btn btn-default pull-right" type="button"style="margin-top:20px;" data-toggle="modal" data-target= "#item_add" onclick="location.href='patients/create'" ><i class="glyphicon glyphicon-plus"></i> Ajouter un patient</button></li>


  <div class="container">
      <div class="row">


          <div class="col-md-12">

          <div class="table-responsive">

                <table id="mytable" class="table table-bordred table-striped">

                     <thead>

                     <th><input type="checkbox" id="checkall" /></th>
                     <th>IDENTIFIANT </th>
                     <th>NOM </th>
                     <th>PRENOM </th>
                   <th>SEXE</th>
                     <th>CONTACT </th>
                     <th>ADRESSE</th>
                      <th>Edit</th>
  										<th>Delete</th>
  										<th>Ajouter Prestation</th>
                     </thead>
      <tbody>
  @foreach ($patients as $emp)
      <tr>
      <td><input type="checkbox" class="checkthis" name=id[] value="$emp->id"/> </td>
      <td> {{ $emp->id}}</td>
      <td> {{ $emp->nom_per }}</td>
      <td> {{ $emp->prenom_per }}</td>
      <td> {{ $emp->sexe_per }}</td>
      <td> {{ $emp->contact_per }}</td>
      <td> {{ $emp->adresse_per }}</td>

      <td><p data-placement="top" data-toggle="tooltip" title="Edit"><button class="btn btn-primary btn-xs" data-title="Edit" data-toggle="modal" data-target="#edit" onclick="location.href='patients/{{$emp->id}}/edit'" ><span class="glyphicon glyphicon-pencil"></span></button></p></td>
      <td><p data-placement="top" data-toggle="tooltip" title="Delete"><button class="btn btn-danger btn-xs" data-title="Delete" data-toggle="modal" data-target="#delete" onclick="location.href='patients/{{$emp->id}}'" ><span class="glyphicon glyphicon-trash"></span></button></p></td>
  		<td><p data-placement="top" data-toggle="tooltip" title="Prestation"><button class="btn btn-primary btn-xs" data-title="Ajouter Prestation" data-toggle="modal" data-target="#prestation" onclick="location.href='/examens/'" ><span class="glyphicon glyphicon-briefcase"></span></button></p></td>




      </tr>

    @endforeach





      </tbody>

  </table>

  {{$patients->links() }}

              </div>

          </div>
  	</div>
  </div>
</main>
<footer>
      <p>© 2018<a style="color:#0a93a6; text-decoration:none;" href="#"> KENEYALAB</a>, All rights reserved 2018-2019.</p>
</footer>
