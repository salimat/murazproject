@extends('layouts.contenu_layout')

 @section('contenu')

{{ Form::open(['url' => route('sections.store')]) }}

{!! Form::label('nom_section', 'Entrez le  nom de la section: ') !!}

{!! Form::text('nom_section') !!}
<div class="col-md-6">
  <select name="id_labo" class="custom-select custom-select-lg mb-3">
    <option selected>Choisir le Laboratoire dans lequel elle se trouve</option>
    @foreach($laboratoires as $laboratoire)
    <option value="{{$laboratoire->laboratoires_id}}">{{$laboratoire->nom_labo}}</option>
    @endforeach
  </select>
  @if ($errors->has('laboratoire'))
  <span class ="invalid-feedback" role="alert">
    <strong>{{$errors->first('laboratoire')}} </strong>
</span>
@endif
</div>

{!! Form::submit('Ajouter !') !!}

{!! Form::close() !!}
@endsection
