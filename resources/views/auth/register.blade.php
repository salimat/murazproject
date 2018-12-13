@extends('layouts.app')

@section('content')
<div>
<p><a href="{{ url('/') }}">Annuler</a></p>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Enregistrer') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nom') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                         <div class="form-group row">
                              <label for="prenom_per" class="col-md-4 col-form-label text-md-right">{{ __('Prenom') }}</label>

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
                                  <input id="sexe_per" type="text" class="form-control{{ $errors->has('sexe_per') ? ' is-invalid' : '' }}" name="sexe_per" value="{{ old('sexe_per') }}" required autofocus>

                                  @if ($errors->has('sexe_per'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('sexe_per') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group row">
                              <label for="contact_per" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label>

                              <div class="col-md-6">
                                  <input id="contact_per" type="number" class="form-control{{ $errors->has('contact_per') ? ' is-invalid' : '' }}" name="contact_per" value="{{ old('contact_per') }}" required autofocus>

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
                              <label for="date_emb" class="col-md-4 col-form-label text-md-right">{{ __('Date Embauche') }}</label>

                              <div class="col-md-6">
                                  <input id="date_emb" type="date" class="form-control{{ $errors->has('date_emb') ? ' is-invalid' : '' }}" name="date_emb" value="{{ old('date_emb') }}" required autofocus>

                                  @if ($errors->has('date_emb'))
                                      <span class="invalid-feedback" role="alert">
                                          <strong>{{ $errors->first('date_emb') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>


                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __(' Address E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                      <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme  mot de passe') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
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
