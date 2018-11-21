@extends('layouts.contenu_layout')

 @section('contenu')

{{ Form::open(['url' => route('laboratoires.store')]) }}

{{ Form::label('nom_labo', 'Entrez le  nom du laboratoire: ') }}

{{ Form::text('nom_labo') }}

 <div class="col-md-6">
   <select name="departements_id" class="custom-select custom-select-lg mb-3">
     <option selected>Choisir le departement dans lequel il se trouve</option>
     @foreach($departements as $departement)
     <option value="{{$departement->departements_id}}">{{$departement->nom_departement}}</option>
     @endforeach
   </select>
   @if ($errors->has('departement'))
   <span class ="invalid-feedback" role="alert">
     <strong>{{$errors->first('departement')}} </strong>
</span>
@endif
</div>
{{ Form::submit('Ajouter !') }}

{{ Form::close() }}
@endsection
