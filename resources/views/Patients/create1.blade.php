@extends('layouts.app')

@section('content')
<div>
<p><a href="{{ url('/') }}">Annuler</a></p>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Enregistrer un patient') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('patients.store') }}">
                        @csrf

                    <div class="form-group row">
                        <label for="nom_per" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                        <div class="col-md-6">
                            <input id="nom_per" type="text" class="form-control{{ $errors->has('nom_per') ? ' is-invalid' : '' }}" name="nom_per" value="{{ old('nom_per') }}" required autofocus>

                            @if ($errors->has('nom_per'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('nom_per') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group row">
                         <label for="prenom_per" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}

                         </label>

                         <div class="col-md-6">
                             <input id="prenom_per" type="text" class="form-control{{ $errors->has('prenom_per') ? ' is-invalid' : '' }}" name="prenom_per" value="{{ old('prenom_per') }}" required autofocus>

                             @if ($errors->has('prenom_per'))
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('prenom_per') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>
                     <div class="form-group row">
                         <label for="date_naissance" class="col-md-4 col-form-label text-md-right">{{ __('Date de naissance') }}</label>

                         <div class="col-md-6">
                             <input id="date_naissance" type="date" class="form-control{{ $errors->has('date_naissance') ? ' is-invalid' : '' }}" name="date_naissance" value="{{ old('date_naissance') }}" required autofocus>

                             @if ($errors->has('date_naissance'))
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('date_naissance') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>

                     <div class="form-group row">
                         <label for="sexe_per" class="col-md-4 col-form-label text-md-right">{{ __('Sexe') }}</label>

                       <div class="col-md-6">
                      <p>
                        <input type="radio" name="sexe_per" id="sexe_per" value="masculin">
                        <label for="sexe_per">Masculin</label>
                      </p>
                      <p>
                        <input type="radio" name="sexe_per" id="sexe_per" value="feminin">
                        <label for="sexe_per">Feminin</label>
                      </p>

                         </div>


                     </div>

                     <div class="form-group row">
                         <label for="contact_per" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                         <div class="col-md-6">
                             <input id="contact_per" type="tel" class="form-control{{ $errors->has('contact_per') ? ' is-invalid' : '' }}" name="contact_per" value="{{ old('contact_per') }}" required autofocus>

                             @if ($errors->has('contact_per'))
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('contact_per') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>

                     <div class="form-group row">
                         <label for="adresse_per" class="col-md-4 col-form-label text-md-right">{{ __('Adresse') }}</label>

                         <div class="col-md-6">
                             <input id="adresse_per" type="text" class="form-control{{ $errors->has('adresse_per') ? ' is-invalid' : '' }}" name="adresse_per" value="{{ old('adresse_per') }}" required autofocus>

                             @if ($errors->has('adresse_per'))
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('adresse_per') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>


                     <div class="form-group row">
                         <label for="email_per" class="col-md-4 col-form-label text-md-right">{{ __('Adresse mail') }}</label>

                         <div class="col-md-6">
                             <input id="email_per" type="email" class="form-control{{ $errors->has('email_per') ? ' is-invalid' : '' }}" name="email_per" value="{{ old('email_per') }}" required autofocus>

                             @if ($errors->has('email_per'))
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('email_per') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>

                     <div class="form-group row">
                         <label for="code_postal_pat" class="col-md-4 col-form-label text-md-right">{{ __('le code postal') }}</label>

                         <div class="col-md-6">
                             <input id="code_postal_pat" type="text" class="form-control{{ $errors->has('code_postal_pat') ? ' is-invalid' : '' }}" name="code_postal_pat" value="{{ old('code_postal_pat') }}" required autofocus>

                             @if ($errors->has('code_postal_pat'))
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('code_postal_pat') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>

                     <div class="form-group row">
                         <label for="age_pat" class="col-md-4 col-form-label text-md-right">{{ __('Age') }}</label>

                         <div class="col-md-6">
                             <input id="age_pat" type="number" class="form-control{{ $errors->has('age_pat') ? ' is-invalid' : '' }}" name="age_pat" value="{{ old('age_pat') }}" required autofocus>

                             @if ($errors->has('age_pat'))
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('age_pat') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>

                     <div class="form-group row">
                         <label for="profession_pat" class="col-md-4 col-form-label text-md-right">{{ __('Profession') }}</label>

                         <div class="col-md-6">
                             <input id="profession_pat" type="text" class="form-control{{ $errors->has('profession_pat') ? ' is-invalid' : '' }}" name="profession_pat" value="{{ old('profession_pat') }}" required autofocus>

                             @if ($errors->has('profession_pat'))
                                 <span class="invalid-feedback" role="alert">
                                     <strong>{{ $errors->first('profession_pat') }}</strong>
                                 </span>
                             @endif
                         </div>
                     </div>



                     <div class="form-group row mb-0">
                         <div class="col-md-6 offset-md-4">
                             <button type="submit" class="btn btn-primary">
                                 {{ __('Enregistrer') }}
                             </button>
                         </div>
                     </div>

                   </form>
               </div>
           </div>
       </div>
   </div>
 </div>
 @endsection
