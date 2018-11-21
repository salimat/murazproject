@extends('layouts.app')

@section('content')

{{ Form::open(['url' => route('materiels.store')]) }}
<div class="col-md-6">
{!! Form::label('type_mat', 'Entrez le  type du materiel: ') !!}
{!! Form::text('type_mat') !!}
</div>
<div class="col-md-6">
{!! Form::label('nom_mat', 'Entrez le  nom du materiel: ') !!}
{!! Form::text('nom_mat') !!}
</div>
<div class="col-md-6">
{!! Form::label('couleur_bouchon', 'Entrez la couleur du bouchon du materiel: ') !!}
{!! Form::text('couleur_bouchon') !!}
</div>

{!! Form::submit('Ajouter !') !!}

{!! Form::close() !!}
@endsection
