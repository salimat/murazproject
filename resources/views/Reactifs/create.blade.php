@extends('layouts.contenu_layout')

 @section('contenu')

{{ Form::open(['url' => route('reactifs.store')]) }}
<br>
{!! Form::label('nom_reactif', 'Entrez le  nom du reactif: ') !!}

{!! Form::text('nom_reactif') !!}
<br>
{!! Form::label('valeur_max', 'Entrez la valeur maximal de la temperature du reactif: ') !!}

{!! Form::text('valeur_max') !!}
<br>

{!! Form::label('valeur_min', 'Entrez la valeur minimal de la temperature du reactif: ') !!}

{!! Form::text('valeur_min') !!}
<br>
{!! Form::submit('Ajouter !') !!}

{!! Form::close() !!}
<div>
<p><a href="{{ url('/') }}">Annuler</a></p>
</div>
@endsection
