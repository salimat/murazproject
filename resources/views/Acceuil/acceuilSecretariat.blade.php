
<link href="{{ asset('css/secretariat.css') }}" rel="stylesheet">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<ul class="navbar color1">
    <li><a href="#"><i class="icon20 home"></i><span>ACCEUIL</span></a></li>
	<li class="drpdown"><a href="#"><i class="icon20 login"></i><span>PATIENT</span></a>
		<ul class="drpcontent">
			<li><a href="{{ url('/patients/create') }}">Ajouter Patient</a></li>
			<li><a href="{{ url('/patients/') }}">Liste Des patients</a></li>
			<li><a href="#">Private Posts</a></li>
		</ul>
	</li>

	<li class="drpdown"><a href="#"><i class="icon20 edit"></i><span>PRESTATION</span></a>
		<ul class="drpcontent" id="themeselect">
			<li><a href="#" data-color="color1">Orange</a></li>
			<li><a href="#" data-color="color2">Marine</a></li>
			<li><a href="#" data-color="color3">Green</a></li>
			<li><a href="#" data-color="color4">Purple</a></li>
			<li><a href="#" data-color="color5">Red</a></li>
		</ul>
	</li>
  <li><a href="#"><i class="icon20 calendar"></i><span>FACTURE</span></a></li>
	<li><a href="#"><i class="icon20 print"></i><span>IMPRESSION</span></a></li>
  	<li><a href="#"><i class="icon20 trash"></i><span>CORBEILLE</span></a></li>
</ul>
