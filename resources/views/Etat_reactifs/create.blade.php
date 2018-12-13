@extends('layouts.contenu_layout')

 @section('contenu')

{{ Form::open(['url' => route('etatReactifs.store')]) }}
<br>
{!! Form::label('valeur_jour', 'Entrez la temperature du reactif: ') !!}

{!! Form::text('valeur_jour') !!}
<?php
  $timezone = "Europe/London";
  date_default_timezone_set($timezone);
  $today = date("Y-m-d");
?>
<br>
<input type="date" value="<?php echo $today; ?>">
<br>
{!! Form::submit('Ajouter !') !!}

{!! Form::close() !!}
<div>
<p><a href="{{ url('/') }}">Annuler</a></p>
</div>
@endsection
