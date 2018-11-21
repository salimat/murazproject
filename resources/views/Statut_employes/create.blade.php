@extends('layouts.contenu_layout')

 @section('contenu')

{{ Form::open(['url' => route('statutEmployes.store')]) }}

{!! Form::label('nom_statut_emp', 'Entrez le  nom du statut: ') !!}

{!! Form::text('nom_statut_emp') !!}

{!! Form::submit('Ajouter !') !!}

{!! Form::close() !!}
@endsection
