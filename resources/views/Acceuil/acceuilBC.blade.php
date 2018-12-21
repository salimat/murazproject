@extends('layouts.entete')
@section('content')

<link href="{{ asset('css/secretariat.css') }}" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<ul class="navbar color1">



	<li class="drpdown"><a href="{{ url('/patients/') }}"><i class="fa fa-file-o"></i><span>RESULTAT</span></a>
		<ul class="drpcontent">
			<li><a href="{{ url('/patients/') }}">Information Du patients</a></li>
			<li><a href="#">Valider  Resultat</a></li>
		</ul>
	</li>


<li><a href="#"><i class="fa fa-plus-square"></i><span>AJOUTER REACTIF</span></a>

	</li>

  	<li><a href="#"><i class="fa fa-plus-square"></i><span>CONTROLLER ETAT REACTIF</span></a></li>
    <li><a href="#"><i class="icon20 icon-plus"></i><span>AIDE</span></a></li>
</ul>

@endsection
