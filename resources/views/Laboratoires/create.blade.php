@extends('layouts.contenu_layout')

 @section('contenu')

{{ Form::open(['url' => route('laboratoires.store')]) }}

{{ Form::label('nom_labo', 'Entrez le  nom du laboratoire: ') }}

{{ Form::text('nom_labo') }}
{{ Form::submit('Ajouter !') }}

{{ Form::close() }}
@endsection
