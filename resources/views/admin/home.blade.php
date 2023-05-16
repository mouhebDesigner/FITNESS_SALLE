@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">


    <section class="section dashboard">
        
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Dernière inscriptions</h5>

                        <!-- Default Table -->
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nom </th>
                                    <th scope="col">Prénom </th>
                                    <th scope="col">E-mail</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach(App\Models\User::whereJsonContains('role->ROLE_ABONNE', true)->limit(5)->get() as $etudiant)
                                    <tr>
                                        <td>{{ $etudiant->id }}</td>
                                        <td>{{ $etudiant->nom }}</td>
                                        <td>{{ $etudiant->prenom }}</td>
                                        <td>{{ $etudiant->email }}</td>
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <!-- End Default Table Example -->
                    </div>
                </div>


            </div>
          
            
        </div>

    </section>

</main>
@endsection
