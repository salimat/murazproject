@extends('layouts.contenu_layout')
 @section('contenu')

 <div class="card-header"><h1>Supprimer un   patient#{{($patients->id)}}</h1></div>

 <div class="card-body">
     <form method="POST" action="{{ route('patients.destroy',$patients) }}">
     {{csrf_field() }}
    {{method_field('DELETE')}}
    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                {{ __('supprimer') }}
            </button>
        </div>
    </div>

  </form>
  </div>
 @endsection
