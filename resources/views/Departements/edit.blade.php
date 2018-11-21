
<!doctype html>
<html >
   <head>
   </head>
   <body>
    <!--  <a href="{{ URL::action('Structuration/DepartementController@index') }}">Retour à la liste</a>
      <a href="{{ URL::action('Structuration/DepartementController@view', $departements->id) }}">Annuler</a> -->
      <h1>Editer l'article</h1>

      {{ Form::model($departements, [ 'url' => URL::action('Structuration/DepartementController@update', $departements ), 'method' => 'post'])}}
         <p>{{ Form::label('nom_departement', 'nom_departement :') }} {{ Form::text('nom_departement') }}</p>
         {{ Form::submit() }}
      {{ Form::close() }}
   </body>
</html>
