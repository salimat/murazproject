@extends('layouts.app')

@section('content')

{{ Form::open(['url' => route('examens.store')]) }}
<div class="col-md-6">
{!! Form::label('nom_examen', 'Entrez le  nom de lexamen: ') !!}
{!! Form::text('nom_examen') !!}
</div>
<div class="col-md-6">
{!! Form::label('montant_examen', 'Entrez le  montant de lexamen: ') !!}
{!! Form::text('montant_examen') !!}
</div>
<div class="col-md-6">
{!! Form::label('abreviation', 'Entrez le abreviation de lexamen: ') !!}
{!! Form::text('abreviation') !!}
</div>
<div class="col-md-6">
  <select name="sections_id" class="custom-select custom-select-lg mb-3">
    <option selected>Choisir la section dans lequel elle se trouve</option>
    @foreach($sections as $section)
    <option value="{{$section->sections_id}}">{{$section->nom_section}}</option>
    @endforeach
  </select>
  @if ($errors->has('section'))
  <span class ="invalid-feedback" role="alert">
    <strong>{{$errors->first('section')}} </strong>
</span>
@endif
</div>

<div class="col-md-6">
  <select name="materiels_id" class="custom-select custom-select-lg mb-3">
    <option selected>Choisir le materiel utiliser</option>
    @foreach($materiels as $materiel)
    <option value="{{$materiel->materiels_id}}">{{$materiel->nom_mat}}</option>
    @endforeach
  </select>
  @if ($errors->has('materiel'))
  <span class ="invalid-feedback" role="alert">
    <strong>{{$errors->first('materiel')}} </strong>
</span>
@endif
</div>

<div class="col-md-6">
  <select name="type_prelevements_id" class="custom-select custom-select-lg mb-3">
    <option selected>Choisir le type d'echantillons correspondant</option>
    @foreach($echantillons as $type)
    <option value="{{$type->echantillons_id}}">{{$type->nom_echantillon}}</option>
    @endforeach
  </select>
  @if ($errors->has('type'))
  <span class ="invalid-feedback" role="alert">
    <strong>{{$errors->first('type')}} </strong>
</span>
@endif
</div>


{!! Form::submit('Ajouter !') !!}

{!! Form::close() !!}
@endsection
