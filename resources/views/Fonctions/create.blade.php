@extends('layouts.contenu_layout')

 @section('contenu')

{{ Form::open(['url' => route('fonctions.store')]) }}

{!! Form::label('nom_fonction', 'Entrez le  nom de la fonction: ') !!}

{!! Form::text('nom_fonction') !!}

{!! Form::submit('Ajouter !') !!}

{!! Form::close() !!}
@endsection
