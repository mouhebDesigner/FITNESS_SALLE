@extends('admin.layouts.master')

@section('content')
<main id="main" class="main">

    <div class="pagetitle d-flex justify-content-between">
        <h1>Liste des contacts</h1>
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
                                    <th>Nom et Prénom</th>
                                    <th>Email</th>
                                    <th>Sujet</th>
                                    <th>Numéro de téléphone</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        
                                        <td>{{ $contact->id }}</td>
                                        <td>{{ $contact->nom }}</td>
                                        <td>
                                            <a href="mailto:{{ $contact->email }}"> {{ $contact->email }}</a>
                                            
                                        </td>
                                        <td>{{ $contact->sujet }}</td>
                                        <td>{{ $contact->numtel }}</td>
                                        <td>
                                            <div class="d-flex justify-content-around">
                                                <a href="{{ route('admin.contacts.show', ['contact' => $contact]) }}" title="Détail de message" class="btn-edit">
                                                    <i class="fa fa-info-circle"></i>
                                                </a>
                                            </div>
                                        </td>
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
