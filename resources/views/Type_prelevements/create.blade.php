@extends('layouts.contenu_layout')

 @section('contenu')

{{ Form::open(['url' => route('typePrelevements.store')]) }}

{!! Form::label('nom_prelevement', 'Entrez le  nom du prelevement: ') !!}

{!! Form::text('nom_prelevement') !!}

{!! Form::submit('Ajouter !') !!}

{!! Form::close() !!}
@endsection
