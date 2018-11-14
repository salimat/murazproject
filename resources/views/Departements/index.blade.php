

@extends('layouts.contenu_layout')
 @section('contenu')

<p>This is use</p>

@foreach ($departements as $dep)
    <p> {{ $dep->nom_departement }}</p>
@endforeach
@endsection
