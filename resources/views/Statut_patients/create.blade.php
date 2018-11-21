@extends('layouts.contenu_layout')

 @section('contenu')

{{ Form::open(['url' => route('statutPatients.store')]) }}

{!! Form::label('nom_statut_patient', 'Entrez le  nom du statut: ') !!}

{!! Form::text('nom_statut_patient') !!}

{!! Form::submit('Ajouter !') !!}

{!! Form::close() !!}
@endsection
