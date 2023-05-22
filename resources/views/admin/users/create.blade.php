@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">

    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"> Ajouter un entraineur </h5>
                        <!-- Default Table -->
                        <form action="{{ route('admin.users.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="inputText" class="col-sm-2 col-form-label">Nom </label>
                                            <input type="text"
                                                class="form-control @error('nom') input-invalid @enderror"
                                                value="{{ old('nom') }}" name="nom"
                                                placeholder="Saisir nom d'un entraineur">
                                            @error('nom')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="inputText" class="col-sm-2 col-form-label">Prenom </label>
                                            <input type="text" class="form-control" value="{{ old('prenom') }}"
                                                name="prenom" placeholder="Saisir prenom d'un entraineur">
                                            @error('prenom')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="inputText" class="col-sm-2 col-form-label">E-mail </label>
                                            <input type="text" class="form-control" value="{{ old('email') }}"
                                                name="email" placeholder="Saisir email d'un entraineur">
                                            @error('email')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="inputText" class="col-sm-2 col-form-label">Numéro de téléphone
                                            </label>
                                            <input type="text" class="form-control" value="{{ old('numTel') }}"
                                                name="numTel" placeholder="Saisir numTel d'un entraineur">
                                            @error('numTel')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="inputText" class="col-sm-2 col-form-label">CIN </label>
                                            <input type="text" class="form-control" value="{{ old('cin') }}" name="cin"
                                                placeholder="Saisir cin d'un entraineur">
                                            @error('cin')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="inputText" class="col-sm-2 col-form-label">Adresse </label>
                                            <input type="text" class="form-control" value="{{ old('adresse') }}"
                                                name="adresse" placeholder="Saisir adresse d'un entraineur">
                                            @error('adresse')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="inputText" class="col-sm-2 col-form-label">Compte facebook </label>
                                            <input type="text" class="form-control" value="{{ old('facebook') }}"
                                                name="facebook" placeholder="Saisir facebook d'un entraineur">
                                            @error('facebook')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="inputText" class="col-sm-2 col-form-label">Compte instagram </label>
                                            <input type="text" class="form-control" value="{{ old('instagram') }}"
                                                name="instagram" placeholder="Saisir instagram d'un entraineur">
                                            @error('instagram')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="inputText" class="col-sm-2 col-form-label">Compte twitter </label>
                                            <input type="text" class="form-control" value="{{ old('twitter') }}" name="twitter"
                                                placeholder="Saisir twitter d'un entraineur">
                                            @error('twitter')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="inputText" class="col-sm-2 col-form-label">Spécialite </label>
                                            <input type="text" class="form-control" value="{{ old('specialite') }}"
                                                name="specialite" placeholder="Saisir specialite d'un entraineur">
                                            @error('specialite')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="inputText" class="col-sm-2 col-form-label">Mot de passe </label>
                                            <input type="password" class="form-control" value="{{ old('password') }}"
                                                name="password" placeholder="Saisir password d'un entraineur">
                                            @error('password')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-sm-12">
                                            <label for="inputText" class="col-sm-2 col-form-label">Date de naissance </label>
                                            <input type="date" class="form-control" value="{{ old('date_naissance') }}"
                                                name="date_naissance">
                                            @error('date_naissance')
                                            <p class="mt-2" style="color: #7f2121">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <label for="inputNumber" class="col-sm-2 col-form-label">Photo</label>
                                            <input class="form-control @error('photo') input-invalid @enderror" name="photo"
                                                type="file" id="formFile">
                                        </div>
                                        @error('photo')
                                        <div class="invalid-tooltip  d-block ">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            

                            <div class="row mb-3">
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">ajouter</button>
                                    <button type="reset" class="btn btn-light">annuler</button>
                                </div>
                            </div>
                        </form>
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>
@endsection
