@extends('layouts.contenu_layout')

{{ Form::open(['url' => route('departements.store')]) }}

{!! Form::label('nom_departement', 'Entrez le  nom du departement: ') !!}

{!! Form::text('nom_departement') !!}

{!! Form::submit('Ajouter !') !!}

{!! Form::close() !!}
@endsection
