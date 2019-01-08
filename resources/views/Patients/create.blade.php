@extends('layouts.secretariatnav')

@section('content')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link href="{{ asset('css/patient.css') }}" rel="stylesheet">
<!------ Include the above in your HEAD tag ---------->




		<!-- Website CSS style -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- Website Font style -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
		<link rel="stylesheet" href="style.css">
		<!-- Google Fonts -->
		<link href='https://fonts.googleapis.com/css?family=Passion+One' rel='stylesheet' type='text/css'>
		<link href='https://fonts.googleapis.com/css?family=Oxygen' rel='stylesheet' type='text/css'>

		<title>KENEYALAB</title>

		<div class="container">
			<div class="row main">
				<div class="main-login main-center">
				<h5>Enregistrer un nouveau patient.</h5>

        <form method="POST" action="{{ route('patients.store') }}">
            @csrf
<table   cellspacing="50" cellpadding="5">
	<tr >
		<td>
						<div class="form-group">
							<label for="nom_per" class="cols-sm-2 control-label">Nom & </label>
                <label for="prenom_per" class="cols-sm-2 control-label">Prenom</label>
							<div class="cols-sm-10">
								<div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="nom_per" id="nom_per"  value="{{ old('nom_per') }}" placeholder="Entrer Nom Patient" required/>
                  <input type="text" class="form-control" name="prenom_per" id="prenom_per"  placeholder="Entrer Prenom Patient" required  />
								</div>
							</div>
						</div>
			</td>
			<td>

            <div class="form-group">
              <label for="date_naissance" class="cols-sm-2 control-label">Date de Naissance</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-calendar fa" aria-hidden="true"></i></span>
                  <input type="date" class="form-control" name="date_naissance" id="date_naissance"  placeholder="Entrer date naissance Patient" required  />
                </div>
              </div>
            </div>
				</td>
</tr>
<tr>
<td>
            <div class="form-group">

              <label for="sexe_per" class="cols-sm-2 control-label">Sexe</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-male fa" aria-hidden="true"></i></span>
                  <input type="radio" class="form-control" name="sexe_per" id="sexe_per"  value="masculin"/>
                  <label for="sexe_per">Masculin</label>
                  <span class="input-group-addon"><i class="fa fa-female fa" aria-hidden="true"></i></span>
                  <input type="radio" class="form-control" name="sexe_per" id="sexe_per"  value="feminin"/>
                  <label for="sexe_per">Feminin</label>
                </div>
              </div>
            </div>
	</td>
	<td>

            <div class="form-group">
              <label for="contact_per" class="cols-sm-2 control-label">Telephone</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-phone fa" aria-hidden="true"></i></span>
                  <input type="tel" class="form-control" name="contact_per" id="contact_per"  placeholder="Entrer numero Patient"  />
                </div>
              </div>
            </div>
		</td>
	</tr>
	<tr>
	<td>

            <div class="form-group">
              <label for="adresse_per" class="cols-sm-2 control-label">Adresse</label>
              <div class="cols-sm-10">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-map-marker fa" aria-hidden="true"></i></span>
                  <input type="adress" class="form-control" name="adresse_per" id="adresse_per"  placeholder="Entrer Adresse Patient" required />
                </div>
              </div>
            </div>
				</td>
				<td>

						<div class="form-group">
							<label for="email_per" class="cols-sm-2 control-label">Adresse Email</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="email" class="form-control" name="email_per" id="email_per"  placeholder="Enter  Email"  />
								</div>
							</div>
						</div>
					</td>
				</tr>
	<tr>
		<td>
					<div class="form-group">
							<label for="profession_pat" class="cols-sm-2 control-label">Profession</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="profession_pat" id="profession_pat"  placeholder="Entrer Profession" required />
								</div>
							</div>
						</div>
			</td>
			<td>
						<div class="form-group">
							<label for="code_postal_pat" class="cols-sm-2 control-label">code postal</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa-lg" aria-hidden="true"></i></span>
									<input type="text" class="form-control" name="code_postal_pat" id="code_postal_pat"  placeholder="Entrer code postal"  />
								</div>
							</div>
						</div>
				</td>
			</tr>
			<tr>
			<td>

            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
									<br>
									<br>
                    <button type="submit" class="btn btn-primary">
                        {{ __('Enregistrer') }}
                    </button>
                </div>
            </div>
				</td>
			<td>
				<div class="form-group row mb-0">
						<div class="col-md-6 offset-md-4">
							<br>
							<br>
							<button class="btn btn-primary"><a href="{{ url('/acceuilSecretariat/create') }}" style="color:#E6E6FA;=">Annuler</a></button>
						</div>
				</div>
			</td>

				</tr>
		</table>

					</form>
				</div>
			</div>
		</div>

		 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	@endsection
