@extends('layouts.contenu_layout')

@section('contenu')

{{ Form::open(['url' => route('echantillons.store')]) }}

{{ Form::label('nom_echantillon', 'Entrez le  nom d lechantillon: ') }}

{{ Form::text('nom_echantillon') }}
{{ Form::label('type_prelevement', 'Entrez le  nom du type de prelevement: ') }}

{{ Form::text('type_prelevement') }}
{{ Form::submit('Ajouter !') }}
{{ Form::close() }}
@endsection
