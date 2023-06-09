@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">

        <h1>Liste des participants de compétition {{ $competition->label }}</h1>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Photo</th>
                                    <th scope="col">Nom</th>
                                    <th scope="col">Prénom</th>
                                    <th scope="col">Numéro de téléphone</th>
                                    <th scope="col">CIN</th>
                                    <th scope="col">Adresse</th>
                                    <th scope="col">Date de naissance</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>
                                            <img src="{{ asset('storage/'.$user->photo) }}" width="80" height="80" style="border-radius: 50%" alt="">
                                        </td>
                                        <td>{{ $user->nom }}</td>
                                        <td>{{ $user->prenom }}</td>
                                        <td>{{ $user->numTel }}</td>
                                        <td>{{ $user->cin }}</td>
                                        <td>{{ $user->adresse }}</td>

                                        <td>{{ $user->date_naissance }}</td>
                                     
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $users->links() }}
                        <!-- End Default Table Example -->
                    </div>
                </div>

            </div>

        </div>
    </section>

</main>
@endsection
