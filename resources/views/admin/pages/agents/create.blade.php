@extends('admin.layouts.app')

@section('content')
<div class="pagetitle">
  <h1>Utilisateurs</h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="{{route('index')}}">Accueil</a></li>
      <li class="breadcrumb-item">Utilisateurs</li>
      <li class="breadcrumb-item active">Création</li>
    </ol>
  </nav>
</div>

<section class="section">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Création d'un utilisateur</h5>

          <!-- User Creation Form -->
          <form method="POST" action="{{ route('agents.store') }}">
            @csrf
            <div class="row">
              <div class="col-6">
                <label for="inputNom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="inputNom" name="nom" required>
              </div>
              <div class="col-6">
                <label for="inputPostnom" class="form-label">Postnom</label>
                <input type="text" class="form-control" id="inputNom" name="posttnom" required>
              </div>
              <div class="col-6">
                <label for="inputMatricule" class="form-label">Matricule</label>
                <input type="text" class="form-control" id="inputNom" name="matricule" required>
              </div>
              <div class="col-6">
                <label for="inputGrde" class="form-label">Grade</label>
                <input type="text" class="form-control" id="inputNom" name="grade" required>
              </div>
              <div class="col-6">
                <label for="inputService" class="form-label">Service</label>
                <input type="text" class="form-control" id="inputNom" name="nom" required>
              </div>
              <div class="col-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" required>
              </div>
            <div class="row">
              <div class="col-6">
                <label for="inputPrenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="inputPrenom" name="prenom" required>
              </div>
            <div class="row">
              <div class="col-6">
                <label for="inputPassword" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="inputPassword" name="password" required>
              </div>
              <div class="col-6">
                <label for="inputFonction" class="form-label">Fonction</label>
                <select class="form-control" id="inputFonction" name="fonction_id" required>
                  @foreach ($fonctions as $fonction)
                    <option value="{{ $fonction->id }}">{{ $fonction->name }}</option>
                  @endforeach
                </select>
              </div>
            <div class="text-right mt-2">
              <button type="submit" class="btn btn-primary">Créer</button>
              <button type="reset" class="btn btn-secondary">Réinitialiser</button>
            </div>
          </form><!-- End User Creation Form -->

        </div>
      </div>
    </div>
  </div>
</section>

@endsection